<?php
 include('../../config/connectDB.php');

 // Register User
if (isset($_POST['register'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate form data
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        $message = "Please fill in all the fields.";
    } elseif ($password !== $confirmPassword) {
        $message = "Password and confirm password do not match.";
    } else {
        // Check if email already exists
        $existingEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $existingEmailResult = $conn->query($existingEmailQuery);
        if ($existingEmailResult->num_rows > 0) {
            $message = "Email already exists. Please use a different email.";
        } else {
            // Insert new user into the database
            $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            if ($conn->query($insertQuery) === TRUE) {
                $message = "Registration successful. You can now login.";
            } else {
                $message = "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }
    }
}

header("Location: index.php?message=" . urlencode($message));
exit();
?>