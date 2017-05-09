<?php
    $lang = 'en';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

    $page['subtitle'] = 'Curriculum Vitae';
    $page['name'] = 'cv';

    include $template['header'];
?>

<article>
    <?php h1('Personal details') ?>

    <div style="float:left;width:30%;">
        <ul>
            <li>Full name</li>
            <li>Birth date</li>
            <li>Birth place</li>
            <li>Nationality</li>
            <li>e-Mail</li>
            <li>Sex</li>
            <li>Website</li>
        </ul>
    </div>

    <div style="float:right;width:70%;">
        <ul>
            <li>Szymon Walter</li>
            <li>18th April 1998</li>
            <li>Wrocław</li>
            <li>Polish</li>
            <li><a href="mailto:walter.szymon.98@gmail.com">
                walter.szymon.98@gmail.com</a></li>
            <li>Male</li>
            <li><a href="https://driftinginyellow.ddns.info">
                driftinginyellow.ddns.info</a></li>
        </ul>
    </div>

    <?php h1('Education') ?>

    <div style="float:left;width:50%;">
        <ul>
            <li>Szkoła podstawowa w Czerniawie</li>
            <li>Szkoła podstawowa w Smolniku</li>
            <li>Scharmützelsee-Grundschule</li>
            <li>Katharina Heinroth Grundschule</li>
            <li>Robert-Jungk-Oberschule</li>
        </ul>
    </div>

    <div style="float:right;width:50%;">
        <ul>
            <li>2005 - 2006</li>
            <li>2006 - 2008</li>
            <li>2008 - 2009</li>
            <li>2009 - 2011</li>
            <li>2011 - 2017</li>
        </ul>
    </div>

    <?php h1('Experiences') ?>

    <ul>
        <li>8 time Ludum Dare participant</li>
        <ul>
            <li>6 times compo (alone)</li>
            <li>1 times jam (alone)</li>
            <li>1 times jam (team)</li>
        </ul>
    </ul>

    <?php h1('Skills') ?>

    <?php h2('General') ?>

    <ul>
        <li>Problem solving</li>
        <li>Interpersonal abilities</li>
        <li>Creativity in work</li>
        <li>Collaboration over all</li>
    </ul>

    <?php h2('Languages') ?>

    <div style="float:left;width:30%;">
        <ul>
            <li>Polish</li>
            <li>German</li>
            <li>English</li>
        </ul>
    </div>

    <div style="float:right;width:70%;">
        <ul>
            <li>Native</li>
            <li>Fluent</li>
            <li>Fluent</li>
        </ul>
    </div>

    <?php h2('Computer related') ?>

    <div style="float:left;width:30%;">
        <ul>
            <li>LibreOffice</li>
            <li>Git</li>
            <li>Blender</li>
            <li>GIMP</li>
            <li>Inkscape</li>
        </ul>
    </div>

    <div style="float:right;width:70%;">
        <ul>
            <li>Proficient</li>
            <li>Proficient</li>
            <li>Beginner</li>
            <li>Proficient</li>
            <li>Beginner</li>
        </ul>
    </div>

    <h3>Programming</h3>

    <div style="float:left;width:30%;">
        <ul>
            <li>C/C++</li>
            <li>Rust</li>
            <li>Haskell</li>
            <li>Python</li>
            <li>Lua</li>
            <li>Bash</li>
            <li>HTML/CSS/PHP</li>
            <li>SQL</li>
        </ul>
    </div>

    <div style="float:right;width:70%;">
        <ul>
            <li>Intermediate</li>
            <li>Intermediate</li>
            <li>Beginner</li>
            <li>Intermediate</li>
            <li>Advanced</li>
            <li>Beginner</li>
            <li>Proficient</li>
            <li>Beginner</li>
        </ul>
    </div>

    <?php h1('Interests') ?>
    <ul>
        <li>Computer sciences</li>
        <ul>
            <li>Backend programming</li>
            <li>Systems programming</li>
            <li>Game development</li>
        </ul>
        <li>Mathematics</li>
        <li>Physics</li>
        <li>Games</li>
        <ul>
            <li>Board games &amp; video games</li>
        </ul>
        <li>Films</li>
    </ul>
</article>

<?php
    include $template['footer'];
?>
