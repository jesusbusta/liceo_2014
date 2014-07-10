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
<?php
$a1 = $_POST['CEDULA_A']; 
$result = mysql_query("SELECT * FROM alumnos WHERE cedula_a='$a1'");
$row = mysql_fetch_row($result);
if(mysql_num_rows($result)==1)  
{ 
  echo"";  //datos correctos 
} 
else 
{ 
echo '<center><table width="73%"  align="center">
  <tr>
    <td height="61" valign="top"><div class="alert alert-error">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
     <h3><img src="imagenes_DR_A.U.P/error.png" width="28" height="16"/> Error!!</h3>
	  <center><h4>!!!!!!  NO SE PUDO EJECUTAR LA CONSULTA, DATOS NO EXISTEN  !!!!!!</4></center> 
    </div></td>
  </tr>
</table></center>'; //datos incorrectos 
}         
?>
<p>&nbsp;</p>
<table width="73%" height="486" align="center">
  <tr>
    <td height="480" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/usuarios.png" width="100" height="91" class="img-circle img-polaroid"> Registro de Usuario</h3></td>
        </tr>
      </table>
      <table width="100%" height="278" align="center">
        <tr>
          <td height="272" align="center" valign="middle"><div>
            <form name="form1" method="post" action="registrar_usuario.php">
              <table width="100%" border="1" class="table table-bordered table-hover">
                <tr class="info">
                  <td><strong>Datos:</strong>
                    <input name="ID_ALUMNO" type="hidden" id="ID_ALUMNO" value="<?php echo $row[0]; ?>" /></td>
                </tr>
                <tr>
                  <td><strong>
                    Nombre</strong>
                    <input name="NOMBRES_A" type="text" class="input-medium" id="textfield15" value="<?php echo $row[3]; ?>" readonly>&nbsp;
                    <strong> Apellido</strong>
                    <input name="APELLIDOS_A" type="text" class="input-medium" id="textfield16" value="<?php echo $row[4]; ?>" readonly>&nbsp;
                    <strong>Cedula</strong>
                    <input name="CEDULA_A" type="text" class="input-small" id="textfield17" value="<?php echo $row[5]; ?>" readonly>
                    &nbsp;</td>
                </tr>
                <tr>
                  <td valign="top"><p><strong>Usuario</strong> 
                      <input class="input-medium" type="text" name="N_USUARIO" id="N_USUARIO">
                  <strong>Clave</strong> 
                  <input class="input-medium" type="text" name="C_USUARIO" id="C_USUARIO"> 
                  <strong>Privilegio</strong>
                  <select class="span1" name="PRIVILEGIO" id="PRIVILEGIO">
                    <option value="A">A</option>
                  </select>
<label for="PRIVILEGIO"></label>
                  </p></td>
                </tr>
                </table>
              <p>
                <input type="submit" class="btn btn-info" name="button3" id="button3" value="Registrar">
                 <a href="menu_administrador.php" role="button" class="btn btn-info"><i class="icon-align-justify icon-white"></i> Menu</a>              </p>
            </form>
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