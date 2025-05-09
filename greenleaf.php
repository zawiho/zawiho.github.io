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

    <title>Portfolio | Bronwyn Howell</title>
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
                            <a id="porLink" href="portfolio">Portfolio</a>
                        </li>
                        <li id="navAbout">
                            <a id="abtLink" class="active-link" href="about">About</a>
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
                <li><a href="webdev" id="webLink">Web Development</a></li>
                <li><a href="illusmation" id="illLink">Illustration &amp; Animation</a></li>
                <li><a href="videography" id="vidLink">Videography</a></li>
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
                <li><a href="about#" id="bioLink">About Me</a></li>
                <li><a href="about#expanchor" id="wrkLink">Work Experience</a></li>
                <li><a href="about#name" id="conLink">Contact</a></li>
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
            <li id="first" class="active-nav">
                <a href="webdev.html">Web Development</a>
            </li>
            <li id="second">
                <a href="illusmation.html">Illustration & Animation</a>
            </li>
            <li id="third">
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
            <h2 class="showcase-h2">"Greenleaf" eCommerce Website</h2>
            <h3 class="showcase-h3"><a href="https://zacharyhowell.ca/greenleaf/" target="_blank">https://zacharyhowell.ca/greenleaf/</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="https://zacharyhowell.ca/greenleaf/" target="_blank"><img src="images/gl-dt.jpg" width="650" alt="greenleaf eCommerce store mockup"></a>
                <small>Image by <a href="https://www.pexels.com/photo/laptop-with-blank-screen- placed-on-table-6446709/" target="_blank">Pexels</a></small>
            </div>
            <h4 class="showcase-h4">HTML | CSS | PHP | MySQL</h4>
            <p>This was the final project for my second semester of Web Communications at SAIT. For this assignment, we were given the option of a number of different shop types to choose from in order to create an eCommerce website. After making our decision, it was up to us to photograph a minimum of twenty products to feature in the store. We were then given a logo, fonts, and brand colours that we could not alter in any way with which to style the website.</p>
            <p>The biggest challenge I faced when creating this site was implementing the functionality of the shopping cart. By storing the product values in an array and imploding that into a session, I was able to pass the information along to the proper page and only have the session cleared once the customers completes their checkout.</p> 
            <p>With often unfavourable colour schemes, it took a lot of patience and experimentation to settle on a presentation I was happy with. Additionally, we had a size limit of 300 KB for most of the pages. With this site being very image-heavy, it was a challenge to optimize the photos in order to come in under that size limit while maintaining the highest possible image quality.</p>
        </div>
    </section>
    
    <section class="related-work">
        <h2 class="gallery-h3">Related Work</h2>
            <div class="related">
                <div class="side-scroll">
                    <a href="dino.html" class="thumb">
                        <img src="images/dino-thumb.jpg" alt="Ancient Avians JavaScript Boardgame" width=300>
                        <h5>"Ancient Avians"</h5>
                        <h6>JavaScript Boardgame</h6>
                    </a>
                    <a href="btwd.html" class="thumb">
                        <img src="images/btwd-thumb.jpg" alt="Bike to Work Day mobile app" width=300>
                        <h5>"Bike to Work Day"</h5>
                        <h6>Mobile App</h6>
                    </a>
                    <a href="renew.html" class="thumb">
                        <img src="images/renew-thumb.jpg" alt="Renew Alberta Social Issue Campaign Webpage" width=300>
                        <h5>"renewAlberta"</h5>
                        <h6>Social Issue Campaign Webpage</h6>
                    </a>
                    <a href="tips.html" class="thumb">
                        <img src="images/tips-thumb1.jpg" alt="JavaScript Tip Calculator" width=300>
                        <h5>"Tip Calculator"</h5>
                        <h6>JavaScript Web App</h6>
                    </a>
                    <a href="swr.html" class="thumb">
                        <img src="images/swr-thumb.jpg" alt="Spirit Winds Ranch WordPress Website" width=300>
                        <h5>"Spirit Winds Ranch"</h5>
                        <h6>Non-profit Client WordPress Site</h6>
                    </a>
                    <a href="shang.html" class="thumb">
                        <img src="images/shang-thumb.jpg" alt="Shangri-La Resort WordPress Website" width=300>
                        <h5>"Shangri-La Resort"</h5>
                        <h6>WordPress Site</h6>
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
<script src="sidescroll.js"></script>
</body>

</html>