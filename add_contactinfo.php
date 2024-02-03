<script>
<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO `contact_info`(`contact_infoID`, `Phone`, `Email`) VALUES('','$phone', '$email')";


    if ($conn->query($sql) === TRUE) {
        echo "alert('U regjistrua me sukses')";
    } else {
        echo "alert('Nuk u regjistrua') ";
    }

    header("Location: panel.php");
}
?>
</script>

