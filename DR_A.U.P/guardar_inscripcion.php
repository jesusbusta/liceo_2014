<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin t�tulo</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/javascript" href="js/bootstrap.js">
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
//las variables que se reciben del alumno las identificamos con $r


$a1 = $_POST['cedula_a']; 
$a2 = $_POST['id_fecha']; 
$a3 = $_POST['id_grado']; 
$a4 = $_POST['id_seccion'];
$mat1 = $_POST['materia1'];
$mat2 = $_POST['materia2'];
$mat3 = $_POST['materia3'];
$mat4 = $_POST['materia4'];
$mat5 = $_POST['materia5'];
$mat6 = $_POST['materia6'];
$mat7 = $_POST['materia7'];
$mat8 = $_POST['materia8'];
$mat9 = $_POST['materia9'];
$mat10 = $_POST['materia10'];
$mat11= $_POST['materia11'];
$mat12 = $_POST['materia12'];
$mat13 = $_POST['materia13'];
$mat14 = $_POST['materia14'];
$mat15 = $_POST['materia15'];



$codigo_insc = $a3 . $a4 . "_" . $a2;
//insertar representante
$insertar = "INSERT INTO ano_escolar(id_ano_escolar,cod_inscripcion,cedula_a,periodo_escolar,grado_escolar,seccion,materia1,materia2,materia3,materia4,materia5,materia6,materia7,materia8,materia9,materia10,materia11,materia12,materia13,materia14,materia15) VALUES ('NULL','$codigo_insc','$a1','$a2','$a3','$a4','$mat1','$mat2','$mat3','$mat4','$mat5','$mat6','$mat7','$mat8','$mat9','$mat10','$mat11','$mat12','$mat13','$mat14','$mat15')";
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
     <h3><img src="imagenes_DR_A.U.P/ok.png" width="28" height="16"/> Informaci�n!!</h3>
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
  <a href="registro_alumno.php" role="button" class="btn btn-info"> Regresar</a> <a href="menu_administrador.php" role="button" class="btn btn-info"><i class="icon-align-justify icon-white"></i> Menu</a>
   </center>
</body>
</html>