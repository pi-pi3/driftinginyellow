<?php
    $lang = 'en';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/pub/preload.php';

    $page['subtitle'] = 'Something\'s wrong here...';
    $page['name'] = '';

    include $template['header'];
?>

    <article>
        <header>
        <h1>Woah!</h1>
        </header>
        
        <p>
            What are you doing here? This is private property!
        </p>
        <p>
            Go back home <a href="/en/home">home</a>! <br>
            Still here? Try <a href="/en/contact">contacting</a> the
            administrator. He might be able to help you.
        </p>
    </article>

<?php
    include $template['footer'];
?>
