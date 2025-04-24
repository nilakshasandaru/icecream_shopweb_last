<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root'; // Default WAMP username
$db_pass = '';     // Default WAMP password is empty
$db_name = 'form_db';

// Connect to database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$name = $email = $message = '';
$errors = [];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = 'Only letters and white space allowed in name';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    }
    
    // If no errors, insert into database
    if (empty($errors)) {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO form_data (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        
        if ($stmt->execute()) {
            // Redirect to prevent form resubmission
            header('Location: index.html?success=1');
            exit();
        } else {
            $errors[] = "Error: " . $stmt->error;
        }
        
        $stmt->close();
    }
}

// If there are errors or if not a POST request, show the form with errors
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Processing</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <?php if (!empty($errors)): ?>
        <div class="error">
            <h3>Errors:</h3>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <p><a href="index.html">Go back to form</a></p>
    <?php endif; ?>
</body>
</html>
<?php
$conn->close();
?>