#!/usr/bin/env sh
lang=$1
table=$2
id=$3
path=$4
pinned='null'
hide_meta='null'
tags='null'

sqlite3 .db/$lang/www.db "insert into $table values ('$id', `date +%s`, '$path', $pinned, $hide_meta, null, '$tags')"
