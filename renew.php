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
            <h2 class="showcase-h2">"renewAlberta" Social Issue Campaign</h2>
            <h3 class="showcase-h3"><a href="https://renewalberta.ca/" target="_blank">https://renewalberta.ca/</a></h3>
        </div>
        
        <div class="showcase">
            <div class="dt-mockup">
                <a href="https://renewalberta.ca/" target="_blank"><img src="images/renew-dt.jpg" width="650" alt="Renew Alberta social issue campaign webpage."></a>
                <small>Image by <a href="https://www.freepik.com/free-photo/programming-background-concept_38169919.htm#page=4&query=device%20mockup&position=11&from_view=search&track=ais" target="_blank">Freepik</a></small>
            </div>
            <div class="showcase-copy">
                <h4 class="showcase-h4">JavaScript | HTML | CSS</h4>
                <p>This was a group project for which we were tasked with deciding on a social issue and creating five pieces of media to spread the message of why this is a problem and what people can do to help combat it. My group chose the issue of Alberta being Canada's greatest contributor to greenhouse gas emissions and what changes we can implement to help reach the federal goal of reaching net-zero emissions by the year 2050.</p> 
                <p>The page was built with simple HTML and CSS, with JavaScript implemented to make a live countdown to Canada's net-zero goal, and an expanding accordion menu to show and hide the various works of media featured on the site.</p>
                <p>The site was buit based on wireframes created by my group member, Alina Lohutenko and features three other pieces of media created by Andrea Marquez, Juliette Wilson, and Max Williams.</p> 
                <p>I also created the logo for this campaign using Adobe Illustrator. It is a simple design depicting the sun setting behind the mountains as viewed from Alberta, with the negative space forming the letter A. The sun has a double meaning: because Alberta gets some of the most hours of daylight per year of anywhere in the world, solar is a fantastic renewable energy source Alberta could adopt as an alternative to fossil fuels. Also, as the sun sets on Alberta, so too does it set on our opportunity to act and prevent irreversible damage to our planet's natural environment.</p>
                <p>Along with the live countdown at the top of the page, the site features pieces of media by my group members. Each green bar can be clicked to reveal the corresponding media along with a short write-up describing each piece and how it fits into the renewAlberta campaign as a whole. This was my first experience building a site based on someone else's wireframes. It was a lot of fun to work with the designer to talk about what kinds of functionality we could include and to get her input as I was building the page itself.</p>
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