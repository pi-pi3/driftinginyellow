<?php
$lang = 'de';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/visual.php';

$page['subtitle'] = 'Kontakt';
$page['name'] = 'contact';

include $template['header'];
?>

<article>
    <header>
    <?php h1('Kontakt') ?>
    <aside>
        So kannst du mich erreichen!
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
    
    Du kannst mich jederzeit anschreiben, ich werde aber eher nicht gleich
    antworten.
</article>

<article>
    <header>
    <h1>Andere Links</h1>
    <aside>
        Hier sind noch andere Links zu meinen Konten
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
    
    Du kannst mich folgen oder zu deinen Freunden einladen; so lange du nicht
    wie ein Bot oder boshafter Mensch aussiehst, werde ich wahrscheinlich
    antworten.
</article>

<?php
include $template['footer'];
?>
