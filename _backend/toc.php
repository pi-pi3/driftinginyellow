<?php
if ($toc_nav) {
    echo '<div id="nav">';
}

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
