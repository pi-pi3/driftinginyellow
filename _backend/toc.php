<?php
if ($toc_nav) {
    echo '<div id="nav">';
}

echo '<h4>Table of contents</h4>';
echo '<hr>';
echo '<span style="font-size:80%"><a href="#top">Top</a></span>';

echo '<ol>';
$level = 1;
foreach ($nav as $h) {
    if ($h['level'] > $level) {
        echo '<ul>';
        $level = $h['level'];
    } elseif ($h['level'] < $level) {
        echo '</ul>';
        $level = $h['level'];
    }
    echo '<a href="#', $h['short'], '">';
    echo '<li>', $h['name']. '</li>';
    echo '</a>';
}
echo '</ol>';

if ($toc_nav) {
    echo '</div>';
}
?>
