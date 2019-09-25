<?php
session_start();
$_SESSION['usuario']="Adria123";
$_SESSION['autenticacion']=2;
$_SESSION['campo']="Developer";
setcookie("usuario","AdriCookie",time()+6);
?>
<html>
<head>
<title>El mejor juador del mundo es</title>
</head>
<body>
<?php
$mejorjugador = urlencode("Leo Messi");
echo "<a href='jugadorSite.php?bestplayer=$mejorjugador'>";
echo "Clica para saber quien es el mejor jugador del mundo";
echo "</a>";

echo "</br>";
echo "Nombre de usuario: ";
echo $_POST['user'];
echo "</br>";
echo "Contrasena del usuario: ";
echo $_POST['contra'];
?>


</body>
</hmtl>
