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
<table width="73%" height="152" align="center">
  <tr>
    <td height="146" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/docente.png" width="100" height="91" class="img-circle img-polaroid"> Registro de Docente</h3></td>
        </tr>
      </table>
      <table width="100%" height="412" align="center">
        <tr>
          <td height="406" align="center" valign="middle"><div>
            <form name="form1" method="post" action="">
              <table width="100%" border="1" class="table table-bordered table-hover">
                <tr class="info">
                  <td><strong>Datos del Docente:</strong></td>
                </tr>
                <tr>
                  <td><strong>Nombre</strong>
                    <input name="NOMBRES_D" type="text" class="input-medium" id="textfield15">&nbsp;
                    <strong> Apellido</strong>
                    <input class="input-medium" type="text" name="APELLIDOS_D" id="textfield16">&nbsp;
                    <strong>Cedula</strong>
                    <input class="input-small" type="text" name="CEDULA_D" id="textfield17">&nbsp;
                    <strong>Sexo</strong>
                    <select class="span1" name="SEXO_A" id="SEXO_A">
                      <option value="F">F</option>
                      <option value="F">F</option>
                    </select></td>
                </tr>
                <tr>
                  <td valign="top"><p>&nbsp;<strong>Fecha de Nacimiento </strong>&nbsp;
                      <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
                      <input class="input-small" type="text" id="fecha1" name="FECHA_N" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
                      <input type="image" src="calendario/calendario.gif" id="fecha" />
                      <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
                       <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fecha1", //nombre del id de del campo
      								ifFormat    : "%Y-%m-%d",
      								button      : "fecha" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
                      &nbsp;<strong>Telefono 
                      <input class="input-small"  type="text" name="textfield2" id="textfield2">
                      Direccion
                      <input class="input-xlarge"  type="text" name="textfield3" id="textfield3">
                      </strong></p></td>
                </tr>
                <tr>
                  <td valign="top"><strong> Titulo
                    <select class="span4" name="select" id="select">
                    </select>
                    Cargo 
                    <select class="span4" name="select2" id="select2">
                    </select>
<label for="select2"></label>
                    <label for="select"></label>
<label for="select2"></label>
<label for="textfield"></label>
                  </strong></td>
                </tr>
          </table>
              <p>&nbsp;</p>
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