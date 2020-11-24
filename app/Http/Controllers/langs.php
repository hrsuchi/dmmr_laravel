<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class langs extends Controller
{
    function text(){

      $langs = [
        "es" => [
          "changelang" => "<a href='./'><i class='fa fa-globe'></i> Change language to EN</a>",

          "about" => "Dos m&aacute;s es un restaurante mexicano establecido hace m&aacute;s de 30 a&ntilde;os
          cu&aacute;l sirvi&oacute; a la comunidad de Webster Texas y a sus alrededores ahora est&aacute; localizado
          en Pasadena deseoso de poder seguir sirviendo a toda su clientela. Dos m&aacute;s ofrece
          servicio de catering para todo tipo de eventos desde eventos familiares hasta empresariales.",

          "contactus" => "Cont&aacute;ctanos",

          "gallery" => "Galer&iacute;a",

          "special_monday" => "Todos los lunes tenemos especial.<br>
          Desde las 11 am hasta las 3 pm en hora del almuerzo.<br>
          Combos:<br>
          Compra un combo y obtén el segundo con un 50% de descuento.<br>
          Las cubetas están a $12<br>
          Domestica $18<br>
          Importadas de 3 pm a 7 pm<br>
          Margaritas a $1.99<br>
          Shots a $3",

          "special_tuesday" => "¡¡¡Disfruta con nosotros!!! compre el primer cubo y obtenga el segundo GRATIS !! Solo de 3:00
          p.m. a 7:00 p.m.",

          "special_wednesday" => "Pasta mexicana y pollo Alfredo, miércoles pasta especial $ 9.99<br>
          Ven a cenar y obtén una margarita gratis con tu plato<br>
          Karaoke los miércoles a partir de las 9 p.m. a las 2 a.m.",

          "special_thursday" => "Disfruta con nosotros de una parrillada y obtén tu primer cubeta por $12, Cualquier cerveza!!<br> 
          Música en vivo en el patio, Noche Norteña y bohemia",

          "special_friday" => "Te invitamos a que vengas a disfrutar de nuestros deliciosos Stuff Jalapeños, Brochetas de<br>
          Camaron empanizadas,<br>
          Stuff Jalapeños de carne fajita!!<br>
          También disfruta de música en vivo, tendrémos a GRUPO Zona H acompañandonos a partir<br>
          de las 10:30pm",

          "special_saturday" => "Para disfrutar en familia el sábado :) ¡No te pierdas un delicioso menú!<br>
          ¡Y helado totalmente gratis para niños!",

          "special_sunday" => "¡Te esperamos después de la iglesia, con nuestros deliciosos platos, para que puedas disfrutar de
          un hermoso día!",

          "getintouch" => "Cont&aacute;ctenos",

          "name" => "Nombre",

          "email" => "Correo electr&oacute;nico",

          "message" => "Mensaje",

          "submit" => "Enviar",

          "specials" => "Especiales",

          "menu" => "Men&uacute;",

          "specialsoftheweek" => "Especiales de la semana"
        ],

        "en" => [
          "changelang" => "<a href='?lang=es'><i class='fa fa-globe'></i> Cambiar idioma a ES</a>",

          "about" => "Dos Más is a Mexican restaurant established more than 30 years ago
          which served the community of Webster, Texas and its surroundings. It is now located
          in Pasadena, Texas eager to continue serving its entire clientele. Dos Más offers
          catering service for all kinds of events from family gatherings to business events as well.",

          "contactus" => "Contact Us",

          "gallery" => "Gallery",

          "special_monday" => "Every Monday we have special.
          From 11 am to 3 pm at lunch time.<br>
          Combos:<br>
          Buy a combo and get the second one with a 50% discount.<br>
          The buckets are at $ 12<br>
          Domestic $ 18<br>
          Imported from 3 pm to 7 pm<br>
          Daisies at $ 1.99<br>
          Shots at $ 3",

          "special_tuesday" => "Enjoy with us!!! buy the first bucket and get the second one FREE!!Only from 3:00pm to
          7:00pm",

          "special_wednesday" => "Mexican pasta and chicken Alfredo, Wednesday special pasta $ 9.99<br>
          Come to dinner and get a free margarita with your plate<br>
          Karaoke on Wednesdays from 9 p.m. at 2 a.m.",

          "special_thursday" => "Enjoy a barbecue with us and get your first bucket for $ 12, Any beer !!<br>
          Live music in the courtyard, Northern Night and Bohemian",

          "special_friday" => "We invite you to come and enjoy our delicious Stuffed Jalapeños, Breaded Shrimp Skewers,<br>
          Stuff Jalapeños with fajita meat !!<br>
          Also enjoy live music, we will have GRUPO Zona H accompanying us from 10:30 pm",

          "special_saturday" => "To enjoy the family on Saturday :) Don&#39;t miss a delicious menu!<br>
          And ice cream dessert totally free for children !!",

          "special_sunday" => "We wait for you after church, with our delicious dishes, so you can enjoy a beautiful day!",

          "getintouch" => "Get in touch",

          "name" => "Name",

          "email" => "Email",

          "message" => "Message",

          "submit" => "Submit",

          "specials" => "Specials",

          "menu" => "Menu",

          "specialsoftheweek" => "Specials of the week"
        ]
      ];
      $lang = $langs["en"];
      if(isset($_GET["lang"]) && $_GET["lang"] == "es"){
        $lang = $langs["es"];
      }
      return $lang;

    }
}
