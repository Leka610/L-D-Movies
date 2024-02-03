<script>
<?php
include("db.php");

$firstname = $_POST["Firstname"];
$lastname = $_POST["Lastname"];
$username = $_POST["Username"];
$password = $_POST["Password"];

$sql="INSERT INTO `perdoruesit`(`UserID`, `Firstname`, `Lastname`, `Username`, `Password`) VALUES ('','$firstname','$lastname','$username','$password')";

if ($conn->query($sql) === TRUE) {
    echo "alert('U regjistrua me sukses')";
} else {
    echo "alert('Nuk u regjistrua') ";
}

?>
</script>