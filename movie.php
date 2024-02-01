<?php
include("db.php");

if (isset($_GET['id'])) {
    $movieId = $_GET['id'];

    $sql = "SELECT `fotoID`, `emri_foto`, `rruga`, `zhanri` FROM `filmi_foto` WHERE `fotoID` = $movieId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageName = $row['emri_foto'];
        $imagePath = $row['rruga'];

        echo "<html>";
        echo "<head>";
        echo "<style>";
        echo ".fixed-height img {";
        echo "  height: 350px;";
        echo "  width: auto;";
        echo "  margin: 5px;";
        echo "}";
        echo "</style>";
        echo "</head>";
        echo "<body>";
        echo "<div class='fixed-height'>";
        echo "<img src='$imagePath' alt='$imageName'>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
    } else {
        echo "<p>Ky film nuk u gjet.</p>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
