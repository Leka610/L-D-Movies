<?php
include "db.php";


$fotoID=$_GET["fotoID"];

$sqledit="SELECT * FROM `filmi_foto` WHERE fotoID=$fotoID";

$result =$conn->query($sqledit);

if($result->num_rows>0){

    $row=$result->fetch_assoc();

?>

<html>
<head>
    <title>Rreth Nesh</title>
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
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    input[type="file"] {
        margin-bottom: 20px;
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

</head>
<body>
    <form action="edit_photo.php" method="post">
       
    <input type="hidden" name="fotoID" value="<?php echo $row["fotoID"]; ?>">
    <label for="emri_foto">Emri Foto:</label>
    <input type="text" name="emri_foto" value="<?php echo $row["emri_foto"]; ?>"><br>
    
    <label for="rruga">Rruga:</label>
    <input type="text" name="rruga" value="<?php echo $row["rruga"]; ?>"><br>

    <label for="image">Zgjedh foton</label>
    <input type="file" name="image" id="image" accept="image/jpeg, image/png" value="<?php echo $row["rruga"]; ?>"><br>
    
    <input type="submit" value="Ruaj">
    </form>

<?php

} else{
    echo"Nuk ka shënime";
}

?>
</body>
</html>