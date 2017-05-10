#!/usr/bin/env sh
if [ $1 == '-h' ]
then
    echo "Usage: $1 <lang> <table> <id> [tags]"
    echo "Examples:"
    echo "  $1 en blog hello-world"
    echo "  $1 en game a-game hack-n-slash,"
fi

lang=$1
table=$2
id=$3
tags=$4

dbtags=`sqlite3 .db/$lang/www.db "select tags from $table where id = '$id'"`
tags="${dbtags}${tags}"

sqlite3 .db/$lang/www.db "
    update $table
    set last_edited = `date +%s`,
        tags = $tags
    where id = '$id'"
