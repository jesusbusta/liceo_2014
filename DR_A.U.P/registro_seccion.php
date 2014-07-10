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
<td><h3> <img src="imagenes_DR_A.U.P/icono-establecimiento-escuelas.png" width="100" height="100" class="img-circle img-polaroid"> Registro de Secciòn </h3></td>
        </tr>
      </table>
      <form action="registro_seccion2.php" method="post" name="form1" onSubmit="MM_validateForm('fecha1','','R','Fecha_ini','','R');return document.MM_returnValue">
        <table width="100%" border="1" class="table table-bordered table-hover"	>
          <tr>
            <td width="789"><center>
              <strong>Escbiba con una Letra la Secciòn que desea asignar Ejm:(a)</strong>
              <label for="SECCION"></label>
              <input class="input-mini" type="text" name="SECCION" id="SECCION">
              </center></td>
          </tr>
          </table>
        <p>&nbsp;</p>
        <p>
          <center><input type="submit" name="button" class="btn btn-info" id="button" value="Registrar"> <a href="menu_administrador.php" role="button" class="btn btn-info"><i class="icon-align-justify icon-white"></i> Menu</a>
          </center>
        </p>
      </form>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>