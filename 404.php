<?php
    $lang = 'en';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/pub/preload.php';

    $page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
    $page['name'] = '';

    include $template['header'];
?>

    <article>
        <header>
        <h1>Hi there!</h1>
        </header>
        
        <p>
            This isn't what you're looking for? We're very sorry. It seems
            there was an error. We couldn't find site you requested. 
        </p>
        <p>
            Maybe you should try going back <a href="/en/home">home</a>.
            Or maybe you want to <a href="/en/contact">contact</a> the
            administrator?
        </p>
        <p>
            In any case, as an apology, we would like to present you this
            picture of our engineer trying to work out this issue.
            <img src="404.gif" alt="A very hard working engineer">
        </p>
    </article>

<?php
    include $template['footer'];
?>
