<?php
    $title="Contact";
    $category="home";
    require('header.php');
?>

<div class="contact">
    <h2 class="contact-h2">Contact Me</h2>

    <p class="contact-p">If you like what you see and want to work together, you can fill out this form or email me directly at hello@zacharyhowell.ca</p>

    <form method="post" action="email.php" class="contact-form">
        
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="10" cols="80" required></textarea>
        

        <input type="submit" value="Let's Get In Touch!">
    </form>
</div>


<?php require('footer.php'); ?>