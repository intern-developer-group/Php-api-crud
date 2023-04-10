<?php 
include_once('config.php');
ob_start();
session_start();

if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
else
{
    echo "User id is not Fount";
    exit();
}

$fetch_data = "SELECT * FROM register_master WHERE `id`='$id' ";
$fetch_data_res = mysqli_query($con,$fetch_data);
$fetch_data_r = mysqli_fetch_array($fetch_data_res);

?>

<?php 
  if(isset($_GET['logout']))
  {
      unset($_SESSION['username']);
      unset($_SESSION['password']);
      session_destroy();
      header('location:login.php');

  }

?>

<?php 
  if(isset($_GET['success']))
  {
      echo "<div style='color: green;'>".$_GET['success']."</div>";
  }

?>

<form action="api/update.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $fetch_data_r[0]; ?>">
  
  <label for="firstname">First Name : </label><br>
  <input type="text" name="firstname" id="firstname" value="<?php echo $fetch_data_r[2]; ?>"><br><br>
  
  <label for="lastname">Last Name : </label><br>
  <input type="text" name="lastname" id="lastname" value="<?php echo $fetch_data_r[4]; ?>"><br><br>
  
  <label for="username">User Name : </label><br>
  <input type="text" name="username" id="username" value="<?php echo $fetch_data_r[6]; ?>"><br><br>
  
  <label for="email">Email : </label><br>
  <input type="text" name="email" id="email" value="<?php echo $fetch_data_r[7]; ?>"><br><br>
  
  <label for="photo">Photo : </label><br>
  <input type="text" name="photo" id="photo" value="<?php echo $fetch_data_r[8]; ?>"><br><br>
  
  <label for="password">Password : </label><br>
  <input type="text" name="password" id="password" value="<?php echo $fetch_data_r[10]; ?>"><br><br>
  
  <input type="submit" name="submit" id="submit" value="Submit">
</form>

<a href="user_deshboard.php"><button>Delete Account</button></a>
<a href="user_deshboard.php?logout"><button>Logout</button></a>

