<?php

include("db.php");

$list_sql="SELECT `contact_infoID`, `Phone`, `Email` FROM `contact_info`";

$result=$conn->query($list_sql);

if($result->num_rows > 0) {
    echo"<table border='1'<tr><th>Phone</th><th>Email</th><th>Edit</th><th>Fshije</th></tr> ";

    while($row = $result->fetch_assoc()) {
$contact_infoID=$row["contact_infoID"];

        echo "<tr><td>".$row["Phone"]."</td><td>".$row["Email"]."</td><td><a href='contact_info.php?contact_infoID=$contact_infoID'>Edit</td><td><a href='delete_contactInfo.php?contact_infoID=$contact_infoID'>Fshije</td></tr>";
}
echo "</table";
} else {
    echo "nuk permban tekst";
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
        padding:8px;
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
