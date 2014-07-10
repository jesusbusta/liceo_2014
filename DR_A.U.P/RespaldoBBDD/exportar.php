<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/javascript" href="../js/bootstrap.js">
</head>

<body>
<center>
  <p>&nbsp;</p>
  <table width="73%" height="152" align="center">
    <tr>
      <td height="146" valign="top"><div>
        <table width="100%" height="66" border="1" class="table table-bordered">
          <tr class="info">
            <td><h3><img src="../imagenes_DR_A.U.P/accept-database-icon.png" alt="" width="100" height="91" class="img-circle img-polaroid">Respaldo de Base de Datos</h3></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <?php
//---- Incluimos la clase.
include ('mysql_backup.class.php');

//---- Aqui configuramos la conexion a la base de datos mysql
$db_host = "localhost"; //---- host de la Base de datos
$db_name = "liceo2014"; //---- nombre de la base de datos
$db_user = "root"; //---- el nombre de usuario para esta base de datos
$db_pass = ""; //---- password del usuario de la base de datos

//---- En esta linea le damos el nombre al archivo, es este caso es backup.sql
//---- Tambien puedes guardarlo .txt
//---- Si el archivo no existe, la clase lo crea automaticamente, si existe lo reemplaza
$output = "liceo2014.sql";

//---- Si esta variable es true (verdadero) solo se guardara la estructura de la base de datos
//---- Si es false (falso) guardara la estructura de las tablas junto con todos los datos almacenados
$structure_only = false;

//---- Creamos una instancia del objeto
$backup = new mysql_backup($db_host,$db_name,$db_user,$db_pass,$output,$structure_only);

//---- llamamos la funcion backup() que crea el archivo de respaldo con el nombre que le dimos anteriormente backup.sql
//---- este archivo es el respaldo y se usa en el proximo ejemplo de restauracion de base de datos
$backup->backup();
echo '<center><table width="73%"  align="center">
  <tr>
    <td height="61" valign="top"><div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
     <h3><img src="../imagenes_DR_A.U.P/ok.png" width="28" height="16"/> Informaciòn!!</h3>
	  <center><h4>!!!!RESPALDO EXITOSO!!!!</h4></center> 
    </div></td>
  </tr>
</table></center>';
?>
  </p>
  <p> <a href="../menu_administrador.php" role="button" class="btn btn-info"><i class="icon-align-justify icon-white"></i> Menu</a></p>
</center>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>