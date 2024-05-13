<?php
include("conexion.php");
$consulta=$_POST['consulta'];
$sql="SELECT * FROM lamparas WHERE nombre like '%$consulta%'";
$consulta=mysqli_query($conex,$sql);
$cuantos=mysqli_num_rows($consulta);
echo"<table border=1>";
while ($registro=mysqli_fetch_row($consulta)) {
	echo "<tr>";
	foreach ($registro as $dato) {
		echo "<td>".$dato."</td>";
	}
	echo "</tr>"; 
	}
	echo "</table>";

	echo "se encontraron: <b>".$cuantos."<b> resultados";
   echo "<br>";
   echo "<center><br><a href='index.htm'><button type='button' class='btn btn-secondary'>VOLVER AL MENU ANTERIOR</button></a></center>" ;
?>