<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();

    echo "Submitted successfully!";
} else {
    
    echo "Form submission error!";
}
?>