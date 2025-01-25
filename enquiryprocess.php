<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and capture POST data
    $fullName = isset($_POST['fullName']) ? trim($_POST['fullName']) : '';
    $phoneNumber = isset($_POST['phoneNumber']) ? trim($_POST['phoneNumber']) : '';
    $emailAddress = isset($_POST['emailAddress']) ? trim($_POST['emailAddress']) : '';
    $checkIn = isset($_POST['checkIn']) ? trim($_POST['checkIn']) : '';
    $checkOut = isset($_POST['checkOut']) ? trim($_POST['checkOut']) : '';
    $adultCount = isset($_POST['adultCount']) ? trim($_POST['adultCount']) : '';
    $childCount = isset($_POST['childCount']) ? trim($_POST['childCount']) : '';
    $budget = isset($_POST['budget']) ? trim($_POST['budget']) : '';
    $specialNote = isset($_POST['specialNote']) ? trim($_POST['specialNote']) : '';
    $country = isset($_POST['country']) ? trim($_POST['country']) : '';  // Added Country field
    $nationality = isset($_POST['nationality']) ? trim($_POST['nationality']) : '';  // Added Nationality field

    // Validate and format Check-in Date
   

    // Validate Full Name
    if (empty($fullName)) {
        echo "Full Name is required.";
        die();
    }

    // Validate Phone Number
    if (empty($phoneNumber)) {
        echo "Phone number is required.";
        die();
    }

    // Validate Email Address
    if (empty($emailAddress)) {
        echo "Email address is required.";
        die();
    } elseif (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
        die();
    }

    $checkInTimestamp = strtotime($checkIn);
    if (!$checkInTimestamp) {
        die("Invalid Check-in Date entered.");
    }
    $checkIn = date('d F Y', $checkInTimestamp);

    // Validate and format Check-out Date
    $checkOutTimestamp = strtotime($checkOut);
    if (!$checkOutTimestamp) {
        die("Invalid Check-out Date entered.");
    }
    $checkOut = date('d F Y', $checkOutTimestamp);

    // Validate Number of Adults
    if (empty($adultCount) || !is_numeric($adultCount) || $adultCount < 1) {
        echo "Please enter a valid number of adults.";
        die();
    }

    // Validate Number of Children
    if (!is_numeric($childCount) || $childCount < 0) {
        echo "Please enter a valid number of children.";
        die();
    }

    // Validate Budget
    if (empty($budget) || !is_numeric($budget) || $budget <= 0) {
        echo "Please enter a valid budget.";
        die();
    }

    // Validate Special Note
    if (empty($specialNote)) {
        echo "Special note is required.";
        die();
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'udithanethsara079@gmail.com';                     //SMTP username
        $mail->Password   = 'xtezowxvpxouviwm';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('udithanethsara079@gmail.com', 'Cheers Lanka');
        $mail->addAddress('udithanethsara079@gmail.com', 'Cheers Lanka');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New enquiry - Cheers Lanka Travels';
        $mail->Body    = '<html>
                            <body>
                                <h2>Enquiry Details</h2>
                                <p><strong>Full Name:</strong> ' . $fullName . '</p>
                                <p><strong>Phone Number:</strong> ' . $phoneNumber . '</p>
                                <p><strong>Email Address:</strong> ' . $emailAddress . '</p>
                                <p><strong>Check-in Date:</strong> ' . $checkIn . '</p>
                                <p><strong>Check-out Date:</strong> ' . $checkOut . '</p>
                                <p><strong>Number of Adults:</strong> ' . $adultCount . '</p>
                                <p><strong>Number of Children:</strong> ' . $childCount . '</p>
                                <p><strong>Country:</strong> ' . $country . '</p>  
                                <p><strong>Nationality:</strong> ' . $nationality . '</p>  
                                <p><strong>Budget (USD):</strong> ' . $budget . '</p>
                                <p><strong>Special Note:</strong></p>
                                <p>' . nl2br($specialNote) . '</p>
                                
                            </body>
                        </html>';

        // Send the email
        if ($mail->send()) {
            echo "success";
        } else {
            echo "Please try again later.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: Invalid request method.";
}
