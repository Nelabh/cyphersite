<?php
require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];
$body="The following person tries to send his query<br>Name : ".
$name."<br>Email : ".$email."<br>Phone : ".$phone."<br>Subject : ".
$subject."<br><br>Content : ".$comment;

$to='sush.94kh@gmail.com';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'host125.hostmonster.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@cyphertextsolutions.com';                 // SMTP username
$mail->Password = 'disneyworld1_$';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('info@cyphertextsolutions.com', 'hello');
$mail->addAddress($to);

$mail->addReplyTo($email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header('abc');
} else {
	echo"Hello";
    echo 'Message has been sent';
}