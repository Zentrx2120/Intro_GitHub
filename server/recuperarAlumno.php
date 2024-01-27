<?php
    $database=new mysqli("localhost","root","","formulario");
    $query=$database->query("select * from alumno where alumno.curp='".$_POST['curp']."';");
    $arr=$query->fetch_object();
    $json=json_encode($arr);
    echo $json;
?>