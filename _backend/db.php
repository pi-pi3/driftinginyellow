<?php
$db['www'] = new SQLite3($_SERVER['ROOT_DIRECTORY'] . "/.db/$lang/www.db");
/* 
 *  blog:
 *  id: string | time: int | path: string | pinned: int | hide_meta: int
 *
 *  games:
 *  id: string | time: int | path: string | pinned: int | hide_meta: int
 *
 *  other:
 *  id: string | time: int | path: string | pinned: int | hide_meta: int
 *
 */
?>
