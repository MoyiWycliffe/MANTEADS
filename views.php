// DB connection variables
$host = 'localhost';
$dbname = 'manteads_db';
$username = 'your_db_username';
$password = 'your_db_password';

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Get form inputs safely
$site_experience = trim($_POST['site_experience'] ?? '');
$improvement_ideas = trim($_POST['improvement_ideas'] ?? '');
$rating = intval($_POST['rating'] ?? 0);

// Simple validation
if (empty($site_experience) || empty($improvement_ideas) || $rating < 0 || $rating > 100) {
    error_log("Invalid input. Please fill all fields correctly.");
    echo "Invalid input. Please fill all fields correctly.";
    exit;
}

// Insert into database
$sql = "INSERT INTO user_comments (site_experience, improvement_ideas, rating) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $site_experience, $improvement_ideas, $rating);

if ($stmt->execute()) {
    error_log("Feedback submitted successfully.");
    echo "Thanks for your feedback!";
} else {
    error_log("Error: " . $stmt->error);
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();<?php
// DB connection variables
$host = 'localhost';
$dbname = 'manteads_db';
$username = 'your_db_username';
$password = 'your_db_password';

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form inputs safely
$site_experience = trim($_POST['site_experience'] ?? '');
$improvement_ideas = trim($_POST['improvement_ideas'] ?? '');
$rating = intval($_POST['rating'] ?? 0);

// Simple validation
if (empty($site_experience) || empty($improvement_ideas) || $rating < 0 || $rating > 100) {
    echo "Invalid input. Please fill all fields correctly.";
    exit;
}

// Insert into database
$sql = "INSERT INTO user_comments (site_experience, improvement_ideas, rating) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $site_experience, $improvement_ideas, $rating);

if ($stmt->execute()) {
    echo "Thanks for your feedback!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
