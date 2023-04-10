<?php 
include_once('config.php');
ob_start();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        if(isset($_GET['error']))
        {
            echo "<div style='color: red;'>". $_GET['error'] . "</div>";
        }
    ?>
    <form action="api/login.php" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="log_username" id="username"><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" name="log_password" id="password"><br><br>

        <input type="submit" value="Submit" name="log_submit">
    </form>
</body>
</html>


