<?php
  session_start();
  if(isset($_SESSION['correo']) && isset($_SESSION['contrasena'])){
    header('location:admin.php');
  }
?>
<?php $titulo="Login";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './assets/head.php'?>
    </head>
    <body>
        <?php  include './assets/menu.php' ?>
        <header class="masthead" style="color:white; background-image: url(https://s3.amazonaws.com/cms.ipressroom.com/401/files/202306/6487c441a1383573c179423e_CampusConvo_LnS_FINAL/CampusConvo_LnS_FINAL_c07be7ca-db43-4737-a9ea-f6263c702e38-prv.jpg)";>
              <div class="container justify-content-center">
                    <div class="site-heading">
                            <form action="" class="opacity-75 text-dark" id="Formulario-Login">
                                <h1>Login</h1>
                                <div class="form-floating">
                                    <input type="email" placeholder="Correo" class="form-control" name='correo'>
                                    <label for=""><i class="fa-solid fa-envelope"></i> Email</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" placeholder="Correo" class="form-control" name='contrasena'>
                                    <label for=""><i class="fa-solid fa-lock"></i> Contraseña</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                    </div>
              </div>
        </header>
        <?php include './assets/footer.php'; ?>
        <script type="module" src="js/Login.js"></script>
    </body>
</html>