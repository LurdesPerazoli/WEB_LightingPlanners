<?php
$archivo = fopen("texto2.txt","r"); //r es modo lectura
echo fpassthru($archivo);//Recorrer el archivo hasta el final
fclose($archivo);


?>