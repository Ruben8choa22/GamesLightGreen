<!DOCTYPE html>
<html>
<head>
    <title>Advertencia de ventana emergente</title>
    <script type="text/javascript">
        function confirmarEliminacion() {
            return confirm("Esta seguro de que desea eliminar este elemento?");
        }
    </script>
    <script type="text/javascript">
        function confirmarActualizar() {
            return confirm("Esta seguro de que desea Actualizar este elemento?");
        }
    </script>
</head>
<body>
<?php
include("Conexion.php");
$result = mysqli_query($conexion, "SELECT * FROM usuarios");

echo
"
<table width=\"100%\"border=\"1\">
<th>CONSULTAS</th>
<tr>
<td><b><center>ID</center></b></td>
<td><b><center>Plataforma</center></b></td>
<td><b><center>Categoria</center></b></td>
<td><b><center>Nombre</center></b></td>
<td><b><center>Correo</center><b/></td>
<td><b><center>Fecha</center><b/></td>
<td><b><center>Contraseña</center><b/></td>
<td><b><center>Eliminacion</center></b></td> 
<td><b><center>Actualizacion</center></b></td> 
</tr>
";
while($consulta = mysqli_fetch_array($result)){
    echo "
    <tr>
    <td> ".$consulta["ID"]."</td>
    <td> ".$consulta["Plataforma"]."</td>
    <td> ".$consulta["Categoria"]."</td>
    <td> ".$consulta["Nombre"]."</td>
    <td> ".$consulta["Correo"]."</td>
    <td> ".$consulta["Fecha"]."</td>
    <td> ".$consulta["Contraseña"]."</td>


    <td><BR><form method='post' action='EliminacionUsuario.php' onsubmit='return confirmarEliminacion()'>\n
    <input type='hidden' name='Nombre' value='".$consulta['Nombre']."'>
    <input type='submit' value='Eliminar registro'>
    </form>
    <td>
    <form method='post' action='ActualizaUsuario.php'onsubmit='return confirmarActualizar()' >
        <input type='hidden' name='Nombre' value='" . $consulta['Nombre'] . "'>
        <input type='text' name='Nuevo_Nombre' placeholder='Nuevo Nombre'>
        <input type='submit' name='Actualizar' value='Actualizar'>
    </form>
</td>
    </tr>

    ";
}
echo "</table>";
?>
</body>
</html>