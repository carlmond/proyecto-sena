<?php
session_start();


    if (!isset($_SESSION['admin'])){
        header("Location: loginForm.php");
        exit();
    }
    header("Location: admin.php");




?>