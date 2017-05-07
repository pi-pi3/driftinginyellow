<?php
    $lang = 'en';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/_pub/preload.php';

    $page['subtitle'] = 'Games';
    $page['name'] = 'games';

    include $template['header'];
?>

    <article>
    <header>
    <h1>Game template</h1>
    <aside>
        Short description
    </aside>
    </header>
    <h3>Gameplay</h3>
        It's a fun game
    <h3>Development</h3>
        Probably developed for Ludum Dare
    <h3>Downloads</h3>
    <a href="https://pi-pi3.itch.io">itch.io</a>
    </article>

<?php
    include $template['footer'];
?>
