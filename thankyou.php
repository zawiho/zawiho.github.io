<?php 
    $title="Message Received";
    $selected="main";
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

<main class="thanks">
    <h2>Message Received</h2>
    <p>Hey, thanks for reaching out! I am looking forward to seeing what we can create together! You will receive a reply from <span class="email">hello@zacharyhowell.ca</span> promptly.</p> 
    <p>In the meantime, why not check out more of my fantastic works?</p>

    <section id="featured" class="featured">
    <div id="thumbs" class="thumbs">
            <img id="thumb1" style="opacity:1;" src="images/dino-square.jpg">
            <img id="thumb2" style="opacity:1;" src="images/kitten-square.jpg">
            <img id="thumb3" style="opacity:1;" src="images/winds-square.jpg">
            <img id="thumb4" style="opacity:1;" src="images/courage1-square.jpg">
            <img id="thumb5" style="opacity:1;" src="images/renew-square.jpg">
            <img id="thumb6" style="opacity:1;" src="images/greenleaf-square.jpg">
        </div>
        <div class="slideshow">
            <a href="dino.php" id="hyperlink">
                <img src="images/dino.jpg" alt="Ancient Avians JavaScript Boardgame" id="displayedImage" width="750">
                <h4 id="slideCaption" class="hidden"></h4>
            </a>
        </div>
</section>
</main>

<script src="slides.js"></script>

<?php
    require('footer.php');
?>