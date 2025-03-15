<?php
    $title="Tip Calculator";
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
            <h2 class="showcase-h2">JavaScript Tip Calculator</h2>
            <h3 class="showcase-h3"><a href="https://zacharyhowell.ca/tips/" target="_blank">https://zacharyhowell.ca/tips/</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="https://zacharyhowell.ca/tips/" target="_blank"><img src="images/tips-dt.jpg" width="650" alt="JavaScript Tip Calculator website mockup"></a>
                <small>Image by <a href="https://www.pexels.com/photo/laptop-with-blank-screen- placed-on-table-6446709/" target="_blank">Pexels</a></small>
            </div>
            <div class="showcase-copy">
                <h4 class="showcase-h4">HTML | CSS | JavaScript</h4>
                <p>This is the second project I created using JavaScript as an assignment for my third semester of Web Communications at SAIT. This tool allows the user to input their bill total, tip amount, provincial tax rate, and the number of diners in order to split the total evenly when dining out.</p> 
                <p>During the previous semester of this course, I created a similar tool utilizing PHP for the functionality. In order to make the tool more user-friendly, I implemented some simple JavaScript to update the totals in real time based on user input, rather than requiring the user to press a button to calculate the results and view them on a new page.</p>
                <p>The biggest challenge I faced when creating this tool was writing the calculations and having JavaScript round the totals to their proper values. Through the use of external calculator apps, I was able to convert the values to work within the context of this tool. Then using valueAsNumber and toFixed properties, I was able to get JavaScript to output the totals rounded to their appropriate values.</p>
                <p>For the design of this page, I wanted to emulate the look of a paper receipt through the use of the body font and background image. I decided to invert the colours for the output values to make them very obvious on the page. As a little Easter egg and nod to my identity, I used the colours of the trans pride flag for the header and footer. The page has a responsive design in order to display well on mobile devices as well as larger screens.</p>
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