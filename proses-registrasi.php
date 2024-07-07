<?php 
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $open = fopen("user.txt", "a+");
    $fill = fgets($open, 80);

    $split = explode("|", $temp);
    fputs($open, "$nama|$alamat|$email|$password\n");
    fclose($open);

    header("location:index.php");
?>
