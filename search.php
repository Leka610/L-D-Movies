<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $search_query=$_GET["query"];
    $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `emri_foto` = '$search_query'";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $movieId = $row['fotoID'];
        header("Location: movie.php?id=$movieId");
        exit();
    } else {
       
        echo "<p>Nuk u gjend asnjë film: $search_query</p>";
    }
} else {
    
    header("Location: index.php");
    exit();
}
?>
