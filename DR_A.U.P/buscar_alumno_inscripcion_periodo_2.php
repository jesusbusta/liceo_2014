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
<td><h3><img src="imagenes_DR_A.U.P/icono_alumno.jpg" width="100" height="91" class="img-circle img-polaroid"> Datos del Alumno</h3></td>
        </tr>
      </table>
      <table width="100%" height="412" align="center">
        <tr>
          <td height="406" align="center" valign="middle"><div>
            <form name="form1" method="post" action="modificar_alumno3.php">
              
<table width="100%" border="1" class="table table-bordered table-hover">
  <tr class="info">
                  <td><strong>Datos del Alumno:</strong>
                    <input name="ID_ALUMNO" type="hidden" id="ID_ALUMNO" value="<?php echo $row[0]; ?>" /></td>
                </tr>
                <tr>
                  <td><strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp Nombre: </strong><?php echo $row[3]; ?>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                    <strong> Apellido: </strong><?php echo $row[4]; ?>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                    <strong>Cedula: </strong> <?php echo $row[5]; ?>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                    <strong>Sexo: </strong><?php echo $row[6]; ?></td>
                </tr>
                <tr>
                  <td valign="top"><p>&nbsp;<strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp Fecha de Nacimiento: </strong><?php echo $row[7]; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                      &nbsp;
                    <strong>Edad: </strong><?php echo $row[8]; ?>&nbsp;</p></td>
                </tr>
                <tr>
                  <td valign="top"><strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp Lugar de Nacimiento: </strong> <?php echo $row[9]; ?></td>
                </tr>
            </table>
<p>&nbsp;</p>
            </form>
			<center><h2>Año Escolar</h2></center>
  <table width="650"  border="1" bordercolor="#CCCCCC" class="tabla1"/>

   <TR bgcolor="#E4E4E7">
	<TH >#</TH>
	<TH width="2000">Año escolar</TH>
	<TH>Seccion</TH>
	<TH>Grado</TH>
	
  </tr>
  
 
  <?PHP
  include "coneccionbasedatosmysql.inc";
  
  
  $a1 = $_POST['CEDULA_A']; 
	$tp="SELECT * FROM ano_escolar where cedula_a='$a1'";
		$i=0;
		
		$resultado=basedatos($tp);
		$nro_fil = mysql_num_rows($resultado);
		
		 		  if($nro_fil == 0)
                   {

                   echo "<center><strong><center>Por ahora no existe $a1 sTabla informativa para este usuario</center></strong></center><br>";
                   }else
		while ($row = mysql_fetch_row($resultado))
    {
 		
		echo "<td><center>$row[1]</td>";
       	echo "<td><center>$row[2]</td>";
		echo "<td><center>$row[3]</td>";
		echo "<td><center>$row[4]</td>";
		echo "<td>
		<a href='modificartp.php?tp_odt=$row[0]'<center>-->Modificar
		<br>
		<a href='deletetp.php?tp_odt=$row[0]'<center>-->Eliminar</td>";

	
		

	   $i=$i+1;

       if (($i%1)==0)

       {

       echo "<tr></tr>";

       }

    }

		mysql_free_result($resultado);

	 ?>
  </table>
 <table>
 <tr><td ><?php echo "<a href='add.php?cedula_a=$a1'<center>Agregar"?></td></tr>
 </table>

  
  
  
  
  
  
  
  
	

</body>
</html>