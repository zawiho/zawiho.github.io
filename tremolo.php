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
            <h2 class="showcase-h2">Tremolo Guitar Lessons</h2>
            <h3 class="showcase-h3">eLearning Course</h3>
        </div>
        
        <div class="showcase">
            <div class="video">
                <video id="vid" width="650" controls playsinline preload="metadata" poster="images/tremolo-cover.jpg">
                        <source src="video/tremolo/4-3.mp4">
                </video>
            </div>
            <div class="showcase-copy">
                <p>This video is just one of twenty that I produced for a group project which tasked us with building an eLearning course. Because of my previous experience as a guitar teacher, and my video production expertise, my group decided to make a course for beginners looking to learn how to play the guitar. Along with producing the videos, I was also responsible for constructing the lesson plan and writing some simple JavaScript to implement an automatic pause functionality on certain videos that prompt the student to take some time to practice their newfound knowledge.</p>
                <p>This video was filmed on three separate cameras simultaneously while I served as not only the host, but also operator of the cameras plus two audio recording devices as well.</p> <p>So many challenges arose from the situation, but I believe it allowed me to mitigate the anxiety that came from recording with someone else in the room. For one, the majority of the equipment used was rented from SAIT, and the memory cards provided were only 8GB in size, which meant they filled up very fast. Not only that, but the cameras have a recording limit of about 12 minutes, so there were frequent stops to check if they were stil recording as well as to ingest the footage to make room for new clips. And then there were the inevitable instances where I forgot to hit record on at least one of the devices. I won't even hazard a guess how many times this happened - I don't even want to think about it anymore.</p>
                <p>You can view the entire course here: <a href="https://tremolo-382318.wl.r.appspot.com/" target="_blank">https://tremolo-382318.wl.r.appspot.com/</a></p> 
                <p>Please be aware that a login is required in order to view the course (not my decision.)<br> You can either create a new account or use the following credentials:</p>
                <ul class="credentials">
                    <li><span>Username:</span> zach</li>
                    <li><span>Password:</span> whytho</li>
                </ul>
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

<script>
    vid.addEventListener('timeupdate',function(){
        let num=vid.currentTime;
        let time=Math.round(num*100)/100;
        console.log(time);
        if(time>=98.05&&time<=98.8){
            vid.pause();
        }
        if(time>=141.5&&time<=142.25){
            vid.pause();
        }
    })
    vid.addEventListener('play',function(){
        let num=vid.currentTime;
        let time=Math.round(num*100)/100;
        if(time>=98.05&&time<=98.8){
                vid.currentTime=98.81;
        }
        if(time>=141.5&&time<=142.25){
            vid.currentTime=142.26;
        }
    }) 
</script>

<?php require('footer.php'); ?>