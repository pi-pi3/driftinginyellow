#!/usr/bin/env sh
if [ $1 == '-h' ]
then
    echo "Usage: $0 <lang> <table> <id> <path> [tags]"
    echo "Examples:"
    echo "  $0 en blog hello-world blog/hello-world.html"
    echo "  $0 en game a-game games/game.html rpg,fun,2d,"
fi

lang=$1
table=$2
id=$3
path=$4
pinned='0'
hide_meta='0'
tags=''

sqlite3 .db/$lang/www.db "insert into $table values ('$id', `date +%s`, '$path', $pinned, $hide_meta, null, '$tags')"
