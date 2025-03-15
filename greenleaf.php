<?php
    $title="Greenleaf";
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
            <h2 class="showcase-h2">"Greenleaf" eCommerce Website</h2>
            <h3 class="showcase-h3"><a href="https://zacharyhowell.ca/greenleaf/" target="_blank">https://zacharyhowell.ca/greenleaf/</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="https://zacharyhowell.ca/greenleaf/" target="_blank"><img src="images/gl-dt.jpg" width="650" alt="greenleaf eCommerce store mockup"></a>
                <small>Image by <a href="https://www.pexels.com/photo/laptop-with-blank-screen- placed-on-table-6446709/" target="_blank">Pexels</a></small>
            </div>
            <h4 class="showcase-h4">HTML | CSS | PHP | MySQL</h4>
            <p>This was the final project for my second semester of Web Communications at SAIT. For this assignment, we were given the option of a number of different shop types to choose from in order to create an eCommerce website. After making our decision, it was up to us to photograph a minimum of twenty products to feature in the store. We were then given a logo, fonts, and brand colours that we could not alter in any way with which to style the website.</p>
            <p>The biggest challenge I faced when creating this site was implementing the functionality of the shopping cart. By storing the product values in an array and imploding that into a session, I was able to pass the information along to the proper page and only have the session cleared once the customers completes their checkout.</p> 
            <p>With often unfavourable colour schemes, it took a lot of patience and experimentation to settle on a presentation I was happy with. Additionally, we had a size limit of 300 KB for most of the pages. With this site being very image-heavy, it was a challenge to optimize the photos in order to come in under that size limit while maintaining the highest possible image quality.</p>
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