<script>
<?php
include("db.php");

$contact_infoID = $_POST["contact_infoID"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$sql_update = "UPDATE `contact_info` SET `Phone`='$phone',`Email`='$email' WHERE contact_infoID=$contact_infoID";

if ($conn->query($sql_update) === TRUE) {
    echo "alert('U ndryshua me sukses')";
} else {
    echo "alert('Nuk u ndryshua')";
}


?>
</script>