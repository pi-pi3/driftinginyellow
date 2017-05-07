<?php
    $lang = 'en';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

    $page['subtitle'] = 'Something\'s wrong here...';
    $page['name'] = '';

    include $template['header'];
?>

    <article>
        <header>
        <h1>Hi there!</h1>
        </header>
        
        <div style="float:left;width:15%;font-size:200%;">
            404
        </div>
        <div style="float:right;width:85%;">
            This isn't what you're looking for? We're very sorry. It seems
            there was an error. We couldn't find site you requested. 
        </div>
        <p>
            Maybe you should try going back <a href="/en/">home</a>.
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
