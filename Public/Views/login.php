<?php
include '../../Config/appConfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D compras | Food & Services</title>
    <link rel="apple-touch-icon" href="<?= APP_DIR; ?>assets/img/Recurso 1LogoD.png">
    <link rel="shortcut icon" href="<?= APP_DIR; ?>assets/img/Recurso 1LogoD.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= APP_DIR; ?>assets/css/estilos.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form method="POST" action="<?= APP_DIR; ?>controller/loginController" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" id="correo" name="correo" placeholder="Correo Electronico" required>
                    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
                    <br />
                    <br />
                    <p>Para poder iniciar sesion debes estar previamente registrado.<br />
                        Contacta un administrador si tienes problemas.</P>
                    <button>Entrar</button>
                    <a class="Button" href="http://localhost/imake/" style="background-color: #ee557b; color: #fff;padding: 10.5px;">Regresar</a>
                </form>

                <!--Register-->
                <form method="POST" action="<?= APP_DIR; ?>controller/registerController" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="nombreUsuario" name="nombreUsuario" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="col">
                            <input type="text" id="apellidoUsuario" name="apellidoUsuario" class="form-control" placeholder="Apellido" required>
                        </div>
                    </div>
                    <input type="email" id="correoUsuario" name="correoUsuario" placeholder="Correo Electronico" required>
                    <input type="password" id="contraseñaUsuario" name="contraseñaUsuario" placeholder="Contraseña" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?= APP_DIR; ?>assets/js/scriptLogin.js"></script>
</body>

</html>