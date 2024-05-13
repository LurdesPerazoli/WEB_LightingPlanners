
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="ccs/estilo.css">
  <header>
      <br>
      <table>
      <tr>
    <td><h1>LIGHTING PLANNERS</h1></td><td> <img src="img/logochico.jpg" width="100"></td></tr>
   
  </table>
</header>
<?php
include("conexion.php");
$sql="SELECT * FROM lamparas";
$consulta=mysqli_query($conex,$sql);
$cuantos=mysqli_num_rows($consulta);


echo "<p><h1><center>Registro de la base de datos:</center></h1></p>";
while($registro=mysqli_fetch_array($consulta)){
echo "<table border=1 align=center>";
echo "<tr>";
echo "<td> Marca de la luminaria: ".$registro['marca']."</td>";
echo "<tr>";
echo "<td> Tipo de luminaria: ".$registro['tipo']."</td>";
echo "<tr>";
echo "<td> Potencia de la luminaria: ".$registro['potencia']."</td>";
echo "<tr>";
echo "<td> Temperatura de color de la luminaria: ".$registro['temperatura de color']."</td>";
echo "<tr>";
echo "<td>Imagen: ".$registro['imagen']."</td>";
echo "<tr>";
echo "<td> Nombre de la luminaria: ".$registro['nombre']."</td>";

}
echo "</tr>";


echo "</table>";

echo "</br>";


echo "<center>Se encontraron: <b>".$cuantos."</b> datos validos</center>";

 echo "<center><br><a href='bienvenido.php'><button type='button' class='btn btn-secondary'>VOLVER AL MENU ANTERIOR</button></a></center>" ;
?>