<?php
    $lang = 'en';

    require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

    $page['subtitle'] = 'About';
    $page['name'] = 'about';

    include $template['header'];
?>

    <article>
    <header>
    <h1>Whoami?</h1>
    <aside>
        Do I know you?
    </aside>
    </header>
    <p>
    I'm Szymon, also known as pi_pi3 on Twitter, Steam, itch.io, etc.<br>
    I do game stuff, I do programming stuff, I do system stuff.<br>
    I've made some <a href="/en/games">games</a> in the past,<br>
    I've made some <a href="/en/other">other</a> programs and libraries in the
    past,<br>
    I've made contributions to open source projects, mainly the Redox
    <a href="https://github.com/redox-os/kernel">kernel</a> and
    <a href="https://github.com/redox-os/redox">OS</a>.
    </p>
    <p>
    Now I've made this project: a full-featured server with HTTP/-S, IMAP, POP3,
    SMTP and of course SSH. I also have the possibility to host some game
    servers, like Minecraft, Team Fortress 2 and Unturned. All in my bedroom,
    for <s>free</s>
    <abbr title="For the domain which isn't working">$9/year</abbr> +
    electricity costs + internet costs, all without professional help.
    </p>
    </article>

    <article>
    <header>
    <h1>Motivation</h1>
    <aside>
        Why the heck would I bother?
    </aside>
    </header>
    <p>
    I'm a pupil. A (german) high school pupil. In fact, I'm doing my finals
    right now! I have a maths exam on Tuesday, 2nd May. Now, I want to study
    <abbr title="Computer Sciences">CS</abbr> after high school. Ideally at the
    <a href="https://www.tum.de/en/homepage/">Munich Technical University</a>.
    Besides my application I'm also making this website public, which, in my
    hope, will serve as a motivation for whoever handles the applications and
    a proof that I'm capable <a href="/en/games/">of</a>,
    <a href="/en/other/">well</a>, <a href="/en/about/#specifications">stuff</a>.
    </p>
    </article>

    <article>
    <header>
    <h1>Specifications</h1>
    <aside>
        Ok, what does this server have?
    </aside>
    </header>
    <p>
    <ul style="list-style-type:none">
        <li>intel i5 3330 Quad Core 3.3GHz</li>
        <li>12GB working memory</li>
        <ul style="list-style-type:none">
            <li>20GB swap</li>
        </ul>
        <li>1TB hard drive storage</li>
        <ul style="list-style-type:none">
            <li>~850GiB available</li>
        </ul>
        <li>ArchLinux</li>
        <ul style="list-style-type:none">
            <li>linux 4.10.11-1</li>
            <li>no systemd</li>
            <li>OpenRC/sysV init</li>
        </ul>
        <li>supported protocols and services</li>
        <ul style="list-style-type:none">
            <li>HTTP/-S</li>
            <li>SSH</li>
            <li>GIT (WIP)</li>
            <li>POP3 (WIP)</li>
            <li>IMAP (WIP)</li>
            <li>SMTP (WIP)</li>
        </ul>
        <li>SSL certificate supplied by certbot from Let's encrypt</li>
    </ul>
    </p>
    </article>

    <article>
    <header>
    <h1>More facts about me</h1>
    <aside>
        I have a life, too.
    </aside>
    </header>
    <h3>Bio</h3>
    <p>
    I was born in Wrocław, Poland. I lived in Poland for ten years of my life,
    after that I moved to Berlin with my mom. I've been attending a bilingual
    school for the past 8 years. This has helped me perfecting both my Polish
    and my German language. Since I spend majority of my spare time with my
    many computers and people over seas, I also developed formidable English
    skills. I like to call myself a trilingualist, although I'm not sure whether
    that's strictly true.
    </p>
    <p>
    About my love for electronics...<br>
    Ever since I remembered I had an indisputable love for electronics. It
    didn't matter to me whether or not I understood how it worked. When I was
    four, my brother got a computer for Christmas. Since then I was hooked. In
    5th grade I wrote my first ever program. It was written in Pascal. Some time
    later I started learning about C++. But then I ditched programming for a
    long while. In 9th grade I bought Game Maker: Studio on discount on Steam.
    Yeah, it was payed at the time. 4 months later I participated in Ludum Dare
    for the first time. Since then I've been going ever deeper into computers
    and low-level stuff. Today I'm working on gamedev, systems programming, I
    even invented <a href="https://github.com/pi-pi3/ylw">my own language</a>.
    </p>
    </article>

<?php
    include $template['footer'];
?>
