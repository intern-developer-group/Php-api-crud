
<?php 
include_once('../config.php');

// if(isset($_POST['submit']))
// {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $photo = $_FILES['photo']['name'];
    $password = $_POST['password'];

    
        

    $insert = "INSERT INTO `register_master`(`firstname`, `lastname`, `username`, `email`, `photo`, `password`) VALUES ('$firstname','$lastname','$username','$email','$photo','$password')";
    if(mysqli_query($con,$insert))
    {
        echo "<script>alert('successfull')</script>";
        // header('location:index.php?success=Data Insert Successfully');
    }

    
    $fetch_all_data = "SELECT * FROM register_master WHERE `username` = '$username' AND `password`='$password' ";
    $fetch_all_data_res = mysqli_query($con,$fetch_all_data);
    $fetch_all_data_r = mysqli_fetch_array($fetch_all_data_res);
    
    $return_arr[] = array(
        "prefixname" => $fetch_all_data_r[1],
        "firstname" => $fetch_all_data_r[2],
        "middlename" => $fetch_all_data_r[3],
        "lastname" => $fetch_all_data_r[4],
        "suffixname" => $fetch_all_data_r[5],
        "username" => $fetch_all_data_r[6],
        "email" => $fetch_all_data_r[7],
        "photo" => $photo,
        "type" => $fetch_all_data_r[9],
        "updated_at" => $fetch_all_data_r[11],
        "created_at" => $fetch_all_data_r[12],
        "id" => $fetch_all_data_r[0],
        "avatar" => $fetch_all_data_r[13],
        "birthday" => $fetch_all_data_r[14],
        "created" => $fetch_all_data_r[15],
        "deleted" => $fetch_all_data_r[16],
        "displayname" => $fetch_all_data_r[17],
        "modified" => $fetch_all_data_r[18],
        "role" => $fetch_all_data_r[19],
    );
        echo "data:";
        echo json_encode($return_arr);
    
    

// }
?>