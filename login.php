<?php

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $firstname = $_POST["Firstname"];
  $lastname = $_POST["Lastname"];
  $username = $_POST["Username"];
  $password = $_POST["Password"];

$username= mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);

}

$sql="SELECT * FROM `perdoruesit` WHERE Firstname='$firstname' and Lastname='$lastname' and Username ='$username' and Password ='$password'";

$result=$conn->query($sql);

if ($result->num_rows == 1) {
  session_start();
  $_SESSION['Firstname'] = $firstname; 
  $_SESSION['Lastname'] = $lastname; 
  $_SESSION['Username'] = $username; 
  header("Location: panel.php");
  exit();
} else {
  echo "<div style='display: flex; justify-content: center; align-items: center; margin-top:300px;'>
  <h3 style='color: #E74C3C; background-color: #F9EBEA; padding: 10px; border-radius: 15px; border: 2px solid #C0392B; text-align: center; font-size: 24px;'>Ju keni dhënë kredenciale të gabuara. Ju lutem <a href=\"admin.html\">provoni përseri.</a></h3>
</div>";

}
?>
