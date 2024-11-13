<?php
session_start(); // Start the session to store messages

// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "my_database"; // Replace with your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Check if email already exists
$checkEmailQuery = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($checkEmailQuery);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email already exists - set error message and redirect back to form
    $_SESSION['error_message'] = "This email is already registered. Please use a different email.";
    header("Location: register.php");
    exit();
} else {
    // Email is unique, proceed with insertion
    $insertQuery = "INSERT INTO users (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        // Registration successful, you could redirect to a success page if desired
        echo "<p style='color: green;'>Registration successful!</p>";
    } else {
        echo "<p style='color: red;'>Error: Could not register user.</p>";
    }
}

// Close connection
$stmt->close();
$conn->close();
?>
