<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Everything ylw-lang';
$page['name'] = 'ylw';

include $template['header'];

$blog_table = 'ylw';
include $template['blog'];

include $template['footer'];
?>
