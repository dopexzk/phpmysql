<?php
    require_once("connDB.php");
    session_start();

    if($_POST["user"] == "" || $_POST["pw"] == ""){
        // echo "請輸入帳號密碼";
        header("location:login.php?errcode=0");
    }else{
        // if(isset($_POST["user"]) && isset($_POST["pw"])){
            $user = $_POST["user"];
            $pw = $_POST["pw"];

            $sql = "SELECT * FROM `members` WHERE user='$user'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if($pw == $row["pw"]){
                //密碼正確
                echo "success";
                $_SESSION["user"] = $row["user"];
                $_SESSION["level"] = $row["level"];

                if($_SESSION["level"] == 0){
                    header("location:admin.php");
                }else{
                    header("location:members.php");
                }
                // switch($_SESSION["level"]){
                //     case 0:
                //         $_SESSION["level"] = "管理員"; 
                //         break;
                //     case 1:
                //         $_SESSION["level"] = "一般會員";
                //         break;
                // }
                // echo $_SESSION["user"]."你好，您的權限為".$_SESSION["level"];
            }else{
                //帳號或密碼錯誤
                // echo "error";
                header("location:login.php?errcode=1");
            }
       // }
    }
?>