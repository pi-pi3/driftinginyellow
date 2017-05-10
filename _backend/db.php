<?php
$db = array();
$db['www'] = new SQLite3($_SERVER['DOCUMENT_ROOT'] . "/.db/$lang/www.db");
/*
 *  blog:
 *      id:          string
 *      time:        date
 *      path:        string
 *      pinned:      bool
 *      hide_meta:   bool
 *      last_edited: date
 *      tags:        [string]
 */
?>
