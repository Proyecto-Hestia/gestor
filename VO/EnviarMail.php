<?php
    use  PHPMailer\PHPMailer\PHPMailer; 
    use  PHPMailer\PHPMailer\Exception ;
    require 'Vista/Mail/PHPMailer.php';
    require 'Vista/Mail/SMTP.php';
    require 'Vista/Mail/Exception.php';
    require 'Vista/Mail/OAuth.php';

    $mail = new PHPMailer(true);
    //$mail = new PHPMailer\PHPMailer\PHPMailer();
    try{ 
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "hestia1258@gmail.com";
        $mail->Password = "hestia689";
        $mail->setFrom('hestia1258@gmail.com', 'HESTIA');

        while ($filas=$result->fetch()) {
            $correo=$filas['mail_per'];
            $user=$filas['nom_per']." ".$filas['ape_per'];
            $mail->addAddress($correo, $user);
        

            //BODY
            $mail->Subject = 'RECUPERACION DE CLAVE';
            while ($filas2=$result2->fetch()){
                
                $mail->Body = "REPORTE DE INFORMACION"."<br><br>".
                "Señor (a): ".$filas['nom_per']." ".$filas['ape_per']."<br>".
                "E-mail: ".$filas['mail_per']."<br><br>".
                "Aprecido usuario, nos permitimos comunicarle los datos para su ingreso al sistema de administracion HESTIA"."<br><br>".
                "Usuario: ".$filas2['id_usu']."<br>".
                "Contraseña: ".$filas2['cla_usu']."<br><br>".
                "Si desea ingrese nuevamente por medio del siguiente link: "."<br>".
                "http://localhost/hestia"."<br><br>". 
                "Respetado usuario, este correo ha sido generado por un sistema de envío; 
                por favor NO responda al mismo ya que no podrá ser gestionado."."<br><br>". 
                "*************************************************************************************"."<br>". 
                "CONFIDENCIALIDAD: Este correo electrónico es correspondencia confidencial. Si usted 
                no es el destinatario, le solicitamos informe inmediatamente al correo electrónico del remitente (hestia1258@gmail.com) así
                mismo por favor bórrelo y por ningún motivo haga público su contenido, de hacerlo podrá tener repercusiones legales."
                ;
            }
        }
        $mail->IsHTML(true);
        if ($mail->send()){
            header("Location: index.php?exito=exito1");
        }
    }catch (Exception $e) {
        header("Location: index.php?accion=error");
        //echo "Hubo un error en el envio del correo. Mailer Error: {$mail->ErrorInfo}"; 
    }
?>