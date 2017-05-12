<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/visual.php';

$page['subtitle'] = 'Curriculum Vitae';
$page['name'] = 'cv';

include $template['header'];
?>

<article>
    <?php h1('Personal details') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>Full name',   'Szymon Walter</li>', $w);
        columns('<li>Birth date',  '18th April 1998</li>', $w);
        columns('<li>Birth place', 'Wrocław</li>', $w);
        columns('<li>Nationality', 'Polish</li>', $w);
        columns('<li>e-Mail',      '<a href="mailto:walter.szymon.98@gmail.com">
                                    walter.szymon.98@gmail.com</a></li>', $w);
        columns('<li>Sex',         'Male</li>', $w);
        columns('<li>Website',     '<a href="https://driftinginyellow.tk">
                                    driftinginyellow.tk</a></li>', $w);
    ?>
    </ul>

    <?php h1('Education') ?>

    <ul class="list-none">
    <?php 
        $w = 0.5;
        columns('<li>Szkoła podstawowa w Czerniawie', '2005 - 2006</li>', $w);
        columns('<li>Szkoła podstawowa w Smolniku',   '2006 - 2008</li>', $w);
        columns('<li>Scharmützelsee-Grundschule',     '2008 - 2009</li>', $w);
        columns('<li>Katharina Heinroth Grundschule', '2009 - 2011</li>', $w);
        columns('<li>Robert-Jungk-Oberschule',        '2011 - 2017</li>', $w);
    ?>
    </ul>

    <?php h1('Experiences') ?>

    <ul class="list-none">
        <li>8 time Ludum Dare participant</li>
        <ul class="list-none">
            <li>6 times compo (alone)</li>
            <li>1 times jam (alone)</li>
            <li>1 times jam (team)</li>
        </ul>
    </ul>

    <?php h1('Skills') ?>

    <?php h2('General') ?>

    <ul class="list-none">
        <li>Problem solving</li>
        <li>Interpersonal abilities</li>
        <li>Creativity in work</li>
        <li>Collaboration over all</li>
    </ul>

    <?php h2('Languages') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>Polish', 'Native</li>', $w);
        columns('<li>German', 'Fluent</li>', $w);
        columns('<li>English', 'Fluent</li>', $w);
    ?>
    </ul>

    <?php h2('Computer related') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>LibreOffice', 'Proficient</li>', $w);
        columns('<li>Git',         'Proficient</li>', $w);
        columns('<li>Blender',     'Beginner</li>', $w);
        columns('<li>GIMP',        'Proficient</li>', $w);
        columns('<li>Inkscape',    'Beginner</li>', $w);
    ?>
    </ul>

    <?php h3('Programming') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>C/C++',        'Intermediate</li>', $w);
        columns('<li>Rust',         'Intermediate</li>', $w);
        columns('<li>Haskell',      'Beginner</li>',$w);
        columns('<li>Python',       'Intermediate</li>',  $w);
        columns('<li>Lua',          'Advanced</li>', $w);
        columns('<li>Bash',         'Beginner</li>', $w);
        columns('<li>HTML/CSS/PHP', 'Proficient</li>',   $w);
        columns('<li>SQL',          'Beginner</li>', $w);
    ?>
    </ul>

    <?php h1('Interests') ?>
    <ul class="list-none">
        <li>Computer sciences</li>
        <ul class="list-none">
            <li>Backend programming</li>
            <li>Systems programming</li>
            <li>Game development</li>
        </ul>
        <li>Mathematics</li>
        <li>Physics</li>
        <li>Games</li>
        <ul class="list-none">
            <li>Board games &amp; video games</li>
        </ul>
        <li>Films</li>
    </ul>
</article>

<?php
include $template['footer'];
?>
