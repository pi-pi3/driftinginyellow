<?php
$md = array();
$md['refs'] = array();

function md_tohtml($text) {
    $text = md_replace('/^#(.*)/', 'md_h1', $text);
    $text = md_replace('/^##(.*)/', 'md_h2', $text);
    $text = md_replace('/^###(.*)/', 'md_h3', $text);
    $text = md_replace('/^####(.*)/', 'md_h4', $text);
    $text = md_replace('/^#####(.*)/', 'md_h5', $text);
    $text = md_replace('/^######(.*)/', 'md_h6', $text);

    $text = md_replace('/ {2,}$/', 'md_linebreak', $text);

    $text = md_replace('/(.*[\d\D])={3,}/', 'md_aside', $text);
    $text = md_replace('/^([\d\D]*)={3,}/m', 'md_header', $text);

    $text = md_replace('/^[\t ]*((\d\.(?:[\t ]+).*(?:\n(?: {3,}.+))*\n?)+)/m',
                       'md_ordered', $text);
    $text = md_replace('/^[\t ]*(([+\-*](?:[\t ]+).*(?:\n(?: {3,}.+))*\n?)+)/m',
                       'md_unordered', $text);
    $text = md_replace('/^[\t ]*(?:\d\.|[+\-*])(.*(?:\n(?:\t+| {3,}).+)*)/m',
                       'md_list', $text);

    $text = md_replace('/^([^\n<]+(?:\n[^\n<]+)*)/m', 'md_par', $text);

    $text = md_replace('/\*(.*?)\*/', 'md_emph', $text);
    $text = md_replace('/_(.*?)_/', 'md_emph', $text);
    $text = md_replace('/\*\*(.*?)\*\*/', 'md_bold', $text);
    $text = md_replace('/__(.*?)__/', 'md_bold', $text);
    $text = md_replace('/\~\~(.*?)\~\~/', 'md_strike', $text);

    $text = md_replace('/!\[(.*?)\]\((.*?)\)/', 'md_img', $text);
    $text = md_replace('/!\[(.*?)\]\[(.*?)\]/', 'md_imgref', $text);

    $text = md_replace('/\[(.*?)\]\((.*?)\)/', 'md_link', $text);
    $text = md_replace('/\[(.*?)\]\[(.*?)\]/', 'md_linkref', $text);
    $text = md_replace('/\[(.*?)\]:(.*)/', 'md_ref', $text);
    $text = md_replace('/\[(.*?)\]/', 'md_reflink', $text);

    $text = md_replace('/`(.*?)`/', 'md_code', $text);
    $text = md_replace('/```((?:.*\n)*?)```/', 'md_code', $text);

    $text = md_replace('/^>(.*)/', 'md_blockquote', $text);

    $text = md_replace('/\|(?:.*\|)*\n-{3,}/', 'md_tableh', $text);
    $text = md_replace('/\|(?:.*\|)*/', 'md_table', $text);

    $text = md_replace('/^[\-*_]{3,}$/', 'md_rule', $text);

    return $text;
}

function md_replace($regex, $func, $text) {
    $callback = function ($matches) use ($func) {
        return call_user_func_array($func, array_slice($matches, 1));
    };
    return preg_replace_callback($regex, $callback, $text);
}

function md_title($title, $level) {
    $title = trim($title);
    if ($level < 3 && function_exists('nav')) {
        nav($level, $title);
    }
    
    $short = preg_replace('/[^a-z\-]+/', '-', strtolower($title));
    return "<a name=\"$short\" href=\"#$short\"><h$level>$title</h$level></a>";
}

function md_h1($title) { return md_title($title, 1); }
function md_h2($title) { return md_title($title, 2); }
function md_h3($title) { return md_title($title, 3); }
function md_h4($title) { return md_title($title, 4); }
function md_h5($title) { return md_title($title, 5); }
function md_h6($title) { return md_title($title, 6); }

function md_par($text) {
    return "<p>$text</p>";
}

function md_aside($text, $noheader=false) {
    $text = trim($text);
    return "<aside>$text</aside>" . (($noheader)? '':"\n===");
}

function md_header($text) {
    $text = trim($text);
    return "<header>$text</header>";
}

function md_emph($str) {
    $str = trim($str);
    return "<i>$str</i>";
}

function md_bold($str) {
    $str = trim($str);
    return "<b>$str</b>";
}

function md_strike($str) {
    $str = trim($str);
    return "<s>$str</s>";
}

function md_ordered($list) {
    return "<ol>\n$list\n</ol>\n";
}

function md_unordered($list) {
    return "<ul>\n$list\n</ul>\n";
}

function md_list($item) {
    $expl = explode("\n", $item, 2);
    $item = trim($expl[0]);
    if (isset($expl[1])) {
        $par = '<p>' . trim($expl[1]) . '</p>';
    } else {
        $par = '';
    }
    return "<li>$item$par</li>";
}

function md_linebreak() {
    return '<br>';
}

function md_link($str, $link) {
    $str = trim($str);
    $link = trim($link);
    return "<a href=\"$link\">$str</a>";
}

function md_linkref($str, $ref) {
    $ref = trim($ref);
    $ref = strtolower($ref);

    global $md;

    if (isset($md['refs'][$ref])) {
        $link = $md['refs'][$ref];
        return md_link($str, $link);
    } else {
        return '';
    }
}

function md_reflink($ref) {
    return md_linkref($ref, ref);
}

function md_ref($ref, $str) {
    $str = trim($str);
    $ref = trim($ref);
    $ref = strtolower($ref);

    global $md;
    $md['refs'][$ref] = $str;

    return '';
}

function md_image($alt, $path) {
    $alt = trim($alt);
    $path = trim($path);

    return "<img alt=\"$alt\" src=\"$path\">";
}

function md_imageref($alt, $ref) {
    $ref = trim($ref);
    $ref = strtolower($ref);

    global $md;

    if (isset($md['refs'][$ref])) {
        $link = $md['refs'][$ref];
        return md_image($alt, $link);
    } else {
        return '';
    }
}

function md_code($text) {
    $text = htmlspecialchars($text);
    return "<span class=\"verbatim\">$text</span>";
}

function md_codeblock($text) {
    $text = htmlspecialchars($text);
    return "<div class=\"verbatim\">$text</div>";
}

function md_tableh($items) {
    $items = preg_replace('/-+/', '', $items);
    $result = md_table($items);

    return $result;
}

function md_table($items) {
    $items = trim($items);

    $result = '';
    foreach (explode($items, '|') as $item) {
        $item = trim($item);
        $result = $result . "<td>$item</td>";
    }

    return $result;
}

function md_quote($text) {
    $text = trim($item);
    return "<blockquote>$text</blockquote>";
}

function md_rule() {
    return "<hr>";
}
?>
