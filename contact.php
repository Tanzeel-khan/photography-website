<?php
session_start();

$name =  $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$msgs = $_POST['msg'];

$con = mysqli_connect("sql202.epizy.com","epiz_24538736","tsapics123","epiz_24538736_insertdb");

$query = "INSERT INTO `userdata`( `name`, `contact`, `email`, `message`) VALUES ('$name','$contact','$email','$msgs')";

$run = mysqli_query($con,$query);



    require 'PHPMailerAutoload.php';
    require 'credentials.php';

$mail = new PHPMailer;

                              // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->setFrom(EMAIL, 'tsa photo');
$mail->addAddress($email);     // Add a recipient
               // Name is optional
$mail->addReplyTo(EMAIL);


        // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'EVENT BOOKING CONFIRMATION';
$mail->Body    = 'Thank you for choosing TSA photography!.., one of our agent will contact you shortly.. stay connected!..<b>(TEAM TSA)</b>';
$mail->AltBody = 'thanks for your feedback!.. our team will contact you shortly..';

if(!$mail->send()) {
    echo 'Message could not be sent.';
} else {
    echo 'Message has been sent';
}
    
if($run=TRUE){
    echo "data submitted successfully to tsa admins (THANK YOU)";
    session_destroy();
    header('location: mainlanding.php');
    
    }






?>