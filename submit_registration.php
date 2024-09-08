<?php
$servername = "localhost";
$username = "u686932376_vaibhav";
$password = "*A1b2c3d4e5f6#";
$dbname = "u686932376_Alephium_forge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from POST request
$name = $_POST['name'];
$registration_number = $_POST['registration_number'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$weight = $_POST['weight'];
$graduation_year = $_POST['graduation_year'];
$arm = $_POST['arm'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO registrations (name, registration_number, mobile_number, email_id, weight, graduation_year, arm) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $registration_number, $mobile, $email, $weight, $graduation_year, $arm);

// Execute statement
if ($stmt->execute()) {
    header("Location: registration_success.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
