<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      background-color: lightblue;
      font-family: Arial, sans-serif;
    }
    .about-us {
      width: 80%;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    .about-us h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .about-us p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 20px;
    }
   
  </style>
</head>
<body>
  <div class="about-us">
    <h2>About Us</h2>
<?php

  include("db.php");

  $sql="SELECT `detaje` FROM `about` WHERE 1";

  $result=$conn->query($sql);

  if($record = $result->fetch_assoc()){

  echo "<p>$record[detaje]</p>";


}
?>
  </div>
  
</body>
</html>

