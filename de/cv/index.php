<?php
$lang = 'de';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/visual.php';

$page['subtitle'] = 'Curriculum Vitae';
$page['name'] = 'cv';

include $template['header'];
?>

<article>
    <?php h1('Personendaten') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>Voller Name',  'Szymon Walter</li>', $w);
        columns('<li>Geburtsdatum', '18 April 1998</li>', $w);
        columns('<li>Geburtsort',   'Breslau</li>', $w);
        columns('<li>Nationalität', 'Polnisch</li>', $w);
        columns('<li>e-Mail',     '<a href="mailto:walter.szymon.98@gmail.com">
                                   walter.szymon.98@gmail.com</a></li>', $w);
        columns('<li>Geschlecht', 'Male</li>', $w);
        columns('<li>Website',    '<a href="https://driftinginyellow.tk">
                                   driftinginyellow.tk</a></li>', $w);
    ?>
    </ul>

    <?php h1('Bildung') ?>

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

    <?php h1('Erfahrungen') ?>

    <ul class="list-none">
        <li>8 mal Ludum Dare Teilnehmer</li>
        <ul class="list-none">
            <li>6 mal compo (alein)</li>
            <li>1 mal jam (alein)</li>
            <li>1 mal jam (team)</li>
        </ul>
    </ul>

    <?php h1('Fähigkeiten') ?>

    <?php h2('Allgemein') ?>

    <ul class="list-none">
        <li>Problemlösung</li>
        <li>Zwischenmenschliche Fähigkeiten</li>
        <li>Kreativität in der Arbeit</li>
        <li>Zusammenarbeit über all</li>
        <li>(sehr) Schneller Lerner</li>
    </ul>

    <?php h2('Sprachen') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>Polnisch', 'Muttersprache</li>', $w);
        columns('<li>Deutsch',  'Fliesend</li>', $w);
        columns('<li>Englisch', 'Fliesend</li>', $w);
    ?>
    </ul>

    <?php h2('Computer orientiert') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>LibreOffice', 'Kompetent</li>', $w);
        columns('<li>Git',         'Kompetent</li>', $w);
        columns('<li>Blender',     'Anfänger</li>', $w);
        columns('<li>GIMP',        'Kompetent</li>', $w);
        columns('<li>Inkscape',    'Anfänger</li>', $w);
    ?>
    </ul>

    <?php h3('Programmieren') ?>

    <ul class="list-none">
    <?php 
        $w = 0.3;
        columns('<li>C/C++',        'Intermediär (2 Jahre)/li>', $w);
        columns('<li>Rust',         'Kompetent (&lt;1 Jahr)</li>', $w);
        columns('<li>Haskell',      'Anfänger (&lt;1 Jahr)</li>',$w);
        columns('<li>Python',       'Intermediär (1~2 Jahre)</li>',  $w);
        columns('<li>Lua',          'Erfahren (2 Jahre)</li>', $w);
        columns('<li>Bash',         'Anfänger (1~2 Jahre)</li>', $w);
        columns('<li>HTML/CSS/PHP', 'Kompetent (4 Wochen)</li>',   $w);
        columns('<li>JavaScript',   'Anfänger (4 Wochen)</li>', $w);
        columns('<li>SQL',          'Kompetent (&lt;1 Jahr)</li>', $w);
    ?>
    </ul>

    <?php h1('Interessen') ?>
    <ul class="list-none">
        <li>Informatik</li>
        <ul class="list-none">
            <li>Backend programming</li>
            <li>Systems programming</li>
            <li>Spieleentwicklung</li>
        </ul>
        <li>Mathematik</li>
        <li>Physik</li>
        <li>Spiele</li>
        <ul class="list-none">
            <li>Brettspiele &amp; Computerspiele</li>
        </ul>
        <li>Filme</li>
    </ul>
</article>

<?php
include $template['footer'];
?>
