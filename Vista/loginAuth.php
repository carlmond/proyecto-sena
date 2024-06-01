<?php
if(isset($_POST['btnLogin'])){
    $txtEmail = $_POST['email'];
    $txtPassword = $_POST['password'];

    include "../modelo/conexion.php";
    //$conn
    //Consulta a BD
    $sql = "SELECT * FROM usuario  WHERE email ='".$txtEmail."' AND password = '".$txtPassword."'";
    $result = $conn->query($sql);
    if($result-> num_rows>0){
        $user =$result->fetch_assoc();
        session_start();
        $_SESSION['admin'] = $user['name'];
        header("Location: ../dashboard/indexDash.php");
        exit();
    }
    
    header("Location: index.php");
    

}



?>