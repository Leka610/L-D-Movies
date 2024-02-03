<?php
include ("db.php");

try{
    if(isset($_POST["UserID"])){
        $UserID = $_GET["UserID"];

        $sqledit = "SELECT * FROM `perdoruesit` WHERE UserID= $UserID";
    
        $result = $conn->query($sqledit);
    }
}
catch(mysqli_sql_exception){
    echo"errori";
}

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

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

        h2 {
            margin-top: 100px;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            margin:auto ;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: left;

        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <body>
        <form action="edit_user.php" method="post">
            <input type="hidden" name="UserID" value="<?php echo $row["UserID"]; ?>">
            First Name: <input type="text" name="Firstname" value="<?php echo $row["Firstname"]; ?>"><br>
            Last Name: <input type="text" name="Lastname" value="<?php echo $row["Lastname"]; ?>"><br>
            Username: <input type="text" name="Username" value="<?php echo $row["Username"]; ?>"><br>
            Password: <input type="password" name="Password" value="<?php echo $row["Password"]; ?>"><br>
            Profile Photo: <input type="file" id="avatar" name="avatar"><br>
            <input type="submit" value="Ruaj">
        </form>

        <?php

} else {
    echo "Nuk ka shënime";
}

?>
</body>

</html>