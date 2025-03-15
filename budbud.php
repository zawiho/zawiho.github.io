<?php
    $title="Bud Bud Animation";
    $selected="main";
    $category="videography";
    $pagetype="project";
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
            <li id="third"  class="active-nav">
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
            <h2 class="showcase-h2">Bud Bud the Robotanist</h2>
            <h3 class="showcase-h3">Explainer Animation</h3>
        </div>
        
        <div class="showcase">
            <div class="video">
                <video width="650" controls playsinline preload="metadata" poster="images/budbud-cover.jpg">
                        <source src="video/budbud.mp4">
                </video>
            </div>
            <div class="showcase-copy">
            <p>This was my first foray into animating, and I am still pretty happy with the result. For this assignment, we were tasked with creating an explainer animation, 1 minute in length, for a fictional product or service. I chose to conceptualize a robot that can help people take care of their houseplants. I was responsible for all elements of this video including creating the storyboard, writing the script, creating and animating all of the assets, and recording voiceover and music. All of the assets were created in Adobe Illustrator and then animated in Adobe After Effects. I used a Zoom H2 Handy Recorder to record the voiceover and the music, which is my own composition.</p> 
            <p>A challenge I faced with this project was working within a time restraint of one minute. I made the mistake of animating certain scenes before recording the voiceover, and due to time constraints on the deadline, I had to speed up some of the audio in order to make everything fit.</p>
            </div>
        </div>
    </section>

    <section class="related-work">
            <h2 class="gallery-h3">Related Work</h2>
                <div class="related">
                    <div class="side-scroll">
                        <a href="courage1.php" class="thumb">
                            <img src="images/courage1-thumb.jpg" alt="Camp Courage Calgary Highlight Video #1" width=300>
                            <h5>"Camp Courage Calgary"</h5>
                            <h6>Highlight Video #1</h6>
                        </a>
                        <a href="courage2.php" class="thumb">
                            <img src="images/courage2-thumb.jpg" alt="Camp Courage Calgary Highlight Video #2" width=300>
                            <h5>"Camp Courage Calgary"</h5>
                            <h6>Highlight Video #2</h6>
                        </a>
                        <a href="tremolo.php" class="thumb">
                            <img src="images/tremolo-thumb.jpg" alt="Tremolo eLearning Guitar Course" width=300>
                            <h5>"Tremolo"</h5>
                            <h6>Guitar eLearning</h6>
                        </a>
                        <a href="kitten.php" class="thumb">
                            <img src="images/kitten-thumb.jpg" alt="Kitten is Angry Music Video" width=300>
                            <h5>"Kitten is Angry"</h5>
                            <h6>Music Video</h6>
                        </a>
                        <a href="wyatt.php" class="thumb">
                            <img src="images/wyatt-thumb.jpg" alt="Wyatt C. Louis Mini-Documentary" width=300>
                            <h5>"Wyatt C. Louis"</h5>
                            <h6>Mini-Documentary</h6>
                        </a>
                    </div>
                </div>
        </section>
</main>



<?php require('footer.php'); ?>