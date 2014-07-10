<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/javascript" href="js/bootstrap.js"
</head>
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
<table width="73%" height="172" align="center">
  <tr>
    <td height="166" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/icono_alumno.jpg" width="100" height="91" class="img-circle img-polaroid"> Registro de Alumno</h3></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>
<?php
//se conecta con base datos
include("../connection/connection.php"); 
//Se reciben los datos y se guardan en variables
$a0 = $_POST['ID_fecha']; 
$a1 = $_POST['ID_REPRE']; 
$a2 = $_POST['NOMBRES_A']; 
$a3 = $_POST['APELLIDOS_A']; 
$a4 = $_POST['CEDULA_A'];  
$a5 = $_POST['SEXO_A']; 
$a6 = $_POST['FECHA_N']; 
$a7 = $_POST['EDAD_A'];  
$a8 = $_POST['LUGAR_N_A']; 
//insertar
$insertar = "INSERT INTO alumnos(id_periodo_e,id_representante,nombres_a,apellidos_a,cedula_a,sexo_a,fecha_n,edad_a,lugar_n_a) VALUES ('".$a0."','".$a1."','".$a2."','".$a3."','".$a4."','".$a5."','".$a6."','".$a7."','".$a8."')";
$RESULT = mysql_query($insertar);
if(!$RESULT)
{
echo '<center><table width="73%"  align="center">
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
echo '<center><table width="73%"  align="center">
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
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</p>
<center>
  <a href="consultar_representante_existente.php" role="button" class="btn btn-info"> Regresar</a> <a href="menu_administrador.php" role="button" class="btn btn-info"><i class="icon-align-justify icon-white"></i> Menu</a>
   </center>
</body>
</html>