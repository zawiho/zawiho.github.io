<?php
    $title="Shangri-La Resort";
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
            <h2 class="showcase-h2">Shangri-La Resort WordPress Theme</h2>
            <h3 class="showcase-h3"><a href="http://zacharyhowell.ca/shangrila/" target="_blank">https://zacharyhowell.ca/shangrila</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="http://zacharyhowell.ca/shangrila/" target="_blank"><img src="images/shang-dt.jpg" width="650" alt="Shangri-La Resort website mockup"></a>
                <small>Image by <a href="https://www.freepik.com/free-photo/programming-background-concept_38169919.htm#page=4&query=device%20mockup&position=11&from_view=search&track=ais" target="_blank">Freepik</a></small>
            </div>
            <div class="showcase-copy">
                <h4 class="showcase-h4">HTML | CSS | PHP</h4>
                <p>Building the theme for this site was my first experience working with WordPress. This being the final project for my Web Communications III course, I was provided with the content and given a list of tasks to accomplish in order to give the site a fresh, new look and a more user-friendly design.</p> 
                <p>Through the use of PHP, I created my own custom WordPress theme for the site, incorporating menus, widgets, blog posts and more. I decided to incorporate a fixed nav at the side of the page in order to always have the reservation link handy for the user, as well as a search bar along with the resort's latest news and social media links. </p> 
                <p></p>
                <p></p>  
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
                    <a href="swr.php" class="thumb">
                        <img src="images/swr-thumb.jpg" alt="Spirit Winds Ranch WordPress Website" width=300>
                        <h5>"Spirit Winds Ranch"</h5>
                        <h6>Non-profit Client WordPress Site</h6>
                    </a>
                </div>
            </div>
    </section>
</main>

<?php require('footer.php'); ?>