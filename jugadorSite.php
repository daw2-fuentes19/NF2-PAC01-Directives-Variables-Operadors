<?php
session_start();
if ($_SESSION['autenticacion'] !=2){
    
    echo "Lo siento pero no tienes permiso para ver esta pagina.";
    exit();   
}


?>

<html>
<head>
<title>El mejor jugador del mundo <?php   echo $_GET['bestplayer'];?> </title>


</head>


<body>
<?php
//3 VARIABLES SESSION

echo $_COOKIE["usuario"];
echo "</br>";
echo "Bienvenido a tu pagina, ";
echo $_SESSION["usuario"];
echo "Tu profesion es: ";
echo $_SESSION["campo"];
echo "</br>";
//1 GET VARIABLE
echo "El mejor jugador del mundo es:";
echo $_GET['bestplayer'];
$calidad = 10;
echo "</br>";
echo "La nota de calidad del jugador es:";
echo $calidad;
echo "</br>";
echo "Date function: ";

date_default_timezone_set("America/New_York");

$anovisiesto = date("L");
if ($anovisiesto == 1)
{
    echo "Enhorabuena es un año bisiesto";
    
}
else {
    
    echo "Vaya... parece que no es una año bisiesto";
}
echo "</br>";
echo "Null Controls:";
$nom_usuari = $_GET[''] ?? $_POST['usuario'] ?? 'nadie';
echo $nom_usuari;
?>

<form method="post" action="Link.php">
<p>Introduce tu usuario: 
<input type="text" name="user"/>
</p>
<p>Introduce tu contrasena: 
<input type="text" name="contra"/>
</p>
<p>
<input type="submit" name="submit" value="Submit"/>
</p>
</form>
</body>
</html>