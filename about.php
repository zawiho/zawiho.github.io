<?php
    $title="About Me";
    $selected="main";
    $category="home";
    require('header.php');
?>

<div class="nav-div2">
    <nav id="portfolioNav" class="cat-nav hidden">
        <ul class="categories">
            <li id="first">
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
    <nav id="aboutNav" class="cat-nav">
        <ul>
            <li id="aboutLink">
                <a href="#">About Me</a>
            </li>
            <li id="expLink">
                <a href="#">Work Experience</a>
            </li>
            <li id="contactLink">
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>    
</div>

<main class="about" id="about">
<section class="bio-div">
    <div class="bio-img">
        <img src="images/zach-stairs.jpg" alt="An image of Zachary Howell sitting on a flight of stairs and smiling." width="321" class="profile" id="desktopPic">
        <img src="images/zach-squares.jpg" alt="An image of Zachary Howell sitting on a flight of stairs and smiling." class="round-crop" id="mobilePic">
    </div>
    <div class="bio-copy">
        <div class="intro">
            <h2>Hi!</h2>
            <p>My name is Zachary Howell (she/her) <span class="flag">🏳️‍⚧️</span></p>
        </div>
        
        <div class="bio">
            <p>I am a web developer and video producer from Calgary, Alberta, Canada, and recent graduate of New Media Production and Design (NMPD) at the Southern Alberta Institute of Technoloy (SAIT).</p> 
            
            <p>My strengths lie in <abbr title="User Interface">UI</abbr>/<abbr title="User Experience">UX</abbr> design, front-end and back-end web development, and video editing and animation. Here you will find examples of the recent web and video projects I have done during my time at <abbr title="Southern Alberta Institute of Technology">SAIT</abbr> as well as work I have done for various clients, including the Calgary Fire Department.</p>
    
            <p>Before joining the <abbr title="New Media Production and Design">NMPD</abbr> program, I had limited experience creating digital media of any kind. In my short time at SAIT, I have grown my skills in order to create the pieces you see before you, and I strive to see constant, rapid improvements as I continue to learn and practice. This very website was built from scratch by myself and serves as a testament to my knowledge and skill in web design and development.</p>
            <span id="expanchor"></span>
            
            <div class="contact-p">
                <p>If you like what you see and want to work together, you can fill out the form below, or email me directly at <span class="email">hello@zacharyhowell.ca</span></p>
                
                <img class="monogram" id="monogram" src="images/logo0.png" alt="Zachary Howell Monogram logo" width="100">
            </div>
        </div>
    </div>
</section>

<section class="experience" id="experience">
    <h2 class="experience-h2">Work Experience</h2>

    <div class="exp-1">
        <div class="exp-column">
            <h3>Assistant Video Design Specialist</h3>
            <p>
                <span class="workplace">Calgary Fire Department</span> 
                <br>
                <span class="exp-date">May 9<sup>th</sup>, 2022 - August 31<sup>st</sup>, 2022</span>
            </p>
            <figure>
                <figcaption>Primary Responsibilities:</figcaption>
                <ul>
                    <li>Assisting with studio and location-based production.</li>
                    <li>Supporting deployment, operation and maintenance of camera, audio, lighting and live-streaming equipment.</li>
                    <li>Archiving, ingesting, and synchronizing multi-camera video files.</li>
                    <li>Post-production editing in Adobe Premiere Pro.</li>
                    <li>Non-linear project setup and assembly of edits for review.</li>
                    <li>Providing technical services for virtual community education.</li>
                    <li>Collaborating with clients to bring their visions to life.</li>
                </ul>
            </figure>

        </div>
        <div class="exp-column">
            <p>This was a four-month contract completed with the Calgary Fire Department. During my time in this position, under the tutelage of Karl Leung, I learned how to operate various broadcast-standard cameras including Sony Z90 and Sony FS7, how to archive and manage digital footage, and how to compile and edit clips for review using Adobe Premiere Pro.</p>

            <p>I was responsible for managing weekly broadcasts for internal communication within Calgary Fire, filming and editing highlights videos for notable events including Camp Courage Calgary 2022, and travelling to various fire stations to record interviews with their respective crews and the fire chief for internal distribution.</p>

            <p>A selection of these videos are available for viewing in my portfolio.</p>
        </div>
    </div>

    <div class="exp-2">
        <div class="exp-column">
            <h3>Website Manager</h3>
            <p>
                <span class="workplace">Delcaro Media</span> 
                <br>
                <span class="exp-date">February 14<sup>th</sup>, 2023 - April 28<sup>th</sup>, 2023</span>
            </p>
            <figure>
                <figcaption>Primary Responsibilities:</figcaption>
                <ul>
                    <li>Building websites using CMS services such as Wix and WordPress.</li>
                    <li>Using Bing Webmaster to perform <abbr title="Search Engine Optimization">SEO</abbr> scans on client websites and correcting any errors and warnings that arise.</li>
                    <li>Restructuring client websites for better SEO to help their sites appear higher in search engine queries.</li>
                    <li>Creating mock-ups for site redesigns to present to the client with the goal of improving user experience.</li>
                    <li>Migrating client websites between hosting services.</li>
                </ul>
            </figure>

        </div>
        <div class="exp-column">
            <p>During my time in NMPD, I completed my practicum with Jon Delcaro who runs Delcaro Media out of Kitchener, BC. Jon taught me a lot about Search Engine Optimization (SEO) including how to use Bing Webmaster and Google Analytics to perform scans on one's hosted sites to check for any warnings or errors that may prevent or discourage search engines from indexing them.</p>

            <p>I was responsible for performing scans on over 20 websites and editing them in their respective back-ends to correct any of these errors. I also used Wix to reconstruct one client's website which was originally built in WordPress. Additionally, I used Figma to create a website mock-up to conceptualize a merged website incorporating two of a client's websites into one cohesive piece.</p>
        </div>
    </div>
</section>


<section class="contact" id="contact">
    <h2 class="contact-h2">Contact Me</h2>

    <p class="contact-copy">If you like what you see and want to work together, you can fill out this form or email me directly at <span class="email">hello@zacharyhowell.ca</span></p>

    <form method="post" action="email.php" class="contact-form">
        <fieldset class="personal-info">
            <legend>Personal Info</legend>
            <div>
                <label for="name">Your Name:</label>
                <input type="text" name="name" id="name" required>
        
                <label for="company">Company:</label>
                <input type="text" name="company" id="company">
        
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone">
                
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
    
            <p>Preferred Contact Method:</p>
            <input type="radio" name="preference" id="preferE" value="preferE"><label for="preferE">Email</label>
            <input type="radio" name="preference" id="preferP" value="preferP"><label for="preferP">Phone</label>
        </fieldset>

        <fieldset>
            <legend>Your Message</legend>
            <textarea name="message" id="message" rows="10" cols="60" required></textarea>
        </fieldset>       

        <input type="submit" id="contactSubmit" value="Let's Get In Touch!">
    </form>
</section>

<script src="anchors.js"></script>
<script> 
    let width=screen.width;
    let columns=width/8.9;

    if (navigator.userAgent.match(/Android/i)
         || navigator.userAgent.match(/webOS/i)
         || navigator.userAgent.match(/iPhone/i)
         || navigator.userAgent.match(/iPad/i)
         || navigator.userAgent.match(/iPod/i)
         || navigator.userAgent.match(/BlackBerry/i)
         || navigator.userAgent.match(/Windows Phone/i)){
            (function mobileTextArea(){
                document.querySelector('#message').cols=columns;
            })();
         }
</script>

<?php require('footer.php'); ?>