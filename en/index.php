<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
$page['name'] = '';

include $template['header'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $blog_full = true;
    $blog_articles = array($id => true);
}

$blog_path = 'blog';
$blog_skipmeta = true;
include $template['blog'];

include $template['footer'];
?>
