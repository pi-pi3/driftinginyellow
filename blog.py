#!/usr/bin/env python

import sys
import argparse
import sqlite3
import time

def main():
    parser = argparse.ArgumentParser(description='Blog helper for drifting in\
            yellow. If -f is not specified, -i default to true.',
            add_help=False)
    parser.add_argument('-u', '--update', default=False, action='store_true',
            help='only update tables, don\'t add new entries')
    parser.add_argument('-i', '--stdin', default=False, action='store_true',
            help='should the input be read from stdin?')
    parser.add_argument('-m', '--file-meta', default=True, action='store_true',
            help='should article meta-data be read from file?')
    parser.add_argument('-f', '--file', type=open,
            help='read from `file`')
    parser.add_argument('-v', '--version', action='version',
            version='%(prog)s 0.1', help='print version and exit')
    parser.add_argument('-h', '--help', action='help',
            help='show this help message and exit')
    args = parser.parse_args()

    if not args.file:
        args.stdin = True

    lang = 'en'
    table = 'blog'
    art_id = None # required
    title = None  # required
    path = None   # required
    pinned = False
    hide_meta = False
    tags = ''
    if args.file:
        for line in args.file:
            if len(line) == 1:
                break
            elif line.startswith('Lang: '):
                lang = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Table: '):
                table = line.split(' ', maxsplit=1)[1]
            elif line.startswith('ID: '):
                art_id = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Title: '):
                title = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Path: '):
                path = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Tags: '):
                tags = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Pinned'):
                path = True
            elif line.startswith('HideMeta'):
                hide_meta = True
    if args.stdin:
        for line in sys.stdin:
            if len(line) == 1:
                break
            elif line.startswith('Lang: '):
                lang = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Table: '):
                table = line.split(' ', maxsplit=1)[1]
            elif line.startswith('ID: '):
                art_id = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Title: '):
                title = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Path: '):
                path = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Tags: '):
                tags = line.split(' ', maxsplit=1)[1]
            elif line.startswith('Pinned'):
                path = True
            elif line.startswith('HideMeta'):
                hide_meta = True

    if not art_id:
        print('error: No ID was specified.')
        return
    if not title:
        print('error: No Title was specified.')
        return
    if not path:
        print('error: No Path was specified.')
        return

    timestamp = time.localtime()

    db = sqlite3.connect('.db/{}/www.db'.format(lang))
    c = db.cursor()
    if not args.update:
        c.execute("insert into {} values ('{}', {}, '{}', {}, {}, {},
                   '{}', '{}')"
                   .format(table, art_id, timestamp, path,
                           1 if pinned else 0, 1 if hide_meta else 0,
                           'null', tags, title))
    else:
        # TODO: don't update what's unchanged
        c.execute("update {} set pinned = {}, hide_meta = {}, last_edited = {},
                   tags = '{}', title = '{}' where id = '{}'"
                   .format(table, pinned, hide_meta,
                           timestamp, tags, title, art_id))
    db.commit()
    db.close()

if __name__ == '__main__':
    main()
