<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and capture POST data
    $fullName = isset($_POST['fullName']) ? htmlspecialchars(trim($_POST['fullName'])) : '';
    $phoneNumber = isset($_POST['phoneNumber']) ? htmlspecialchars(trim($_POST['phoneNumber'])) : '';
    $emailAddress = isset($_POST['emailAddress']) ? htmlspecialchars(trim($_POST['emailAddress'])) : '';
    $checkIn = isset($_POST['checkIn']) ? htmlspecialchars(trim($_POST['checkIn'])) : '';
    $checkOut = isset($_POST['checkOut']) ? htmlspecialchars(trim($_POST['checkOut'])) : '';
    $adultCount = isset($_POST['adultCount']) ? htmlspecialchars(trim($_POST['adultCount'])) : '';
    $childCount = isset($_POST['childCount']) ? htmlspecialchars(trim($_POST['childCount'])) : '';
    $country = isset($_POST['country']) ? htmlspecialchars(trim($_POST['country'])) : '';
    $nationality = isset($_POST['nationality']) ? htmlspecialchars(trim($_POST['nationality'])) : '';
    $specialNote = isset($_POST['specialNote']) ? htmlspecialchars(trim($_POST['specialNote'])) : '';

    // Validate all fields

    // Validate Full Name
    if (empty($fullName)) {
        echo "Full Name is required.";
        die();
    }

    // Validate Phone Number
    if (empty($phoneNumber)) {
        echo "Please provide a valid phone number.";
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

    // Validate Check-in Date
    $checkInTimestamp = strtotime($checkIn);
    if (!$checkInTimestamp) {
        die("Invalid Check-in Date entered.");
    }
    $checkIn = date('d F Y', $checkInTimestamp);

    // Validate Check-out Date
    $checkOutTimestamp = strtotime($checkOut);
    if (!$checkOutTimestamp) {
        die("Invalid Check-out Date entered.");
    }
    $checkOut = date('d F Y', $checkOutTimestamp);

    // Validate Adults Count
    if (!is_numeric($adultCount) || $adultCount < 1) {
        echo "Please enter a valid number of adults (minimum 1).";
        die();
    }

    // Validate Children Count
    if (!is_numeric($childCount) || $childCount < 0) {
        echo "Please enter a valid number of children.";
        die();
    }

    // Validate Country
    if (empty($country)) {
        echo "Country is required.";
        die();
    }

    // Validate Nationality
    if (empty($nationality)) {
        echo "Nationality is required.";
        die();
    }

    // Validate Special Note
    if (empty($specialNote)) {
        echo "Special Note is required.";
        die();
    }

    // Send the email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'udithanethsara079@gmail.com';
        $mail->Password   = 'xtezowxvpxouviwm'; // Replace with your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('udithanethsara079@gmail.com', 'Cheers Lanka');
        $mail->addAddress('udithanethsara079@gmail.com', 'Cheers Lanka');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Custom Tour Enquiry - Cheers Lanka Travels';
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
                                <p><strong>Special Note:</strong> ' . nl2br($specialNote) . '</p>
                            </body>
                          </html>';

        if ($mail->send()) {
            echo "success";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: Invalid request method.";
}
