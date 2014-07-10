<?php
include("../connection/connection.php"); 
?>
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
</style>
</head>

<body>
<p>&nbsp;</p>
<table width="73%" height="259" align="center">
  <tr>
    <td height="253" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/usuarios.png" width="100" height="91" class="img-circle img-polaroid"> Registro de Usuario</h3></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>
<?php
//declaramos la variables para el registro del usuario
$u1 = $_POST['ID_ALUMNO']; 
$u2 = $_POST['N_USUARIO']; 
$u3 = $_POST['C_USUARIO']; 
$u4 = $_POST['PRIVILEGIO']; 

$insertar = "INSERT INTO usuarios(id_alumno,n_usuario,c_usuario,privilegio) VALUES ('".$u1."','".$u2."','".$u3."','".$u4."')";
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
     <h3><img src="imagenes_DR_A.U.P/ok.png" width="28" height="16"/> Informacion!!</h3>
	  <center><h4>REGISTRO EXITOSO</h4></center> 
    </div></td>
  </tr>
</table></center>';
}
 ?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p><center><a role="button" class="btn btn-info" href="buscar_pararegistrar_usuario.php">Regresar</a> <a role="button" class="btn btn-info" href="menu.php"><i class="icon-align-justify icon-white"></i> Menu</a></center></p>
</body>
</html>