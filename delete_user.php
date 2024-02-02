<script>
<?php
include 'db.php';

if(isset($_GET['UserID'])){
    $UserID=$_GET['UserID'];

    $sql="DELETE FROM `perdoruesit` WHERE UserID=$UserID";

    if ($conn->query($sql) === TRUE) {
        echo "alert('Është fshirë me sukses')";
    } else {
        echo "alert('Nuk është fshirë') ";
    }
}
$conn->close();

?>
    
</script>