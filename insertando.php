 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/estilo.css">
 	<header>
      
          
   </header>
<?php
include("conexion.php");

 $marca=$_POST['marca'];
 $tipo=$_POST['tipo'];
 $potencia=$_POST['potencia'];
 $temperaturadecolor=$_POST['temperaturadecolor'];
 $imagen=$_POST['imagen'];
 $nombre=$_POST['nombre'];
 


 $sql="INSERT INTO lamparas VALUES('$marca','$tipo', '$potencia','$temperaturadecolor','$imagen', '$nombre')";
// a donde se conecta - que tiene que hacer
if(mysqli_query($conex,$sql)){
	echo "<center>Luminaria insertada </center>";
  echo "<center><br><a href='bienvenido.php'><button type='button' class='btn btn-secondary'>VOLVER AL MENU ANTERIOR</button></a></center>" ;
}
else{
	echo "Error";
}

?>