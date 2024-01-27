<?php
    session_start();
    if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
        header('location:login.php');
    }
    else{
        $database=new mysqli("localhost","root","","formulario");
        $query=$database->query("select * from alumno where alumno.curp='".$_POST['curp']."';");
        echo('{"data":[');
        echo(json_encode($query->fetch_object()));
        echo(",");
        while($curr=$query->fetch_object()){
            echo(json_encode($curr));
            echo(",");
        }
        echo("{}]}");
    }
?>