<?php
    require_once("connDB.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $sql = "INSERT INTO `student`(name,phone,mail)VALUE('$name','$phone','$mail')";
    mysqli_query($conn,$sql);
    header("location:delete-table.php");
?> 