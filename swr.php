<?php
    $title="Spirit Winds Ranch";
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
            <h2 class="showcase-h2">Spirit Winds Ranch Non-Profit Client Site</h2>
            <h3 class="showcase-h3"><a href="https://spiritwindsranch.ca/" target="_blank">https://spiritwindsranch.ca/</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="https://spiritwindsranch.ca/" target="_blank"><img src="images/swr-dt.jpg" width="650" alt="JavaScript Tip Calculator website mockup"></a>
                <small>Image by <a href="https://www.freepik.com/free-photo/programming-background-concept_38169919.htm#page=4&query=device%20mockup&position=11&from_view=search&track=ais" target="_blank">Freepik</a></small>
            </div>
            <div class="showcase-copy">
                <h4 class="showcase-h4">HTML | CSS | PHP</h4>
                <p>This was the first website I ever worked on for a real-world client as part of my final semester of <abbr title="New Media Production & Design">NMPD</abbr>. As part of a group, we were tasked with finding a not-for-profit organization who would benefit from our help. We chose to work with Spirit Winds Ranch for a number of reasons, though mainly because we all believe in their vision for the healing power of horses, and animals in general.</p> 
                <p>Spirit Winds has a WordPress site that was in dire need of an update to bring it into the modern era. Due to the experience between myself and my one of my group members, we were confident we could provide them with the user-experience overhaul they deserved. </p> 
                <p>Working from the designs and wireframes created by another group member, my web partner and I built a custom WordPress theme for our client. I was responsible for enabling a number of features in the functions.php file, including menus, widgets, custom JavaScript and of course the theme itself.</p>
                <div class="list-div">
                    <p>I also used the Gutenberg Editor in the WordPress back-end to fill content and create the layouts for the following pages and their respective sub-pages:</p>
                    <ul>
                        <li><a href="https://spiritwindsranch.ca/index.php/about-us/" target="_blank">About Us</a></li>
                        <li><a href="https://spiritwindsranch.ca/index.php/our-horses/" target="_blank">Our Horses</a></li>
                        <li><a href="https://spiritwindsranch.ca/index.php/contact/" target="_blank">Contact</a></li>
                    </ul>
                </div> 
            </div>
        </div>
    </section>
    
    <section class="related-work">
        <h2 class="gallery-h3">Related Work</h2>
            <div class="related">
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