<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = "587";                                    // TCP port to connect to
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->Username = 'alomatsiblandine@gmail.com';                 // SMTP username
    $mail->Password = 'x12edem20bbd1ne';                           // SMTP password
    $mail->CharSet = "UTF-8";
    //Recipients
    $mail->setFrom($_GET['email'], 'STAGEZONE');
    // $mail->addAddress('ibrozz80@gmail.com');     // Add a recipient
    $mail->addAddress($_GET['email']);     // Add a recipient
    


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'postuler';
    $mail->Body    = $_GET['content'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    echo "<script>
        alert('Message envoyé');
        window.location.href='listStages.php'; 
        </script>";

} catch (Exception $e) {
    echo "<script>
        alert('Message non envoyé');
        window.location.href='listStages.php'; 
        </script>";
 }