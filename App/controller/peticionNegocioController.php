<html>
<head>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

*{
  font-family: "Poppins";
}
</style>

</head>
<body>

<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../include/PHPMailer/src/Exception.php';
require '../include/PHPMailer/src/PHPMailer.php';
require '../include/PHPMailer/src/SMTP.php';
include '../../Config/appConfig.php';
require_once(APP_CONFIG_ROUTE . 'Conexion.php');

$DIR_PUBLIC = APP_PUBLIC_DIR;

$message = '';

if (!empty($_POST['nombreNegocio']) && !empty($_POST['nombrePropietario']) && !empty($_POST['nitNegocio']) && !empty($_POST['correoUsuario'])  && !empty($_POST['contrasenaUsuario'])){
    $sql = "INSERT INTO usuario (nombreUsuario, apellidoUsuario, contraseñaUsuario, correoUsuario, hashUsuario, idPerfilUsuario) VALUES (:nombreUsuario, :apellidoUsuario, :contrasenaUsuario, :correoUsuario, :hashUsuario, '3')";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':correoUsuario',$_POST['correoUsuario']);
    $nombre = ($_POST['nombreUsuario']);
    $hash = md5( rand(0,1000) );
    $stmt->bindParam(':hashUsuario', $hash);
    $stmt->bindParam(':apellidoUsuario', $_POST['apellidoUsuario']);
    $stmt->bindParam(':contrasenaUsuario', $_POST['contrasenaUsuario']);
    $stmt->bindParam(':nombreUsuario',$_POST['nombreUsuario']);
    $email = $_POST['correoUsuario'];
    $_password_us = $_POST['contrasenaUsuario'];
    $sql1 = "INSERT INTO peticionNegocio (nombreNegocio, nombrePropietario, nitNegocio , razonsocialNegocio, telefonoNegocio, fechaFundacion, nombreTipoNegocio) VALUES (:nombreNegocio, :nombrePropietario, :nitNegocio , :razonsocialNegocio, :telefonoNegocio, :fechaFundacion, :nombreTipoNegocio)";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bindParam(':nombreNegocio',$_POST['nombreNegocio']);
    $stmt1->bindParam(':nombrePropietario', $_POST['nombrePropietario']);
    $stmt1->bindParam(':nitNegocio', $_POST['nitNegocio']);
    $stmt1->bindParam(':razonsocialNegocio', $_POST['razonsocialNegocio']);
    $stmt1->bindParam(':telefonoNegocio', $_POST['telefonoNegocio']);
    $stmt1->bindParam(':fechaFundacion', $_POST['fechaFundacion']);
    $stmt1->bindParam(':nombreTipoNegocio', $_POST['nombreTipoNegocio']);

    $mail = new PHPMailer(true);
    try {
        //$mail->SMTPDebug = 2;  // Sacar esta línea para no mostrar salida debug
       # $mail->SMTPDebug = 2;
        $mail->SMTPOptions = array( 
            'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true 
            )
            );
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Host de conexión SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'decompras498@gmail.com';                 // Usuario SMTP
        $mail->Password = 'decompras498';                           // Password SMTP
        $mail->SMTPSecure = 'tls';                            // Activar seguridad TLS
        $mail->Port = 587;                                    // Puerto SMTP
    
        #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];  // Descomentar si el servidor SMTP tiene un certificado autofirmado
        #$mail->SMTPSecure = false;				// Descomentar si se requiere desactivar cifrado (se suele usar en conjunto con la siguiente línea)
        #$mail->SMTPAutoTLS = false;			// Descomentar si se requiere desactivar completamente TLS (sin cifrado)
     
        $mail->setFrom($email);		// Mail del remitente
        $mail->addAddress('dcomprasteam@gmail.com');     // Mail del destinatario
     
        $mail->isHTML(true);
        $mail->Subject = 'Nueva peticion de negocio! '+$negocio;  // Asunto del mensaje
        $mail->Body    = '
        <!DOCTYPE html>
        <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
        <head>
            <meta charset="utf-8"> <!-- utf-8 works for most cases -->
            <meta name="viewport" content="width=device-width">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
            <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
            <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
        
            <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
        
            <!-- CSS Reset : BEGIN -->
            <style>
        
                html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }
        
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }
        
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        
        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }
        
        *[x-apple-data-detectors],  
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        .im {
            color: inherit !important;
        }
        
        img.g-img + div {
            display: none !important;
        }
        
        
        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
        
        
            </style>
        
            <!-- CSS Reset : END -->
        
            <!-- Progressive Enhancements : BEGIN -->
            <style>
        
                .primary{
            background: #17bebb;
        }
        .bg_white{
            background: #ffffff;
        }
        .bg_light{
            background: #f7fafa;
        }
        .bg_black{
            background: #000000;
        }
        .bg_dark{
            background: rgba(0,0,0,.8);
        }
        .email-section{
            padding:2.5em;
        }
        
        /*BUTTON*/
        .org{
            color: #F17C12;
        }
        .btn{
            padding: 10px 15px;
            display: inline-block;
        }
        .btn.btn-primary{
            border-radius: 5px;
            background: #F17C12;
            color: #ffffff;
        }
        .btn.btn-white{
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }
        .btn.btn-white-outline{
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }
        .btn.btn-black-outline{
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }
        .btn-custom{
            color: rgba(0,0,0,.3);
            text-decoration: underline;
        }
        
        h1,h2,h3,h4,h5,h6{
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }
        
        body{
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0,0,0,.4);
        }
        
        a{
            color: #17bebb;
        }
        
        table{
        }
        /*LOGO*/
        
        .logo h1{
            margin: 0;
        }
        .logo h1 a{
            color: #F17C12;
            font-size: 24px;
            font-weight: 700;
        }
        
        /*HERO*/
        .hero{
            position: relative;
            z-index: 0;
        }
        .position{
            color: black;
        }
        .hero .text{
            color: rgba(0,0,0,.3);
        }
        .hero .text h2{
            color: #000;
            font-size: 34px;
            margin-bottom: 0;
            font-weight: 200;
            line-height: 1.4;
        }
        .hero .text h3{
            font-size: 24px;
            font-weight: 300;
        }
        .hero .text h2 span{
            font-weight: 600;
            color: #000;
        }
        
        .text-author{
            bordeR: 1px solid rgba(0,0,0,.05);
            max-width: 50%;
            margin: 0 auto;
            padding: 2em;
        }
        .text-author img{
            border-radius: 50%;
            padding-bottom: 20px;
        }
        .text-author h3{
            margin-bottom: 0;
        }
        ul.social{
            padding: 0;
        }
        ul.social li{
            display: inline-block;
            margin-right: 10px;
        }
        
        /*FOOTER*/
        
        .footer{
            border-top: 1px solid rgba(0,0,0,.05);
            color: rgba(0,0,0,.5);
        }
        .footer .heading{
            color: #000;
            font-size: 20px;
        }
        .footer ul{
            margin: 0;
            padding: 0;
        }
        .footer ul li{
            list-style: none;
            margin-bottom: 10px;
        }
        .footer ul li a{
            color: rgba(0,0,0,1);
        }

        
        
        @media screen and (max-width: 500px) {
        
        
        }
        
        
            </style>
        
        
        </head>
        
        <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
            <center style="width: 100%; background-color: #f1f1f1;">
            <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
              &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
            </div>
            <div style="max-width: 600px; margin: 0 auto;" class="email-container">
                <!-- BEGIN BODY -->
              <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                  <tr>
                  <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tr>
                              <td class="logo" style="text-align: center;">
                              <img src="https://raw.githubusercontent.com/LuisC111/Dcompras-Frontend/main/images/logoD.png" alt="" style="width: 200px; max-width: 600px; height: auto; margin: auto; display: block;">                                      
                              </td>
                          </tr>
                      </table>
                  </td>
                  </tr><!-- end tr -->
                        <tr>
                  <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td style="padding: 0 2.5em; text-align: center; padding-bottom: 3em;">
                                <div class="text">
                                    <h2>Bienvenido a <span class="org" style="color: #F17C12;">Dcompras</span><br><b> '.$nombre.'</b></h2>
                                </div>
                            </td>
                        </tr>
                        <tr>
                              <td style="text-align: center;">
                                  <div class="text-author">
                                  <img src="https://raw.githubusercontent.com/LuisC111/Dcompras-Frontend/main/images/perfil.jpg" alt="" style="width: 100px; max-width: 600px; height: auto; margin: auto; display: block;">                                      
                                      <b><span class="position" style="color: black;">Tu solicitud se ha enviado con exito, en los proximos dias te llegara una respuesta</span></b>
                                       <p><a href="http://localhost/Dcompras-app/App/model/activacionModel.php?email='.$email.'&hash='.$hash.'" class="btn-custom">Si no funciona, haz click aquí!</a></p>
                                   </div>
                              </td>
                            </tr>
                    </table>
                  </td>
                  </tr><!-- end tr -->
              <!-- 1 Column Text + Button : END -->
              </table>
              <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                  <tr>
                  <td valign="middle" class="bg_light footer email-section">
                    <table>
                        <tr>
                        <td valign="top" width="33.333%" style="padding-top: 20px;">
                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td style="text-align: left; padding-right: 10px;">
                                  <h3 class="heading">Nosotros</h3>
                                  <p>Sistema de información para la compra y venta de productos en internet.</p>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td valign="top" width="33.333%" style="padding-top: 20px;">
                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td style="text-align: left; padding-left: 5px; padding-right: 5px;">
                                  <h3 class="heading">Contáctanos</h3>
                                  <ul>
                                            <li><span class="text">Localidad Antonio Nariño</span></li>
                                            <li><span class="text">+57 3024358217</span></a></li>
                                          </ul>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td valign="top" width="33.333%" style="padding-top: 20px;">
                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td style="text-align: left; padding-left: 10px;">
                                  <h3 class="heading">Links</h3>
                                  <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Acerca</a></li>
                                            <li><a href="#">Servicios</a></li>
                                            <li><a href="#">Comprar</a></li>
                                          </ul>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr><!-- end: tr -->
              </table>
        
            </div>
          </center>
        </body>
        </html>
        
        ';    // Contenido del mensaje (acepta HTML)
        $mail->AltBody = 'Este es el contenido del mensaje en texto plano';    // Contenido del mensaje alternativo (texto plano)
     

        $nuevo_usuario = mysqli_query($link, "SELECT * FROM usuario WHERE correoUsuario='$email'");
    if (mysqli_num_rows($nuevo_usuario) > 0) {
        $Duplicado = "!El correo $email ya envio una solicitud!";
        echo "<script> window.addEventListener('load', init, false);
        function init () {
            Swal.fire({
                title: '¡Ha ocurrido un error!',
                text: '$Duplicado',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
              }).then((willDelete) => {
            if (willDelete) {
                location.href = '${DIR_PUBLIC}Views/index.php';
            } else {
                location.href = '${DIR_PUBLIC}Views/index.php';
            }
          });
        }
        
          </script>";  
    }else if($stmt->execute()){
        $mail->send();
        $exito = "Revisa tu correo electronico $email para revisar la respuesta a tu solicituid.";
        echo "<script> window.addEventListener('load', init, false);
        function init () {
            Swal.fire({
                title: '¡Solicitud enviada con exito!',
                text: '$exito',
                icon: 'success',
                buttons: true,
                dangerMode: true,
              }).then((willDelete) => {
            if (willDelete) {
                location.href = '${DIR_PUBLIC}Views/index.php';
            } else {
                location.href = '${DIR_PUBLIC}Views/index.php';
            }
          });
        }
        
          </script>";  
    }
        

    } catch (Exception $e) {
        echo 'Hubo un error al enviar tu solicitud de negocio: ', $mail->ErrorInfo;
    }



}

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

		</body>

</html>













