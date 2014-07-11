<?php
include("../connection/connection.php"); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inscripcion periodo escolar</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<style type="text/css">
body {
	background-color: #FFFFFF;
}
</style>
    <style type="text/css">
<!--
.Estilo1 {font-size: 26px}
.Estilo2 {font-size: 12px}
-->
    </style>
    
<link rel="stylesheet" type="text/css" href="shadowbox.css">
<script type="text/javascript" src="shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
    
<style type="text/css">
<!--
.Estilo3 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<table width="73%" height="152" align="center">
  <tr>
    <td height="146" valign="top"><div>
      <table width="100%" height="66" border="1" class="table table-bordered">
        <tr class="info">
<td><h3><img src="imagenes_DR_A.U.P/icono_alumno.jpg" width="100" height="91" class="img-circle img-polaroid"> Inscripci&oacuten</h3></td>
        </tr>
      </table>


<?php 
$cedula_a= $_REQUEST['cedula_a'];
$id_grado= $_REQUEST['id_grado']; 
echo $id_grado.$cedula_a;
?>

<!-- EMPIEZA LA PAG -->
 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="guardar_inscripcion.php" onSubmit="return validar()">
 
 
<p align="center" class="Estilo3"><strong>Proporcione la siguiente Informaci&oacute;n</strong> 
 
</p>

<div align="center"><br>
    <br>
  <!-- -->
  <table width="100%" border="1" class="table table-bordered table-hover">
                <tr>
                  <td width="29%" height="58" align="center" valign="top"><strong>Periodo  Escolar</strong></td>
                  <td width="71%" align="center"><center>
                    <span class="inserta_tablas2">
                    <?php 
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  periodo_escolar ORDER BY id_periodo_e asc";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                    <select name="id_fecha" id="id_fecha" required="required">
                      <option selected="selected">Seleccionar</option>
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
                      <option value="<?php echo "".$rowd['fecha_inicio']. " --- " .$rowd['fecha_culminacion']?>">
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['fecha_inicio']. " --- " .$rowd['fecha_culminacion']; ?>
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
			  
			  
<!--fila 2 		  
			 <table width="100%" border="1" class="table table-bordered table-hover">
                <tr>
                  <td width="29%" height="58" align="center" valign="top"><strong>Grado</strong></td>
                  <td width="71%" align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD 
/*
include('conecta.php');

//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  grado ORDER BY id_grado  asc";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="id_grado" id="id_grado" required="required">
				   <option selected="selected">Seleccionar</option>
                     
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
                      <option value="<?php echo $rowd['nombre_grado']?>">
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nombre_grado']; ?>
                        </option>
                      <?php
} 
//se ejecuta la repeticion mientras existan registros
while ($rowd= mysql_fetch_assoc($sqlcd));*/
//se cierra el lista/menu con </select>
?>
                    </select>
                    </span>
                  </center></td>
                </tr>
              </table>
			    
			  
			  -->
			  <!--fila 3 -->	 	  
			 <table width="100%" border="1" class="table table-bordered table-hover">
                <tr>
                  <td width="29%" height="58" align="center" valign="top"><strong>Secci&oacute;n</strong></td>
                  <td width="71%" align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  seccion ORDER BY id_seccion  asc";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="id_seccion" id="id_seccion" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['nombre_seccion']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nombre_seccion']; ?>
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
			    
			  <!-- OTRA FILA -->
			  
		<table border="0" width="98">
<tr>
  <td width="92">
  <!--
  <?php //id_grado=id_grado;	 echo "<a rel='shadowbox[Mixed];width=1900;height=800'' href='add2.php?enviar1=$cedula_a&enviar2=$id_grado'>" ?> <img src="img/12.png" alt="an image" width="90" height="70" border="0" class="image" /></a></a></td>
  -->
  </tr>
</table>	  
			  
<p align="center" class="Estilo3"><strong>Inscripcion de Materias</strong> 
 
</p>			

