<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "mywebsite");

if (!isset($_SESSION["user_id"])) {
    header("Location: nlogin.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id"];
    $comment = $_POST["comment"];
    $star_rate = $_POST["star_rate"];

    $stmt = $mysqli->prepare("INSERT INTO comments (user_id, comment, star_rate) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $user_id, $comment, $star_rate);
    $stmt->execute();

    echo "Comment added successfully. <a href='ncomments.html'>Back</a>";
}
?>
