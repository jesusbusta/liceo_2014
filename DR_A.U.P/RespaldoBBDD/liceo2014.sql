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
insert into alumnos (id_alumno, id_periodo_e, id_representante, nombres_a, apellidos_a, cedula_a, sexo_a, fecha_n, edad_a, lugar_n_a) values (23, "2", 4, "karol", "bustamante", "16906699", "M", "2010-06-07", 29, "vigia");
insert into alumnos (id_alumno, id_periodo_e, id_representante, nombres_a, apellidos_a, cedula_a, sexo_a, fecha_n, edad_a, lugar_n_a) values (24, "1", 5, "Jesus", "Bustamante", "18208483", "M", "1989-04-09", 25, "Tovar");


create table ano_escolar
(
    id_ano_escolar int auto_increment primary key,
    cod_inscripcion char(50),
    cedula_a int,
    periodo_escolar char(50),
    grado_escolar char(30),
    seccion char(5),
    materia1 char(50),
    materia2 char(50),
    materia3 char(50),
    materia4 char(50),
    materia5 char(50),
    materia6 char(50),
    materia7 char(50),
    materia8 char(50),
    materia9 char(50),
    materia10 char(50),
    materia11 char(50),
    materia12 char(50),
    materia13 char(50),
    materia14 char(50),
    materia15 char(50)
);

insert into ano_escolar (id_ano_escolar, cod_inscripcion, cedula_a, periodo_escolar, grado_escolar, seccion, materia1, materia2, materia3, materia4, materia5, materia6, materia7, materia8, materia9, materia10, materia11, materia12, materia13, materia14, materia15) values (17, "octavoD_2014-05-24 --- 2014-05", 18208483, "2014-05-24 --- 2014-05-25", "octavo", "D", "", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0");
insert into ano_escolar (id_ano_escolar, cod_inscripcion, cedula_a, periodo_escolar, grado_escolar, seccion, materia1, materia2, materia3, materia4, materia5, materia6, materia7, materia8, materia9, materia10, materia11, materia12, materia13, materia14, materia15) values (20, "septimoB_2014-05-30 --- 2014-0", 18208483, "2014-05-30 --- 2014-05-31", "septimo", "B", "", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0");


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
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (5, 1, "mat", "maatematicaaa");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (6, 1, "in07", "ingles");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (7, 2, "ca08", "castellano");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (8, 1, "07MAT_14", "Matematica");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (9, 1, "07CAS_14", "Castellano y Literatura");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (10, 1, "07GEO_14", "Geografia de Venezuela");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (11, 1, "07HIST_14", "Historia de Venezuela");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (12, 1, "07INGL_14", "Ingles");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (13, 1, "07EDUCFIS_14", "Educacion Fisica y deporte");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (14, 1, "07ART_14", "Artes Plasticas");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (15, 1, "07CSC_14", "Ciencias");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (16, 1, "07MUS_14", "Musica");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (17, 1, "07REG_14", "Religion");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (18, 1, "07BIOL_14", "Biologia");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (19, 1, "07INF_14", "Informatica");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (20, 1, "07GEOUN_14", "Geografia universal");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (21, 1, "07FISC_14", "FISICA I");
insert into materias (id_materia, id_grado, cod_materia, nom_materia) values (22, 1, "07FRANC_14", "Frances");


create table periodo_escolar
(
    id_periodo_e int auto_increment primary key,
    fecha_inicio date,
    fecha_culminacion date
);

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
insert into representantelegal (id_representante, nombres_r, apellidos_r, cedula_r, edad_r, parentesco_r, sexo_r, ocupacion_r, telefono_r, direccion_r) values (5, "Marcelino", "Bustamante", "5448294", 55, "Padre", "M", "Fotografo", "0424759300", "Tovar");


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
insert into usuarios (id_usuario, id_alumno, n_usuario, c_usuario, privilegio) values (6, 0, "jesus", "12345678", "A");


