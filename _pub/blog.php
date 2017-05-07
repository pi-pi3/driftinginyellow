<?php
    $articles = "articles";
    $handle = fopen($articles, "r");
    if ($handle) {
        while (($line = fgets($handle, 4096)) !== false) {
            $line = explode(' ', $line, 2);
            $timestamp = trim($line[0]);
            $date = date('l, jS F, Y H:i:s', intval($timestamp));

            $filename = $line[1];
            $filename = trim($filename);
            $handle1 = fopen($filename, "r");
            $contents = fread($handle1, filesize($filename));
            fclose($handle1);

            $contents = explode('</header>', $contents, 2);
            $header = $contents[0] . '</header>';
            $contents = $contents[1]

            $words = str_word_count($contents);
            $minutes = intval(ceil($words / 250));

            $m = 'minute';
            if ($minutes > 1) {
                $m = 'minutes';
            }

            // TODO: truncate contents to `n` words on main page
            echo "<article>":
            echo $header;
            echo "<p style=\"font-size: 75%\">$date<br>";
            echo "A $minutes $m read</p>";
            echo $contents;
            echo "</article>";
        }
        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($handle);
    }
?>
