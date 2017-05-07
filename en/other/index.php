<?php
    $lang = 'en';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

    $page['subtitle'] = 'Other';
    $page['name'] = 'other';

    include $template['header'];
?>

    <article>
    <header>
    <h1>orb3d</h1>
    <aside>
        A 3D addon to the Orbital Client Library
    </aside>
    </header>
    <h3>Docs</h3>
        -
    <h3>Downloads</h3>
    <a href="https://github.com/pi-pi3/orb3d">orb3d</a>
    <a href="https://github.com/redox-os/orbclient">orbclient</a>
    <a href="https://github.com/redox-os/orbtk">orbtk</a>
    </article>

    <article>
    <header>
    <h1>wls</h1>
    <aside>
        A group of single file libraries for use in C/C++ (most are deprecated
        in C++).
    </aside>
    </header>
    <h3>Docs</h3>
        -
    <h3>Downloads</h3>
    <a href="https://github.com/pi-pi3/wls">wls</a>
    </article>

    <article>
    <header>
    <h1>lib4-lua</h1>
    <aside>
        LÖVE template project and helpful tiny libraries for lua and LÖVE
        (useful for Ludum Dare)
    </aside>
    </header>
    <h3>Docs</h3>
        -
    <h3>Downloads</h3>
    <a href="https://github.com/pi-pi3/lib4-lua">lib4-lua</a>
    </article>

    <article>
    <header>
    <h1>tinVM2</h1>
    <aside>
        Version 2.0 of tinVM. A complete redesign
    </aside>
    </header>
    <h3>Docs</h3>
        -
    <h3>Downloads</h3>
    <a href="https://gitlab.com/pi_pi3/tinVM2">tinVM2</a>
    </article>

    <article>
    <header>
    <h1>pi-tools</h1>
    <aside>
        Free (libre and gratis) command line GNU/Linux tools
    </aside>
    </header>
    <h3>Docs</h3>
        -
    <h3>Downloads</h3>
    <a href="https://gitlab.com/pi_pi3/pi-tools">pi-tools</a>
    </article>

    <article>
    <header>
    <h1>phong demo</h1>
    <aside>
        This demo was made for my final exam (the BLL). <br>
        Dieses Demo wurde für meine Abi Prüfung (die BLL) erschaffen.
    </aside>
    </header>
    <h3>Downloads</h3>
    <a href="https://gitlab.com/pi_pi3/phong-demo">phong-demo</a>
    </article>

<?php
    include $template['footer'];
?>
