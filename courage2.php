<?php
    $title="Camp Courage";
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
            <h2 class="showcase-h2">Camp Courage Highlight Video #2</h2>
            <h3 class="showcase-h3">Client: Calgary Fire Department</h3>
        </div>
        <div class="showcase">
            <div class="video">
                <video width="650" controls playsinline preload="metadata" poster="images/courage2-cover.jpg">
                        <source src="video/courage2.mp4">
                </video>
            </div>
            <div class="showcase-copy">
                <p>This is a video that I filmed, edited and produced for the 2022 edition of Camp Courage Calgary, a summer camp for girls aged 16-18 who are considering careers in tri-services. The camp lasts for 7 days and gives the participants the opportunity to experience what it is like to train to become a police officer, a firefighter, and an EMT. I filmed the majority of this video on a Sony Z90, while my mentor, Karl Leung, filmed the interviews on a Sony FS7.
                <p> This video was primarily produced by myself with regular check-ins from my mentor. The goal for this video was to feature all of the participants as equally as possible while highlighting the activities they partook in throughout the week-long camp. The biggest challenge I faced while producing this video was achieving the goal of featuring everyone equally. With a printed list of all the participants beside me, I kept a tally of how many times each girl showed up prominently in the video and made continous adjustments until I, my superior, and the client were all happy with the finished product.</p>
                <!-- <p>Another challenge was working with interview footage from subjects who had never been interviewed on camera before. It took a lot of editing to arrange their phrases in such a way that communicates a clear story to the audience while ensuring the speech patterns still sounded natural and coherent.</p> -->
                <p>Music: <a href="https://app.soundstripe.com/songs/12622" target="_blank">"Astrid" by Elision</a> acquired from Soundstripe under the Pro license.</p>
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