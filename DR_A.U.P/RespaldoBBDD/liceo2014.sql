create table alumnos
(
    id_alumno int auto_increment primary key,
    id_periodo_e char(100),
    id_representante int,
    nombres_a char(50),
    apellidos_a char(50),
    cedula_a char(10),
    sexo_a char(20),
    fecha_n date,
    edad_a int,
    lugar_n_a char(150)
);

insert into alumnos (id_alumno, id_periodo_e, id_representante, nombres_a, apellidos_a, cedula_a, sexo_a, fecha_n, edad_a, lugar_n_a) values (1, "1", 7, "luiggi antonio", "contreras flores", "20142467", "femenino", "1991-02-07", 25, "santa barbara del zulia");
insert into alumnos (id_alumno, id_periodo_e, id_representante, nombres_a, apellidos_a, cedula_a, sexo_a, fecha_n, edad_a, lugar_n_a) values (21, "10", 2, "keiner jose", "flores jimenez", "21939830", "masculino", "2001-05-22", 15, "el vigia merida");
insert into alumnos (id_alumno, id_periodo_e, id_representante, nombres_a, apellidos_a, cedula_a, sexo_a, fecha_n, edad_a, lugar_n_a) values (22, "7", 3, "junior david", "rojas toledo", "28954231", "masculino", "2002-11-13", 12, "el chivo estado zulia");
insert into alumnos (id_alumno, id_periodo_e, id_representante, nombres_a, apellidos_a, cedula_a, sexo_a, fecha_n, edad_a, lugar_n_a) values (23, "2", 4, "Douglas", "Galvis", "16906699", "M", "2010-06-07", 31, "vigia");


create table grado
(
    id_grado int auto_increment primary key,
    nombre_grado char(20)
);

insert into grado (id_grado, nombre_grado) values (1, "septimo");
insert into grado (id_grado, nombre_grado) values (2, "octavo");
insert into grado (id_grado, nombre_grado) values (3, "noveno");
insert into grado (id_grado, nombre_grado) values (4, "cuarto");
insert into grado (id_grado, nombre_grado) values (5, "quinto");
insert into grado (id_grado, nombre_grado) values (6, "sesto");


create table materias
(
    id_materia int auto_increment primary key,
    id_grado int,
    cod_materia char(20),
    nom_materia char(50)
);

insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (2, 1, "82611", "matematica");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (4, 6, "81545", "castellano");


create table periodo_escolar
(
    id_periodo_e int auto_increment primary key,
    fecha_inicio date,
    fecha_culminacion date
);

insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (1, "0000-00-00", "0000-00-00");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (2, "2014-05-21", "2014-05-22");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (3, "2014-05-23", "2014-05-24");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (4, "2014-05-24", "2014-05-25");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (5, "2014-05-25", "2014-05-26");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (6, "2014-05-30", "2014-05-31");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (7, "2014-06-13", "2014-05-15");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (8, "2015-05-15", "2014-05-04");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (9, "2016-05-13", "2017-05-07");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (10, "2018-05-12", "2020-05-16");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (11, "2019-06-01", "2020-06-06");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (12, "2010-06-16", "2023-06-17");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (13, "2010-06-07", "2011-06-14");
insert into periodo_escolar (id_periodo_e, fecha_inicio, fecha_culminacion) values (14, "2030-08-05", "2031-08-05");


create table representantelegal
(
    id_representante int auto_increment primary key,
    nombres_r char(50),
    apellidos_r char(50),
    cedula_r char(10),
    edad_r int,
    parentesco_r char(20),
    sexo_r char(10),
    ocupacion_r char(20),
    telefono_r char(10),
    direccion_r char(150)
);

insert into representantelegal (id_representante, nombres_r, apellidos_r, cedula_r, edad_r, parentesco_r, sexo_r, ocupacion_r, telefono_r, direccion_r) values (1, "maria zulay", "araque pereira", "10236965", 45, "madre", "mujer", "obrera", "0424748497", "la paez");
insert into representantelegal (id_representante, nombres_r, apellidos_r, cedula_r, edad_r, parentesco_r, sexo_r, ocupacion_r, telefono_r, direccion_r) values (2, "paula sofia", "dias lopez", "11555847", 42, "madre", "mujer", "bedel", "0275881494", "santa barbara del zulia");
insert into representantelegal (id_representante, nombres_r, apellidos_r, cedula_r, edad_r, parentesco_r, sexo_r, ocupacion_r, telefono_r, direccion_r) values (3, "maria yuraima", "toledo rangel", "16842892", 30, "madre", "mujer", "obrera", "0275808006", "parque chama");
insert into representantelegal (id_representante, nombres_r, apellidos_r, cedula_r, edad_r, parentesco_r, sexo_r, ocupacion_r, telefono_r, direccion_r) values (4, "Anggy", "Perez", "16307650", 30, "Madre", "F", "Empleada", "010000000", "el vigia");


create table seccion
(
    id_seccion int auto_increment primary key,
    nombre_seccion char(1)
);

insert into seccion (id_seccion, nombre_seccion) values (1, "A");
insert into seccion (id_seccion, nombre_seccion) values (2, "B");
insert into seccion (id_seccion, nombre_seccion) values (3, "C");
insert into seccion (id_seccion, nombre_seccion) values (4, "D");
insert into seccion (id_seccion, nombre_seccion) values (5, "E");
insert into seccion (id_seccion, nombre_seccion) values (6, "F");
insert into seccion (id_seccion, nombre_seccion) values (7, "G");
insert into seccion (id_seccion, nombre_seccion) values (8, "H");


create table usuarios
(
    id_usuario int auto_increment primary key,
    id_alumno int,
    n_usuario char(20),
    c_usuario char(20),
    privilegio char(1)
);

insert into usuarios (id_usuario, id_alumno, n_usuario, c_usuario, privilegio) values (1, 1, "luiggi", "1234", "A");
insert into usuarios (id_usuario, id_alumno, n_usuario, c_usuario, privilegio) values (5, 1, "", "", "A");


