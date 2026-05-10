<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>THG  | Tokyo Hack Group</title>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
</head>
<body>
    <div id="cursor-stalker"></div>

    <header class="global-header">
        <a href="?p=top" class="logo">THG</a>
        
        <nav class="desktop-nav">
            <ul>
                <li><a href="?p=mission">MISSION</a></li>
                <li><a href="?p=projects">PROJECTS</a></li>
                <li><a href="?p=blog">TECH LOG</a></li>
                <li><a href="?p=events">EVENTS</a></li>
                <li><a href="?p=recruit">RECRUIT</a></li>
            </ul>
        </nav>

        <button class="mobile-menu-btn" aria-label="Menu">
            <span></span>
            <span></span>
        </button>
    </header>

    <div class="mobile-overlay-nav">
        <nav>
            <a href="?p=mission">MISSION</a>
            <a href="?p=projects">PROJECTS</a>
            <a href="?p=blog">TECH LOG</a>
            <a href="?p=events">EVENTS</a>
            <a href="?p=recruit">RECRUIT</a>
        </nav>
        <div class="mobile-overlay-footer">
            <p>// TOKYO HACK GROUP</p>
        </div>
    </div>

    <main id="main-content">