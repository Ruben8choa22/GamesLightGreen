<?php
$conexion = mysqli_connect("localhost", "root", "", "catalogogames");
$Nombre = $_POST["Nombre"];
$Nuevo_Nombre = $_POST['Nuevo_Nombre']; 
$existe = 0;

if ( $Nombre == "") {
    echo "El Nombre actual es un campo obligatorio.";
} else if ($Nuevo_Nombre == "") {
    echo "El nuevo Nombre es un campo obligatorio.";
} else {
    $resultados = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre='$Nombre'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "El Nombre solicitado no existe.";
    } else {
        $_UPDATE_SQL = "UPDATE usuarios SET Nombre='$Nuevo_Nombre' WHERE Nombre= '$Nombre'";
        mysqli_query($conexion, $_UPDATE_SQL);

        echo "El registro con el Nombre $Nombre_actual ha sido actualizado con el nuevo nombre $Nuevo_Nombre.";
    }
}
header("location: Actualiza_EliminaUsuarios.php");
?>