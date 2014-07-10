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
#apDiv1 {
	position: absolute;
	width: 874px;
	height: 20px;
	z-index: 1;
	left: 214px;
	top: 195px;
	background-color: #FFFFFF;
}
</style>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' campo requerido.\n'; }
    } if (errors) alert('los siguientes errores'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>

<body>
<p>&nbsp;</p>
<table width="66%" height="410" align="center">
  <tr>
    <td height="404" valign="top"><div>
      <table width="70%" border="1" align="center" class="table table-bordered">
        <tr class="info">
          <td width="701" height="82"><center>
            <img src="imagenes_DR_A.U.P/encabezadoliceo.png" alt="" width="74%" height="90%">
          </center></td>
        </tr>
      </table>
    </div>
      <form action="" method="post" name="form1" onSubmit="MM_validateForm('USU','','R','CLA','','R');return document.MM_returnValue">
        <table width="732" border="0" align="center">
        <tr>
          <td width="726" height="311" valign="top"><div>
            <table width="92%" border="1" align="center" class="table table-bordered table-hover">
              <tr class="info">
                <td width="712" height="29"><center><strong>ACCESO AL SISTEMA</strong></center> </td>
              </tr>
              <tr>
                <td height="166"><center> 
                  <p><img src="imagenes_DR_A.U.P/usuarios.png" width="10%" height="10%" class="img-rounded img-polaroid">&nbsp; <strong>USUARIO</strong> 
                    <input class="input-medium" type="text" name="USU" id="USU">
                    <strong>CLAVE</strong> 
                    <input class="input-medium"  type="password" name="CLA" id="CLA">
                  </p>
                  <p>
                    <input name="button" type="submit" class="btn btn-info" id="button" value="Acceder">
                  </p>
                  <p>
                    <label for="CLA"></label>
                    <label for="USU"></label>
                  </p>
                </center></td>
              </tr>
            </table>
            <p>&nbsp;</p>
          </div>
<?php
//Activando conexión
	  require_once("../adodb/adodb.inc.php");
	  require_once("../connection/connection.php");
	    
//Definición de Página de Inicio del Sitio
   $sPaginaInicioSitio="menu_administrador.php"; // Aqui se llama al Menu del Administrador
   $sPaginaInicioSitio2="menu_usuario.html";  // Aqui se redirecciona al menu del usuario
 
//Iniciando sesión
 	  GLOBAL $_SESSION;
	  session_start();
	
        
//Verificar autenticidad de usuario
  	  $loginFailed= true; 
// Inicializar bandera de NO autenticación de usuario
//Validación de usuario por BD

$sql="SELECT * FROM usuarios WHERE n_usuario= '".$_POST["USU"]."' AND c_usuario= '".$_POST["CLA"]."'" ;
		  $rsUser=$db->Execute($sql) or DIE($db->ErrorMsg());
		  if (!$rsUser->EOF) {
//usuario válido
				$_SESSION["c_usuario"]= $_POST["CLA"];
				$_SESSION["privilegio"]= $rsUser->fields("privilegio");
				$loginFailed = false; 
				if (isset($_GET["From"]))
		            $redirectPage= str_replace("*", "&", $_POST["From"]);
				
					  if ($_SESSION["privilegio"] !="A"){
					      $redirectPage= $sPaginaInicioSitio2;
						  }	
				
					  else {
				          $redirectPage= $sPaginaInicioSitio;
						  }	
				    }
		  else {
		  echo '<center><table width="100%"  align="center">
  <tr>
    <td height="61" valign="top"><div class="alert alert-error">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
     <h3><img src="imagenes_DR_A.U.P/error.png" width="28" height="16"/> Error!!</h3>
	  <center><h4>DATOS INVALIDOS O USUARIO NO REGISTRADO</4></center> 
    </div></td>
  </tr>
</table></center>';

//echo "Tu no tienes permisos para accesar al Sistema, diríjase al Administrador...<a     //href='index.html'>  Salir</a>";		
         
			   }
	
//Redireccionar usuario
	 	   if (!$loginFailed) { 
		         
	      		   header ("Location: $redirectPage");
		       exit;
		      }

?>  
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
  </form>
    <p></p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>