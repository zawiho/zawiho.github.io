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
            <h2 class="showcase-h2">Camp Courage Highlight Video #1</h2>
            <h3 class="showcase-h3">Client: Calgary Fire Department</h3>
        </div>
        <div class="showcase">
            <div class="video">
                <video width="650" controls playsinline preload="metadata" poster="images/courage1-cover.jpg">
                        <source src="video/courage1.mp4">
                </video>
            </div>
            <div class="showcase-copy">
                <p>This is a video that I filmed, edited and produced for the 2022 edition of Camp Courage Calgary, a summer camp for girls aged 16-18 who are considering careers in tri-services. The camp lasts for 7 days and gives the participants the opportunity to experience what it is like to train to become a police officer, a firefighter, and an <abbr title="Emergency Medical Technician">EMT</abbr>. I filmed the b-roll for this video on a Sony Z90, while my mentor, Karl Leung, filmed the interviews on a Sony FS7.</p>        
                <p>This was the most self-directed project I completed during my time with Calgary Fire. After spending a week filming the camp's paricipants, I compiled and edited the footage into a highlight reel documenting the value of this camp not only to the participants, but also the lives of the countless people they will end up helping in the future.</p> 
                <p>This project was completed with very little intervention from my superior, and shortly thereafter approved for distribution within Calgary Fire's internal network. This being the second Camp Courage video I produced, the biggest challenge was finding b-roll to accompany the story being told that had not already been used in the first video. </p>
                <p>Music: <a href="https://app.soundstripe.com/songs/14450" target="_blank">"Let Your Love" by Abel</a> acquired from Soundstripe under the Pro license.</p>
            </div>
        </div>
    </section>

    <section class="related-work">
        <h2 class="gallery-h3">Related Work</h2>
            <div class="related">
                <div class="side-scroll">
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