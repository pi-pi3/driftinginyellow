#!/usr/bin/env sh
if [ -z $2 ]
then
    lang=en
else
    lang=$2
fi

if [ -z $3 ]
then
    outfile=$lang/blog/articles 
else
    outfile=$3
fi

if [ -e $outfile ]
then
    echo `date +%s` $1 | tee -a $outfile
else
    echo `date +%s` $1
fi
