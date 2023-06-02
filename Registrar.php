<?php
include("Conexion.php");
$ID=$_POST["ID"];
$Plataforma=$_POST["Plataforma"];
$Categoria=$_POST["Categoria"];
$Nombre=$_POST["Nombre"];
$Correo=$_POST["Correo"];
$Fecha=$_POST["Fecha"];
$Contraseña=$_POST["Contraseña"];

echo "ID".$ID;
echo "Plataforma".$Plataforma;
echo "Categoria".$Categoria;
echo "Nombre".$Nombre;
echo "Correo".$Correo;
echo "Fecha".$Fecha;
echo "Contraseña".$Contraseña;

$query = "INSERT INTO usuarios VALUES('".$ID."','".$Plataforma."','".$Categoria."','".$Nombre."','".$Correo."','".$Fecha."','".$Contraseña."')";
$resultado=$conexion->query($query);
if($resultado){
    echo "INSERCION CORRECTA";
}
else{
    echo "NO SE INSERTO";
}
?>