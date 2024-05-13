
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
<?php
include("conexion.php");
$nombre=$_POST['nombre'];

$sql = "SELECT * FROM lamparas where nombre = '$nombre'";
$consulta=mysqli_query($conex,$sql);
$cuantos=mysqli_num_rows($consulta);

if($cuantos>0)
{
	$sql2 = "DELETE FROM lamparas WHERE nombre = '$nombre'";
	$consulta2 = mysqli_query($conex,$sql2);
	if($consulta2)
	{
	echo "Datos eliminados correctamente";
	echo "<center><br><a href='bienvenido.php'><button type='button' class='btn btn-secondary'>VOLVER AL MENU ANTERIOR</button></a></center>" ;
    }
   

}
else
{
	echo "Hubo un error en la eliminacion";
}

?>