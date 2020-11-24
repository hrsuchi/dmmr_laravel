<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacto extends Controller
{
    function sendmail(){
      $message = "Name/Nombre: ".$_POST["name"]."\n"."Email/Correo electr&oacute;nico: ".$_POST["email"]."\n"."Message/Mensaje: \n".$_POST["message"];
      $to_email = 'info@dosmasmexicanrestaurant.com';
      //$to_email = 'web.ignition01@gmail.com';
      $subject = 'Mensaje Desde Website';
      $headers = 'From: noreply@dosmasmexicanrestaurant.com';
      mail($to_email,$subject,$message,$headers);
      ?>
        <script>
          window.location.href="./";
        </script>
      <?php
      //Mail::to("web.ignition01@gmail.com")->send(new App\Mail\Contacto($_POST["name"], $_POST["address"], $_POST["phone"], $_POST["email"], $_POST["comment"]));
    }
}
