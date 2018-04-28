<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
// exception
use PHPMailer\PHPMailer\PHPMailer;

// Google ReCaptcha
// if (isset($_POST["submit"])) {
//     $secretKey = "6Lc_W1UUAAAAAHNe-56GmYsIKL66tYva3aVQGQHq";
//     $responseKey = $_POST["g-recaptcha-response"];
//     $userIP = $_SERVER["REMOTE_ADDR"];
//     // send to Google the data for it to verify if robot or human
//     $visitorURL = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

//     $response = file_get_contents("visitorURL");
//     $response = json_decode($response); // decode json object
//     if ($response->success) {
//         echo "Verification success!";
//     } else {
//         echo "Faild recaptcha";
//     }
// }

// Assign variables from input names
$name = strip_tags($_POST["name"]); // global variable assigning name form html fields
$email = strip_tags($_POST["email"]); // strip everything so people dont input any HTML or JS
// if they try to do malicious emailing.
$phone = strip_tags($_POST["phone"]);
$enquiry = strip_tags($_POST["message"]);

// Validation
// if (empty($name)) {
//     header("location:ekkoflame4.php?error=name");
//     exit();
// }

// if (empty($email)) {
//     header("location:ekkoflame4.php?error=email");
//     exit();
// }

// if (empty($enquiry)) {
//     header("location:ekkoflame4.php?error=enquiry");
//     exit();
// }

//Load Composer's autoloader - script for PHPMailer
require '../vendor/autoload.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output by adding 2
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'ekkoflame.com@gmail.com'; // SMTP username
    $mail->Password = 'Ekkoflame1991***'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@ekkoflame.com', 'Contact PHPMailer'); // sender
    $mail->addAddress('ekkoflame.com@gmail.com', 'Ekkoflame'); // recipinet

    //Content
    $mail->Subject = 'Contact From ' . $name;
    $mail->isHTML(true); // Set email format to HTML
    $body = "
    Dear Admin, you have recieved an enqury from $name<br />

    The enquiry is as follows:<br />

    Name: $name<br />
    Email: $email<br />
    Phone: $phone<br /><br />
    Message: $enquiry

    ";
    $mail->IsHTML(true);
    $mail->Subject = 'Contact From ' . $name;

    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
