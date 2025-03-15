<?php
    $title="Bike to Work Day";
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
            <h2 class="showcase-h2">Bike to Work Day Mobile App</h2>
            <h3 class="showcase-h3"><a href="http://zacharyhowell.ca/proj309/map.php" target="_blank">https://zacharyhowell.ca/proj309/</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="http://zacharyhowell.ca/proj309/map.php" target="_blank"><img src="images/btwd-mob.jpg" width="650" alt="Bike to Work Day mobile app mock-up"></a>
                <small>Image by <a href="https://www.freepik.com/free-photo/peach-colored-flower-head-cellphone-wooden-shutter-backdrop_3465310.htm#page=2&query=mockup%20phone&position=11&from_view=search&track=ais" target="_blank">Freepik</a></small>
            </div>
            <div class="showcase-copy">
                <h4 class="showcase-h4">JavaScript | HTML | CSS</h4>
                <p>This was a group project for which we conceptualized a mobile app for Bike to Work Day Calgary. As a group, we noticed that the only map on the event's website was a screenshot from Google maps with pins on each of the event locations, so we decided an interactive, mobile-friendly map would make for a much better user experience for attendees of the event.</p> 
                <p>For this project, I was responsible for coding half of the app's individual pages, most significant of which was the interactive map itself. Using the SVG map created by my lovely group member Grace Calhoun, and icons created by my equally lovely group member Danielle Dunlop, I programmed an interactive webpage to highlight all of the pit-stops and their respective routes from the event's home base, as well as routes to the home base from various areas around the outskirts of Calgary. </p> 
                <p>This was a significant learning experience for me, as I had minimal experience working with SVGs in HTML, and I had never implemented interactivity using JavaScript. After countless hours of research and viewing online tutorials, I was finally able to get the map (mostly) working how I wanted it. I was unfortunately unable to implement a two-finger zoom in the timespan of the project, though this is a feature I intend to revisit in the near future.</p>
                <p>Touching the icon in the bottom right of the map will bring up the legend. From here you can tap "Home Base" or "Pit Stops" to bring up the respective routes for these locations. Additionally, touching any pit stop icon on the map will also reveal the pit top's route, as well as additional information to guide the user on the day of the event.</p>    
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