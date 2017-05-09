<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Blog';
$page['name'] = '';

include $template['header'];

$article_id = $_GET['id'] . '.html';
$blog_full = true;
$blog_path = '.';
$blog_articles = array($article_id => true);
include $template['blog'];

include $template['footer'];
?>
