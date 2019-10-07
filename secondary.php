<html>
 <head>
  <title>Mi web de peliculas</title>
 </head>
 <body>
<?php
session_start();

//Verificamos la informacion
    
    echo "Bienvenido a nuestra web, ";
    echo $_SESSION["nombre"];
    echo " ";
    echo $_SESSION["apellido1"];
    echo " ";
    echo $_SESSION["apellido2"];
    echo "! <br/>";
    
    echo "Mi pelicula favorita es: ";
    echo $_GET['favpeli'];
    echo "! <br/>";
    
    $pelirate = 8;
    echo "La valoracion de mi pelicula favorita es: ";
    echo $pelirate;
    
    //Datos formulario
    
    echo "<br/>";
    echo "<br/>";
    echo "Datos del Formulario: ";
    echo "<br/>";
    echo $_POST["Usuario"];
    echo "<br/>";
    echo $_POST["Contraseña"];
    echo "<br/>";
    echo $_POST["telefono"];

    echo "<br/>";
    echo "Cookie: ";
    echo "<br/>";
    echo $_COOKIE["user"];
    echo "<br/>";
    
    //Obtener el valor de $_GET['usuario'] y devolver 'nadie'
    //si no existe
    $nombre_usuario = $_GET['Usuario'] ?? 'nadie';
    echo $nombre_usuario;
    
    date_default_timezone_set('America/New_York');
    $dia = date('d');
    $mes = date('m');
    $anio = date('o');

    echo "<br/>";    
    echo "La fecha de hoy es:";
    echo " ";
    echo $dia;
    echo "-";
    echo $mes;
    echo "-";
    echo $anio;

?>
</body>
</html>









