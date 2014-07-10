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
<table width="73%" height="152" align="center">
  <tr>
    <td height="146" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/icono_alumno.jpg" width="100" height="91" class="img-circle img-polaroid"> Modificar Datos del Alumno</h3></td>
        </tr>
      </table>
      <table width="100%" height="412" align="center">
        <tr>
          <td height="406" align="center" valign="middle"><div>
            <form name="form1" method="post" action="modificar_alumno3.php">
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
                  <td><strong>Datos del Alumno:</strong>
                    <input name="ID_ALUMNO" type="hidden" id="ID_ALUMNO" value="<?php echo $row[0]; ?>" /></td>
                </tr>
                <tr>
                  <td><strong>
                    Nombre</strong>
                    <input name="NOMBRES_A" type="text" class="input-medium" id="textfield15" value="<?php echo $row[3]; ?>">&nbsp;
                    <strong> Apellido</strong>
                    <input name="APELLIDOS_A" type="text" class="input-medium" id="textfield16" value="<?php echo $row[4]; ?>">&nbsp;
                    <strong>Cedula</strong>
                    <input name="CEDULA_A" type="text" class="input-small" id="textfield17" value="<?php echo $row[5]; ?>">&nbsp;
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
                      <input name="FECHA_N" type="text" class="input-small" id="fecha1" onkeypress="return nonumeyletra(event)" value="<?php echo $row[7]; ?>" size="10"readonly="readonly"/>
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
                    <input name="EDAD_A" type="text" class="input-mini" id="textfield19" value="<?php echo $row[8]; ?>" size="4">
                    &nbsp;</p></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Lugar de Nacimiento
                    <label for="textarea2"></label>
                    <textarea rows="3" name="LUGAR_N_A" cols="1000" id="textarea2"><?php echo $row[9]; ?></textarea>
                  </strong></td>
                </tr>
            </table>
<p>&nbsp;</p>
              <p>
                <input type="submit" class="btn btn-info" name="button3" id="button3" value="Modificar">
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