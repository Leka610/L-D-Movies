<script>
<?php
include("db.php");

if (isset($_POST["UserID"])) {
$UserID=$_POST["UserID"];
$firstname = $_POST["Firstname"];
$lastname = $_POST["Lastname"];
$username = $_POST["Username"];
$password = $_POST["Password"];

$sql_update="UPDATE `perdoruesit` SET `Firstname`='$firstname',`Lastname`='$lastname',`Username`='$username',`Password`='$password' WHERE UserID=$UserID";

if ($conn->query($sql_update) === TRUE) {
    echo "alert('U ndryshua me sukses')";
} else {
    echo "alert('Nuk u ndryshua')";
}
}
else{
    echo "alert('Gabim: 'id' nuk eshte caktuar')";
}

?>
</script>

