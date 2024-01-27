<?php
    session_start();
    if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
        echo('Acceso denegado');
        header("location:../login.php");
    }
    else{
        unset($_SESSION['correo']);
        unset($_SESSION['contrasena']);
        header("location:../");
    }
?>