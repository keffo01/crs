-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2019 a las 21:26:56
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cruz_roja_esa`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `datos_estado_vol` (IN `sol_id` INT)  NO SQL
select si.id_voluntario,se.Nombre_seccional,si.Primer_apellido,si.Segundo_apellido,si.Nombres,si.Fecha_ingreso,si.Lugar_nacimiento,si.Fecha_nacimiento,na.Nombre_nacionalidad,sex.Tipo_sexo, IF( ent.Ent_estado_civil=1,"soltero","Casado")as Estado_civil,ent.No_hijos,ent.profesion,ent.Ent_form_academica,ent.Ent_DUI,si.Tipo_sangre,ent.Ent_direccion,si.Telefono,si.Nombre_trabajo ,si.Direccion_trabajo,si.Tel_trabajo,si.Institucion,si.Dir_institucion,si.Tel_institucion, ets.Nombre_estado_solicitud, users.Email, ifnull(pci.Entrevista_id,0) as Entrevista_id from solicitud_ingreso si left join proceso_ingreso pci ON si.Usuario_sol_id = pci.Usuario_id left join estado_solicitud ets on pci.Estado_proceso_id = ets.Id_estado_solicitud left join entrevista ent ON si.id_voluntario = ent.Id_entrevista_solicitud left join seccional se on si.Seccional_id = se.Id_seccional left join nacionalidad na ON si.Nacionalidad_id = na.Id_nacionalidad left join sexo sex ON si.Sexo_id = sex.Id_sexo left join usuarios users ON si.Usuario_sol_id = users.Id_usuario WHERE si.Usuario_sol_id = sol_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datos_estado_volun_update` (IN `sol_id` INT)  NO SQL
select si.*,se.Nombre_seccional,na.Nombre_nacionalidad,sex.Tipo_sexo, IF( ent.Ent_estado_civil=1,"soltero","Casado")as Estado_civil,ent.No_hijos,ent.profesion,ent.Ent_form_academica,ent.Ent_DUI,ent.Ent_direccion, ets.Nombre_estado_solicitud from solicitud_ingreso si left join proceso_ingreso pci ON si.Usuario_sol_id = pci.Usuario_id left join estado_solicitud ets on pci.Estado_proceso_id = ets.Id_estado_solicitud left join entrevista ent ON si.id_voluntario = ent.Id_entrevista_solicitud left join seccional se on si.Seccional_id = se.Id_seccional left join nacionalidad na ON si.Nacionalidad_id = na.Id_nacionalidad left join sexo sex ON si.Sexo_id = sex.Id_sexo WHERE si.Usuario_sol_id = sol_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Datos_generales_voluntario` ()  NO SQL
select si.id_voluntario,se.Nombre_seccional,si.Primer_apellido,si.Segundo_apellido,si.Nombres,si.Fecha_ingreso,si.Lugar_nacimiento,si.Fecha_nacimiento,na.Nombre_nacionalidad,sex.Tipo_sexo, IF( ent.Ent_estado_civil=1,"soltero","Casado")as Estado_civil,ent.No_hijos,ent.profesion,ent.Ent_form_academica,ent.Ent_DUI,si.Tipo_sangre,ent.Ent_direccion,si.Telefono,si.Nombre_trabajo ,si.Direccion_trabajo,si.Tel_trabajo,si.Institucion,si.Dir_institucion,si.Tel_institucion, ets.Nombre_estado_solicitud, si.Usuario_sol_id from solicitud_ingreso si left join proceso_ingreso pci ON si.Usuario_sol_id = pci.Usuario_id left join estado_solicitud ets on pci.Estado_proceso_id = ets.Id_estado_solicitud left join entrevista ent ON si.id_voluntario = ent.Id_entrevista_solicitud left join seccional se on si.Seccional_id = se.Id_seccional left join nacionalidad na ON si.Nacionalidad_id = na.Id_nacionalidad left join sexo sex ON si.Sexo_id = sex.Id_sexo$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `estado` (IN `st` INT(3), IN `id_usuario` INT(7))  NO SQL
update proceso_ingreso set Estado_proceso_id = st where Usuario_id = id_usuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Info_med_voluntario` ()  NO SQL
select si.id_voluntario,si.Nombres,s.Nombre_seccional,si.Nombre_padre, case si.Condicion_padre when Condicion_padre = 1 then "Vivo" end AS Condicion_padre,si.Nombre_madre,case si.Condicion_madre when Condicion_madre = 1 then "Vivo" end AS Condicion_madre,case when Epilepsia = 1 then "si" else "no" end as Epileptico,case when Asma = 1 then "si" else "no" end as Asmatico,case when cardiaco = 1 then "si" else "no" end as Prob_cardiaco, case when Hepatitis = 1 then "si" else "no" end as Hepatitis, case when Enf_venereas = 1 then "si" else "no" end as Venereas,case when Diabetico = 1 then "si" else "no" end as Diabetes from solicitud_ingreso si left join seccional s ON Seccional_id = Id_seccional$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pdf` (IN `id` INT)  NO SQL
select sol.id_voluntario,se.Nombre_seccional,sol.Area_id,tp.Nombre_tipo_voluntario, sol.Primer_apellido, sol.Segundo_apellido, sol.Nombres,sex.Tipo_sexo,sol.Lugar_nacimiento, sol.Fecha_nacimiento,sol.Edad,na.Nombre_nacionalidad,sol.Carnet_partida_nac,sol.Lugar_exp_partidacarnet,sol.Fecha_exp_partidacarnet,sol.Idiomas,
sol.Domicilio,sol.Telefono,sol.Email,sol.Nombre_padre,IF(Condicion_padre = 1,"X","x")as  Condicion_padre,sol.Nombre_madre,IF(Condicion_madre = 1,"X","x")as  Condicion_madre,sol.Estudios_realizados, sol.Estudios_realizados_dos,sol.Lugar_exp_diploma_induccion,sol.Fecha_exp_diploma_induccion,sol.Referencia_uno,sol.Dir_ref_uno,sol.Tel_ref_uno, sol.Referencia_dos,sol.Dir_ref_dos,sol.Tel_ref_dos,sol.Tipo_sangre,sol.Peso,sol.Altura,sol.Alergias,sol.Epilepsia,sol.Asma,sol.Cardiaco,sol.Hepatitis, sol.Enf_venereas,sol.Diabetico,sol.Serv_asistenciales,sol.Emergencia,sol.Dir_emergencia,sol.Tel_emergencia,sol.Nombre_trabajo,sol.Direccion_trabajo, sol.Tel_trabajo,sol.Estudiante,sol.Carrera,sol.Institucion,sol.Dir_institucion,sol.Tel_institucion,sol.Lugar_ingreso,sol.Fecha_ingreso from solicitud_ingreso sol left join seccional se on sol.Seccional_id = se.Id_seccional left join tipo_voluntario tp on sol.Area_id = tp.Id_tipo_voluntario left join sexo sex on sol.Sexo_id = sex.Id_sexo left join nacionalidad na on sol.Nacionalidad_id = na.Id_nacionalidad where sol.id_voluntario = id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones_voluntarios`
--

