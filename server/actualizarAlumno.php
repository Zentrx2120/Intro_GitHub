<?php
        session_start();
        if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
            header('location:login.php');
        }else{
        $database=new mysqli("localhost","root","","formulario");
        $q="update alumno set alumno.".$_POST['campo']."='".$_POST['valor']."' where alumno.curp='".$_POST['curp']."';";
        $query=$database->query($q);
        echo('Actualizado el usuario con curp='.$_POST['curp']);
        }
?>