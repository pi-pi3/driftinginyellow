<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Games';
$page['name'] = 'games';

include $template['header'];

$id = $_GET['id']
$blog_full = true;
$blog_path = '.';
$blog_articles = array($id => true);
$blog_skipmeta = true;
include $template['blog'];

include $template['footer'];
?>
