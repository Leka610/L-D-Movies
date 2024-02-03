
<?php
include("db.php");

$list_sql="SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto`";

$result=$conn->query($list_sql);

if($result->num_rows > 0) {
    echo"<table border='1'<tr><th>emri_foto</th><th>rruga</th><th>zhanri</th><th>Edit</th><th>Fshije</th></tr> ";

    while($row = $result->fetch_assoc()) {
$fotoID=$row["fotoID"];

echo "<tr><td>".$row["emri_foto"]."</td><td>".$row["rruga"]."</td><td>".$row["zhanri"]."</td><td><a href='foto.php?fotoID=$fotoID'>Edit</td><td><a href='delete_foto.php?fotoID=$fotoID'>Fshije</td></tr>";
}
echo "</table>";
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
