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

    $locale['toc'] = 'Table of contents';
    $locale['top'] = 'Top';
} else {
    $page['nlang'] = 'en';

    $locale['home'] = 'home';
    $locale['ylw'] = 'ylw';
    $locale['games'] = 'Spiele';
    $locale['other'] = 'Anderes';
    $locale['cv'] = 'Curriculum Vitae';
    $locale['about'] = 'Über mich';
    $locale['contact'] = 'Kontakt';

    $locale['toc'] = 'Inhaltsverzeichnis';
    $locale['top'] = 'Anfang';
}

$template = array();
$template['header'] = __DIR__ . '/header.php';
$template['footer'] = __DIR__ . '/footer.php';
$template['blog'] = __DIR__ . '/blog.php';
$template['toc'] = __DIR__ . '/toc.php';
$template['md'] = __DIR__ . '/md.php';

$nav = array();
$nav_print = 2;
