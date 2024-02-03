<?php

include("db.php");

$list_sql="SELECT `about_id`, `detaje` FROM `about`";

$result=$conn->query($list_sql);

if($result->num_rows > 0) {
    echo"<table border='1'<tr><th>Detaje</th><th>Edit</th><th>Fshije</th></tr> ";

    while($row = $result->fetch_assoc()) {
$about_id=$row["about_id"];

        echo "<tr><td>".$row["detaje"]."</td><td><a href='about.php?about_id=$about_id'>Edit</td><td><a href='delete_about.php?about_id=$about_id'>Fshije</td></tr>";
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


