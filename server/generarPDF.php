<?php
    require('libraries/fpdf/fpdf.php');
    class PDF extends FPDF{
        function header(){
            $this->Image('utilities/head.jpg',10,10,180);
            $this->Ln(20);
        }
        function footer(){
            $this->SetY(-20);
            $this->SetFont('helvetica','I','10');
            $this->Cell(0,15,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    $database=new mysqli("localhost","root","","formulario");
    $q="SELECT *FROM alumno where alumno.curp='".$_GET['curp']."';";
    $query=$database->query($q);
    $arr=$query->fetch_array();
    $discapacidad_m=0;
    $discapacidad_a=0;
    $discapacidad_v=0;
    $otra_dis=$arr['otradiscapacidad'];
    if($otra_dis=="")$otra_dis="No";
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf ->AddPage();
    $pdf->SetFont('courier','B',14);
    $pdf->Cell(40,20," ",0,1);
    $pdf->Cell(40,20," ",0,1);
    $pdf->Cell(40,20,"Curp: ".$_GET['curp'],0,1);
    $pdf->Cell(40,20,"Boleta: ".$_GET['boleta'],0,1);
    $pdf->Cell(40,20,"Salon: ".$_GET['salon'],0,1);
    $pdf->Cell(40,20,"Horario: ".$_GET['horario'],0,1);
    $pdf->Cell(40,20,"Fecha-Cita: ".$arr['fecha'],0,1);
    $pdf->Cell(40,20,"Nombre: ".$arr['nombre'],0,1);
    $pdf->Cell(40,20,"Apellido Paterno: ".$arr['apellidopaterno'],0,1);
    $pdf->Cell(40,20,"Apellido Materno: ".$arr['apellidopaterno'],0,1);
    $pdf->Cell(40,20,"Genero: ".$arr['genero'],0,1);
    $pdf->Cell(40,20,"Correo: ".$arr['correo'],0,1);
    $pdf->Cell(40,20," ",0,1);
    $pdf->Cell(40,20," ",0,1);
    $pdf->Cell(40,20,"Telefono: ".$arr['telefono'],0,1);
    $pdf->Cell(40,20,"Estado: ".$arr['estado'],0,1);
    $pdf->Cell(40,20,"Municipio: ".$arr['municipio'],0,1);
    $pdf->Cell(40,20,"Calle: ".$arr['calle'],0,1);
    $pdf->Cell(40,20,"Discapacidad Motriz: ".$arr['discapacidadmotriz'],0,1);
    $pdf->Cell(40,20,"Discapacidad Auditiva: ".$arr['discapacidadauditiva'],0,1);
    $pdf->Cell(40,20,"Discapacidad Visual: ".$arr['discapacidadvisual'],0,1);
    $pdf->Cell(40,20,"Otro Discapacidad: ".$otra_dis,0,1);
    $pdf->Cell(40,20,"Promedio : ".$arr['promedio'],0,1);
    $pdf->Output();
?>