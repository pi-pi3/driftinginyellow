<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
$page['name'] = '';

include $template['header'];

$blog_full = false;
$blog_path = 'blog';
$blog_articles = null;
include $template['blog'];

include $template['footer'];
?>
