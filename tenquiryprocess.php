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
    $fromLocation = isset($_POST['fromLocation']) ? trim($_POST['fromLocation']) : '';
    $toLocation = isset($_POST['toLocation']) ? trim($_POST['toLocation']) : '';
    $country = isset($_POST['country']) ? trim($_POST['country']) : '';
    $nationality = isset($_POST['nationality']) ? trim($_POST['nationality']) : '';
    $specialNote = isset($_POST['specialNote']) ? trim($_POST['specialNote']) : '';

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

    // Validate Check-in and Check-out Dates
    $checkInTimestamp = strtotime($checkIn);
    if (!$checkInTimestamp) {
        die("Invalid Check-in Date entered.");
    }
    $checkIn = date('d F Y', $checkInTimestamp);

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

    // Validate Required Fields
    if (empty($fromLocation) || empty($toLocation) || empty($country) || empty($nationality) || empty($specialNote)) {
        echo "Please fill in all required fields.";
        die();
    }

    // Send Email Using PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cheerslankajanaka@gmail.com';                     // SMTP username
        $mail->Password   = 'bwybhghvunrrknxa';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('cheerslankajanaka@gmail.com', 'Cheers Lanka');
        $mail->addAddress('cheerslankajanaka@gmail.com', 'Cheers Lanka');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Transport enquiry - Cheers Lanka Travels';
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
                                <p><strong>From Location:</strong> ' . $fromLocation . '</p>
                                <p><strong>To Location:</strong> ' . $toLocation . '</p>
                                <p><strong>Country:</strong> ' . $country . '</p>
                                <p><strong>Nationality:</strong> ' . $nationality . '</p>
                                <p><strong>Special Note:</strong></p>
                                <p>' . nl2br($specialNote) . '</p>
                            </body>
                        </html>';

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
