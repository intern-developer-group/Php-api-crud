<?php 
include_once('config.php');
ob_start();
session_start();

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    header('location:api/delete.php?id='.$id);
}
else
{
    echo "User id is not Fount";
    exit();
}
