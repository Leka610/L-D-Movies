<?php

include("db.php");

$list_sql="SELECT `UserID`, `Firstname`, `Lastname`, `Username`, `Password` FROM `perdoruesit`";

$result=$conn->query($list_sql);

if($result->num_rows > 0) {
    echo"<table border='1'<tr><th>Firstname</th><th>Lastname</th><th>Username</th><th>Password</th><th>Edit</th><th>Fshije</th></tr> ";

    while($row = $result->fetch_assoc()) {
$UserID=$row["UserID"];

        echo "<tr><td>".$row["Firstname"]."</td><td>".$row["Lastname"]."</td><td>".$row["Username"]."</td><td>".$row["Password"]."</td><td><a href='user.php?UserID=$UserID'>Edit</td><td><a href='delete_user.php?UserID=$UserID'>Fshije</td></tr>";
}
echo "</table";
} else {
    echo "Nuk ka shënime";
}



?>

<html>
    <head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    a {
        text-decoration: none;
        color: #0066cc;
    }
</style>
    </head>
</html>
