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
<table width="73%" height="394" align="center">
  <tr>
    <td height="388" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/icono_alumno.jpg" width="100" height="91" class="img-circle img-polaroid"> Datos del Alumno</h3></td>
        </tr>
      </table>
      <table width="100%" height="192" align="center">
        <tr>
          <td height="186" align="center" valign="middle"><div>
            <form name="form1" method="post" action="burcar_alumno2.php">
              <table width="100%" border="1" class="table table-bordered table-hover">
                <tr>
                  <td width="71%" height="58" align="center"><center>
                    <strong>Cedula del Alumno </strong>
                    <input type="text" name="CEDULA_A" id="CEDULA_A">
                  </center></td>
                </tr>
              </table>
              <p>
                <input type="submit" class="btn btn-info" name="button3" id="button3" value="Buscar"> <a href="menu_administrador.php" role="button" class="btn btn-info"><i class="icon-align-justify icon-white"></i> Menu</a>
                </p>
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