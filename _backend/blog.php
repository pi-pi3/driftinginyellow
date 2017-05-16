<?php
require_once __DIR__ . '/visual.php';
require_once __DIR__ . '/md.php';

function trunc($str, $len=50) {
    $words = null;
    preg_match_all('/(["\']*<[^>]*>["\']*|[^\s]+)/',
                   $str, $words);
    $words = $words[1];

    $tags = array();
    $target = array();
    foreach ($words as $word) {
        $tag = null;
        if (preg_match('/<(\\w*).*>/', $tag) > 0) {
            $tag = $tag[1];

            if (preg_match('/\/.', $tag) > 0) {
                $tag = substr($tag, 1);
                $index = count($tags) - 
                    array_search($tag, array_reverse($tags)) - 1;
                array_splice($tags, $index, $index);
            } else {
                $tags[] = $tag;
            }
        } else {
            $len -= 1;
        }

        $target[] = $word;

        if ($len == 0) {
            break;
        }
    }

    foreach (array_reverse($tags) as $tag) {
        $target[] = "</$tag>";
    }

    return join(' ', $target);
}

function render_article($id, $table, $full = false) {
    global $db;
    global $lang;
    $query = $db['www']->query("select * from $table where id = '$id'");
    $query = $query->fetchArray();
    if (!$query || !isset($query['id'])) {
        echo "Error: id $id not found in database";
        return;
    }

    $date = new DateTime('@' . $query['time']);
    $time = $date->format('H:i:s');
    $date = $date->format('l jS \of F, Y');

    $filename = $_SERVER['DOCUMENT_ROOT'] . "/$lang/" . $query['path'];
    $handle = fopen($filename, 'r');

    if (!$handle) {
        echo "Error: file $filename not found in document root";
        return;
    }

    $contents = fread($handle, filesize($filename));
    fclose($handle);

    $contents = md_tohtml($contents);
    $contents = explode('</header>', $contents, 2);

    $header = $contents[0];
    $contents = $contents[1];

    $verbatim = preg_replace("/<[^>]*>/", "", $contents);
    $words = str_word_count($verbatim);
    $minutes = $words / 250;

    $m = 'minutes';
    if ($minutes < 1) {
        $m = 'minute';
        $minutes = '&lt;1';
    } else {
        $minutes = intval(ceil($minutes));
    }

    echo '<article>';
    echo $header;

    if (!$query['hide_meta']) {
    if ($query['pinned']) {
            echo "<p style=\"font-size:90%;padding:0 0.5ex;
                  margin-bottom:-1.5ex;\">Pinned</p>";
    }
        echo "<p style=\"font-size: 75%\">$time<br>$date<br>";
        echo "A $minutes $m read</p>";
    }
    echo '</header>';

    if ($full) {
        echo $contents;
    } else {
        echo trunc($contents), ' (...)';
    }

    $views = $db['www']->query("select views from $table
                                where id = '$id'");
    if ($views) {
        $views = $views->fetchArray()['views'];
        echo "<p style=\"font-size: 75%\">$views views</p>";
    }

    if (!$full) {
        echo '<p style="font-size: 80%;">';
        echo "<a href=\"?id=$id\">Read more...</a>";
        echo '</p>';
    }

    echo '</article>';
}

if (array_key_exists('id', $_GET)) {
    $id = $_GET['id'];

    // Protect against id=%00
    if (strstr($id, "\0")) {
        $id = htmlspecialchars($id);
        echo "Error: invalid id '$id'";
    } else {
        $id = SQLite3::escapeString(trim($id));
        $views = $db['www']->query("select views from $blog_table
                                    where id = '$id'");
        if ($views) {
            $views = $views->fetchArray()['views'];
            if (isset($views)) {
                $views = intval($views)+1;
                $db['www']->exec("update $blog_table set views = $views
                                  where id = '$id'");
            }
        }
        render_article($id, $blog_table, true);
    }
} else {
    $nav_print = 0;
    $query = $db['www']->query("select id, title from $blog_table
                                order by time desc, pinned desc");

    if (array_key_exists('tags', $_GET)) {
        $tags = SQLite3::escapeString(trim($_GET['tags']));
        if ($tags != ',') {
            $query = $db['www']->query("select id, title from $blog_table
                                        where tags like '%$tags%'
                                        order by time desc, pinned desc");
        }
    }

    if ($query) {
        while ($row = $query->fetchArray()) {
            if ($row['title']) {
                nav(0, $row['title'], "?id=${row['id']}");
            }
            render_article($row['id'], $blog_table);
        }
    }
}
?>
