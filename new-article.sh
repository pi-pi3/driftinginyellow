#!/usr/bin/env sh
if [ -z $2 ]
then
    lang=en
else
    lang=$2
fi

echo `date +%s` $1 | tee -a $lang/blog/articles
