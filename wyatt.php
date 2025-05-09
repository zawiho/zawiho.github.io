<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Hello | Bronwyn Howell</title>
</head>

<body class="body-main">
    <header class="header-main">
        <div class="header-div">
            <div class="batty">
                <a href="index.html">
                    <img src="images/batty.svg" width="240">
                </a>
            </div>
            <a href="index.html">
                <h1 class="zach-heading">
                    Bronwyn Howell
                </h1>
            </a>
            <div class="nav-div1">
                <nav class="main-nav">
                    <ul>
                        <li id="navPortfolio">
                            <a id="porLink"  href="portfolio.html">Portfolio</a>
                        </li>
                        <li id="navAbout">
                            <a id="abtLink" href="about.html">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="nav-mob1">
                <a href="#" class="toggle-nav">
                    <span id="hamburger">☰</span>
                    <span id="close" class="hidden">×</span>
                </a>
            </div>
        </div>
    </header>
    <div id="navMob2" class="hidden">
        <nav class="mobile-menu">
            <ul>
                <li><a href="#" id="prtLink">Portfolio</a></li>
                <li><a href="#" id="aboLink">About</a></li>
            </ul>
            <ul class="prtMenu hidden">
                <li><a href="webdev.html" id="webLink">Web Development</a></li>
                <li><a href="illusmation.html" id="illLink">Illustration &amp; Animation</a></li>
                <li><a href="videography.html" id="vidLink">Videography</a></li>
                <li>
                    <div class="mob-socials">
                        <a href="https://github.com/zawiho" target="_blank">
                            <img src="images/giticon.svg" width="50">
                        </a>
                        <a href="https://www.linkedin.com/in/zachary-howell-she-her/" target="_blank">
                            <img src="images/liicon.svg" width="50">
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="aboMenu hidden">
                <li><a href="about.html#" id="bioLink">About Me</a></li>
                <li><a href="about.html#expanchor" id="wrkLink">Work Experience</a></li>
                <li><a href="about.html#name" id="conLink">Contact</a></li>
                <li>
                    <div class="mob-socials">
                        <a href="https://github.com/zawiho" target="_blank">
                            <img src="images/giticon.svg" width="50">
                        </a>
                        <a href="https://www.linkedin.com/in/zachary-howell-she-her/" target="_blank">
                            <img src="images/liicon.svg" width="50">
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

<div class="nav-div2">
    <nav id="portfolioNav" class="cat-nav">
        <ul class="categories">
            <li id="first">
                <a href="webdev.html">Web Development</a>
            </li>
            <li id="second">
                <a href="illusmation.html">Illustration & Animation</a>
            </li>
            <li id="third"  class="active-nav">
                <a href="videography.html">Videography</a>
            </li>
        </ul>
    </nav>
    <nav id="aboutNav" class="cat-nav hidden">
        <ul>
            <li>
                <a href="about.html" id="aboutLink">About Me</a>
            </li>
            <li>
                <a href="about.html#expanchor" id="expLink">Work Experience</a>
            </li>
            <li>
                <a href="about.html#name" id="contactLink">Contact</a>
            </li>
        </ul>
    </nav>    
</div>

<main class="project">
    <section class="case-study">
        <div class="showcase-heading">
            <h2 class="showcase-h2">"Wyatt C. Louis"</h2>
            <h3 class="showcase-h3">Mini-Documentary</h3>
        </div>
        
        <div class="showcase">
            <div class="video">
                <video width="650" controls playsinline preload="metadata" poster="images/wyatt-cover.jpg">
                        <source src="video/wyatt.mp4">
                </video>
            </div>
            <div class="showcase-copy">
                <p>This was an assignment from my first semester in <abbr title="New Media Production and Design">NMPD</abbr> at <abbr title="Southern Alberta Institute of Technology">SAIT</abbr> which I recently reworked in order to improve the quality of the video footage, audio, and overall storytelling aspect using the knowledge and skills I have gained in the time since originally producing it. The video is a mini-documentary featuring a good friend of mine and local Calgary musician, Wyatt C. Louis.</p> 
                <p>For this project, I was in charge of writing the questions and conducting the interviews, as well as setting up cameras, lighting and audio equipment. I later compiled all of the clips and edited the video in Adobe Premiere Pro, strategically aligning b-roll over cuts and removing stops and stutters to make the dialogue flow more naturally.</p>
                <p>Major notable improvements over the original video include applying a warp stabilizer to interview footage to combat the constant adjustment of my phone camera's auto-focus, applying additional Lumetri styles to make the colours more dramatic, and remastering the audio for a better listening experience.</p>
            </div>
        </div>
    </section>

    <section class="related-work">
        <h2 class="gallery-h3">Related Work</h2>
            <div class="related">
                <div class="side-scroll">
                    <a href="courage1.html" class="thumb">
                        <img src="images/courage1-thumb.jpg" alt="Camp Courage Calgary Highlight Video #1" width=300>
                        <h5>"Camp Courage Calgary"</h5>
                        <h6>Highlight Video #1</h6>
                    </a>
                    <a href="courage2.html" class="thumb">
                        <img src="images/courage2-thumb.jpg" alt="Camp Courage Calgary Highlight Video #2" width=300>
                        <h5>"Camp Courage Calgary"</h5>
                        <h6>Highlight Video #2</h6>
                    </a>
                    <a href="tremolo.html" class="thumb">
                        <img src="images/tremolo-thumb.jpg" alt="Tremolo eLearning Guitar Course" width=300>
                        <h5>"Tremolo"</h5>
                        <h6>Guitar eLearning</h6>
                    </a>
                    <a href="kitten.html" class="thumb">
                        <img src="images/kitten-thumb.jpg" alt="Kitten is Angry Music Video" width=300>
                        <h5>"Kitten is Angry"</h5>
                        <h6>Music Video</h6>
                    </a>
                    <a href="budbud.html" class="thumb">
                        <img src="images/budbud-thumb.jpg" alt="Bud Bud Explainer Animation" width=300>
                        <h5>"Bud Bud"</h5>
                        <h6>Explainer Animation</h6>
                    </a>
                </div>
            </div>
    </section>
</main>

<div class="socials">
        <a href="https://github.com/zawiho" target="_blank">
            <img src="images/git.png" width="25">
        </a>
        <a href="https://www.linkedin.com/in/zachary-howell-she-her/" target="_blank">
            <img src="images/linked.png" width="25">
        </a>
    </div>

    <p id="zackToTop">Back to Top</p>
    <div class="footer-img">
        <a href="#">
            <img id="monogram" src="images/logo.png" alt="Bronwyn Howell logo" width="80">
        </a>
    </div>
    <footer>
        <small>Copyright © 2025, Bronwyn Howell. All Rights Reserved.</small>
    </footer>

    <script src="nav.js"></script>
    <script src="foot.js"></script>
</body>

</html>