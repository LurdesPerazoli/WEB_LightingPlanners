<?php
$frase=$_POST['frase'];
$frase.=" ";
$frase.="<hr>";
$frase.="<br>";
$frase.=date("Y");
$frase.="<p>";

//$archivo=fopen("texto2.txt","w"); //modo escritura
$archivo= fopen("texto2.txt","a"); //modo append osea anexar.
fwrite($archivo,$frase);
fclose($archivo);
header("location:leer.php");
?>