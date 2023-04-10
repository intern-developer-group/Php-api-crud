<?php 

    include_once('../config.php');

    $query = "SELECT * FROM register_master";
    $query_res = mysqli_query($con,$query);
    
    echo "<pre>";
    while($query_r = mysqli_fetch_assoc($query_res))    
    print_r($query_r);

?>