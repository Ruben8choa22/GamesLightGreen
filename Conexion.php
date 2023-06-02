<?php
$conexion = new mysqli("localhost", "root", "","catalogogames");
if($conexion){
    echo "Conexion establecida";
}
else{
    echo "Conexion no establecida";
}
?>
