<?php 
//se conecta con la base de datos
include("../connection/connection.php"); 
//se consulta la tabla segun los parametros
$consulta = "SELECT * FROM   alumnos ORDER BY id_alumno ASC ";
//se ejecuta la consulta
$buscar = mysql_query($consulta);
//se cuentan las filas o registros encontrados
$total = mysql_num_rows($buscar);
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
@import url(calendario/calendar-blue.css);
</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>

<style type="text/css">
body {
	background-color: #FFFFFF;
	background-image: url();
}
</style>
</head>

<body>
<p>&nbsp;</p>
<table width="73%" height="401" align="center">
  <tr>
    <td height="395" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/icono_alumno.jpg" width="100" height="91" class="img-circle img-polaroid">  Alumnos Registrados</h3></td>
        </tr>
      </table>
      <table width="100%" height="199" align="center">
        <tr>
          <td height="193" align="center" valign="middle"><div>
            <table width="60%" border="1" align="center" class="table table-bordered table-hover">
              <tr class="info">
                <td width="9%"><center>
                  <strong>N&ordm; de alumno</strong>
                </center></td>
                <td width="8%"><center>
                  <strong>nombres</strong>
                </center></td>
                <td width="11%"><center><strong>apellidos</strong>
                </center></td>
                <td width="12%"><center><strong>cedula </strong>
                </center></td>
                <td width="12%"><center>
                  <strong>sexo</strong>
                </center></td>
                <td width="12%"><center>
                  <strong>fecha de nacimiento</strong>
                </center></td>
                <td width="12%"><center><strong>edad</strong>
                </center></td>
                <td width="12%" align="center"><center>
                  <strong>lugar de nacimiento</strong>
                </center></td>
                </tr>
              <?php 
 //apuntar a cada fila para mostrar los datos de cada campo por fila
 //con while se muestran las filas que existan
while($campo = mysql_fetch_array($buscar))
{ 
  ?>
              <tr>
                <td><div align="center"><?php echo $campo['id_alumno'] ?></div></td>
                <td><div align="center">
                  <div align="center"><?php echo $campo['nombres_a'] ?></div>
                </div></td>
                <td><div align="center">
                  <div align="center"><?php echo $campo['apellidos_a'] ?></div>
                </div></td>
                <td><div align="center">
                  <div align="center"><?php echo $campo['cedula_a'] ?></div>
                </div></td>
                <td><div align="center">
                  <div align="center"><?php echo $campo['sexo_a'] ?></div>
                </div></td>
                <td><div align="center">
                  <div align="center"><?php echo $campo['fecha_n'] ?></div>
                </div></td>
                <td><div align="center">
                  <div align="center"><?php echo $campo['edad_a'] ?></div>
                </div></td>
                <td><div align="center">
                  <div align="center"><?php echo $campo['lugar_n_a'] ?></div>
                </div></td>
                </tr>
              <?php 
  }
   ?>
              <tr>
                <td colspan="8"><div align="center"><?php echo "Cantidad de registros: <b>".$total."</b>"; ?></div></td>
              </tr>
            </table>
            <p><a href="menu_administrador.php" role="button" class="btn btn-info">Menu</a> </p>
          </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>