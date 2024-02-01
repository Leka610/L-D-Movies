<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `sign_up` WHERE `Email` = '$email' AND `Password` = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Jeni regjistruar me sukses');</script>";
            header("Location: index.php");
        } else {
            echo "<script>alert('Keni dhënë kredenciale të gabuara');</script>";
        }
    } else {
        echo "<script>alert('Gabim');</script>";
    }
}
?>