<?php
  session_start();
  if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
    header('location:login.php');
  }
?>
<?php $titulo="Admin";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './assets/head.php'?>
    </head>
    <body>
        <?php include './assets/menuAdmin.php'; ?>
        <header class="masthead" style="background-color: black; color:white">
              <div class="container justify-content-center">
                    <div class="site-heading">
                            <h1>Admin</h1>
                            <p><?php echo($_SESSION['nombre']) ?></p>
                    </div>
              </div>
        </header>
        <div class="container">
            <h2>Bucar Usuario para Modificar o Eliminar</h2>
            <form action="" class="contactForm" id='buqueda'>
                <div class="d-flex flex-row">
                    <div class="form-floating">
                        <input name="curp" type="text" placeholder="Buscar" class="form-control">
                        <label for=""><i class="fa-solid fa-magnifying-glass"></i> Buscar por CURP</label>
                    </div>
                    <button id="submitSearch"><i class="btn btn-success fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <main class="container">
            <div id="tabla-buscar" style="display: none;">
                <h2>Usuario a Modificar o Eliminar</h2>
                <table class="table " id="tabla-buscar">
                    <thead class="text-uppercase" id="admin-head"><tr><th>Eliminar</th><th>nombre</th><th>apellidopaterno</th><th>apellidomaterno</th><th>boleta</th><th>curp</th><th>genero</th><th>nacimiento</th><th>correo</th><th>telefono</th><th>estado</th><th>municipio</th><th>calle</th><th>numerolote</th><th>codigopostal</th><th>escuela</th><th>discapacidadmotriz</th><th>discapacidadauditiva</th><th>discapacidadvisual</th><th>otradiscapacidad</th><th>promedio</th><th>cita</th><th>Fecha</th></tr></thead>
                    <tbody id="admin-table"><tr><td><button class="btn btn-danger del" id="del"curp="">Eliminar</button></td><td><form id="form-edit-0"><input type="text" name="ipt" campo="nombre" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-1"><input type="text" name="ipt" campo="apellidopaterno" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-2"><input type="text" name="ipt" campo="apellidomaterno" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-3"><input type="text" name="ipt" campo="boleta" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-4"><input type="text" name="ipt" campo="curp" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-5"><input type="text" name="ipt" campo="genero" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-6"><input type="text" name="ipt" campo="nacimiento" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-7"><input type="text" name="ipt" campo="correo" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-8"><input type="text" name="ipt" campo="telefono" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-9"><input type="text" name="ipt" campo="estado" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-10"><input type="text" name="ipt" campo="municipio" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-11"><input type="text" name="ipt" campo="calle" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-12"><input type="text" name="ipt" campo="numerolote" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-13"><input type="text" name="ipt" campo="codigopostal" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-14"><input type="text" name="ipt" campo="escuela" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-15"><input type="text" name="ipt" campo="discapacidadmotriz" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-16"><input type="text" name="ipt" campo="discapacidadauditiva" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-17"><input type="text" name="ipt" campo="discapacidadvisual" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-18"><input type="text" name="ipt" campo="otradiscapacidad" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-19"><input type="text" name="ipt" campo="promedio" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-20"><input type="text" name="ipt" campo="cita" curp="" value=""> <button class="btn btn-danger">Modificar</button></form></td><td><form id="form-edit-21"><input type="text" name="ipt" campo="cita" curp="MAGA240103HMSRRNA5" value="" required="1" placeholder="2" id="form-edit-20"> <button class="btn btn-danger" type="submit">Modificar</button></form></td></tr></tbody>
                </table>
            </div>
            <h2>Generar PDF</h2>
            <form action="" class="contactForm" id='buqueda-pdf'>
                <div class="d-flex flex-row">
                    <div class="form-floating">
                        <input name="curp" type="text" placeholder="Buscar" class="form-control">
                        <label for=""><i class="fa-solid fa-magnifying-glass"></i> Buscar por CURP</label>
                    </div>
                    <button id="buqueda-pdf-btn"><i class="btn btn-success fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <h2>Usuarios</h2>
            <form action="" class="contactForm" id='buqueda-user'>
                <div class="d-flex flex-row">
                    <div class="form-floating">
                        <input name="curp" type="text" placeholder="Buscar" class="form-control">
                        <label for=""><i class="fa-solid fa-magnifying-glass"></i> Buscar por CURP</label>
                    </div>
                    <button id="buqueda-user-btn"><i class="btn btn-success fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <table class="table">
                <thead class="text-uppercase" id="admin-head"><tr><th>nombre</th><th>apellidopaterno</th><th>apellidomaterno</th><th>boleta</th><th>curp</th><th>genero</th><th>nacimiento</th><th>correo</th><th>telefono</th><th>estado</th><th>municipio</th><th>calle</th><th>numerolote</th><th>codigopostal</th><th>escuela</th><th>discapacidadmotriz</th><th>discapacidadauditiva</th><th>discapacidadvisual</th><th>otradiscapacidad</th><th>promedio</th><th>cita</th><th>Fecha</th></tr></thead>
                <tbody id="users">
                </tbody>
            </table>
        </main>
        <?php include './assets/footer.php'; ?>
        <script type="module" src="js/Admin.js"></script>
    </body>
</html>