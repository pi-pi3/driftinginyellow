<?php
function columns($left, $right, $w) {
    $left_w = $w*100;
    $right_w = 100-$left_w;

    echo "<div style=\"float:left;width:$left_w%;\">";
    echo $left;
    echo "</div>";

    echo "<div style=\"float:right;width:$right_w%;\">";
    echo $right;
    echo "</div>";
}

function nav($level, $name) {
    global $nav;

    $short = preg_replace('/[^a-z\-]+/', '-', strtolower($name));
    $nav[] = array('level' => $level, 'name' => $name, 'short' => $short);
}
?>
