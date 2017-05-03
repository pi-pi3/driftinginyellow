<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Drifting in Yellow</title>
    <link rel="stylesheet" type="text/css" href="/pub/style.css">
</head>
<body>
    <div id="header">
        <!--<a href="/en/"><img width=64em src="/logo.svg"/></a>-->
        <a href="/en/">driftinginyellow</a> 
        <span id="headerSubtitle">
            Bringing yellow stars and games together since 1998...
        </span>
    </div>

    <div id="menu">
        <span class="left">
            <a class="thisSite" href="/en/">home</a>
            <a href="/en/games">Games</a>
            <a href="/en/other">Other</a>
            <a href="/en/cv">Curriculum Vitae</a>
        </span>
        <span class="right">
            <a href="/en/about">About</a>
            <a href="/en/contact">Contact</a>
            <a href="/de/about/">de</a>
        </span>
    </div>

    <?php
        $articles = "articles";
        $handle = fopen(articles, "r");
        if ($handle) {
            while (($filename = fgets($handle, 4096)) !== false) {
                $handle1 = fopen($filename, "r");
                $contents = fread($handle, filesize($filename));
                fclose($handle1);
                echo $contents;
            }
            if (!feof($handle)) {
                echo "Error: unexpected fgets() fail\n";
            }
            fclose($handle);
        }
    ?>
</body>
</html>
