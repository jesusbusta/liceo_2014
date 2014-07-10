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
<td><h3> <img src="imagenes_DR_A.U.P/tit_icono.jpg" width="100" height="100" class="img-circle img-polaroid"> Registro de Periodo Escolar</h3></td>
        </tr>
      </table>
      <form action="registro_periodo_escolar2.php" method="post" name="form1" onSubmit="MM_validateForm('fecha1','','R','Fecha_ini','','R');return document.MM_returnValue">
        <table width="100%" border="1" class="table table-bordered table-hover"	>
          <tr class="info">
            <td width="789"><center><strong>Seleccione la Fecha de Inicio y de Culminaciòn del Año Escolar</strong></center></td>
          </tr>
          <tr>
            <td><p>&nbsp;</p>
              <p><center><strong>Inicia</strong>&nbsp;
               <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
          <input class="input-small" type="text" id="fecha1" name="fecha_ini" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
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
                <strong>Culmina</strong>&nbsp;
          <input name="fecha_cul" type="text" class="input-small" id="Fecha_ini" onKeyPress="return nonumeyletra(event)" size="10" readonly readonlyname="fecha_fin"/> <input type="image" src="calendario/calendario.gif" id="fecha_i" />&nbsp;</center></p>
         <script type="text/javascript"> 
					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar 
 					Calendar.setup
						(
    							{
      								inputField  : "Fecha_ini", //nombre del id de del campo
      								ifFormat    : "%Y-%m-%d",
      								button      : "fecha_i" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);
  
				</script>
              </td>
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