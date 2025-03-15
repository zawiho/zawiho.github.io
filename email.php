<?php 
    require('header.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form fields and remove whitespace
        $name = trim($_POST['name']);
        $company = trim($_POST['company']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        if($_POST['preference']=="preferE"){
            $preference="email";
        }else if($_POST['preference']=="preferP"){
            $preference="phone";
        }
        $message = trim($_POST['message']);
        
        // Set the recipient email address
        $to = 'hello@zacharyhowell.ca';
        
        // Set the email subject
        $subject = 'New message from '.$name;
        
        // Build the email content
        $email_content = "Name: $name\n";
        $email_content .= "Company: $company\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Preferred Contact Method: $preference\n";
        $email_content .= "Message:\n$message\n";
        
        // Build the email headers
        $headers = "From: web@zacharyhowell.ca\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        // Send the email
        mail($to, $subject, $email_content, $headers);
        
        // Redirect to a thank you page
        header('Location: thankyou.php');
    } else {
        // Not a POST request, redirect to homepage
        header('Location: index.php');
    }

    require('footer.php');
?>