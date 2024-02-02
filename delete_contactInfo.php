<script>
<?php
include 'db.php';

if(isset($_GET['contact_infoID'])){
    $contact_infoID=$_GET['contact_infoID'];

    $sql="DELETE FROM `contact_info` WHERE contact_infoID=$contact_infoID";

    if ($conn->query($sql) === TRUE) {
        echo "alert('Është fshirë me sukses')";
    } else {
        echo "alert('Nuk është fshirë') ";
    }
}
$conn->close();

?>
</script>