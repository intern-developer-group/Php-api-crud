<?php 
include_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <?php 
        if(isset($_GET['success']))
        {
            echo "<div style='color: green;'>". $_GET['success'] . "</div>";
        }
    ?>
    <form action="api/register.php" method="post" enctype="multipart/form-data">
        <label for="firstname">Firstname</label><br>
        <input type="text" name="firstname" id="firstname"><br><br>
        
        <label for="lastname">Lastname</label><br>
        <input type="text" name="lastname" id="lastname"><br><br>
        
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br><br>
        
        <label for="photo">Photo</label><br>
        <input type="file" name="photo" id="photo"><br><br>
        
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" name="submit" id="submit">
    </form>


</body>
</html>
