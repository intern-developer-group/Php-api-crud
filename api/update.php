

<?php 
include_once('../config.php');
if(isset($_POST['submit']))
{

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $photo = $_POST['photo'];
    $password = $_POST['password'];

    // $return_arr[] = array(
    //     "id" => $id,
    //     "username" => $username,
    //     "name" => $name,
    //     "email" => $email);
    //     echo json_encode($return_arr);
   
    //     EXIT();
    // echo "<script>alert('$photo');</script>";
    
    $update = "UPDATE `register_master` SET `firstname`='$firstname',`lastname`='$lastname',`username`='$username',`email`='$email',`photo`='$photo',`password`='$password' WHERE `id`='$id' ";

     if(mysqli_query($con,$update))
     {
        echo "<script>alert('Data Updated successfull')</script>";
         echo "true";
      //   header('location:user_deshboard.php?success=Data updated successfully');
     }

} 





// Encoding array in JSON format


?>

<!-- 

register fetch data completd 
login fetch data completed 
fetch all data completed 
fetch specific user data completed
update specific data completed

 -->