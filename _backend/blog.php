<?php
    function trunc($str, $len) {
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

    function render_aricle($filename, $timestamp, $full) {
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
        echo "<p style=\"font-size: 75%\">$time<br>$date<br>";
        echo "A $minutes $m read</p>";
        echo '</header>';

        if ($full) {
            echo $contents;
        } else {
            echo trunc($contents);
            $id = null;
            preg_match('/^(.*)\.[^\.]$/', $filename, $id);
            $id = $id[1];
            $path = $_GLOBALS['blog_path'];
            echo '<p style=\"font-size: 90%\">';
            echo "<a href=\"$path/?id=$id\">Read more...</a>";
            echo '</p>';
        }
        echo '</article>';
    }

    $articles = "$blog_path/articles";
    $handle = fopen($articles, "r");

    if ($handle) {
        while (($line = fgets($handle, 4096)) !== false) {
            $line = explode(' ', $line, 2);
            $timestamp = trim($line[0]);
            $filename = trim($line[1]);

            if ($blog_articles == null || $blog_articles[$filename]) {
                render_article("$blog_path/" . $filename, $timestamp,
                               $blog_full);
            }
        }
        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($handle);
    }
?>
