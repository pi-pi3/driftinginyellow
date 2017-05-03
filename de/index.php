<!DOCTYPE html>
<html lang="de">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Drifting in Yellow</title>
    <link rel="stylesheet" type="text/css" href="/pub/style.css">
</head>
<body>
    <div id="header">
        <!--<a href="/de/"><img width=64em src="/logo.svg"/></a>-->
        <a href="/de/">driftinginyellow</a> 
        <span id="headerSubtitle">
            Bringing yellow stars and games together since 1998...
        </span>
    </div>

    <div id="menu">
        <span class="left">
            <a class="thisSite" href="/de/">home</a>
            <a href="/de/games">Spiele</a>
            <a href="/de/other">Anderes</a>
            <a href="/de/cv">Curriculum Vitae</a>
        </span>
        <span class="right">
            <a href="/de/about">Über mich</a>
            <a href="/de/contact">Kontakt</a>
            <a href="/en/">en</a>
        </span>
    </div>

    <?php
        $articles = "articles";
        $handle = fopen(articles, "r");
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
    ?>
</body>
</html>
