#!/usr/bin/env sh
if [ -z $1 ]
then
    lang=en
    table=$1
    id=$2
    path=$3
    pinned=$4
    hide_meta=$4
    tags=$4
else
    lang=$1
    table=$2
    id=$3
    path=$4
    pinned=$5
    hide_meta=$5
    tags=$5
fi

if [ -n $path ]
then
    path="path = $path,"
fi

if [ -n $pinned ]
then
    path="pinned = $pinned,"
fi

if [ -n $hide_meta ]
then
    path="hide_meta = $hide_meta,"
fi

dbtags=`sqlite3 .db/$lang/www.db "select tags from $table where id = $id"`
tags="${dbtags}${tags}"

sqlite3 .db/$lang/www.db "
    update $table
    set last_edited = `date +%s`,
        $path
        tags = $tags
    where id = $id"
