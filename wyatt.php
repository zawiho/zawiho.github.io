<?php
    $title="Wyatt C. Louis";
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
            <h2 class="showcase-h2">"Wyatt C. Louis"</h2>
            <h3 class="showcase-h3">Mini-Documentary</h3>
        </div>
        
        <div class="showcase">
            <div class="video">
                <video width="650" controls playsinline preload="metadata" poster="images/wyatt-cover.jpg">
                        <source src="video/wyatt.mp4">
                </video>
            </div>
            <div class="showcase-copy">
                <p>This was an assignment from my first semester in <abbr title="New Media Production and Design">NMPD</abbr> at <abbr title="Southern Alberta Institute of Technology">SAIT</abbr> which I recently reworked in order to improve the quality of the video footage, audio, and overall storytelling aspect using the knowledge and skills I have gained in the time since originally producing it. The video is a mini-documentary featuring a good friend of mine and local Calgary musician, Wyatt C. Louis.</p> 
                <p>For this project, I was in charge of writing the questions and conducting the interviews, as well as setting up cameras, lighting and audio equipment. I later compiled all of the clips and edited the video in Adobe Premiere Pro, strategically aligning b-roll over cuts and removing stops and stutters to make the dialogue flow more naturally.</p>
                <p>Major notable improvements over the original video include applying a warp stabilizer to interview footage to combat the constant adjustment of my phone camera's auto-focus, applying additional Lumetri styles to make the colours more dramatic, and remastering the audio for a better listening experience.</p>
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