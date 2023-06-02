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
</tr>
";
while($consulta = mysqli_fetch_array($result)){
    echo
    "
    <tr>
    <td> ".$consulta["ID"]."</td>
    <td> ".$consulta["Plataforma"]."</td>
    <td> ".$consulta["Categoria"]."</td>
    <td> ".$consulta["Nombre"]."</td>
    <td> ".$consulta["Correo"]."</td>
    <td> ".$consulta["Fecha"]."</td>
    <td> ".$consulta["Contraseña"]."</td>
    </tr>
    ";
}
echo "</table>";
?>