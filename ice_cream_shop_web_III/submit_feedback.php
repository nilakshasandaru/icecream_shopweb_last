<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "a_comment_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST values are set before using them
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0; // Default to 0 if not set
$comments = isset($_POST['comments']) ? htmlspecialchars($_POST['comments']) : '';
$flavor = isset($_POST['flavor']) ? htmlspecialchars($_POST['flavor']) : 'Not specified';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (name, email, rating, comments, flavor, submission_date) VALUES (?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("ssiss", $name, $email, $rating, $comments, $flavor);

// Execute the statement
if ($stmt->execute()) {
    $success_message = "Thank you for your sweet feedback, $name! We appreciate your $rating-star rating.";
} else {
    $error_message = "Oops! Something went wrong. Please try again later.";
}

$stmt->close();
$conn->close();
?>
