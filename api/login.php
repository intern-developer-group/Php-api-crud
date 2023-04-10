
<?php 
include_once('../config.php');

if(isset($_POST['log_submit']))
{
    $log_username = $_POST['log_username'];
    $log_password = $_POST['log_password'];

    $query = "SELECT * FROM register_master WHERE `username` = '$log_username' AND `password` = '$log_password' ";
    $query_res = mysqli_query($con,$query);
    $query_r = mysqli_fetch_array($query_res);

    $return_arr[] = array(
        "prefixname" => $query_r[1],
        "firstname" => $query_r[2],
        "middlename" => $query_r[3],
        "lastname" => $query_r[4],
        "suffixname" => $query_r[5],
        "username" => $query_r[6],
        "email" => $query_r[7],
        "photo" => $query_r[8],
        "type" => $query_r[9],
        "updated_at" => $query_r[11],
        "created_at" => $query_r[12],
        "id" => $query_r[0],
        "avatar" => $query_r[13],
        "birthday" => $query_r[14],
        "created" => $query_r[15],
        "deleted" => $query_r[16],
        "displayname" => $query_r[17],
        "modified" => $query_r[18],
        "role" => $query_r[19],
        "email_varify_at" => $query_r[20],
        "deleted_at" => $query_r[21],
        "details" => $query_r[22],
        "details:common" => $query_r[23],
        "details:other" => $query_r[24],
        "is:aupperadmin" => $query_r[25],
        "permissions" => $query_r[26],
    );
    
    echo "<pre>";
        echo "data:";
        print_r (json_encode($return_arr));
        echo "</pre>";
    // $count = mysqli_num_rows($query_res);

    // if($count > 0)
    // {
    //     $_SESSION['username'] = $log_username;
    //     $_SESSION['password'] = $log_password;
    //     header('location:user_deshboard.php');
    // }
    // else
    // {
    //     header('location:login.php?error=Username or Password Are Incorrect');
    // }



}

?>
