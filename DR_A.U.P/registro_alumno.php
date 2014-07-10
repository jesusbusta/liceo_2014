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
<td><h3><img src="imagenes_DR_A.U.P/icono_alumno.jpg" width="100" height="91" class="img-circle img-polaroid"> Registro de Alumno</h3></td>
        </tr>
      </table>
      <table width="100%" height="412" align="center">
        <tr>
          <td height="406" align="center" valign="middle"><div>
            <form name="form1" method="post" action="registro_alumno2.php">
              <table width="100%" border="1" class="table table-bordered table-hover">
                <tr>
                  <td width="29%" height="58" align="center" valign="top"><strong>Periodo  Escolar</strong></td>
                  <td width="71%" align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  periodo_escolar ORDER BY id_periodo_e desc";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                    <select name="ID_fecha" id="id_fecha" required="required">
                      <option></option>
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
                      <option value="<?php echo $rowd['id_periodo_e']?>" selected="selected">
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['fecha_inicio']. " / " .$rowd['fecha_culminacion']; ?>
                        </option>
                      <?php
} 
//se ejecuta la repeticion mientras existan registros
while ($rowd= mysql_fetch_assoc($sqlcd));
//se cierra el lista/menu con </select>
?>
                    </select>
                    </span>
                  </center></td>
                </tr>
              </table>
<table width="100%" border="1" class="table table-bordered table-hover">
  <tr class="info">
                  <td><strong>Datos del Alumno:</strong></td>
                </tr>
                <tr>
                  <td><strong>Nombre</strong>
                    <input name="NOMBRES_A" type="text" class="input-medium" id="textfield15">&nbsp;
                    <strong> Apellido</strong>
                    <input class="input-medium" type="text" name="APELLIDOS_A" id="textfield16">&nbsp;
                    <strong>Cedula</strong>
                    <input class="input-small" type="text" name="CEDULA_A" id="textfield17">&nbsp;
                    <strong>Sexo</strong>
                    <select class="span1" name="SEXO_A" id="SEXO_A">
                      <option value="F">F</option>
                      <option value="M">M</option>
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
                      &nbsp;
                    <strong>Edad</strong>
                    <input class="input-mini" name="EDAD_A" type="text" id="textfield19" size="4">
                    &nbsp;</p></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Lugar de Nacimiento
                    <label for="textarea2"></label>
                    <textarea rows="3" name="LUGAR_N_A" cols="1000" id="textarea2"></textarea>
                  </strong></td>
                </tr>
            </table>
              <table width="100%" border="1" class="table table-bordered table-hover">
                <tr class="info">
                  <td colspan="2"><strong>Datos del Representante Legal:</strong></td>
                </tr>
                <tr>
                  <td colspan="2"><strong>Nombre</strong>
                    <input class="input-medium" type="text" name="NOMBRES_R" id="textfield20">&nbsp;
                    <strong>Apellido</strong>
                    <input class="input-medium" type="text" name="APELLIDOS_R" id="textfield21">&nbsp;&nbsp;
                    <strong>Cedula</strong>
                    <input class="input-small" name="CEDULA_R" type="text" id="textfield22" size="10">&nbsp;&nbsp;
                    <strong>Edad</strong>
                    <input class="input-mini" name="EDAD_R" type="text" id="EDAD_R" size="4"></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><strong>Parentesco</strong>
                    <input class="input-medium" type="text" name="PARENTESCO_R" id="textfield24">&nbsp;
                    <strong>Sexo</strong>
                    <select class="span1" name="SEXO_R" id="select6">
                      <option value="F">F</option>
                      <option value="M">M</option>
                    </select>&nbsp;
                    <strong>Ocupaciòn</strong>
                    <input class="input-medium" type="text" name="OCUPACION_R" id="OCUPACION_R">&nbsp;
                    <strong>Telefono</strong>
                    <input class="input-medium" type="text" name="TELEFONO_R" id="TELEFONO_R"></td>
                </tr>
                <tr>
                  <td colspan="2" valign="middle"><strong>Direcciòn
                    <label for="textarea"></label>
                    <textarea rows="3" name="DIRECCION_R" cols="1000" id="textarea"></textarea>
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