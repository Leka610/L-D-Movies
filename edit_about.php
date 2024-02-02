<script>
<?php
include("db.php");

if (isset($_POST["about_id"])) {
$about_id=$_POST["about_id"];
$detaje=$_POST["detaje"];

$sql_update="UPDATE `about` SET `detaje`='$detaje' WHERE about_id=$about_id";

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

