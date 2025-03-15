<?php
    $selected="main";
    $title="Illustration & Animation";
    $category="illusmation";
    require('header.php');
?>

<div class="nav-div2">
    <nav id="portfolioNav" class="cat-nav">
        <ul class="categories">
            <li id="first">
                <a href="webdev.php">Web Development</a>
            </li>
            <li id="second" class="active-nav">
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

<main class="gallery">
    <!-- <h3 class="gallery-h3">Schoolwork</h3> -->
    <section class="thumbnails">
        <a href="kitten.php" class="thumb">
            <img src="images/kitten-thumb.jpg" alt="Kitten is Angry Music Video" width=300>
            <h4>"Kitten is Angry"<br><span>Music Video</span></h4>
            <h5>Animator / Editor / Star</h5>
        </a>
        <a href="dino.php" class="thumb">
            <img src="images/dino-thumb.jpg" alt="Ancient Avians JavaScript Boardgame" width=300>
            <h4>"Ancient Avians"<br><span>JavaScript Boardgame</span></h4>
            <h5>Designer / Illustrator / Programmer</h5>
        </a>
        <a href="budbud.php" class="thumb">
            <img src="images/budbud-thumb.jpg" alt="Bud Bud Explainer Animation" width=300>
            <h4>"Bud Bud"<br><span>Explainer Animation</span></h4>
            <h5>Writer / Animator / Voiceover</h5>
        </a>
    </section>
</main>

<?php require('footer.php'); ?>