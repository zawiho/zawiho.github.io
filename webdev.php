<?php
    $selected="main";
    $title="Web Development";
    $category="webdev";
    require('header.php');
?>

<div class="nav-div2">
    <nav id="portfolioNav" class="cat-nav">
        <ul class="categories">
            <li id="first" class="active-nav">
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

<main class="gallery">
    <!-- <h3 class="gallery-h3">Schoolwork</h3> -->
    <div class="thumbnails">
        <a href="dino.php" class="thumb">
            <img src="images/dino-thumb.jpg" alt="Ancient Avians JavaScript Boardgame" width=300>
            <h4>"Ancient Avians"</h4>
            <h5>JavaScript Boardgame</h5>
        </a>
        <a href="swr.php" class="thumb">
            <img src="images/swr-thumb.jpg" alt="Spirit Winds Ranch WordPress Website" width=300>
            <h4>"Spirit Winds Ranch"</h4>
            <h5>Non-profit Client WordPress Site</h5>
        </a>
        <a href="greenleaf.php" class="thumb">
            <img src="images/gl-thumb.jpg" alt="eCommerce Prototype Website" width=300>
            <h4>"greenleaf"</h4>
            <h5>eCommerce Prototype Website</h5>
        </a>
        <a href="renew.php" class="thumb">
            <img src="images/renew-thumb.jpg" alt="Renew Alberta Social Issue Campaign Webpage" width=300>
            <h4>"renewAlberta"</h4>
            <h5>Social Issue Campaign Webpage</h5>
        </a>
        <a href="btwd.php" class="thumb">
            <img src="images/btwd-thumb.jpg" alt="Bike to Work Day mobile app" width=300>
            <h4>"Bike to Work Day"</h4>
            <h5>Mobile App / Interactive SVG Map</h5>
        </a>
        <a href="shang.php" class="thumb">
            <img src="images/shang-thumb.jpg" alt="Shangri-La Resort WordPress Website" width=300>
            <h4>"Shangri-La Resort"</h4>
            <h5>WordPress Site</h5>
        </a>
        <a href="tips.php" class="thumb">
            <img src="images/tips-thumb.jpg" alt="JavaScript Tip Calculator" width=300>
            <h4>"Tip Calculator"</h4>
            <h5>JavaScript Web App</h5>
        </a>
        
    </div>
</main>

<?php require('footer.php'); ?>