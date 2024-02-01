<script>
<?php

include ('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES ('$name', '$email', '$phone', '$subject', '$message');";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "alert('U dërgua me sukses')";
    } else {
        echo "alert('Nuk u dërgua')";
    }
}

?>
</script>