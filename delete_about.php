<script>
<?php
include 'db.php';

if(isset($_GET['about_id'])){
    $about_id=$_GET['about_id'];

    $sql="DELETE FROM `about` WHERE about_id=$about_id";

    if ($conn->query($sql) === TRUE) {
        echo "alert('Është fshirë me sukses')";
    } else {
        echo "alert('Nuk është fshirë') ";
    }
}
$conn->close();


?>
</script>