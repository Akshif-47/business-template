<?php
header('Content-Type: application/json'); // Set response type to JSON

// Check if data was sent via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the POST request
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Validate that all fields have values
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }

    // Prepare the email content
    $to = 'contact@businessco.com';  // Change this to your actual email address
    $subject = 'New Message from BusinessCo Contact Form';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = 'From: no-reply@businessco.com';  // You can change this to a valid sender address

    // Uncomment the line below to actually send the email
    // mail($to, $subject, $body, $headers);

    // Respond with a success message in JSON format
    echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
} else {
    // If not a POST request, return an error
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
