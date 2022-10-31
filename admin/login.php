<?php
   include('php/connection.php');
   session_start();
    if(isset($_POST["logins"])){
        $email = $_POST["adminEmial"];
        $pass = $_POST["adminPass"];
        $sql = "select * from admin_tb where email='$email' and password='$pass'";
        $result = $conn -> query($sql);
        if(mysqli_num_rows($result) > 0){
            sleep(1);
            $row = $result -> fetch_object();
            $_SESSION["EMAIL_SESSION"]=$row -> email;
            $_SESSION["ID_SESSION"]=$row -> id;
            header("Location: ./../admin/home.php");
        }else{
            sleep(2);
            header("Location: ./../admin/error404.html");
        }
    }
?>