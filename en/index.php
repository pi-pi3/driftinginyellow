<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
$page['name'] = '';

include $template['header'];

$blog_path = 'blog';
$blog_skipmeta = false;
include $template['blog'];

include $template['footer'];
?>
