#!/usr/bin/env sh
if [ -z $1 ]
then
    lang=en
    table=$1
    id=$2
    path=$3

    if [ -z $4]
    then
        pinned='null'
    else
        pinned=$4
    fi

    if [ -z $5]
    then
        hide_meta='null'
    else
        hide_meta=$4
    fi

    if [ -z $5]
    then
        tags='null'
    else
        tags=$4
    fi
else
    lang=$1
    table=$2
    id=$3
    path=$4

    if [ -z $5]
    then
        pinned='null'
    else
        pinned=$5
    fi

    if [ -z $6]
    then
        hide_meta='null'
    else
        hide_meta=$5
    fi

    if [ -z $6]
    then
        tags='null'
    else
        tags=$5
    fi
fi

sqlite3 .db/$lang/www.db "insert into $table values ($id, `date +%s`, $path, $pinned, $hide_meta, null, $tags)"
