<?php

    session_start();
    // if(isset($_POST['btn-send']))
    // {
    //     $name = $_POST['name'];
    //     $subject = $_POST['subject'];
    //     $mailFrom = $_POST['mail'];
    //     $message = $_POST['message'];

    //     $mailTo = "Owenquinn247@hotmail.com";
    //     $headers = "From: ".$mailFrom;
    //     $txt = "You have received an email from ". $name.".\n\n".$message;

    //     mail($mailTo, $subject, $txt, $headers);
    //     header("Location: index.php?mailsend#contact");
    // }
    
    $error = '';
    $name = '';
    $subject = '';
    $email = '';
    $message = '';

    function clean_text($string)
    {
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
    }

    if(isset($_POST["submit"]))
    {
    if(empty($_POST["name"]))
    {
    $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
    }
    else
    {
    $name = clean_text($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
    $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
    }
    }
    if(empty($_POST["email"]))
    {
    $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
    }
    else
    {
    $email = clean_text($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
    $error .= '<p><label class="text-danger">Invalid email format</label></p>';
    }
    }
    if(empty($_POST["subject"]))
    {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
    }
    else
    {
    $subject = clean_text($_POST["subject"]);
    }
    if(empty($_POST["message"]))
    {
    $error .= '<p><label class="text-danger">Message is required</label></p>';
    }
    else
    {
    $message = clean_text($_POST["message"]);
    }
    if($error == '')
    {
    require('PHPMailer-master/src/PHPMailer.php');
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");
    
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 0; 
    $mail->Port = 465 ; //465 or 587

    $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "owenquinn247@gmail.com";
    $mail->Password = "duqdrvnrftjhsdrz";      
    $mail->From = $_POST["email"];     //Sets the From email address for the message
    $mail->FromName = $_POST["name"];    //Sets the From name of the message
    $mail->AddAddress('owenquinn247@gmail.com', 'Name');//Adds a "To" address
    $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);       //Sets message type to HTML    
    $mail->Subject = $_POST["subject"]." [owenquinn.co.uk]";    //Sets the Subject of the message
    $mail->Body = "From: ".$_POST["email"]."<br>Sender Name: ".$_POST["name"]."<br><br>".$_POST["message"];    //An HTML or plain text message body
    if($mail->Send())        //Send an Email. Return true on success or false on error
    {
    $error = '<label class="text-success">Thank you for contacting me</label>';
    }
    else
    {
    $error = '<label class="text-danger">There is an Error</label>';
    }
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    }
   }

?>