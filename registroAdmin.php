<?php
  session_start();
  if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
    header('location:login.php');
  }
?>
<?php $titulo="Registro Admin";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './assets/head.php'?>
    </head>
    <body>
        <?php include './assets/menuAdmin.php'; ?>
        <header class="masthead" style="background-color: black">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Registro</h1>
                            <span class="subheading">Registro desde el Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="my-5">
                            <form id="Formulario-Registro">
                                <div id="form-data">
                                <div class="block-form">
                                <h3><i class="fa-solid fa-id-card"></i> Indentidad</h3>
                                <div class="form-floating">
                                    <input type="text" placeholder="Nombre" type="text" id="nombre" name="nombre"class="form-control" required>
                                    <label for="nombre">Nombre o Nombres</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="apellidopaterno" placeholder="Apellido" type="text" id="apellido" class="form-control" required>
                                    <label for="nombre">Apellido Paterno</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="apellidomaterno" placeholder="Apellido" type="text" id="apellido" class="form-control" required>
                                    <label for="nombre">Apellido Materno</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="boleta" placeholder="Preboleta" type="text" id="pm" class="form-control" required>
                                    <label for="nombre">Preboleta</label>
                                    <div class="invalid-feedback" data-sb-feedback="boleta">La boleta no es valida.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="curp" placeholder="Apellido"  id="curp" class="form-control">
                                    <label for="nombre">CURP</label>
                                    <div class="invalid-feedback" data-sb-feedback="curp">El CURP es invalido.</div>
                                </div>
                                <h5>Género: </h5>
                                <div class="form-check form-check-inline">
                                    <input type="radio" value="masculino" checked name="genero" placeholder="genero"   class="form-check-input" required>
                                    <label for="genero" class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" value="femenino" name="genero" placeholder="genero"   class="form-check-input" required>
                                    <label for="genero" class="form-check-label">Femenino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" value="otro" name="genero" placeholder="genero"   class="form-check-input" required>
                                    <label for="genero" class="form-check-label">Otro</label>
                                </div>
                                <div class="form-floating">
                                    <input type="date" name="nacimiento" placeholder="Apellido"  id="nac" class="form-control" required>
                                    <label for="nombre">Fecha De Nacimiento</label>
                                    <div class="invalid-feedback" data-sb-feedback="curp">El CURP es invalido.</div>
                                </div>

                                </div>
                                <div class="block-form">
                                    <h3><i class="fa-solid fa-address-book"></i> Contacto</h3>
                                    <div class="form-floating">
                                        <input name="correo" placeholder="Email" type="email" id="coreo" class="form-control" required>
                                        <label for="nombre"><i class="fa-solid fa-envelope"></i> Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El correo es invalido.</div>
                                    </div>
                                    <div class="form-floating">
                                        <input  placeholder="Telefono" name="telefono" type="number" id="telefono" class="form-control" required>
                                        <label for="nombre"><i class="fa-solid fa-phone"></i> Teléfono</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El teléfono es invalido.</div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <select name="estado" id="estado" class="form-select obd">
                                                    <option value="Aguascalientes">Aguascalientes</option>
                                                    <option value="Baja California">Baja California</option>
                                                    <option value="Baja California Sur">Baja California Sur</option>
                                                    <option value="Campeche">Campeche</option>
                                                    <option value="Coahuila">Coahuila</option>
                                                    <option value="Colima">Colima</option>
                                                    <option value="Chiapas">Chiapas</option>
                                                    <option value="Chihuahua">Chihuahua</option>
                                                    <option value="CDMX">Ciudad de México</option>
                                                    <option value="Durango">Durango</option>
                                                    <option value="Guanajuato">Guanajuato</option>
                                                    <option value="Guerrero">Guerrero</option>
                                                    <option value="Hidalgo">Hidalgo</option>
                                                    <option value="Jalisco">Jalisco</option>
                                                    <option value="Mexico">México</option>
                                                    <option value="Michoacan">Michoacán</option>
                                                    <option value="Morelos">Morelos</option>
                                                    <option value="Nayarit">Nayarit</option>
                                                    <option value="Nuevo Leon">Nuevo León</option>
                                                    <option value="Oaxaca">Oaxaca</option>
                                                    <option value="Puebla">Puebla</option>
                                                    <option value="Queretaro">Querétaro</option>
                                                    <option value="Quintana Roo">Quintana Roo</option>
                                                    <option value="San Luis Potosi">San Luis Potosí</option>
                                                    <option value="Sinaloa">Sinaloa</option>
                                                    <option value="Sonora">Sonora</option>
                                                    <option value="Tabasco">Tabasco</option>
                                                    <option value="Tamaulipas">Tamaulipas</option>
                                                    <option value="Tlaxcala">Tlaxcala</option>
                                                    <option value="Veracruz">Veracruz</option>
                                                    <option value="Yucatan">Yucatán</option>
                                                    <option value="Zacatecas">Zacatecas</option>
                                                </select>
                                                <label for="nombre">Estado</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="municipio" placeholder="Apellido" type="text" id="municipio" class="form-control" required>
                                                <label for="nombre">Municipio o Alcadía</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="calle" placeholder="Apellido" type="text" id="calle" class="form-control" required>
                                                <label for="nombre">Calle</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="number" name="numerolote" placeholder="Apellido" type="text" id="numerolote" class="form-control" required>
                                                <label for="nombre">Número</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="number" name="codigopostal" placeholder="Apellido" type="text" id="codigopostal" class="form-control" required>
                                                <label for="nombre">Código Postal</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3><i class="fa-solid fa-globe"></i> Procedencia</h3>
                                    <div class="form-floating">
                                        <select name="escuela" id="escuela" class="form-select obd">
                                            <option value="CET">CET Walter Cross Buchanan</option>
                                            <option value="CECyT 1">CECyT 1 Gonzalo Vázquez Vela</option>
                                            <option value="CECyT 2">CECyT 2 Miguel Bernal</option>
                                            <option value="CECyT 3">CECyT 3 Estanislao Ramírez Ruiz</option>
                                            <option value="CECyT 4">CECyT 4 Lázaro Cárdenas del Río</option>
                                            <option value="CECyT 5">CECyT 5 Benito Juárez García</option>
                                            <option value="CECyT 6">CECyT 6 Miguel Othón de Mendizábal</option>
                                            <option value="CECyT 7">CECyT 7 Cuauhtémoc</option>
                                            <option value="CECyT 8">CECyT 8 Narciso Bassols</option>
                                            <option value="CECyT 9">CECyT 9 Juan de Dios Bátiz</option>
                                            <option value="CECyT 10">CECyT 10 Carlos Vallejo Márquez</option>
                                            <option value="CECyT 11">CECyT 11 Wilfrido Massiú</option>
                                            <option value="CECyT 12">CECyT 12 José María Morelos y Pavón</option>
                                            <option value="CECyT 13">CECyT 13 Ricardo Flores Magón</option>
                                            <option value="CECyT 14">CECyT 14 Luis Enrique Erro</option>
                                            <option value="CECyT 15">CECyT 15 Diodoro Antúnez</option>
                                            <option value="CECyT 19">CECyT 19 Leona Vicario</option>
                                        </select>
                                        <label for="escuela"><i class="fa-solid fa-school"></i> Escuela</label>
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                    <div class="">
                                        <label for="Otra">Otra</label>
                                        <input type="checkbox"class="obd form-check" id="otraEscuela">
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                    <div class="form-floating"id="OtraEscuela">
                                        <input type="text" name="escuela2" id="" class="obd form-control" value="">
                                        <label for="escuelas2"><i class="fa-solid fa-school"></i> Otra Escuela</label>
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3>Dificultades</h3>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Motriz</label>
                                        <input name="discapacidadmotriz" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El teléfono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Auditiva</label>
                                        <input name="discapacidadauditiva" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El teléfono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Visual</label>
                                        <input name="discapacidadvisual" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El teléfono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Otra Discapacidad</label>
                                        <input  placeholder="Discapacidad" type="checkbox" id="otraDiscapacidadCheck" class="form-check obd" require>
                                    </div>
                                    <div class="form-floating" id="otraDiscapacidadCampo" style="display: none;">
                                        <input type="text" name="otradiscapacidad" id="" class="obd form-control" value="">
                                        <label for="escuelas2"><i class="fas fa-wheelchair"></i> Otra discapacidad</label>
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La discapacidad es invalida.</div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <h3>Promedio</h3>
                                    <div class="form-floating">
                                        <input name="promedio" placeholder="Promedio" type="number" step="0.01" id="promedio" class="form-control" require>
                                        <label for="nombre"><i class="fa-solid fa-graduation-cap"></i> Promedio</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El teléfono es invalido.</div>
                                    </div>
                                </div>
                                <button  class="btn btn-danger text-uppercase" id="enviarFormulario"><i class="fa-solid fa-paper-plane"></i> Send</button>
                                </div>
                                <div id="form-enviar" style="display: none;">
                                        <div id="res"></div>
                                        <h3>Deseas Continuar o Editar</h3>
                                        <button id="regresarFormulario" class="btn btn-primary text-uppercase"><i class="fa-solid fa-rotate-left"></i> Editar</button>
                                        <button  type="submit" class="btn btn-success text-uppercase"><i class="fa-solid fa-paper-plane"></i> Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include './assets/footer.php'; ?>
        <script src="js/Formulario.js" type="module"></script>
    </body>
</html>