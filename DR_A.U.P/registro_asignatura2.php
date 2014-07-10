<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>

<style type="text/css">
body {
	background-color: #FFFFFF;
}
</style></head>

<body>
<p>&nbsp;</p>
<table width="73%" height="152" align="center">
  <tr>
    <td height="146" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3> <img src="imagenes_DR_A.U.P/imagen-materias.jpg" width="100" height="100" class="img-circle img-polaroid"> Registro de Asignatura</h3></td>
        </tr>
      </table>
      <p>
        <?php
//se conecta con base datos
include("../connection/connection.php"); 
//Se reciben los datos y se guardan en variables 
$asg1 = $_POST['ID_grado']; 
$asg2 = $_POST['COD_ASIG']; 
$asg3 = $_POST['NOMBRE_ASIG'];
//insertar
$insertar = "INSERT INTO  materias(id_grado,cod_materia,nom_materia) VALUES ('".$asg1."','".$asg2."','".$asg3."')";
$RESULT = mysql_query($insertar);
if(!$RESULT)
{
echo '<center><table width="100%"  align="center">
  <tr>
    <td height="61" valign="top"><div class="alert alert-error">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
     <h3><img src="imagenes_DR_A.U.P/error.png" width="28" height="16"/> Error!!</h3>
	  <center><h4>ERROR EN EL PROCESO</4></center> 
    </div></td>
  </tr>
</table></center>';
}
else
{
echo '<center><table width="100%"  align="center">
  <tr>
    <td height="61" valign="top"><div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
     <h3><img src="imagenes_DR_A.U.P/ok.png" width="28" height="16"/> Informaciòn!!</h3>
	  <center><h4>REGISTRO EXITOSO</h4></center> 
    </div></td>
  </tr>
</table></center>';
}
 ?>
        
</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><center>
        <a href="registro_asignatura.php" role="button" class="btn btn-info">Regresar</a>  <a href="menu_administrador.php" role="button" class="btn btn-info"> Menu</a></center></p>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>