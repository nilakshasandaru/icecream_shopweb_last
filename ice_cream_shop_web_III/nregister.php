<?php
$mysqli = new mysqli("localhost", "root", "", "mywebsite");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $mysqli->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        echo "Registered Successfully. <a href='nlogin.html'>Login Here</a>";
    } else {
        echo "Username already exists.";
    }
}
?>
