<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer/PHPMailer.php';
require '../PHPMailer/PHPMailer/SMTP.php';

if (isset($_POST['enviar'])) {
    if (empty($_POST['nombre'])) {
?>
        <div class="pt-5">
            <center>
                <h1 class="bad mt-5">Debe llenar el campo de Nombre</h1>
            </center>
        </div>
        <script>
            setTimeout(function() {
                location.href = "../contacto.html";
            }, 1000 * 10);
        </script>
    <?php
    } elseif (empty($_POST['email'])) {
    ?>
        <div class="pt-5">
            <center>
                <h1 class="bad mt-5">Debe llenar el campo de correo</h1>
            </center>
        </div>
        <script>
            setTimeout(function() {
                location.href = "../contacto.html";
            }, 1000 * 10);
        </script>
    <?php
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    ?>
        <div class="pt-5">
            <center>
                <h1 class="bad mt-5">Debe ser una dirección de email válida</h1>
            </center>
        </div>
        <script>
            setTimeout(function() {
                location.href = "../contacto.html";
            }, 1000 * 10);
        </script>
    <?php
    } elseif (empty($_POST['comentarios'])) {
    ?>
        <div class="pt-5">
            <center>
                <h1 class="bad mt-5">Debe llenar el campo de Preguntas/Comentarios</h1>
            </center>
        </div>
        <script>
            setTimeout(function() {
                location.href = "../contacto.htmlo";
            }, 1000 * 10);
        </script>
        <?php
    } else {
        if (
            strlen($_POST['nombre']) > 1 &&
            strlen($_POST['email']) > 1 &&
            strlen($_POST['comentarios']) > 3
        ) {
            filter_var($_POST['nombre']);
            filter_var($_POST['direccion']);
            filter_var($_POST['telef']);
            filter_var($_POST['email']);
            filter_var($_POST['comentarios']);

            $nombre =  $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telef = $_POST['telef'];
            $email = $_POST['email'];
            $comentarios = $_POST['comentarios'];

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            $mail->addAddress('mendezmarantejuliocesar@gmail.com', 'MyFantasy');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            //  $mail->addReplyTo('info@example.com', 'Information');
            //  $mail->addCC('cc@example.com');
            //  $mail->addBCC('bcc@example.com');
            //Attachments
            //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            $subject = $mail->Subject = 'Matrias Primas  Contacto';

            $message = "<!DOCTYPE html>
                <html lang='es'>
                
                <head>
                    <meta charset='UTF-8'>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>         
                </head>
                
                <body>
                    <table
                        style='max-width: 600px; padding: 10px; margin: 0 auto; border-collapse: collapse; background-color: rgba(0, 0, 0, .85);'>
                        <tr>
                            <td style='padding: 0%;'>
                                <div>
                                    <a href='http://materiasprimas.infinityfreeapp.com'>
                                        <img width='25%' style='display: block; margin: 0% 3%;'
                                            src='https://res.cloudinary.com/dwoki6mvp/image/upload/v1682659852/MyFantasy/MyFantasy3.ico_qkoyfu.png'>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style='background-color: #00a2d1; padding: 0%; text-align:center;'>
                                <div style='font-size: 14px;'>
                                    <p style='color: antiquewhite'> Compra Venta de Materias Primas
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style='padding: 0;'>
                                <div style='padding: 0 3%; text-align: center;'>
                                    <h2 style='color: #efb810; font-family: Brush Script MT;'> Contacto MyFantasy </h2>
                                </div>
                                <div>
                                    <a href='http://materiasprimas.infinityfreeapp.com'>
                                        <img width='100%' style='padding: 0%; margin: auto; display: block;'
                                            src='https://res.cloudinary.com/dwoki6mvp/image/upload/v1682659787/MyFantasy/Mente-Abierta_z77z4w.jpg'
                                            alt='Materias Primas'>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> Nombre: </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> $nombre </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> Dirección: </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> $direccion </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> Telefono: </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> $telef </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> Email: </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> $email </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                    <p style='color: antiquewhite'> Preguntas/Comentarios: </p>
                                </div>
                                <div style='padding: 0 3%; font-size: 16px;'>
                                <p style='color: antiquewhite'> $comentarios </p>
                            </div>
                            </td>
                        </tr>
                        <td style='padding: 0 3%;color: antiquewhite; padding: 10px;'>
                            <div style='font-size: 16px;'>
                                <p> Contacto de <a style='color: #efb810; font-family: monotype corsiva;'
                                        href='http://menteabierta.infinityfreeapp.com'> MyFantasy
                                    </a>
                                </p>
                            </div>
                        </td>
                        </tr>
                    </table>
                
                </body>
                
                </html>";
             

            // HTML email termina aquí
            try {
                $mail->isSMTP();                                                   //Send using SMTP
                $mail->isHTML(true);                                               //Set email format to HTML
                $mail->SMTPDebug = 0;                                              //Enable verbose debug output
                $mail->SMTPAuth   = true;                                          //Enable SMTP authentication               
                $mail->Host = 'smtp.gmail.com';                                    //Set the SMTP server to send through
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                   //Enable implicit TLS encryption
                $mail->Port = 465;                                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                $mail->AddAddress('myfantasy_241@zohomail.com', 'MyFantasy');                                         //Add a recipient
                $mail->FromName = 'MyFantasy';
                $mail->Username = 'mendezmarantejuliocesar@gmail.com';             //SMTP username
                $mail->Password = 'mpvbflznzclutkap';                              //SMTP password
                $mail->setFrom($email);
                $mail->AddReplyTo($email);
                $mail->Subject = $subject;
                $mail->Body = $message;
                $mail->AltBody = $message;
                $mail->CharSet = 'UTF-8';
                if ($mail->send()) {
        ?>
                    <div class="col-md-12 themed-grid-col" id=" ">
                        <script>
                            alert('El email ha sido enviado con éxito');
                        </script>
                        <script>
                            setTimeout(function() {
                                location.href = "../contacto.html";
                            });
                        </script>
                    </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="col-md-12 themed-grid-col" id=" ">
                        <div>
                            <script>
                                alert(
                                    'No se pudo enviar el mensaje.<?php echo "Mailer: {$mail->ErrorInfo}" ?>'
                                );
                            </script>
                            <script>
                                setTimeout(function() {
                                    location.href = "../contacto.html";
                                });
                            </script>
                        </div>
                    </div>
                <?php
                }
            } catch (Exception $e) {
                ?>
                <div class="col-md-12 themed-grid-col" id=" ">
                    <div class="">
                        <script>
                            alert(
                                'No se pudo enviar el mensaje. <?php echo "Mailer: {$mail->ErrorInfo}" ?>'
                            );
                        </script>
                        <script>
                            setTimeout(function() {
                                location.href = "../contacto.html";
                            });
                        </script>
                    </div>
                </div>
<?php
            }
        }
    }
}
