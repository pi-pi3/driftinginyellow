<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

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

    <div style="float:left;width:30%;">
        <ul style="list-style-type:none">
            <li>e-Mail</li>
            <li>Twitter</li>
        </ul>
    </div>

    <div style="float:left;width:70%;">
        <ul style="list-style-type:none">
            <li><a href="mailto:walter.szymon.98@gmail.com">
                walter.szymon.98@gmail.com</a></li>
            <li><a href="https://twitter.com/pi_pi314">
                @pi_pi314</a></li>
        </ul>
    </div>

    Feel free to reach me out anytime, but I might not reply instantly.
</article>

<article>
    <header>
    <?php h1('Other links') ?>
    <aside>
        Here are also some other links to my accounts
    </aside>
    </header>

    <div style="float:left;width:30%;">
        <ul style="list-style-type:none">
            <li>itch.io</li>
            <li>Steam</li>
            <li>Ludum Dare</li>
        </ul>
    </div>

    <div style="float:left;width:70%;">
        <ul style="list-style-type:none">
            <li><a href="https://pi-pi3.itch.io">
                pi_pi3.itch.io</a></li>
            <li><a href="https://steamcommunity.com/id/pi_pi3">
                steamcommunity.com/id/pi_pi3</a></li>
            <li><a href="https://ldjam.com/users/pi-pi3">
                ldjam.com/users/pi_pi3</a></li>
        </ul>
    </div>

    Feel free to follow me or add me to your friends; if you don't look like a
    bot or a malicious person to me, I'll likely reply.
</article>

<?php
include $template['footer'];
?>
