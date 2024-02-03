<script>
<?php

include("db.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "upload_foto/";
        $targetfile = $targetDir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetfile)) {

            $imageName = basename($_FILES["image"]["name"]);
            $imagePath = $targetfile;

            $zhanri = $_POST["zhanri"];


            $sql="INSERT INTO `filmi_foto`(`fotoID`, `emri_foto`, `rruga`, `zhanri`) VALUES ('','$imageName','$imagePath','$zhanri')";

            if ($conn->query($sql) === TRUE) {
                echo "alert('Foto u ruajt me sukses')";
            } else {
                echo "alert('Foto nuk u ruajt')";
            }
        }
        $conn->close();
    }
}

?>
</script>