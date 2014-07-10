<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
</head>

<body>
<div class="navbar navbar-static">
<div class="navbar-inner">
<div class="container">
<ul class="nav" role="navigation">
<li class="dropdown">
<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Alumno</a>
 <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registro_alumno.php"><i class="icon-user"></i> Registrar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="consultar_representante_existente.php"><i class="icon-user"></i>
                 Registrar Alumno a<br> 
                 Representante Existente </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="eliminar_alumno.php"><i class="icon-trash"></i> Eliminar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="modificar_alumno.php"><i class="icon-edit"></i> Modificar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="buscar_alumno.php"><i class="icon-search"></i> Buscar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="consulta_general_alumnos.php"><i class="icon-list"></i> Consulta General</a></li>
              </ul>
</li>
<li class="dropdown">
<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-calendar"></i> Periodo Escolar</a>
 <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registro_periodo_escolar.php"><i class="icon-calendar"></i> Registrar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-trash"></i> Eliminar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-edit"></i> Modificar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-search"></i> Buscar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-list"></i> Consulta General</a></li>
              </ul>
</li>
<li class="dropdown">
<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-home"></i>Secciòn</a>
 <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registro_seccion.php"><i class="icon-home"></i> Registrar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-trash"></i> Eliminar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-edit"></i> Modificar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-search"></i> Buscar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-list"></i> Consulta General</a></li>
              </ul>
</li>
<li class="dropdown">
<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-pencil"></i>Grado</a>
 <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registro_grado.php"><i class=" icon-pencil"></i> Registrar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-trash"></i> Eliminar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-edit"></i> Modificar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-search"></i> Buscar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-list"></i> Consulta General</a></li>
              </ul>
</li>
<li class="dropdown">
<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book"></i>Asignatura</a>
 <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registro_asignatura.php"><i class="icon-book"></i> Registrar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-trash"></i> Eliminar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-edit"></i> Modificar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-search"></i> Buscar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-list"></i> Consulta General</a></li>
              </ul>
</li>
<li class="dropdown">
<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>Docente</a>
 <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registro_docente.php"><i class="icon-user"></i> Registrar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-trash"></i> Eliminar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-edit"></i> Modificar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-search"></i> Buscar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-list"></i> Consulta General</a></li>
              </ul>
</li>
<li class="dropdown">
<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-lock"></i>Segurida</a>
 <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="RespaldoBBDD/exportar.php"><i class="icon-lock"></i> Respaldar BD</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="buscar_pararegistrar_usuario.php"><i class="icon-user"></i> Registro usuario</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-edit"></i> Modificar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-search"></i> Buscar</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="icon-list"></i> Consulta General</a></li>
              </ul>
             
</li>
<li>
<a href="Index.html" role="button"><i class="icon-lock"></i>Salir</a>         
</li>
</ul>
</div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>