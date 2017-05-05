<!DOCTYPE html>
<html lang="<?php echo $page['lang'] ?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Drifting in Yellow</title>
    <link rel="stylesheet" type="text/css" href="/pub/style.css">
</head>
<body>
    <div id="header">
        <!--<a href="/<?php echo $page['lang'] ?>/"><img width=64em src="/logo.svg"/></a>-->
        <a href="/<?php echo $page['lang'] ?>/">driftinginyellow</a> 
        <span id="headerSubtitle">
            <?php echo $page['subtitle'] ?>
        </span>
    </div>

    <div id="menu">
        <span class="left">
            <a class="thisSite" href="/<?php echo $page['lang'] ?>/">home</a>
            <a href="/<?php echo $page['lang'] ?>/games">Games</a>
            <a href="/<?php echo $page['lang'] ?>/other">Other</a>
            <a href="/<?php echo $page['lang'] ?>/cv">Curriculum Vitae</a>
        </span>
        <span class="right">
            <a href="/<?php echo $page['lang'] ?>/about">About</a>
            <a href="/<?php echo $page['lang'] ?>/contact">Contact</a>
	    <a href="/<?php echo $page['nlang'] ?>/<?php if (!empty($page['name'])) echo $page['name'] . "/" ?>"><?php echo $page['nlang'] ?></a>
        </span>
    </div>

    <div id="content">
