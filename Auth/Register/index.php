<?php
   include('../../Navbar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Register</h2>
    <form method="POST" action="./register.php">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password"><br>
        <input type="submit" name="register" value="Register">
      
        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            // Display the message or use it as needed
            echo "<p>$message</p>";
        }
        ?>
    </form>
    
</body>
</html>