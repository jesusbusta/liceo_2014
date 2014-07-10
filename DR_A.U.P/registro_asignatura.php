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
<td><h3> <img src="imagenes_DR_A.U.P/imagen-materias.jpg" width="100" height="100" class="img-circle img-polaroid"> Registro de Asignatura</h3></td>
        </tr>
      </table>
      <form action="registro_asignatura2.php" method="post" name="form1" onSubmit="MM_validateForm('fecha1','','R','Fecha_ini','','R');return document.MM_returnValue">
        <table width="100%" border="1" class="table table-bordered table-hover"	>
          <tr>
            <td width="789"><strong>Codigo de Asignatura</strong>
              <input name="COD_ASIG" type="text" class="input-medium" id="textfield15">
              &nbsp;
              <strong>Nombre </strong>
              <input class="input-medium" type="text" name="NOMBRE_ASIG" id="textfield16">
              &nbsp;<strong>Grado o Año a la que Pertenece</strong>&nbsp;<?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  grado ORDER BY id_grado";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
              <span class="inserta_tablas2">
              <select class="span2"  name="ID_grado" id="id_fecha" required="required">
                <option></option>
                <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
                <option value="<?php echo $rowd['id_grado']?>" selected="selected">
                  <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nombre_grado']. " "?>
                  </option>
                <?php
} 
//se ejecuta la repeticion mientras existan registros
while ($rowd= mysql_fetch_assoc($sqlcd));
//se cierra el lista/menu con </select>
?>
              </select>
              </span></td>
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