<table width="100%" border="1" class="table table-bordered table-hover">
                <tr>
                  
	<!-- MATERIA 1-->
	
					  
				  <td align="center" valign="top"><strong>Materia #1</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
					   <select name="materia1" id="materia1" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  
				  <!-- MATERIAS 2 -->
				  
				 
				 <td align="center" valign="top"><strong>Materia #2</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia2" id="materia2" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				                    
	<!-- MATERIA 3-->
	
					  
				  <td align="center" valign="top"><strong>Materia #3</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia3" id="materia3" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				<tr>
				
				  
				  <!-- MATERIAS 4 -->
				  
				 
				 <td align="center" valign="top"><strong>Materia #4</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia4" id="materia4" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				    	  
				  
				  
                
				<!-- MATERIAS 5 -->
				  <td align="center" valign="top"><strong>Materia #5</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia5" id="materia5" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  
				  
				  <!-- MATERIAS 6 -->
				  <td align="center" valign="top"><strong>Materia #6</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia6" id="materia6" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  <tr>
				  
				  <!-- MATERIAS 7-->

				  <td align="center" valign="top"><strong>Materia #7</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia7" id="materia7" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  <!-- MATERIAS 8-->
				  <td align="center" valign="top"><strong>Materia #8</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia8" id="materia8" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				 <!-- MATERIAS 9-->
				  <td align="center" valign="top"><strong>Materia #9</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia9" id="materia19" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				<tr>
				
				
				<!-- MATERIAS 10-->
				  <td align="center" valign="top"><strong>Materia #10</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia10" id="materia10" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  
				  
				  
				  				  <!-- MATERIAS 11-->
				  <td align="center" valign="top"><strong>Materia #11</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia11" id="materia11" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  
				  
				<!-- MATERIAS 12-->
				  <td align="center" valign="top"><strong>Materia #12</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia12" id="materia12" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  <tr></tr>
				  
				  <!-- MATERIAS 13-->
				  <td align="center" valign="top"><strong>Materia #13</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia13" id="materia13" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  
				  
				  
				  				  <!-- MATERIAS 14-->
				  <td align="center" valign="top"><strong>Materia #14</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia14" id="materia14" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
				  
				  
				  
				<!-- MATERIAS 15-->
				  <td align="center" valign="top"><strong>Materia #15</strong></td>
                  <td align="center"><center>
                    <span class="inserta_tablas2">
                    <?php
//se debe conectar con BD
include('conecta.php');
//Luego se establece el para metro a consultar
$sqld = "SELECT * FROM  materias where id_grado='$id_grado'";
//Se ejecuta la consulta de la tabla
$sqlcd = mysql_query($sqld);
//se busca por fila es decir por c/registro
$rowd = mysql_fetch_assoc($sqlcd);
//se crea el lista/menu con <select> y se le asigna el nombre (name)
//con (required) validacion de HTML5; se establece como campo obligatorio.
?>
                   <select name="materia15" id="materia15" required="required">
				   <option selected="selected">Seleccionar</option>
                      
                      <?php 
//se crea el bucle do-while (haga-mientras)
do { 
//se muestran los valores  del lista/menu
 //Dentro del <option value="AQUI DEBE ESTAR EL VALOR QUE SE VA GUARDAR EN LA BD"> 
?>
					
                      <option value="<?php echo $rowd['cod_materia']?>" >
                        <?php
 //Y despues de <option value="">ES LO QUE SE MUESTRA AL USUARIO EN EL LISTA-MENU</option>
 echo "".$rowd['nom_materia']; ?>
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
	<input type="hidden" id="id_grado" name="id_grado" value="<?php echo $id_grado ?>" />
	<input type="hidden" id="cedula_a" name="cedula_a" value="<?php  echo "$cedula_a"; ?>"  />
   <br />
</br>
   
    <input name="submit" type="submit" value="Guardar">
</div>
<br />
</br>
 </form>

</body>
</html>