CREATE TABLE `capacitaciones_voluntarios` (
  `id_capacitaciones` int(11) NOT NULL,
  `Nombre_capacitacion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_capacitacion` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Capacitador` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `No_horas` int(11) NOT NULL,
  `Voluntario_id` int(11) NOT NULL,
  `Observacion_capacitaciones` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_voluntario`
--

CREATE TABLE `cargo_voluntario` (
  `Id_cargo_voluntario` int(11) NOT NULL,
  `Voluntario_id` int(11) DEFAULT NULL,
  `Rol_id` int(11) DEFAULT NULL,
  `Fecha_asignacion_rol` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Area_id` int(11) DEFAULT NULL,
  `Observaciones` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id_departamento` int(11) NOT NULL,
  `Nombre_departamento` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Id_departamento`, `Nombre_departamento`) VALUES
(1, 'Ahuachapan'),
(2, 'Cabañas'),
(3, 'Chalatenango'),
(4, 'Cuscatlan'),
(5, 'La Libertad'),
(6, 'La Paz'),
(7, 'La Union'),
(8, 'Morazan'),
(9, 'San Miguel'),
(10, 'San Salvador'),
(11, 'San Vicente'),
(12, 'Santa Ana'),
(13, 'Sonsonate'),
(14, 'Usulutan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista`
--

CREATE TABLE `entrevista` (
  `Id_entrevista_solicitud` int(11) NOT NULL,
  `Usuario_ent_id` int(11) NOT NULL,
  `Ent_nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_edad` int(11) NOT NULL,
  `Ent_direccion` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_estado_civil` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_DUI` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_NIT` varchar(17) COLLATE utf8_spanish2_ci NOT NULL,
  `No_hijos` int(11) NOT NULL,
  `Ent_vive_con` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_familia` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_carrera` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_nivel_estudio` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_form_academica` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Profesion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_exp_laboral` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_Fortalezas` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_debilidades` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_valores` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_metas` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_pasatiempo` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_sociable` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_desc_trabajo` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_desc_CR` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_motivo_ingreso` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_expectativas` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_oferta_CR` text COLLATE utf8_spanish2_ci NOT NULL,
  `Participacion_anterior` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_comunidad_benef` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_areas_interes` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_trabaja_en_equipo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_disponibilidad` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_condicion_med` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_escolar_uno` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_esc_uno` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_escolar_dos` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_esc_dos` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_escolar_tres` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_esc_tres` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_lab_uno` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_lab_uno` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_lab_dos` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_lab_dos` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_lab_tres` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_lab_tres` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_pers_uno` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_pers_uno` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_pers_dos` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_pers_dos` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_ref_pers_tres` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_pers_tres` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Ent_fecha` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `entrevista`
--

INSERT INTO `entrevista` (`Id_entrevista_solicitud`, `Usuario_ent_id`, `Ent_nombre`, `Ent_edad`, `Ent_direccion`, `Ent_estado_civil`, `Ent_DUI`, `Ent_NIT`, `No_hijos`, `Ent_vive_con`, `Ent_familia`, `Ent_carrera`, `Ent_nivel_estudio`, `Ent_form_academica`, `Profesion`, `Ent_exp_laboral`, `Ent_Fortalezas`, `Ent_debilidades`, `Ent_valores`, `Ent_metas`, `Ent_pasatiempo`, `Ent_sociable`, `Ent_desc_trabajo`, `Ent_desc_CR`, `Ent_motivo_ingreso`, `Ent_expectativas`, `Ent_oferta_CR`, `Participacion_anterior`, `Ent_comunidad_benef`, `Ent_areas_interes`, `Ent_trabaja_en_equipo`, `Ent_disponibilidad`, `Ent_condicion_med`, `Ent_ref_escolar_uno`, `Tel_ref_esc_uno`, `Ent_ref_escolar_dos`, `Tel_ref_esc_dos`, `Ent_ref_escolar_tres`, `Tel_ref_esc_tres`, `Ent_ref_lab_uno`, `Tel_ref_lab_uno`, `Ent_ref_lab_dos`, `Tel_ref_lab_dos`, `Ent_ref_lab_tres`, `Tel_ref_lab_tres`, `Ent_ref_pers_uno`, `Tel_ref_pers_uno`, `Ent_ref_pers_dos`, `Tel_ref_pers_dos`, `Ent_ref_pers_tres`, `Tel_ref_pers_tres`, `Ent_fecha`) VALUES
(3, 14, 'Kevin', 17, 'Los Angeles Aguilares', 'Soltero', '546546', '568456465', 0, 'solo', 'mama y hermana', 'si', 'bachillerato', 'bachillerato general\r\ntecnico en computacion\r\ntecnico en sub', '', 'emprendedor', 'visionario, apacionado, perseverante', 'pereza, conformidad', 'responsable, honesto, sincero', 'empresa propia', 'escribir, escuchar musica, deportes', 'si, aunque me cuesta comunicar o entablar una conversacion', 'pienso lo suficiente\r\nresuelvo problemas\r\nsoy creativo', 'si, porque yo quiero', 'ayudar a los demas', 'aprender tecnicas de guardavida', 'responsabilidad y buen servicio', 'no', 'mejor atencion para las emergencias', 'areas rurales ', 'si', 'si', 'ninguna', 'adadad', '55646', 'dadadad', '46546', 'dadad', '5645646', 'adadad', '5154', 'dada', '5+56+6', 'dadada', '465465', 'dadad', '154156', 'dasdada', '4664', 'dadada', '4654654', '2019-03-22');

--
-- Disparadores `entrevista`
--
DELIMITER $$
CREATE TRIGGER `last_entrevista` AFTER INSERT ON `entrevista` FOR EACH ROW UPDATE proceso_ingreso SET Entrevista_id = new.Id_entrevista_solicitud WHERE Usuario_id = new.Usuario_ent_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_solicitud`
--

CREATE TABLE `estado_solicitud` (
  `Id_estado_solicitud` int(11) NOT NULL,
  `Nombre_estado_solicitud` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estado_solicitud`
--

INSERT INTO `estado_solicitud` (`Id_estado_solicitud`, `Nombre_estado_solicitud`) VALUES
(1, 'Aceptado'),
(2, 'Rechazado'),
(3, 'En proceso'),
(4, 'En revisión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE `nacionalidad` (
  `Id_nacionalidad` int(11) NOT NULL,
  `Nombre_nacionalidad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`Id_nacionalidad`, `Nombre_nacionalidad`) VALUES
(1, 'Salvadoreño'),
(2, 'Guatemalteco'),
(3, 'Hondureño'),
(4, 'Costaricense'),
(5, 'Nicaraguense'),
(6, 'Panameño'),
(7, 'Mexicano'),
(8, 'Estadounidense'),
(9, 'Venezolano'),
(10, 'Español');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso_ingreso`
--

CREATE TABLE `proceso_ingreso` (
  `Id_proceso_ingreso` int(11) NOT NULL,
  `Usuario_id` int(11) NOT NULL,
  `Solicitud_ingreso_id` int(11) DEFAULT NULL,
  `Entrevista_id` int(11) DEFAULT NULL,
  `Estado_proceso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proceso_ingreso`
--

INSERT INTO `proceso_ingreso` (`Id_proceso_ingreso`, `Usuario_id`, `Solicitud_ingreso_id`, `Entrevista_id`, `Estado_proceso_id`) VALUES
(15, 14, 13, 3, 1),
(16, 15, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id_rol` int(11) NOT NULL,
  `Tipo_rol` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Id_rol`, `Tipo_rol`) VALUES
(1, 'Presidente seccional'),
(2, 'jefe DD Local'),
(3, 'V.B Jefatura Nacional'),
(4, 'V.B Presidente departamental'),
(5, 'V.B Director de gestion de voluntariado y seccionales'),
(6, 'Participante'),
(7, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccional`
--

CREATE TABLE `seccional` (
  `Id_seccional` int(11) NOT NULL,
  `Nombre_seccional` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Departamento_id` int(11) NOT NULL,
  `Tipo_seccional_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `seccional`
--

INSERT INTO `seccional` (`Id_seccional`, `Nombre_seccional`, `Departamento_id`, `Tipo_seccional_id`) VALUES
(1, 'San Simón', 14, 2),
(2, 'Nueva Esparta', 7, 2),
(3, 'Jayaque', 5, 2),
(4, 'Guadalupe', 11, 1),
(5, 'Tejutepeque', 2, 1),
(6, 'San Francisco Gotera', 8, 1),
(7, 'San José Guayabal', 4, 1),
(8, 'Acajutla', 13, 1),
(9, 'Agua Caliente', 10, 1),
(10, 'Santa Rosa de Lima', 7, 1),
(11, 'La Unión', 7, 1),
(12, 'Intipucá', 7, 2),
(13, 'San Miguel', 9, 1),
(14, 'Tecapan', 14, 2),
(15, 'Usulután', 14, 1),
(16, 'Jucuapa', 14, 2),
(17, 'Mercedes Umaña', 14, 2),
(18, 'San Sebastian', 11, 2),
(19, 'San Vicente', 11, 1),
(20, 'Ilobasco', 2, 2),
(21, 'Zacatecoluca', 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `Id_sexo` int(11) NOT NULL,
  `Tipo_sexo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`Id_sexo`, `Tipo_sexo`) VALUES
(1, 'Hombre'),
(2, 'Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_ingreso`
--

CREATE TABLE `solicitud_ingreso` (
  `id_voluntario` int(11) NOT NULL,
  `Usuario_sol_id` int(11) NOT NULL,
  `Fotografia` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `Seccional_id` int(11) NOT NULL,
  `Area_id` int(11) NOT NULL,
  `Primer_apellido` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Segundo_apellido` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombres` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Sexo_id` int(11) NOT NULL,
  `Lugar_nacimiento` text COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_nacimiento` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Edad` int(11) NOT NULL,
  `Nacionalidad_id` int(11) NOT NULL,
  `Carnet_partida_nac` int(11) NOT NULL,
  `Lugar_exp_partidacarnet` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_exp_partidacarnet` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Idiomas` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Domicilio` text COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre_padre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Condicion_padre` int(11) NOT NULL,
  `Nombre_madre` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Condicion_madre` int(11) NOT NULL,
  `Estudios_realizados` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Estudios_realizados_dos` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Lugar_exp_diploma_induccion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_exp_diploma_induccion` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Referencia_uno` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Dir_ref_uno` text COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_uno` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Referencia_dos` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Dir_ref_dos` text COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_ref_dos` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo_sangre` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Peso` float NOT NULL,
  `Altura` float NOT NULL,
  `Alergias` text COLLATE utf8_spanish2_ci NOT NULL,
  `Epilepsia` int(11) NOT NULL,
  `Asma` int(11) NOT NULL,
  `Cardiaco` int(11) NOT NULL,
  `Hepatitis` int(11) NOT NULL,
  `Enf_venereas` int(11) NOT NULL,
  `Diabetico` int(11) NOT NULL,
  `Serv_asistenciales` text COLLATE utf8_spanish2_ci NOT NULL,
  `Emergencia` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Parentesco` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Dir_emergencia` text COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_emergencia` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre_trabajo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion_trabajo` text COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_trabajo` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Estudiante` int(11) NOT NULL,
  `Carrera` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Institucion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Dir_institucion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Tel_institucion` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Lugar_ingreso` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_ingreso` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitud_ingreso`
--

INSERT INTO `solicitud_ingreso` (`id_voluntario`, `Usuario_sol_id`, `Fotografia`, `Seccional_id`, `Area_id`, `Primer_apellido`, `Segundo_apellido`, `Nombres`, `Sexo_id`, `Lugar_nacimiento`, `Fecha_nacimiento`, `Edad`, `Nacionalidad_id`, `Carnet_partida_nac`, `Lugar_exp_partidacarnet`, `Fecha_exp_partidacarnet`, `Idiomas`, `Domicilio`, `Telefono`, `Email`, `Nombre_padre`, `Condicion_padre`, `Nombre_madre`, `Condicion_madre`, `Estudios_realizados`, `Estudios_realizados_dos`, `Lugar_exp_diploma_induccion`, `Fecha_exp_diploma_induccion`, `Referencia_uno`, `Dir_ref_uno`, `Tel_ref_uno`, `Referencia_dos`, `Dir_ref_dos`, `Tel_ref_dos`, `Tipo_sangre`, `Peso`, `Altura`, `Alergias`, `Epilepsia`, `Asma`, `Cardiaco`, `Hepatitis`, `Enf_venereas`, `Diabetico`, `Serv_asistenciales`, `Emergencia`, `Parentesco`, `Dir_emergencia`, `Tel_emergencia`, `Nombre_trabajo`, `Direccion_trabajo`, `Tel_trabajo`, `Estudiante`, `Carrera`, `Institucion`, `Dir_institucion`, `Tel_institucion`, `Lugar_ingreso`, `Fecha_ingreso`) VALUES
(13, 14, 'a34f61ca0e64b060658b49123f277ac9.jpg', 1, 1, 'Martinez', 'Fuentes', 'Kevin DAvid', 1, 'El paisnal', '2019-03-24', 17, 1, 1265, 'dasdad', '2019-03-27', 'asdsdada', 'asdad', 'adad', '', 'adad', 2, 'sadad', 2, 'dad', '', 'adad', '2019-03-27', 'ada', 'dad', 'adad', 'adad', 'adad', 'asdas', 'adasd', 0, 0, 'ada', 2, 2, 2, 2, 2, 2, 'ADAD', 'ADAD', '', '23232', 'ADAD', 'ADAD', 'AD', 'dada', 2, 'dada', 'adadsad', '', '', 'adad', '2019-03-22');

--
-- Disparadores `solicitud_ingreso`
--
DELIMITER $$
CREATE TRIGGER `last_sol_ingreso` AFTER INSERT ON `solicitud_ingreso` FOR EACH ROW UPDATE proceso_ingreso SET Solicitud_ingreso_id = new.id_voluntario WHERE Usuario_id = new.Usuario_sol_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_seccional`
--

CREATE TABLE `tipo_seccional` (
  `Id_tipo_seccional` int(11) NOT NULL,
  `Nombre_tipo_seccional` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_seccional`
--

INSERT INTO `tipo_seccional` (`Id_tipo_seccional`, `Nombre_tipo_seccional`) VALUES
(1, 'Departamental'),
(2, 'Local'),
(3, 'Puesto de socorro'),
(4, 'Unidad comunitaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_voluntario`
--

CREATE TABLE `tipo_voluntario` (
  `Id_tipo_voluntario` int(11) NOT NULL,
  `Nombre_tipo_voluntario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_voluntario`
--

INSERT INTO `tipo_voluntario` (`Id_tipo_voluntario`, `Nombre_tipo_voluntario`) VALUES
(1, 'Puesto de socorro'),
(2, 'U.comunitaria'),
(3, 'Cuerpo Guardavidas'),
(4, 'Comite de damas'),
(5, 'Voluntario social'),
(6, 'Juventud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre_usuario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Pass` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `Rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombre_usuario`, `Email`, `Pass`, `Rol_id`) VALUES
(10, 'rrhh', 'rrhh@rrhh', '321', 7),
(14, 'kevin', 'kevinmartinez.f@gmail.com', 'dmu5@m2018', 6),
(15, 'asd', 'asd@gmail.com', '123', 6);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `Registro` AFTER INSERT ON `usuarios` FOR EACH ROW if new.Rol_id = 6 then
INSERT INTO proceso_ingreso (Usuario_id,Estado_proceso_id) VALUES (new.Id_usuario,4);
end if
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios_vigentes`
--

CREATE TABLE `voluntarios_vigentes` (
  `Id_voluntario_vigente` int(11) NOT NULL,
  `Voluntario_id` int(11) NOT NULL,
  `Capacitacion_id` int(11) NOT NULL,
  `Cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacitaciones_voluntarios`
--
ALTER TABLE `capacitaciones_voluntarios`
  ADD PRIMARY KEY (`id_capacitaciones`),
  ADD KEY `Voluntario_id` (`Voluntario_id`);

--
-- Indices de la tabla `cargo_voluntario`
--
ALTER TABLE `cargo_voluntario`
  ADD PRIMARY KEY (`Id_cargo_voluntario`),
  ADD KEY `Voluntario_id` (`Voluntario_id`),
  ADD KEY `Rol_id` (`Rol_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id_departamento`);

--
-- Indices de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`Id_entrevista_solicitud`);

--
-- Indices de la tabla `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  ADD PRIMARY KEY (`Id_estado_solicitud`);

--
-- Indices de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`Id_nacionalidad`);

--
-- Indices de la tabla `proceso_ingreso`
--
ALTER TABLE `proceso_ingreso`
  ADD PRIMARY KEY (`Id_proceso_ingreso`),
  ADD KEY `Solicitud_ingreso_id` (`Solicitud_ingreso_id`),
  ADD KEY `Entrevista_id` (`Entrevista_id`),
  ADD KEY `Estado_proceso_id` (`Estado_proceso_id`),
  ADD KEY `Estado_proceso_id_2` (`Estado_proceso_id`),
  ADD KEY `Id_proceso_ingreso` (`Id_proceso_ingreso`),
  ADD KEY `Usuario_id` (`Usuario_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id_rol`);

--
-- Indices de la tabla `seccional`
--
ALTER TABLE `seccional`
  ADD PRIMARY KEY (`Id_seccional`),
  ADD KEY `Tipo_seccional_id` (`Tipo_seccional_id`),
  ADD KEY `Departamento_id` (`Departamento_id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`Id_sexo`);

--
-- Indices de la tabla `solicitud_ingreso`
--
ALTER TABLE `solicitud_ingreso`
  ADD PRIMARY KEY (`id_voluntario`),
  ADD KEY `Seccional_id` (`Seccional_id`),
  ADD KEY `Area_id` (`Area_id`),
  ADD KEY `Sexo_id` (`Sexo_id`),
  ADD KEY `Nacionalidad_id` (`Nacionalidad_id`);

--
-- Indices de la tabla `tipo_seccional`
--
ALTER TABLE `tipo_seccional`
  ADD PRIMARY KEY (`Id_tipo_seccional`);

--
-- Indices de la tabla `tipo_voluntario`
--
ALTER TABLE `tipo_voluntario`
  ADD PRIMARY KEY (`Id_tipo_voluntario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `Rol_id` (`Rol_id`),
  ADD KEY `Rol_id_2` (`Rol_id`);

--
-- Indices de la tabla `voluntarios_vigentes`
--
ALTER TABLE `voluntarios_vigentes`
  ADD PRIMARY KEY (`Id_voluntario_vigente`),
  ADD KEY `voluntario_id` (`Voluntario_id`),
  ADD KEY `Capacitacion_id` (`Capacitacion_id`),
  ADD KEY `Cargo_id` (`Cargo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacitaciones_voluntarios`
--
ALTER TABLE `capacitaciones_voluntarios`
  MODIFY `id_capacitaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo_voluntario`
--
ALTER TABLE `cargo_voluntario`
  MODIFY `Id_cargo_voluntario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `Id_entrevista_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  MODIFY `Id_estado_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  MODIFY `Id_nacionalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proceso_ingreso`
--
ALTER TABLE `proceso_ingreso`
  MODIFY `Id_proceso_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `seccional`
--
ALTER TABLE `seccional`
  MODIFY `Id_seccional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `Id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitud_ingreso`
--
ALTER TABLE `solicitud_ingreso`
  MODIFY `id_voluntario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipo_seccional`
--
ALTER TABLE `tipo_seccional`
  MODIFY `Id_tipo_seccional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_voluntario`
--
ALTER TABLE `tipo_voluntario`
  MODIFY `Id_tipo_voluntario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `voluntarios_vigentes`
--
ALTER TABLE `voluntarios_vigentes`
  MODIFY `Id_voluntario_vigente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo_voluntario`
--
ALTER TABLE `cargo_voluntario`
  ADD CONSTRAINT `cargo_voluntario_ibfk_2` FOREIGN KEY (`Voluntario_id`) REFERENCES `voluntarios_vigentes` (`Id_voluntario_vigente`);

--
-- Filtros para la tabla `proceso_ingreso`
--
ALTER TABLE `proceso_ingreso`
  ADD CONSTRAINT `proceso_ingreso_ibfk_1` FOREIGN KEY (`Solicitud_ingreso_id`) REFERENCES `solicitud_ingreso` (`id_voluntario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `proceso_ingreso_ibfk_3` FOREIGN KEY (`Entrevista_id`) REFERENCES `entrevista` (`Id_entrevista_solicitud`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `proceso_ingreso_ibfk_4` FOREIGN KEY (`Estado_proceso_id`) REFERENCES `estado_solicitud` (`Id_estado_solicitud`),
  ADD CONSTRAINT `proceso_ingreso_ibfk_5` FOREIGN KEY (`Usuario_id`) REFERENCES `usuarios` (`Id_usuario`);

--
-- Filtros para la tabla `seccional`
--
ALTER TABLE `seccional`
  ADD CONSTRAINT `seccional_ibfk_2` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`Id_departamento`),
  ADD CONSTRAINT `seccional_ibfk_3` FOREIGN KEY (`Tipo_seccional_id`) REFERENCES `tipo_seccional` (`Id_tipo_seccional`);

--
-- Filtros para la tabla `solicitud_ingreso`
--
ALTER TABLE `solicitud_ingreso`
  ADD CONSTRAINT `solicitud_ingreso_ibfk_1` FOREIGN KEY (`Seccional_id`) REFERENCES `seccional` (`Id_seccional`),
  ADD CONSTRAINT `solicitud_ingreso_ibfk_2` FOREIGN KEY (`Area_id`) REFERENCES `tipo_voluntario` (`Id_tipo_voluntario`),
  ADD CONSTRAINT `solicitud_ingreso_ibfk_3` FOREIGN KEY (`Sexo_id`) REFERENCES `sexo` (`Id_sexo`),
  ADD CONSTRAINT `solicitud_ingreso_ibfk_4` FOREIGN KEY (`Nacionalidad_id`) REFERENCES `nacionalidad` (`Id_nacionalidad`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Rol_id`) REFERENCES `roles` (`Id_rol`);

--
-- Filtros para la tabla `voluntarios_vigentes`
--
ALTER TABLE `voluntarios_vigentes`
  ADD CONSTRAINT `voluntarios_vigentes_ibfk_1` FOREIGN KEY (`Voluntario_id`) REFERENCES `proceso_ingreso` (`Id_proceso_ingreso`),
  ADD CONSTRAINT `voluntarios_vigentes_ibfk_2` FOREIGN KEY (`Capacitacion_id`) REFERENCES `capacitaciones_voluntarios` (`id_capacitaciones`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
