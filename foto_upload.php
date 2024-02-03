<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "upload_foto/";
        $targetfile = $targetDir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetfile)) {
            echo "Foto u ngarkua";
        } else {
            echo "Nuk u ngarkua";
        }
    } else {
        echo "Nuk ka folder";
    }
}


?>