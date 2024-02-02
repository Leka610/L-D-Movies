<script>
<?php
include 'db.php';

if(isset($_GET['fotoID'])){
    $fotoID=$_GET['fotoID'];

    $sql="DELETE FROM `filmi_foto` WHERE fotoID=$fotoID";

    if ($conn->query($sql) === TRUE) {
        echo "alert('Është fshirë me sukses')";
    } else {
        echo "alert('Nuk është fshirë') ";
    }
}
$conn->close();


?>
</script>