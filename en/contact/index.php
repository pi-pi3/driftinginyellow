<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/visual.php';

$page['subtitle'] = 'Contact';
$page['name'] = 'contact';

include $template['header'];
?>

<article>
    <header>
    <?php h1('Contact') ?>
    <aside>
        This is how you contact me!
    </aside>
    </header>

    <ul>
    <?php 
        $w = 0.3;
        columns('<li>e-Mail', '<a href="mailto:walter.szymon.98@gmail.com">
                                walter.szymon.98@gmail.com</a></li>', $w);
        columns('<li>Twitter', '<a href="https://twitter.com/pi_pi314">
                                @pi_pi314</a></li>', $w);
    ?>
    </ul>

    Feel free to reach me out anytime, but I might not reply instantly.
</article>

<article>
    <header>
    <?php h1('Other links') ?>
    <aside>
        Here are also some other links to my accounts
    </aside>
    </header>

    <ul>
    <?php 
        $w = 0.3;
        columns('<li>itch.io', '<a href="https://pi-pi3.itch.io">
                                pi_pi3.itch.io</a></li>', $w);
        columns('<li>Steam', '<a href="https://steamcommunity.com/id/pi_pi3">
                              steamcommunity.com/id/pi_pi3</a></li>', $w);
        columns('<li>Ludum Dare', '<a href="https://ldjam.com/users/pi-pi3">
                                   ldjam.com/users/pi_pi3</a></li>', $w);
    ?>
    </ul>

    Feel free to follow me or add me to your friends; if you don't look like a
    bot or a malicious person to me, I'll likely reply.
</article>

<?php
include $template['footer'];
?>
