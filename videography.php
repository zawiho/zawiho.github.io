<?php
$selected="main";
    $title="Videography";
    $category="videography";
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
            <li id="third" class="active-nav">
                <a href="videography.php">Videography</a>
            </li>
        </ul>
    </nav>
    <nav id="aboutNav" class="cat-nav hidden">
        <ul>
            <li>
                <a href="about.php" id="aboutLink">About Me</a>
            </li>
            <li>
                <a href="about.php#expanchor" id="expLink">Work Experience</a>
            </li>
            <li>
                <a href="about.php#name" id="contactLink">Contact</a>
            </li>
        </ul>
    </nav>    
</div>

<main class="gallery">
    <section class="thumbnails video-gal">
        <a href="courage1.php" class="thumb">
            <img src="images/courage1-thumb.jpg" alt="Camp Courage Calgary Highlight Video #1" width=300>
            <h4>"Camp Courage Calgary"<br><span>Highlight Video #1</span></h4>
            <h5>Camera Operator / Editor / Producer</h5>
        </a>
        <a href="courage2.php" class="thumb">
            <img src="images/courage2-thumb.jpg" alt="Camp Courage Calgary Highlight Video #2" width=300>
            <h4>"Camp Courage Calgary"<br><span>Highlight Video #2</span></h4>
            <h5>Camera Operator / Editor / Producer</h5>
        </a>
        <a href="tremolo.php" class="thumb">
            <img src="images/tremolo-thumb.jpg" alt="Tremolo eLearning Guitar Course" width=300>
            <h4>"Tremolo"<br><span>Guitar eLearning</span></h4>
            <h5>Camera Operator / Editor / Host</h5>
        </a>
        <a href="kitten.php" class="thumb">
            <img src="images/kitten-thumb.jpg" alt="Kitten is Angry Music Video" width=300>
            <h4>"Kitten is Angry"<br><span>Music Video</span></h4>
            <h5>Animator / Editor / Star</h5>
        </a>
        <a href="wyatt.php" class="thumb">
            <img src="images/wyatt-thumb.jpg" alt="Wyatt C. Louis Mini-Documentary" width=300>
            <h4>"Wyatt C. Louis"<br><span>Mini-Documentary</span></h4>
            <h5>Editor / Producer / Interviewer</h5>
        </a>
        <a href="budbud.php" class="thumb">
            <img src="images/budbud-thumb.jpg" alt="Bud Bud Explainer Animation" width=300>
            <h4>"Bud Bud"<br><span>Explainer Animation</span></h4>
            <h5>Writer / Animator / Voiceover</h5>
        </a>
    </section>
</main>

<?php require('footer.php'); ?>