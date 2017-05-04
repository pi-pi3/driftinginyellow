<?php
$template = array();
$template['lang'] = 'en';
$template['subtitle'] = 'Bringing yellow stars and games together since 1998...';
$template['nlang'] = 'de';
$template['header'] = "
<!DOCTYPE html>
<html lang=\"$template\['lang'\]\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta charset=\"utf-8\">
    <title>Drifting in Yellow</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pub/style.css\">
</head>
<body>
    <div id=\"header\">
        <!--<a href=\"/$template\['lang'\]/\"><img width=64em src=\"/logo.svg\"/></a>-->
        <a href=\"/$template\['lang'\]/\">driftinginyellow</a> 
        <span id=\"headerSubtitle\">
            $template\['subtitle'\]
        </span>
    </div>

    <div id=\"menu\">
        <span class=\"left\">
            <a class=\"thisSite\" href=\"/$template\['lang'\]/\">home</a>
            <a href=\"/$template\['lang'\]/games\">Games</a>
            <a href=\"/$template\['lang'\]/other\">Other</a>
            <a href=\"/$template\['lang'\]/cv\">Curriculum Vitae</a>
        </span>
        <span class=\"right\">
            <a href=\"/$template\['lang'\]/about\">About</a>
            <a href=\"/$template\['lang'\]/contact\">Contact</a>
            <a href=\"/$template\['nlang'\]/\">de</a>
        </span>
    </div>

    <div id=\"content\">
";
$template['footer'] = "
    </div>
</body>
</html>
";
?>
