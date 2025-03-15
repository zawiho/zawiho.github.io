<?php
    $title="Kitten is Angry";
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
        <section class="showcase-heading">
            <h2 class="showcase-h2">"Kitten is Angry"</h2> 
            <h3 class="showcase-h3">Music Video</h3>
        </section>
        
        <div class="showcase">
            <div class="video">
                <video width="650" controls playsinline preload="metadata" poster="images/kitten-cover.jpg">
                        <source src="video/kitten.mp4">
                </video>
            </div>
            <div class="showcase-copy">
                <p>This is the most recent video project I completed for my Rich Media Communications course for <abbr title="New Media Production and Design">NMPD</abbr> at <abbr title="Southern Alberta Institute of Technology">SAIT</abbr>. The assigment required us to composite animation over live-action footage to make the animation look like it is interacting with the real world it has been composited onto. I wrote the script and storyboard for this project based on the lyrics to the song "Kitten is Angry" by Lemon Demon. A classmate of mine filmed all of the footage. I then created all of the visual assets in Adobe Illustrator and animated them using Adobe After Effects.</p> 
                <p>The biggest challenge with this project was compositing the cat over its placeholder in the final scene, which unfortunately was not completely covered up due to the varying proportions between the placeholder and the animated cat. Another challenge was starring in the video, as I generally perfer to be behind the camera. </p>
                <p>Music: <a href="http://www.lemondemon.com/Lemon%20Demon%20-%20First%20four%20albums/Damn%20Skippy%20(2005)/08%20-%20Kitten%20Is%20Angry.mp3" target="_blank">"Kitten is Angry" by Lemon Demon</a> used with permission from the artist.</p>
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
                        <a href="wyatt.php" class="thumb">
                            <img src="images/wyatt-thumb.jpg" alt="Wyatt C. Louis Mini-Documentary" width=300>
                            <h5>"Wyatt C. Louis"</h5>
                            <h6>Mini-Documentary</h6>
                        </a>
                        <a href="budbud.php" class="thumb">
                            <img src="images/budbud-thumb.jpg" alt="Bud Bud Explainer Animation" width=300>
                            <h5>"Bud Bud"</h5>
                            <h6>Explainer Animation</h6>
                        </a>
                    </div>
                </div>
        </section>
</main>



<?php require('footer.php'); ?>