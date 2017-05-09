<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Other';
$page['name'] = 'other';

include $template['header'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $blog_full = true;
    $blog_articles = array($id => true);
}

$blog_path = 'others';
$blog_blogindex = '';
$blog_skipmeta = true;
include $template['blog'];

include $template['footer'];
?>
