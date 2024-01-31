<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `sign_up`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('U regjistruat me sukses');</script>";

        header("Location: index.php");
    } else {
        echo "<script>alert('Nuk u regjistruat');</script>";
    }
}
?>
