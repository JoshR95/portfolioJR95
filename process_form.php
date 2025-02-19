<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');
require_once 'includes/db_connect.php';  // Include database connection
require_once 'vendor/autoload.php';      // Include PHPMailer

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Initialize response array
$response = [
    'success' => false,
    'message' => ''
];

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
    exit;
}

// Sanitize and validate inputs
$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phoneNumber = filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_STRING);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Validate required fields
if (empty($fname) || empty($lname) || empty($email) || empty($phoneNumber) || empty($subject) || empty($message)) {
    $response['message'] = 'All fields are required';
    echo json_encode($response);
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Invalid email format';
    echo json_encode($response);
    exit;
}

// Validate UK phone number
function isValidUKPhoneNumber($phone) {
    // Remove all non-digit characters
    $phone = preg_replace('/[^0-9]/', '', $phone);
    return preg_match('/^(?:(?:(?:00|\+)44|0)(?:1[0-9]{8,9}|[23]\d{9}|7(?:[1345789]\d{8}|624\d{6})))$/', $phone);
}

if (!isValidUKPhoneNumber($phoneNumber)) {
    $response['message'] = 'Invalid UK phone number';
    echo json_encode($response);
    exit;
}

try {
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    /// DATABASE STORAGE
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    
    // Prepare SQL statement
    $sql = "INSERT INTO contact_submissions (fname, lname, email, phone, subject, message) 
            VALUES (:fname, :lname, :email, :phone, :subject, :message)";
    
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phoneNumber);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);
    
    // Execute the statement
    $stmt->execute();

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    /// MAILTRAP EMAIL CONFIGURATION
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();                                    // Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';            // Mailtrap SMTP server
    $mail->SMTPAuth   = true;                          // Enable SMTP authentication
    $mail->Username   = '3c86aecf1840a3';      // Your Mailtrap username
    $mail->Password   = 'ef87da7e57b7c9';      // Your Mailtrap password
    $mail->Port       = 2525;                          // TCP port to connect to
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    /// EMAIL CONTENT
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    
    // Sender and recipient
    $mail->setFrom($email, "$fname $lname");           // Sender's email and name
    $mail->addAddress('your-email@example.com');       // Your email address
    
    // Email content
    $mail->isHTML(true);                               // Set email format to HTML
    $mail->Subject = "New Contact Form Submission: $subject";
    
    // HTML version of the email
    $mail->Body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>First Name:</strong> $fname</p>
        <p><strong>Last Name:</strong> $lname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phoneNumber</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
    ";
    
    // Plain text version of the email (for email clients that don't support HTML)
    $mail->AltBody = "
        New Contact Form Submission\n\n
        First Name: $fname\n
        Last Name: $lname\n
        Email: $email\n
        Phone: $phoneNumber\n
        Subject: $subject\n
        Message:\n$message
    ";

    // Send the email
    $mail->send();
    
    // If we got here, both database storage and email sending worked
    $response['success'] = true;
    $response['message'] = 'Message sent successfully';
    
} catch (Exception $e) {
    // If anything goes wrong, return an error
    $response['success'] = false;
    $response['message'] = 'An error occurred while processing your request';
    // Uncomment the line below for debugging
    // $response['error'] = $e->getMessage();
}

// Send the JSON response back to the JavaScript
echo json_encode($response);
?>