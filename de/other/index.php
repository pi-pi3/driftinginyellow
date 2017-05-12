<?php
$lang = 'de';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Anderes';
$page['name'] = 'other';

include $template['header'];

$blog_table = 'other';
include $template['blog'];

include $template['footer'];
?>
