<?php
include "db.php";


$about_id=$_GET["about_id"];

$sqledit="SELECT * FROM about WHERE about_id=$about_id";

$result =$conn->query($sqledit);

if($result->num_rows>0){

    $row=$result->fetch_assoc();

?>

<html>
<head>
    <title>Rreth Nesh</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: lightblue;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #ffffff;
        cursor: pointer;
        border: none;
        padding: 10px;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <form action="edit_about.php" method="post">
       
        <input type="hidden" name="about_id" value="<?php echo $row["about_id"]; ?>">
        
        <label for="detaje">Detaje</label><br>
        <textarea name="detaje" rows="5" cols="40"><?php echo $row["detaje"]; ?></textarea><br><br>
        <input type="submit" value="Ruaj">
    </form>

<?php

} else{
    echo"Nuk ka shënime";
}

?>
</body>
</html>