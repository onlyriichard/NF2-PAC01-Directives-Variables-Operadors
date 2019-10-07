<?php
session_unset();
?>
<html>
 <head>
  <title>Mi web de peliculas</title>
 </head>
 <body>
  <form method="post" action="secondary.php">
   <p>Pon tu Usuario: 
    <input type="text" name="Usuario"/>
   </p>
   <p>Pon tu Contraseña: 
    <input type="password" name="Contraseña"/>
   </p>
   <p>Pon tu Telefono: 
    <input type="text" name="telefono"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>


<?php
session_start();
$_SESSION['nombre'] = "Ricardo";
$_SESSION['apellido1'] = "Paredes";
$_SESSION['apellido2'] = "Ramos";
$_POST['Usuario'];
$_POST['Contraseña'];
$_POST['telefono'];
setcookie("user", $_SESSION['nombre'], time()+60);
?>

<?php
$myfavpeli = urlencode("Spiderman");
echo "<a href='secondary.php?favpeli=$myfavpeli'>";
echo "Clic aquí para ver información sobre mi película favorita!";
echo "</a>";
?>








