<?php
    $title="Ancient Avians";
    $selected="main";
    $category="webdev";
    $pagetype="project";
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

<main class="project">
    <section class="case-study">
        <div class="showcase-heading">
            <h2 class="showcase-h2">"Ancient Avians" JS Boardgame</h2>
            <h3 class="showcase-h3"><a href="https://zacharyhowell.ca/dinogame/" target="_blank">https://zacharyhowell.ca/dinogame/</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="https://zacharyhowell.ca/dinogame/" target="_blank"><img src="images/dino-dt.jpg" width="650" alt="Ancient Avians JavaScript Boardgame mockup"></a>
                <small>Image by <a href="https://www.pexels.com/photo/laptop-with-blank-screen- placed-on-table-6446709/" target="_blank">Pexels</a></small>
            </div>
            <div class="showcase-copy">
                <h4 class="showcase-h4">JavaScript | HTML | CSS</h4>
                <p>Ancient Avians is a web app designed and developed entirely by myself. This is my largest project to date, with a combined 100 hours creating all of the visuals plus writing and testing the code to make it functional. The game itself was a fun, goofy way to excercise my existing coding and design abilities while also to improve my skills in JavaScript and learn more about how to implement the language into front-end development and design.</p> 
                <p>There were three major areas of functionality I needed tho achieve in order to bring this whole project together, those being: player movement, equipment mechanics, and battle mechanics.</p> 
                <p>The first of which was relatively easy to implement through the use of JS event listeners and CSS positioning, while the latter two involved variables and a decent amout of maths, which turned out to be more complicated than I had originally anticipated.</p>
                <p>Achieving the functionality of having an equipment piece's stats apply to the player's when equipped, but also having these stats be replaceable later down the line proved to be more challenging than expected. In the end, it was just a matter of setting a whole bunch of variables, but it took a lot of thinking to get to that point, and I'm still convinced there's a way to do it that involves fewer lines of code.</p>
                <p>The battle mechanics were another tricky element of this project to nail. The maths in this script didn't give me nearly as much trouble as the equipment segment did, but the procedure of the battles sure proved to be quite uncooperative. There are many events that need to happen every time the player hits the “Attack” button, and these need to happen in a different order depending on who has the higher speed stat, the player or their enemy. This was not as simple to solve as it may sound.</p>
            </div>
        </div>
    </section>
    
    <section class="related-work">
        <h2 class="gallery-h3">Related Work</h2>
            <div class="related">
                <div class="side-scroll">
                    <a href="greenleaf.php" class="thumb">
                        <img src="images/gl-thumb.jpg" alt="Greenleaf eCommerce Prototype Website" width=300>
                        <h5>"greenleaf"</h5>
                        <h6>eCommerce Prototype Website</h6>
                    </a>
                    <a href="btwd.php" class="thumb">
                        <img src="images/btwd-thumb.jpg" alt="Bike to Work Day mobile app" width=300>
                        <h5>"Bike to Work Day"</h5>
                        <h6>Mobile App</h6>
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
</main>

<?php require('footer.php'); ?>