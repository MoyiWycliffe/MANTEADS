<?php
session_start();
require 'php/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        echo "Email not found.";
        exit();
    }

    // Generate a secure token
    $token = bin2hex(random_bytes(32));
    $expires_at = date("Y-m-d H:i:s", strtotime("+10 minutes"));

    // Store token in the database
    $stmt = $conn->prepare("INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE token=?, expires_at=?");
    $stmt->bind_param("sssss", $email, $token, $expires_at, $token, $expires_at);
    $stmt->execute();

    // Send reset link via email
    $reset_link = "http://Manteads.com/password-update.php?token=$token";
    $subject = "Password Reset Request";
    $message = "Click the link below to reset your password (valid for 10 minutes):\n\n$reset_link";
    $headers = "From: no-reply@Manteads.com\r\n";

    mail($email, $subject, $message, $headers);

    echo "A password reset link has been sent to your email.";

}
?>