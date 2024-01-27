<?php
   session_start();
    if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
    header('location:login.php');
   }else{
   $database=new mysqli("localhost","root","","formulario");
   $query=$database->query("delete from alumno where alumno.curp='".$_POST['curp']."';");
   echo('Eliminado el usuario con curp='.$_POST['curp']);
   }
?>