<?php
include("Conexion.php");
$Nombre = $_POST['Nombre'];
$existe = 0;
if($Nombre==""){
    echo "El Nombre es un campo obligatorio";
}
else{
    $resultados=mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre='$Nombre'");
    while($consulta = mysqli_fetch_array ($resultados)){
        $existe++;
    }
    if($existe==0){
        echo "El Nombre solicitado no existe";
    }
    else{
        $_DELETE_SQL="DELETE FROM usuarios WHERE Nombre='$Nombre'";
        mysqli_query($conexion, $_DELETE_SQL);

        echo "El registro con el Nombre solicitado ha sido eliminado";

    }
}
header("location: Actualiza_EliminaUsuarios.php");
?>