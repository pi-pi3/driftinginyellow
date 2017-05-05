<?php
    $lang = 'en'

    require_once $_SERVER['DOCUMENT_ROOT'] . '/pub/preload.php';

    $page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
    $page['name'] = '';

    include $template['header'];

    $articles = "articles";
    $handle = fopen($articles, "r");
    if ($handle) {
        while (($filename = fgets($handle, 4096)) !== false) {
            $filename = trim($filename);
            $handle1 = fopen($filename, "r");
            $contents = fread($handle1, filesize($filename));
            fclose($handle1);
            echo "<article>$contents</article";
        }
        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($handle);
    }

    include $template['footer'];
?>
