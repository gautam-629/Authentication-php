<?php
  include('../../config/connectDB.php');

// Login User
if (isset($_POST['login'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($email) || empty($password)) {
        $message = "Please enter both email and password.";
    } else {
        // Check user credentials
        $loginQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $loginResult = $conn->query($loginQuery);
        if ($loginResult->num_rows > 0) {
            // Login successful
            $user = $loginResult->fetch_assoc();
            $message = "Login successful. Welcome, " . $user['name'] . "!";
        } else {
            $message = "Invalid email or password.";
        }
    }
}
header("Location: index.php?message=" . urlencode($message));
exit();
?>
