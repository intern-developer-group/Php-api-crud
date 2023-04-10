<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    header('location:api/fetch_user_data.php?id='.$id);
}
else
{
    header('location:api/fetch_all_data.php');
}

?>