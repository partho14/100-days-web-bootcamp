<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'admin@xyz.com' && $password == 'AdmiN0'){
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../admin/dashboard.php');
        }else{
            echo 'Invalid Credentials';
        }
    }