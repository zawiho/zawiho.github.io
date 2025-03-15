<?php
    $selected="main";
    $title="Portfolio";
    $category="home";
    require('header.php');
?>

<div class="nav-div2">
    <nav id="portfolioNav" class="cat-nav">
        <ul class="categories">
            <li id="first">
                <a href="webdev.php">Web Development</a>
            </li>
            <li id="second">
                <a href="illusmation.php">Illustration & Animation</a>
            </li>
            <li id="third">
                <a href="videography.php">Videography</a>
            </li>
        </ul>
    </nav>
    <nav id="aboutNav" class="cat-nav hidden">
        <ul>
            <li id="aboutLink">
                <a href="about.php">About Me</a>
            </li id="expLink">
            <li>
                <a href="about.php#expanchor">Work Experience</a>
            </li>
            <li id="contactLink">
                <a href="about.php#name">Contact</a>
            </li>
        </ul>
    </nav>    
</div>

<main class="project portfolio-main">
    <section class="web-gallery">
        <h2 class="gallery-h2" id="webH2">Web Development</h2>
            <div class="related related1">
                <div class="side-scroll">
                    <a href="dino.php" class="thumb">
                        <img src="images/dino-thumb.jpg" alt="Ancient Avians JavaScript Boardgame" width=300>
                        <h5>"Ancient Avians"</h5>
                        <h6>JavaScript Boardgame</h6>
                    </a>
                    <a href="greenleaf.php" class="thumb">
                        <img src="images/gl-thumb.jpg" alt="Greenleaf eCommerce Prototype Website" width=300>
                        <h5>"greenleaf"</h5>
                        <h6>eCommerce Prototype Website</h6>
                    </a>
                    <a href="renew.php" class="thumb">
                        <img src="images/renew-thumb.jpg" alt="Renew Alberta Social Issue Campaign Webpage" width=300>
                        <h5>"renewAlberta"</h5>
                        <h6>Social Issue Campaign Webpage</h6>
                    </a>
                    <a href="tips.php" class="thumb">
                        <img src="images/tips-thumb.jpg" alt="JavaScript Tip Calculator" width=300>
                        <h5>"Tip Calculator"</h5>
                        <h6>JavaScript Web App</h6>
                    </a>
                    <a href="swr.php" class="thumb">
                        <img src="images/swr-thumb.jpg" alt="Spirit Winds Ranch WordPress Website" width=300>
                        <h5>"Spirit Winds Ranch"</h5>
                        <h6>Non-profit Client WordPress Site</h6>
                    </a>
                    <a href="shang.php" class="thumb">
                        <img src="images/shang-thumb.jpg" alt="Shangri-La Resort WordPress Website" width=300>
                        <h5>"Shangri-La Resort"</h5>
                        <h6>WordPress Site</h6>
                    </a>
                </div>
            </div>
    </section>

    <section class="illus-gallery">
        <h2 class="gallery-h2" id="illH2">Illustration & Animation</h2>
            <div class="related  related2">
                <div class="side-scroll">
                    <a href="kitten.php" class="thumb">
                        <img src="images/kitten-thumb.jpg" alt="Kitten is Angry Music Video" width=300>
                        <h5>"Kitten is Angry"</h5>
                        <h6>Music Video</h6>
                    </a>
                    <a href="dino.php" class="thumb">
                        <img src="images/dino-thumb.jpg" alt="Ancient Avians JavaScript Boardgame" width=300>
                        <h5>"Ancient Avians"</h5>
                        <h6>JavaScript Boardgame</h6>
                    </a>
                    <a href="budbud.php" class="thumb">
                        <img src="images/budbud-thumb.jpg" alt="Bud Bud Explainer Animation" width=300>
                        <h5>"Bud Bud"</h5>
                        <h6>Explainer Animation</h6>
                    </a>
                </div>
            </div>
    </section>

    <section class="video-gallery">
        <h2 class="gallery-h2" id="vidH2">Videography</h2>
            <div class="related  related3">
                <div class="side-scroll">
                    <a href="courage1.php" class="thumb">
                        <img src="images/courage1-thumb.jpg" alt="Camp Courage Calgary Highlight Video #1" width=300>
                        <h5>"Camp Courage Calgary"</h5>
                        <h6>Highlight Video #1</h6>
                    </a>
                    <a href="courage2.php" class="thumb">
                        <img src="images/courage2-thumb.jpg" alt="Camp Courage Calgary Highlight Video #2" width=300>
                        <h5>"Camp Courage Calgary"</h5>
                        <h6>Highlight Video #2</h6>
                    </a>
                    <a href="tremolo.php" class="thumb">
                        <img src="images/tremolo-thumb.jpg" alt="Tremolo eLearning Guitar Course" width=300>
                        <h5>"Tremolo"</h5>
                        <h6>Guitar eLearning</h6>
                    </a>
                    <a href="kitten.php" class="thumb">
                        <img src="images/kitten-thumb.jpg" alt="Kitten is Angry Music Video" width=300>
                        <h5>"Kitten is Angry"</h5>
                        <h6>Music Video</h6>
                    </a>
                    <a href="wyatt.php" class="thumb">
                        <img src="images/wyatt-thumb.jpg" alt="Wyatt C. Louis Mini-Documentary" width=300>
                        <h5>"Wyatt C. Louis"</h5>
                        <h6>Mini-Documentary</h6>
                    </a>
                    <a href="budbud.php" class="thumb">
                        <img src="images/budbud-thumb.jpg" alt="Bud Bud Explainer Animation" width=300>
                        <h5>"Bud Bud"</h5>
                        <h6>Explainer Animation</h6>
                    </a>
                </div>
            </div>
    </section>
</main>

<script>
    const container1 = document.querySelector('.related1');

    container1.addEventListener('wheel', (event) => {
        event.preventDefault();
        container1.scrollLeft += event.deltaY;
    });
    const container2 = document.querySelector('.related2');

    container2.addEventListener('wheel', (event) => {
        event.preventDefault();
        container2.scrollLeft += event.deltaY;
    });
    const container3 = document.querySelector('.related3');

    container3.addEventListener('wheel', (event) => {
        event.preventDefault();
        container3.scrollLeft += event.deltaY;
    });
</script>

<?php require('footer.php'); ?>