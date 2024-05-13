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
include("conexion.php");

 $nombre=$_POST['nombre'];
 $email=$_POST['email'];
 $mensaje=$_POST['mensaje'];
 


 $sql="INSERT INTO contactoweb VALUES('$nombre','$email', '$mensaje')";
// a donde se conecta - que tiene que hacer
if(mysqli_query($conex,$sql)){
	echo "<center>Contacto realizado, a la brevedad me estare poniendo en contacto con ud. Muchas gracias</center>";
  echo "<center><br><a href='index.htm'><button type='button' class='btn btn-secondary'>VOLVER AL INICIO</button></a></center>" ;
}
else{
	echo "No pudo realizarse el contacto, intentelo otra vez";
}

?>