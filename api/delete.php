<?php

include_once('../config.php');
$id= $_GET['id'];

$query = "DELETE FROM register_master WHERE `id`='$id' ";
if(mysqli_query($con,$query))
{
    echo "User deleted successfully";
}


?>