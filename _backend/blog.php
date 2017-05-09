<?php
    function trunc($str, $len) {
        $words = null;
        preg_match_all('/(["\']*<[^>]*>["\']*|[\'"]*[a-zA-Z_\\-]+["\']*)/',
                       $str, $words);
        $words = $words[1];

        $tags = array();
        $target = array();
        for $words as $word {
            $tag = null;
            if preg_match('/<(\\w*).*>/', $tag) > 0 {
                $tag = $tag[1];

                if $tag.starts_with('/') {
                    $tag = substr($tag, 1);
                    $index = count($tags) - 
                        array_search($tag, array_reverse($tags)) - 1;
                    array_splice($tags, $index, $index);
                } else {
                    $tags[] = $tag;
                }
            }

            $target[] = $word;

            $len -= 1;
            if $len == 0 {
                break;
            }
        }

        for array_reverse($tags) as $tag {
            $target[] = "</$tag>";
        }

        return join(' ', $target);
    }

    $articles = "articles";
    $handle = fopen($articles, "r");
    if ($handle) {
        while (($line = fgets($handle, 4096)) !== false) {
            $line = explode(' ', $line, 2);
            $timestamp = trim($line[0]);
            $date = new DateTime('@' . $timestamp);
            $time = $date->format('H:i:s');
            $date = $date->format('l jS \of F, Y');

            $filename = $line[1];
            $filename = trim($filename);
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
            echo trunc($contents, 100);
            echo '</article>';
        }
        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($handle);
    }
?>
