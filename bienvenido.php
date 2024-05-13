
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilo.css">

  <header>
      <br>
      <table>
      <tr>
    <td><h1>LIGHTING PLANNERS</h1></td><td> <img src="img/logochico.jpg" width="100"></td></tr>
   
  </table>
</header>
<?php

session_start();

if(isset($_SESSION['nombre'])){
	echo"<p><h1>Bienvenido</h1></p>";
	echo "<br>";
	echo "<b>".$_COOKIE['USU']."</b><br>";
	echo"<a href='insertar.htm'> Insertar luminaria<br>";
	echo"<a href='actualizar.htm'> Actualizar potencia<br>";
	echo"<a href='borrar.htm'> Borrar luminaria<br>";
	echo"<a href='vista.php'> Ver todas las luminarias<br>";
	echo"<a href=cerrar.php> Cerrar Sesion </a>";
}
else
{
	header("location:login.php?error=Acceso%20invalido");
}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

	
	
</body>
</html>