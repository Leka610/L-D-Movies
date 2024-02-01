<?php
include("db.php");

$contact_infoID = $_GET["contact_infoID"];

$sql_edit="SELECT * FROM contact_info WHERE contact_infoID=$contact_infoID";

$result =$conn->query($sql_edit);

if($result->num_rows>0){

    $row=$result->fetch_assoc();

?>

<html>
<head>
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
        margin-bottom: 0;
        font-weight: bold;
    }

    input[type="tel"],
    input[type="email"] {
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

    <title>Contact</title>
</head>
<body>
    <form action="edit_contactinfo.php" method="post">
       
        <input type="hidden" name="contact_infoID" value="<?php echo $row["contact_infoID"]; ?>">
        
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" value="<?php echo $row["Phone"]; ?>"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $row["Email"]; ?>"><br><br>

        <input type="submit" value="Regjistro">
    </form>

<?php

} else{
    echo"Nuk ka shënime";
}

?>
</body>
</html>