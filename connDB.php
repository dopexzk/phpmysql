<?php
    $user = "admin";        //使用者帳號
    $password = "admin";    //使用者密碼
    $host = "localhost";    //主機
    $db = "test";           //資料庫名稱

    $conn = mysqli_connect($host,$user,$password) or die("資料庫連線錯誤啦北七");
    //連線
    mysqli_select_db($conn,$db);
    //連線
    mysqli_query($conn,"SET NAMES utf8");
    //設定輸出字體版本
?>