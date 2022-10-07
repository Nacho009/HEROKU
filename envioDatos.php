<p>Cargando...</p>
<?php

error_reporting(0);
$name =    trim($_POST["name"]);
$email =   trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);

if(!empty($name) && 
   !empty($email) && 
   !empty($subject) && 
   !empty($message)  
    ){
        $contenido =   '<!DOCTYPE html>';
        $contenido .= '<html lang="en">';
        $contenido .= '<head>';
        $contenido .= '	<meta charset="UTF-8">';
        $contenido .= '	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
        $contenido .= '    <meta name="viewport" content="width=device-width, user-scalable=no">';
        $contenido .= '    <meta http-equiv="X-UA-Compatible" content="IE=edge"> ';
        $contenido .= '	<link rel="stylesheet" href="libs/fontawesome/css/all.css">';
        $contenido .= '	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >';
        $contenido .= '    <link class="icon" rel=icon sizes="32x32" type="image/png" href="assets/img/logo.png">';
        $contenido .= '    <link rel="stylesheet" href="assets/css/estilos.css">';
        $contenido .= '</head>';
        $contenido .= '<body>';
        $contenido .= '';
        $contenido .= '<div class="container">';
        $contenido .= '  <p>Hola Andres Lobaton, alquien quiere contactarse contigo.</b></p>';
        $contenido .= '  <p><b> De: </b>'. $name .'<br/>';
        $contenido .= '     <b>Correo: </b> '. $email .'<br/>';
        $contenido .= '     <b>Tema:</b> '. $subject .'</p>';
        $contenido .= '  <p><b> Mensaje: </b><br>'. $message .'</p>';
        $contenido .= '';
        $contenido .= '  </body></html>';

        $titulo = "Mensaje desde PORTAFOLIO | Andres Lobaton";

        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'To: Andres Lobaton <andrespipe021028@gmail.com>' . "\r\n";
        $cabeceras .= 'From: Portafolio Andres lobaton <'.$email.'>' . "\r\n";

        if(mail("andrespipe021028@gmail.com",$titulo,$contenido,$cabeceras)){

            
            // require_once "../models/Database.php";
            // include "../models/Administrador.php";
            // $admin = new Administrador();
            // $admin->insert_notificacion(3,"Alguien vio tu PORTAFOLIO, te quiere contactar!");
            echo "<script> window.location.href = 'https://portafoliolobaton.herokuapp.com/?message=ok#contact';</script>";
        }else{
            echo "<script> window.location.href = 'https://portafoliolobaton.herokuapp.com/?message=bad#contact';</script>";
        }
}else{
    echo "<script> window.location.href = 'https://portafoliolobaton.herokuapp.com/?message=naa#contact';</script>";
}

?>