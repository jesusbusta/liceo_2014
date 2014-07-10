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

<body>
<p>&nbsp;</p>
<table width="73%" height="404" align="center">
  <tr>
    <td height="398" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
          <td><h3> <img src="imagenes_DR_A.U.P/tit_icono.jpg" alt="" width="100" height="100" class="img-circle img-polaroid"> Registro de Año Escolar</h3></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>
    <p>
      <?php
//se conecta con base datos
 include("../connection/connection.php"); 
//Se reciben los datos y se guardan en variables
$f1 = $_POST['fecha_ini']; 
$f2 = $_POST['fecha_cul']; 

//insertar
$insertar = "INSERT INTO periodo_escolar(fecha_inicio,fecha_culminacion) VALUES ('".$f1."','".$f2."')";
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
   <p><center>
  <a href="registro_periodo_escolar.php" role="button" class="btn btn-info"> Regresar</a> <a href="menu_administrador.php" role="button" class="btn btn-info"><i class="icon-align-justify icon-white"></i> Menu</a>
   </center></p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</p>

</body>
</html>