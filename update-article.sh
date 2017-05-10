#!/usr/bin/env sh
update_article() {
    if [ $1 = '-h' ]
    then
        echo "Usage: update-article <lang> <table> <id> [tags]"
        echo "Examples:"
        echo "  update-article en blog hello-world"
        echo "  update-article en game a-game hack-n-slash,"
    
        return
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
}

update_article $1 $2 $3 $3
