<?php
    $lang = 'en'

    require_once $_SERVER['DOCUMENT_ROOT'] . '/pub/preload.php';

    $page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
    $page['name'] = '';

    include $template['header'];

    include $template['blog'];

    include $template['footer'];
?>
