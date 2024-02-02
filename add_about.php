<script>
<?php
include("db.php");

$detaje = $_POST["detaje"];

$sql = "INSERT INTO `about` (`detaje`) VALUES ('$detaje')";


if ($conn->query($sql) == TRUE) {
    echo "alert('U regjistrua me sukses')";
} else {
    echo "alert('Nuk u regjistrua') ";
}
?>
</script>
