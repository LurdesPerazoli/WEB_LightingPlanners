<?php
$carpeta="cvs_recibidos";
if(copy($_FILES['file']['tmp_name'],$carpeta."/".$_FILES['file']['name'])){
	echo "archivo subido correctamente";
}else{
	echo "hubo un error";
}
?>