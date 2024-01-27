<?php
    session_start();
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $database=new mysqli("localhost","root","","formulario");
    $query=$database->query("select * from admin where admin.correo='".$correo."' and admin.contrasena='".$contrasena."';");
    if($query->num_rows>0){
        $_SESSION['correo']=$correo;
        $_SESSION['contrasena']=$contrasena;
        while($data=$query->fetch_object()){
            $_SESSION['nombre']=$data->nombre;
        }
        header($_POST['url']."/admin.php");
    }
    else{
        echo 'Correo o Contraseña invalida';
    }
?>