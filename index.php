<?php
    $selected="main";
    $title="Hello";
    $category="home";
    require('header.php');
?>

<div id="catNav" class="nav-div2  hidden">
    <nav id="portfolioNav" class="cat-nav">
        <ul class="categories">
            <li id="portFirst" <?php if($currentpage=="webdev.php" || $selected=="web"){echo 'class=active-nav';}?>>
                <a href="webdev.php">Web Development</a>
            </li>
            <li id="portSecond" <?php if($currentpage=="photo.php" || $selected=="ill"){echo 'class=active-nav';}?>>
                <a href="illusmation.php">Illustration & Animation</a>
            </li>
            <li id="portThird" <?php if($currentpage=="videography.php" || $selected=="vid"){echo 'class=active-nav';}?>>
                <a href="videography.php">Videography</a>
            </li>
        </ul>
    </nav>
    <nav id="aboutNav" class="cat-nav hidden">
        <ul>
            <li><a href="about.php">About Me</a></li>
            <li><a href="about.php#expanchor">Work Experience</a></li>
            <li><a href="about.php#name">Contact</a></li>
        </ul>
    </nav>    
</div>

<main class="home">
<section class="hi">
    <img src="images/zach-squares.jpg" alt="An image of Zachary Howell sitting on a flight of stairs and smiling." class="round-crop" id="helloImg">
    <h2 id="hello">Hi!</h2>
    <p id="helloP">I'm Zachary (she/her) 🏳️‍⚧️
        <br>
        a web developer and video producer 
        <br>
        from Calgary, Alberta, Canada 
        <br>
        and this is my portfolio.</p>
</section>

<section id="skills" class="skills">
    <h3 id="skillsH3"></h3>
    
    <nav id="homeNav" class="hidden cat-nav">
        <ul class="categories">
            <li id="first">
                <a href="webdev.php">Web Development</a>
            </li>
            <li id="second">
                <a id="secondLink" href="illusmation.php">Illustration & Animation</a>
            </li>
            <li id="third">
                <a href="videography.php">Videography</a>
            </li>
        </ul>
    </nav>
</section>

<section id="clients" class="hidden clients">
    <h3 id="clientsH3">Clients I've worked with...</h3>
    <div id="clientGrid" class="client-grid">
        <div id="spiritWinds" class="client-div">
            <img src="images/swr.jpg" width="270" alt="The Spirit Winds Ranch logo over a photo of the welcome sign at the ranch">
            <h4>Spirit Winds Ranch</h4>
            <h5>Web Development</h5>
        </div>

        <div id="hiveYYC" class="client-div">
            <img src="images/hive.jpg" width="270" alt="The Hive YYC logo">
            <h4>The Hive YYC</h4>
            <h5>Web Development</h5>
        </div>

        <div id="fireDept" class="client-div">
            <img src="images/cfd.jpg" width="270" alt="The Calgary Fire logo over a photo of an antique frietruck">
            <h4>Calgary Fire Dept.</h4>
            <h5>Videography</h5>
        </div>
    </div>
</section>

<section id="featured" class="hidden featured">
    <h3 id="featuredH3">And these are a few of my masterpieces...</h3>
    <div id="thumbs" class="thumbs">
            <img id="thumb1" src="images/dino-square.jpg">
            <img id="thumb2" src="images/kitten-square.jpg">
            <img id="thumb3" src="images/winds-square.jpg">
            <img id="thumb4" src="images/courage1-square.jpg">
            <img id="thumb5" src="images/renew-square.jpg">
            <img id="thumb6" src="images/greenleaf-square.jpg">
        </div>
        <div id="slideshow" class="slideshow">
            <a href="kitten.php" id="hyperlink">
                <img src="" alt="" id="displayedImage" width="750">
                <h4 id="slideCaption" class="hidden"></h4>
            </a>
        </div>
</section>

<script src="home.js"></script>
<script src="slides.js"></script>

<?php require('footer.php'); ?>