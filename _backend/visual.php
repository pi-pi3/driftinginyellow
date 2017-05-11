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

function nav($level, $name, $href=null) {
    global $nav_print;
    if ($level <= $nav_print) {
        return;
    }

    $short = preg_replace('/[^a-z\-]+/', '-', strtolower($name));

    if (!isset($href)) {
        $href = "#$short";
    }

    global $nav;
    $nav[] = array('level' => $level, 'name' => $name, 'href' => $href);
}

function header_name($name, $level) {
    $short = preg_replace('/[^a-z\-]+/', '-', strtolower($name));

    nav($level, $name);
    
    echo "<a name=\"$short\" href=\"#$short\">
              <h$level>$name</h$level>
         </a>";
}

function h1($name) {
    header_name($name, 1);
}

function h2($name) {
    header_name($name, 2);
}

function h3($name) {
    header_name($name, 3);
}
?>
