<?php
$servername = "localhost";
$username = "u686932376_vaibhavkulshre";
$password = "*A1b2c3d4e5f6#";
$dbname = "u686932376_Arm_wrestl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate form input
if (
    isset($_POST['name'], $_POST['registration_number'], $_POST['mobile'], 
          $_POST['email'], $_POST['weight'], $_POST['graduation_year'], 
          $_POST['arm'], $_POST['razorpay_payment_id'])
) {
    // Capture form data
    $name = $_POST['name'];
    $registration_number = $_POST['registration_number'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $weight = $_POST['weight'];
    $graduation_year = $_POST['graduation_year'];
    $arm = $_POST['arm'];
    $razorpay_payment_id = $_POST['razorpay_payment_id']; // Payment ID from Razorpay

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare(
        "INSERT INTO registrations (name, registration_number, mobile, email, weight, graduation_year, arm, razorpay_payment_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );
    
    $stmt->bind_param("ssssssss", $name, $registration_number, $mobile, $email, $weight, $graduation_year, $arm, $razorpay_payment_id);

    // Check if the statement executed successfully
    if ($stmt->execute()) {
        // Registration successful, redirect to success page
        header('Location: registration_success.php');
        exit(); // Ensure no further execution occurs
    } else {
        // Handle errors
        error_log("Error in statement execution: " . $stmt->error);
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Handle missing data and log it for debugging
    error_log("Error: Missing form data or payment details.");
    echo "Error: Missing form data or payment details.";
}

$conn->close();
?>
