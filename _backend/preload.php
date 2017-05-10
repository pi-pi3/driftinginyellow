<?php
require_once __DIR__ . '/db.php';

date_default_timezone_set('Europe/Berlin');

$page = array();

$page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
$page['name'] = '';

$locale = array();
$page['lang'] = $lang;
if ($lang == 'en') {
    $page['nlang'] = 'de';

    $locale['home'] = 'home';
    $locale['ylw'] = 'ylw';
    $locale['games'] = 'Games';
    $locale['other'] = 'Other';
    $locale['cv'] = 'Curriculum Vitae';
    $locale['about'] = 'About';
    $locale['contact'] = 'Contact';
} else {
    $page['nlang'] = 'en';

    $locale['home'] = 'home';
    $locale['ylw'] = 'ylw';
    $locale['games'] = 'Spiele';
    $locale['other'] = 'Anderes';
    $locale['cv'] = 'Curriculum Vitae';
    $locale['about'] = 'Über mich';
    $locale['contact'] = 'Kontakt';
}

$template = array();
$template['header'] = __DIR__ . '/header.php';
$template['footer'] = __DIR__ . '/footer.php';
$template['blog'] = __DIR__ . '/blog.php';
$template['toc'] = __DIR__ . '/toc.php';

$nav = array();

// A couple useful functions
function header_name($name, $level) {
    $short = preg_replace('/[^a-z\-]+/', '-', strtolower($name));

    if ($level < 3) {
        global $nav;
        $nav[] = array('level' => $level, 'name' => $name, 'short' => $short);
    }

    
    echo "<a name=\"$short\" href=\"#$short\">
              <h$level>$name</h$level>
         </a>";
}

function h1($name) {
    header_name($name, 1);
}

function h2($name) {
    header_name($name, 2);
}

function h3($name) {
    header_name($name, 3);
}
?>
