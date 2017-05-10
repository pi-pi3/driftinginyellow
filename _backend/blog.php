<?php
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

function render_article($filename, $timestamp, $full, $path) {
    $date = new DateTime('@' . $timestamp);
    $time = $date->format('H:i:s');
    $date = $date->format('l jS \of F, Y');

    $handle1 = fopen($filename, "r");
    $contents = fread($handle1, filesize($filename));
    fclose($handle1);

    $contents = explode('</header>', $contents, 2);
    $header = $contents[0];
    $contents = $contents[1];

    $verbatim = preg_replace("<[^>]*>", "", $contents);
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

    global $blog_skipmeta;
    if (!$blog_skipmeta) {
        echo "<p style=\"font-size: 75%\">$time<br>$date<br>";
        echo "A $minutes $m read</p>";
        echo '</header>';
    }

    if ($full) {
        echo $contents;
    } else {
        echo trunc($contents), ' (...)';
        $id = null;
        preg_match("/^$path\/(.*)\.[^\.]+$/", $filename, $id);
        $id = $id[1];
        echo '<p style="font-size: 80%;">';
        echo "<a href=\"?id=$id\">Read more...</a>";
        echo '</p>';
    }
    echo '</article>';
}

if (isset($_GET['id'])) {
    $id = $_GET['id'] . '.html';
    $blog_full = true;
    $blog_articles = array($id => true);
}

$articles = "$blog_path/articles";
$handle = fopen($articles, "r");

if ($handle) {
    while (($line = fgets($handle, 4096)) !== false) {
        $line = explode(' ', $line, 2);
        $timestamp = trim($line[0]);
        $filename = trim($line[1]);

        if (!isset($blog_articles) || $blog_articles[$filename]) {
            render_article("$blog_path/" . $filename, $timestamp,
                           $blog_full, $blog_path);
        }
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
?>
