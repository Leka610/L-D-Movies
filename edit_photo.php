<script>
<?php
include("db.php");

if (isset($_POST["fotoID"])) {
    $fotoID = $_POST["fotoID"];
    $emri_foto = $_POST["emri_foto"];
    $rruga = $_POST["rruga"];

    $sql_update = "UPDATE `filmi_foto` SET `emri_foto`='$emri_foto',`rruga`='$rruga' WHERE fotoID=$fotoID";

    if ($conn->query($sql_update) === TRUE) {
        echo "alert('U ndryshua me sukses')";
    } else {
        echo "alert('Nuk u ndryshua')";
    }
} else {
    echo "alert('Gabim: 'id' nuk eshte caktuar')";
}

$conn->close();
?>
</script>