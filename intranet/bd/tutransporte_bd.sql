-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2018 a las 23:12:45
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutransporte_bd`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_deletedata` (IN `v_table` VARCHAR(200), IN `v_conditional_fields` TEXT)  BEGIN

	SET @VV_CONSDINAM = CONCAT('DELETE FROM ',v_table,' WHERE ',v_conditional_fields);
	PREPARE SENTENCIA FROM @VV_CONSDINAM;
	EXECUTE SENTENCIA;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_adddata` (IN `v_table` VARCHAR(200), IN `v_add_fields` LONGTEXT, IN `v_add_values` LONGTEXT)  BEGIN
	SET @VV_CONSDINAM = CONCAT('INSERT INTO ',v_table,'(',v_add_fields,') VALUES (',v_add_values,')');
	PREPARE SENTENCIA FROM @VV_CONSDINAM;
	EXECUTE SENTENCIA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_select_getdata` (IN `v_fields` LONGTEXT, IN `v_body` LONGTEXT)  BEGIN
	SET @VV_CONSDINAM = CONCAT('SELECT ',v_fields,' FROM ',v_body);
	PREPARE SENTENCIA FROM @VV_CONSDINAM;
	EXECUTE SENTENCIA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_updatedata` (IN `v_table` VARCHAR(200), IN `v_update_fields` LONGTEXT, IN `v_conditional_fields` TEXT)  BEGIN
	SET @VV_CONSDINAM = CONCAT('UPDATE ',v_table,' SET ',v_update_fields,' WHERE ',v_conditional_fields);
	PREPARE SENTENCIA FROM @VV_CONSDINAM;
	EXECUTE SENTENCIA;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_orden` int(11) DEFAULT NULL,
  `categoria_nombre` varchar(150) DEFAULT NULL,
  `categoria_activo` int(11) DEFAULT NULL,
  `categoria_nombre_ingles` varchar(150) DEFAULT NULL,
  `categoria_color` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_orden`, `categoria_nombre`, `categoria_activo`, `categoria_nombre_ingles`, `categoria_color`) VALUES
(1, 1, 'Chocolate 50%', 1, 'Chocolate 50% en ingles', '#e28323'),
(2, 2, 'Chocolate Dark 70%', 1, 'Chocolate Dark 70% ingles', '#196e47'),
(5, 3, 'Premium 80% - 90%', 1, 'Premium 80% - 90% 3 ingles', 'rgb(79,46,5)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(11) NOT NULL,
  `empresa_orden` int(11) NOT NULL,
  `empresa_activo` int(11) NOT NULL,
  `empresa_nombre` varchar(100) NOT NULL,
  `empresa_nombre_ingles` varchar(100) DEFAULT NULL,
  `empresa_descripcion1` text NOT NULL,
  `empresa_descripcion1_ingles` text,
  `empresa_descripcion2` text NOT NULL,
  `empresa_descripcion2_ingles` text,
  `empresa_descripcion3` text,
  `empresa_descripcion3_ingles` text,
  `empresa_imagen1` varchar(100) NOT NULL,
  `empresa_imagen2` varchar(100) DEFAULT NULL,
  `empresa_imagen3` varchar(100) DEFAULT NULL,
  `empresa_link_face` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`empresa_id`, `empresa_orden`, `empresa_activo`, `empresa_nombre`, `empresa_nombre_ingles`, `empresa_descripcion1`, `empresa_descripcion1_ingles`, `empresa_descripcion2`, `empresa_descripcion2_ingles`, `empresa_descripcion3`, `empresa_descripcion3_ingles`, `empresa_imagen1`, `empresa_imagen2`, `empresa_imagen3`, `empresa_link_face`) VALUES
(16, 1, 1, 'SFASA 40', 'nom emp ing', '<p>desc1 </p>', '', '<p>desc2 </p>', '<p>desc2 ing  </p>', '<p>desc3 </p>', '<p>desc3 ing</p>', '20181201195707.jpg', '', '201812012020063.jpg', 'https://www.facebook.com/sfasa40.grupoexpressdelperu/?epa=SEARCH_BOX&amp;jazoest=2651001221078011349958510351971018945102851008210870835198671158554535381755378555475777410011368871178710358651001201201181001219711499651205484786811911657869712078102811211135011572889570507110286119801098598521009081'),
(19, 2, 1, 'nombre2', 'sadas', '<p>asdas</p>', '', '<p>sadas</p>', '<p>sadas</p>', '<p>sadas</p>', '<p>asdasd</p>', '20181201204238.jpg', '', '', 'asdsa'),
(20, 3, 1, 'prueba q', 'asdsa', '<p>sadasdsad</p>', '<p>qqqqqqqqqq</p>', '<p>sdas</p>', '<p>sadsa</p>', '<p>asdsa</p>', '<p>sad</p>', '20181201204747.jpg', '201812012053402.jpg', '', 'dsfsdf'),
(21, 3, 1, 'asasdas', 'asdsa', '<p>sadasdsad</p>', '<p>desc 3 ingles</p>', '<p>sdas</p>', '<p>sadsa</p>', '<p>asdsa</p>', '<p>sad</p>', '20181201205011.jpg', '', '', 'sads'),
(22, 3, 1, 'asasdas', 'asdsa', '<p>sadasdsad</p>', '<p>desc 3 ingles</p>', '<p>sdas</p>', '<p>sadsa</p>', '<p>asdsa</p>', '<p>sad</p>', '20181201205046.jpg', '', '', 'sads');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `noticia_id` int(11) NOT NULL,
  `noticia_orden` int(11) DEFAULT NULL,
  `noticia_titulo` varchar(100) DEFAULT NULL,
  `noticia_subtitulo` text,
  `noticia_descripcion` text NOT NULL,
  `noticia_descripcion2` text NOT NULL,
  `noticia_descripcion3` text,
  `noticia_imagen` varchar(100) NOT NULL,
  `noticia_imagen2` varchar(100) DEFAULT NULL,
  `noticia_imagen3` varchar(100) DEFAULT NULL,
  `noticia_link_face` varchar(250) DEFAULT NULL,
  `noticia_activo` int(11) DEFAULT NULL,
  `noticia_titulo_ingles` varchar(100) DEFAULT NULL,
  `noticia_subtitulo_ingles` text,
  `noticia_descripcion_ingles` text NOT NULL,
  `noticia_descripcion2_ingles` text NOT NULL,
  `noticia_descripcion3_ingles` text,
  `noticia_fecha` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`noticia_id`, `noticia_orden`, `noticia_titulo`, `noticia_subtitulo`, `noticia_descripcion`, `noticia_descripcion2`, `noticia_descripcion3`, `noticia_imagen`, `noticia_imagen2`, `noticia_imagen3`, `noticia_link_face`, `noticia_activo`, `noticia_titulo_ingles`, `noticia_subtitulo_ingles`, `noticia_descripcion_ingles`, `noticia_descripcion2_ingles`, `noticia_descripcion3_ingles`, `noticia_fecha`) VALUES
(32, 5, 'IX Salón del Cacao', 'Bélgica es el primer país invitado a evento especializado más importante del Perú', 'Proyecta recibir más de 30,000 visitantes y ventas por US$ 50 millones, Bélgica es el primer país invitado a evento especializado más importante del Perú.', 'Más de 30,000 visitantes y ventas por 50 millones de dólares proyecta lograr el IX Salón del Cacao y Chocolate 2018, que se realizará del 19 al 22 de julio próximo en el Centro de Convenciones de Lima, y que tendrá a Bélgica como primer país invitado a este evento especializado más importante del Perú.', '<div>Elías Cruz, presidente de la Asociación Peruana de Productores de Cacao (Appcacao) e integrante del comité organizador, destacó en diálogo con la Agencia Andina que los objetivos en materia de ventas y negocios, así como de visitantes representa un incremento del 50% respecto a la edición anterior.</div><div><br></div><div>Sostuvo que esta actividad contribuye decididamente a difundir y promover el consumo del cacao y chocolate, que son productos bandera del Perú, reconocidos a escala internacional por su calidad y variedad.</div><div><br></div><div>Refirió que en 2017 la producción de cacao alcanzó las 120,058 toneladas en una superficie cultivada de 130,000 hectáreas en 13 regiones del país. Ello genera más de 9 millones de jornales anuales y beneficia directamente a más de 90,000 familias e indirectamente a 450,000 personas en las zonas de producción.</div><div><br></div><div>Cruz subrayó que Perú es el segundo país productor de cacao orgánico en el mundo. El 48.6% de la producción exportada es cacao en grano y el 20% fue comercializado con certificación orgánica y comercio justo.</div><div><br></div><div>Las principales zonas de producción se ubican en los departamentos de San Martín, Junín, Ucayali, Cusco, Huánuco, Amazonas y Ayacucho, que representan el 94% del total de la producción nacional.</div><div><br></div><div>El dirigente indicó que el valor FOB (Free On Board) de las exportaciones de cacao y todas sus preparaciones (grano intermedio y final) en 2017 fue de 253 millones 299,000 dólares y un volumen total de 83,206 toneladas. Los principales mercados de destino son Estados Unidos y países de la Unión Europea (Holanda, Bélgica, Italia, España y Alemania).</div><div><br></div><div>“La balanza comercial sigue siendo positiva para el Perú. En lo que se refiere a chocolates, es un reto para la industria nacional revertir las importaciones en ese rubro, considerando que nuestro país ofrece una diversificada oferta de cacao con la cual se puede elaborar los más exquisitos chocolates para el mercado interno y externo”, enfatizó el presidente de la Asociación Peruana de Productores de Cacao.</div><div><br></div><div>Aseveró que si bien el 90% del cacao producido en el Perú y sus preparaciones se destinan a la exportación, los productores buscan posicionarse en el mercado interno, razón por la cual impulsan el Salón del Cacao y Chocolate en Perú, así como participaciones en eventos mundiales como el Salón del Chocolate en París (Francia). </div><div><br></div><div>Recordó que el Ministerio de Agricultura y Riego (Minagri) declaró el 1 de octubre como el Día del Cacao y el Chocolate, a fin de promover e impulsar la producción y el consumo en el país de estos productos emblemáticos, considerados también como “súper foods” por sus reconocidas propiedades nutricionales.</div><div><br></div><div>Cacao peruano en Rusia</div><div><br></div><div>En la conferencia de prensa, realizada en el Centro Cultural Inca Garcilaso de la Vega del Ministerio de Relaciones Exteriores, participó el vicecanciller Hugo De Zela Martínez, quien resaltó que se ha creado un “círculo virtuoso” a favor del cacao peruano, con la participación de diversas instituciones públicas, privadas y la cooperación internacional.</div><div><br></div><div>Afirmó que este es un valioso ejemplo de que sí se puede generar industria nacional con un cultivo como el cacao que ha demostrado ser una alternativa real frente a cultivos ilícitos y puede contribuir a sacar de la pobreza a las familias productoras con una cadena de valor económico muy importante y que está recibiendo el apoyo del Estado, del sector privado y la cooperación internacional.</div><div><br></div><div>Refirió que el cacao y el chocolate peruano estarán presentes en la Casa Perú que se instalará en Moscú durante el desarrollo del Mundial de Rusia, así como en los módulos itinerantes que se desplazarán hacia las sedes donde competirá la selección peruana de fútbol en ese país, a fin de que miles de visitantes de todo el planeta conozcan y comprueben la enorme calidad de estos productos bandera.</div><div><br></div><div>Asimismo, puntualizó que todas las legaciones diplomáticas y consulares del Perú en el mundo, junto con las oficinas comerciales desplegadas, contribuyen a la difusión y promoción de los productos bandera peruanos, entre los cuales están el cacao y el chocolate.</div><div><br></div><div>Participación de Bélgica</div><div><br></div><div>Por su parte, el embajador de Bélgica en Perú, Koenraad Lenaerts, saludó que su país haya sido elegido como primer país invitado en el IX Salón del Cacao y Chocolate, y subrayó que Bélgica es considerado uno de los países líderes productores del mejor chocolate a escala mundial.</div><div><br></div><div>Adelantó que la participación de Bélgica en el IX Salón del Cacao y Chocolate se traducirá en la exhibición del “Circuito del Chocolate”, el cual mostrará utilizando medios virtuales y de manera interactiva todo el proceso de producción del chocolate en ese país europeo. El encargado de mostrar este circuito es un destacado especialista belga en elaboración de chocolate, agregó.</div><div><br></div><div>Lenaerts destacó que las relaciones comerciales entre Bélgica y Perú son cada vez mejores, siendo nuestro país un importante proveedor de cacao, dada la calidad y variedad de este cultivo, así como su condición de producto orgánico amparado en el comercio justo.</div><div><br></div><div>El diplomático comentó que el consumo de chocolate en Bélgica es de 8 kilos por persona al año y existen alrededor de 2,000 puntos de venta de chocolate en ese país, siendo uno de los más importantes por el volumen de ventas el aeropuerto internacional de Bruselas.</div><div><br></div><div>“Bélgica es un gran importador de cacao peruano, dado que el 20% de las exportaciones peruanas tienen como destino a Bélgica. Asimismo, la cooperación belga hacia el Perú en los últimos 50 años ha estado dirigida al apoyo de los productores de cacao, otorgando ayuda económica del orden de 3 millones de dólares por año. Ello ha beneficiado a unas 10,000 familias productoras, de las cuales el 25% son mujeres, quienes han mejorado en 20% su producción”, manifestó.</div><div><br></div><div>El embajador anunció que en el IX Salón del Cacao y Chocolate también se realizará un concurso de elaboración de bombones de chocolate, en el que participarán reposteros belgas y peruanos quienes utilizarán el cacao peruano y otros insumos oriundos. </div><div><br></div><div>Otras de las actividades previstas es la visita de una delegación de productores y empresarios belgas especializados en chocolate, guiados por representantes de Devida, a zonas de producción de cacao en la región Junín.</div><div><br></div><div>“Estamos muy orgullosos de nuestra presencia en el IX Salón del Cacao y Chocolate, y estamos seguros que será un gran éxito”, remarcó el embajador.</div><div><br></div><div>Actividades del IX Salón del Cacao y Chocolate</div><div><br></div><div>En la novena edición del Salón del Cacao y Chocolate se instalarán 150 stands con productores de cacao y chocolate nacional e internacional, así como proveedores de la industria chocolatera.</div><div><br></div><div><br></div><div>El programa incluye un ciclo de conferencias magistrales, demostraciones en vivo sobre la preparación de chocolate y otros productos, así como de técnicas, usos y aplicaciones del cacao y derivados.</div><div><br></div><div>Asimismo, se realizará una rueda de negocios entre empresarios y organizaciones de productores para establecer relaciones comerciales o alianzas estratégicas a futuro. También se exhibirán esculturas hechas de chocolate, vestidos confeccionados a base de chocolate, presentaciones culturales con danzas regionales y música de las zonas productoras de cacao peruano.</div><div><br></div><div>Otras importantes actividades son el Cuarto Concurso Nacional del Chocolate Peruano y el Décimo segundo Concurso Nacional de Calidad de Cacao, en donde competirán diversas regiones y se otorgará el galardón “La Mazorca de Oro”.</div><div><br></div><div>Mediante el “Choco kids” se educará de manera divertida a los niños en el consumo de chocolate de calidad como fuente de nutrición, así como reconocer la biodiversidad del cacao.</div><div><br></div><div>El Salón del Cacao y Chocolate se institucionalizó el año 2009, siguiendo el exitoso ejemplo del Salón del Chocolate de París, y desde entonces se ha convertido en el evento especializado más importante del Perú, el cual integra a los diversos agentes económicos nacionales e internacionales para gestionar conocimiento, intercambiar información, establecer redes de contacto y fortalecer la institucionalidad.</div><div><br></div><div>El comité organizador está integrado por la Asociación Peruana de Productores de Cacao, la Agencia de Estados Unidos para el Desarrollo Internacional (Usaid), la Comisión Nacional para el Desarrollo y Vida sin Drogas (Devida), el Ministerio de Comercio Exterior y Turismo (Mincetur), la Comisión de Promoción del Perú para la Exportación y el Turismo (Promperú). El Ministerio de la Producción, el Ministerio de Agricultura y Riego, el Ministerio de Relaciones Exteriores, y el Programa de las Naciones Unidas para el Desarrollo (PNUD).</div><div><br></div><div>(FIN) LZD/MAO</div>', '20180621232647.jpg', '201806212326472.jpg', '201806212326473.jpg', 'mod fb', 1, '15/ 04/ 2018', 'Bélgica es el primer país invitado a evento especializado más importante del Perú', 'Proyecta recibir más de 30,000 visitantes y ventas por US$ 50 millones, Bélgica es el primer país invitado a evento especializado más importante del Perú.', 'Más de 30,000 visitantes y ventas por 50 millones de dólares proyecta lograr el IX Salón del Cacao y Chocolate 2018, que se realizará del 19 al 22 de julio próximo en el Centro de Convenciones de Lima, y que tendrá a Bélgica como primer país invitado a este evento especializado más importante del Perú.', '<div>Elías Cruz, presidente de la Asociación Peruana de Productores de Cacao (Appcacao) e integrante del comité organizador, destacó en diálogo con la Agencia Andina que los objetivos en materia de ventas y negocios, así como de visitantes representa un incremento del 50% respecto a la edición anterior.</div><div><br></div><div>Sostuvo que esta actividad contribuye decididamente a difundir y promover el consumo del cacao y chocolate, que son productos bandera del Perú, reconocidos a escala internacional por su calidad y variedad.</div><div><br></div><div>Refirió que en 2017 la producción de cacao alcanzó las 120,058 toneladas en una superficie cultivada de 130,000 hectáreas en 13 regiones del país. Ello genera más de 9 millones de jornales anuales y beneficia directamente a más de 90,000 familias e indirectamente a 450,000 personas en las zonas de producción.</div><div><br></div><div>Cruz subrayó que Perú es el segundo país productor de cacao orgánico en el mundo. El 48.6% de la producción exportada es cacao en grano y el 20% fue comercializado con certificación orgánica y comercio justo.</div><div><br></div><div>Las principales zonas de producción se ubican en los departamentos de San Martín, Junín, Ucayali, Cusco, Huánuco, Amazonas y Ayacucho, que representan el 94% del total de la producción nacional.</div><div><br></div><div>El dirigente indicó que el valor FOB (Free On Board) de las exportaciones de cacao y todas sus preparaciones (grano intermedio y final) en 2017 fue de 253 millones 299,000 dólares y un volumen total de 83,206 toneladas. Los principales mercados de destino son Estados Unidos y países de la Unión Europea (Holanda, Bélgica, Italia, España y Alemania).</div><div><br></div><div>“La balanza comercial sigue siendo positiva para el Perú. En lo que se refiere a chocolates, es un reto para la industria nacional revertir las importaciones en ese rubro, considerando que nuestro país ofrece una diversificada oferta de cacao con la cual se puede elaborar los más exquisitos chocolates para el mercado interno y externo”, enfatizó el presidente de la Asociación Peruana de Productores de Cacao.</div><div><br></div><div>Aseveró que si bien el 90% del cacao producido en el Perú y sus preparaciones se destinan a la exportación, los productores buscan posicionarse en el mercado interno, razón por la cual impulsan el Salón del Cacao y Chocolate en Perú, así como participaciones en eventos mundiales como el Salón del Chocolate en París (Francia). </div><div><br></div><div>Recordó que el Ministerio de Agricultura y Riego (Minagri) declaró el 1 de octubre como el Día del Cacao y el Chocolate, a fin de promover e impulsar la producción y el consumo en el país de estos productos emblemáticos, considerados también como “súper foods” por sus reconocidas propiedades nutricionales.</div><div><br></div><div>Cacao peruano en Rusia</div><div><br></div><div>En la conferencia de prensa, realizada en el Centro Cultural Inca Garcilaso de la Vega del Ministerio de Relaciones Exteriores, participó el vicecanciller Hugo De Zela Martínez, quien resaltó que se ha creado un “círculo virtuoso” a favor del cacao peruano, con la participación de diversas instituciones públicas, privadas y la cooperación internacional.</div><div><br></div><div>Afirmó que este es un valioso ejemplo de que sí se puede generar industria nacional con un cultivo como el cacao que ha demostrado ser una alternativa real frente a cultivos ilícitos y puede contribuir a sacar de la pobreza a las familias productoras con una cadena de valor económico muy importante y que está recibiendo el apoyo del Estado, del sector privado y la cooperación internacional.</div><div><br></div><div>Refirió que el cacao y el chocolate peruano estarán presentes en la Casa Perú que se instalará en Moscú durante el desarrollo del Mundial de Rusia, así como en los módulos itinerantes que se desplazarán hacia las sedes donde competirá la selección peruana de fútbol en ese país, a fin de que miles de visitantes de todo el planeta conozcan y comprueben la enorme calidad de estos productos bandera.</div><div><br></div><div>Asimismo, puntualizó que todas las legaciones diplomáticas y consulares del Perú en el mundo, junto con las oficinas comerciales desplegadas, contribuyen a la difusión y promoción de los productos bandera peruanos, entre los cuales están el cacao y el chocolate.</div><div><br></div><div>Participación de Bélgica</div><div><br></div><div>Por su parte, el embajador de Bélgica en Perú, Koenraad Lenaerts, saludó que su país haya sido elegido como primer país invitado en el IX Salón del Cacao y Chocolate, y subrayó que Bélgica es considerado uno de los países líderes productores del mejor chocolate a escala mundial.</div><div><br></div><div>Adelantó que la participación de Bélgica en el IX Salón del Cacao y Chocolate se traducirá en la exhibición del “Circuito del Chocolate”, el cual mostrará utilizando medios virtuales y de manera interactiva todo el proceso de producción del chocolate en ese país europeo. El encargado de mostrar este circuito es un destacado especialista belga en elaboración de chocolate, agregó.</div><div><br></div><div>Lenaerts destacó que las relaciones comerciales entre Bélgica y Perú son cada vez mejores, siendo nuestro país un importante proveedor de cacao, dada la calidad y variedad de este cultivo, así como su condición de producto orgánico amparado en el comercio justo.</div><div><br></div><div>El diplomático comentó que el consumo de chocolate en Bélgica es de 8 kilos por persona al año y existen alrededor de 2,000 puntos de venta de chocolate en ese país, siendo uno de los más importantes por el volumen de ventas el aeropuerto internacional de Bruselas.</div><div><br></div><div>“Bélgica es un gran importador de cacao peruano, dado que el 20% de las exportaciones peruanas tienen como destino a Bélgica. Asimismo, la cooperación belga hacia el Perú en los últimos 50 años ha estado dirigida al apoyo de los productores de cacao, otorgando ayuda económica del orden de 3 millones de dólares por año. Ello ha beneficiado a unas 10,000 familias productoras, de las cuales el 25% son mujeres, quienes han mejorado en 20% su producción”, manifestó.</div><div><br></div><div>El embajador anunció que en el IX Salón del Cacao y Chocolate también se realizará un concurso de elaboración de bombones de chocolate, en el que participarán reposteros belgas y peruanos quienes utilizarán el cacao peruano y otros insumos oriundos. </div><div><br></div><div>Otras de las actividades previstas es la visita de una delegación de productores y empresarios belgas especializados en chocolate, guiados por representantes de Devida, a zonas de producción de cacao en la región Junín.</div><div><br></div><div>“Estamos muy orgullosos de nuestra presencia en el IX Salón del Cacao y Chocolate, y estamos seguros que será un gran éxito”, remarcó el embajador.</div><div><br></div><div>Actividades del IX Salón del Cacao y Chocolate</div><div><br></div><div>En la novena edición del Salón del Cacao y Chocolate se instalarán 150 stands con productores de cacao y chocolate nacional e internacional, así como proveedores de la industria chocolatera.</div><div><br></div><div><br></div><div>El programa incluye un ciclo de conferencias magistrales, demostraciones en vivo sobre la preparación de chocolate y otros productos, así como de técnicas, usos y aplicaciones del cacao y derivados.</div><div><br></div><div>Asimismo, se realizará una rueda de negocios entre empresarios y organizaciones de productores para establecer relaciones comerciales o alianzas estratégicas a futuro. También se exhibirán esculturas hechas de chocolate, vestidos confeccionados a base de chocolate, presentaciones culturales con danzas regionales y música de las zonas productoras de cacao peruano.</div><div><br></div><div>Otras importantes actividades son el Cuarto Concurso Nacional del Chocolate Peruano y el Décimo segundo Concurso Nacional de Calidad de Cacao, en donde competirán diversas regiones y se otorgará el galardón “La Mazorca de Oro”.</div><div><br></div><div>Mediante el “Choco kids” se educará de manera divertida a los niños en el consumo de chocolate de calidad como fuente de nutrición, así como reconocer la biodiversidad del cacao.</div><div><br></div><div>El Salón del Cacao y Chocolate se institucionalizó el año 2009, siguiendo el exitoso ejemplo del Salón del Chocolate de París, y desde entonces se ha convertido en el evento especializado más importante del Perú, el cual integra a los diversos agentes económicos nacionales e internacionales para gestionar conocimiento, intercambiar información, establecer redes de contacto y fortalecer la institucionalidad.</div><div><br></div><div>El comité organizador está integrado por la Asociación Peruana de Productores de Cacao, la Agencia de Estados Unidos para el Desarrollo Internacional (Usaid), la Comisión Nacional para el Desarrollo y Vida sin Drogas (Devida), el Ministerio de Comercio Exterior y Turismo (Mincetur), la Comisión de Promoción del Perú para la Exportación y el Turismo (Promperú). El Ministerio de la Producción, el Ministerio de Agricultura y Riego, el Ministerio de Relaciones Exteriores, y el Programa de las Naciones Unidas para el Desarrollo (PNUD).</div><div><br></div><div>(FIN) LZD/MAO</div>', '07/06/2018'),
(33, 1, 'Kuyay: El exportador de la semana', 'Lorem ipsum dolor sit ament, consectetur adipiscing.', 'Esta vez es el turno de Kuyay quien fue invitado para participar enn el Salón de Cacao y del Chocolate en la Ciudad de México. Loren ipsum es simplemente el texto de relleno de las imprentas.', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen.', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenían pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ips.', '20180622165542.jpg', '201806221655422.jpg', '201806221655423.jpg', 'mod fb', 1, 'Kuyay: El exportador de la semana', 'Lorem ipsum dolor sit ament, consectetur adipiscing.', 'Esta vez es el turno de Kuyay quien fue invitado para participar enn el Salón de Cacao y del Chocolate en la Ciudad de México. Loren ipsum es simplemente el texto de relleno de las imprentas.', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen.&nbsp;', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenían pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ips.', '15/ 04/ 2018'),
(28, 6, 'Salón del Chocolate Lisboa', 'Lorem ipsum dolor sit ament, consectetur adipiscing.', 'Esta vez es el turno de Kuyay quien fue invitado para participar enn el Salón de Cacao y del Chocolate en la Ciudad de México. Loren ipsum es simplemente el texto de relleno de las imprentas.', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal.&nbsp;', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenían pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ips.', '20180611204157.jpg', '201806112041572.jpg', '201806112041573.jpg', 'fb2', 1, 'Nuestro Cultivo', 'Lorem ipsum dolor sit ament, consectetur adipiscing.', 'Esta vez es el turno de Kuyay quien fue invitado para participar enn el Salón de Cacao y del Chocolate en la Ciudad de México. Loren ipsum es simplemente el texto de relleno de las imprentas.', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal.&nbsp;', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenían pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ips.', '15/ 04/ 2018'),
(27, 4, 'Catadores de Cacao', 'Productores de Cacao organizan Escuela de Excelencia en Calidad, Catadores de cacao', 'Ante el creciente prestigio del cacao peruano a nivel internacional se viene fortaleciendo el talento humano de las organizaciones y empresas dedicadas al rubro cacaotero de la zona del Alto Huallaga', 'Ante el creciente prestigio del cacao peruano a nivel internacional se viene fortaleciendo el talento humano de las organizaciones y empresas dedicadas al rubro cacaotero de la zona del Alto Huallaga (provincias de Leoncio Prado y Tocache, de las regiones de Huánuco y San Martín respectivamente), con el fin de mejorar la calidad de granos de cacao destinados para la elaboración de chocolates finos requeridos por exigentes mercados.', '<div>Mediante una relación estratégica entre el Ministerio de Comercio Exterior y Turismo (MINCETUR), la Asociación Peruana de Productores de Cacao (APPCACAO) y la Alianza Cacao Perú (ACP), una iniciativa público – privada apoyada por Usaid, se invitó a cooperativas agrarias, asociaciones y pequeñas empresas ligadas a la producción de granos y derivados de cacao a participar en el Curso Nivel I “Calidad del Cacao – Formación de Catadores” de la Escuela de Excelencia en Calidad de Cacao.</div><div><br></div><div>En este programa de capacitación participaron los responsables del área de control de calidad de 19 organizaciones, quienes desarrollaron y fortalecieron sus conocimientos y habilidades en Análisis Sensorial para identificar, describir y evaluar los múltiples aromas y sabores de cacao; los capacitadores se valieron de recursos prácticos para ejercitar la memoria sensorial de los participantes a fin de detectar el aroma, acidez, astringencia y defectos, así como sabores a dulce, nuez, frutas secas, frutas frescas, floral, especies y otras presentes en los granos.</div><div><br></div><div>“Buscamos apoyar a los productores de cacao para mejorar sus capacidades con una mirada orientada a los mercados internacionales, que significan una gran oportunidad para los peruanos. Este curso es para ustedes para que tengan la posibilidad de identificar lo mejor de lo mejor de sus granos de cacao”, manifestó el Vice Ministro de Comercio Exterior y Turismo, Edgar Vásquez Vela, durante su visita a una de las sesiones de capacitación desarrollada recientemente en la ciudad de Tingo María – Huánuco.</div><div><br></div><div>Los capacitadores del programa de formación informaron a la delegación de funcionarios y participantes que el objetivo primordial es mejorar la calidad física y sensorial del cacao peruano, fortaleciendo los recursos humanos que estén en capacidad de calificar y elevar el estándar de calidad promedio de las organizaciones cacaoteras, ya que a través de los resultados de catación se pueden fomentar acciones para mejorar los procesos de cosecha, post cosecha y generar excelentes productos con valor añadido del cacao.</div><div><br></div><div>“En este mundo globalizado los clientes compran cacao por sus perfiles de sabor, la zona del Alto Huallaga tiene un cacao muy rico en atributos que no están siendo aprovechados; este curso se orienta a desarrollar las capacidades técnicas, para explotar las características organolépticas del cacao, de este manera se puede ofertar un producto de buena calidad física y sensorial para los mercados diferenciados del exterior, permitiendo venderlo por encima del precio de bolsa de cacao”, enfatizó Rafael Huamán Tinoco de APPCACAO, quien además resaltó que este accionar impulsado por ACP es resultado de un trabajo sostenido y concertado entre los diferentes actores nacionales.</div>', '20180621232313.jpg', '201806212323132.jpg', '201806212323133.jpg', 'fb2', 1, 'Catadores de Cacao', 'Productores de Cacao organizan Escuela de Excelencia en Calidad, Catadores de cacao', 'Ante el creciente prestigio del cacao peruano a nivel internacional se viene fortaleciendo el talento humano de las organizaciones y empresas dedicadas al rubro cacaotero de la zona del Alto Huallaga', 'Ante el creciente prestigio del cacao peruano a nivel internacional se viene fortaleciendo el talento humano de las organizaciones y empresas dedicadas al rubro cacaotero de la zona del Alto Huallaga (provincias de Leoncio Prado y Tocache, de las regiones de Huánuco y San Martín respectivamente), con el fin de mejorar la calidad de granos de cacao destinados para la elaboración de chocolates finos requeridos por exigentes mercados.', '<div>Mediante una relación estratégica entre el Ministerio de Comercio Exterior y Turismo (MINCETUR), la Asociación Peruana de Productores de Cacao (APPCACAO) y la Alianza Cacao Perú (ACP), una iniciativa público – privada apoyada por Usaid, se invitó a cooperativas agrarias, asociaciones y pequeñas empresas ligadas a la producción de granos y derivados de cacao a participar en el Curso Nivel I “Calidad del Cacao – Formación de Catadores” de la Escuela de Excelencia en Calidad de Cacao.</div><div><br></div><div>En este programa de capacitación participaron los responsables del área de control de calidad de 19 organizaciones, quienes desarrollaron y fortalecieron sus conocimientos y habilidades en Análisis Sensorial para identificar, describir y evaluar los múltiples aromas y sabores de cacao; los capacitadores se valieron de recursos prácticos para ejercitar la memoria sensorial de los participantes a fin de detectar el aroma, acidez, astringencia y defectos, así como sabores a dulce, nuez, frutas secas, frutas frescas, floral, especies y otras presentes en los granos.</div><div><br></div><div>“Buscamos apoyar a los productores de cacao para mejorar sus capacidades con una mirada orientada a los mercados internacionales, que significan una gran oportunidad para los peruanos. Este curso es para ustedes para que tengan la posibilidad de identificar lo mejor de lo mejor de sus granos de cacao”, manifestó el Vice Ministro de Comercio Exterior y Turismo, Edgar Vásquez Vela, durante su visita a una de las sesiones de capacitación desarrollada recientemente en la ciudad de Tingo María – Huánuco.</div><div><br></div><div>Los capacitadores del programa de formación informaron a la delegación de funcionarios y participantes que el objetivo primordial es mejorar la calidad física y sensorial del cacao peruano, fortaleciendo los recursos humanos que estén en capacidad de calificar y elevar el estándar de calidad promedio de las organizaciones cacaoteras, ya que a través de los resultados de catación se pueden fomentar acciones para mejorar los procesos de cosecha, post cosecha y generar excelentes productos con valor añadido del cacao.</div><div><br></div><div>“En este mundo globalizado los clientes compran cacao por sus perfiles de sabor, la zona del Alto Huallaga tiene un cacao muy rico en atributos que no están siendo aprovechados; este curso se orienta a desarrollar las capacidades técnicas, para explotar las características organolépticas del cacao, de este manera se puede ofertar un producto de buena calidad física y sensorial para los mercados diferenciados del exterior, permitiendo venderlo por encima del precio de bolsa de cacao”, enfatizó Rafael Huamán Tinoco de APPCACAO, quien además resaltó que este accionar impulsado por ACP es resultado de un trabajo sostenido y concertado entre los diferentes actores nacionales.</div>', '21/06/2018'),
(29, 7, 'Salón del Chocolate Milano', 'Lorem ipsum dolor sit ament, consectetur adipiscing.', 'Esta vez es el turno de Kuyay quien fue invitado para participar enn el Salón de Cacao y del Chocolate en la Ciudad de México. Loren ipsum es simplemente el texto de relleno de las imprentas.', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. ', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenían pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ips.', '20180611204313.jpg', '201806112043132.jpg', '201806112043133.jpg', '', 1, 'Salón del Chocolate Milano', 'Lorem ipsum dolor sit ament, consectetur adipiscing.', 'Esta vez es el turno de Kuyay quien fue invitado para participar enn el Salón de Cacao y del Chocolate en la Ciudad de México. Loren ipsum es simplemente el texto de relleno de las imprentas.', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. ', 'Lorem ipsum es simplemente el relleno de las imprentas y archivos de texto. Lorem ipsum a sido el texto relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica ala imprenta) desconocido usó una galería de textos y los mezclo de tal manera que logró hacer un libro de textos especimen. No solo sobrevivió 500 años, sino que también entró como texto de relleno en documentos electrónicos, quedando esencialmente igual al orginal. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenían pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ips.', '15/ 04/ 2018'),
(25, 3, 'Innovación tecnológica del sector cacaotero', 'Apoyan con S/ 500 mil la elaboración de agenda de innovación tecnológica del sector cacaotero', 'El Ministerio de la Producción (PRODUCE), a través del Programa Innóvate Perú, cofinanció y acompañó técnicamente a APPCACAO.', 'El Ministerio de la Producción (PRODUCE), a través del Programa Innóvate Perú, cofinanció y acompañó técnicamente a APPCACAO, asociación que busca potenciar la producción del cacao fino y de aroma de gran demanda en el mercado internacional.', '<div>— La Asociación Peruana de Productores de Cacao (APPCACAO) ha elaborado una agenda de innovación tecnológica que permitirá impulsar el desarrollo competitivo y sostenible del cultivo de cacao fino y de aroma de los productores de las regiones de Piura, Tumbes, Amazonas y Ayacucho.</div><div><br></div><div>Para este trabajo, la mencionada asociación obtuvo un cofinanciamiento no reembolsable de más de 500 mil soles otorgados por el Programa Innóvate Perú del PRODUCE, por medio del Concurso de Agendas de Innovación Tecnológica.</div><div><br></div><div>Esta inversión permitió elaborar un diagnóstico de brechas tecnológicas y formular propuestas de solución para el sector cacaotero.</div><div><br></div><div>En el plan de acción de esta agenda se contempla que los productores cacaoteros tengan acceso a nuevas tecnologías para el manejo adecuado de sus cultivos, lo cual contribuirá a hacer frente a problemas como la escasez de agua, limitado control de plagas y enfermedades, entre otros.</div><div><br></div><div>Ello permitirá al sector cacaotero peruano continuar expandiendo sus fronteras. “Este sector ha logrado crecer sostenidamente entre 10 y 12% en la última década, lo cual posiciona al cacao en el octavo lugar entre los principales productos de agroexportación peruanos”, señalan especialistas de APPCACAO.</div><div><br></div><div>A la actualidad se producen 108 toneladas de cacao en un total de 144 hectáreas, siendo las principales zonas de producción las regiones de San Martín, Junín, Cusco y Ayacucho.</div><div><br></div><div>Entre las entidades que han participado en la elaboración de esta agenda están la Cooperativa Agraria Norandina, la Cooperativa APROCAM, la Central de cooperativas CEPROAA y la Cooperativa “El Quinacho”.</div><div><br></div><div>AGENDA EN IMPLEMENTACIÓN</div><div><br></div><div>La agenda de innovación tecnológica también indica necesaria la implementación de un programa de mejoramiento genético del cacao fino y de aroma de alta producción y calidad, a través de la investigación y el desarrollo de nuevas variedades de mayor potencial y resistencia a enfermedades y plagas.</div><div><br></div><div>“El Perú es el centro de origen del cacao, ya que concentra la mayor variedad genética pero no se cuenta con una instancia especializada en investigación y desarrollo a nivel nacional. Contamos con bancos de germoplasma (banco de semillas), pero la mayoría carece de especialistas y medios económicos para investigar y documentar estos recursos genéticos”, informan expertos de APPCACAO.</div><div><br></div><div>SEPA MÁS:</div><div><br></div><div>— El Perú produce el 2% del total de cacao en el mundo.</div><div><br></div><div>— Nuestro país es el primer productor mundial de cacao con doble certificación (orgánico y Fairtrade)</div><div><br></div><div>— Somos el segundo productor mundial de cacao orgánico.</div><div><br></div><div>Más información en:</div><div>Programa Innóvate Perú</div><div>www.innovateperu.gob.pe</div><div>Calle Manuel Gonzales Olaechea 435 – San Isidro, Lima</div><div>Teléfono: 6404420</div>', '20180621230426.jpg', '201806212304262.jpg', '', 'fb2', 1, 'Innovación tecnológica del sector cacaotero', 'Apoyan con S/ 500 mil la elaboración de agenda de innovación tecnológica del sector cacaotero', 'El Ministerio de la Producción (PRODUCE), a través del Programa Innóvate Perú, cofinanció y acompañó técnicamente a APPCACAO.', 'El Ministerio de la Producción (PRODUCE), a través del Programa Innóvate Perú, cofinanció y acompañó técnicamente a APPCACAO, asociación que busca potenciar la producción del cacao fino y de aroma de gran demanda en el mercado internacional.', '<div>— La Asociación Peruana de Productores de Cacao (APPCACAO) ha elaborado una agenda de innovación tecnológica que permitirá impulsar el desarrollo competitivo y sostenible del cultivo de cacao fino y de aroma de los productores de las regiones de Piura, Tumbes, Amazonas y Ayacucho.</div><div><br></div><div>Para este trabajo, la mencionada asociación obtuvo un cofinanciamiento no reembolsable de más de 500 mil soles otorgados por el Programa Innóvate Perú del PRODUCE, por medio del Concurso de Agendas de Innovación Tecnológica.</div><div><br></div><div>Esta inversión permitió elaborar un diagnóstico de brechas tecnológicas y formular propuestas de solución para el sector cacaotero.</div><div><br></div><div>En el plan de acción de esta agenda se contempla que los productores cacaoteros tengan acceso a nuevas tecnologías para el manejo adecuado de sus cultivos, lo cual contribuirá a hacer frente a problemas como la escasez de agua, limitado control de plagas y enfermedades, entre otros.</div><div><br></div><div>Ello permitirá al sector cacaotero peruano continuar expandiendo sus fronteras. “Este sector ha logrado crecer sostenidamente entre 10 y 12% en la última década, lo cual posiciona al cacao en el octavo lugar entre los principales productos de agroexportación peruanos”, señalan especialistas de APPCACAO.</div><div><br></div><div>A la actualidad se producen 108 toneladas de cacao en un total de 144 hectáreas, siendo las principales zonas de producción las regiones de San Martín, Junín, Cusco y Ayacucho.</div><div><br></div><div>Entre las entidades que han participado en la elaboración de esta agenda están la Cooperativa Agraria Norandina, la Cooperativa APROCAM, la Central de cooperativas CEPROAA y la Cooperativa “El Quinacho”.</div><div><br></div><div>AGENDA EN IMPLEMENTACIÓN</div><div><br></div><div>La agenda de innovación tecnológica también indica necesaria la implementación de un programa de mejoramiento genético del cacao fino y de aroma de alta producción y calidad, a través de la investigación y el desarrollo de nuevas variedades de mayor potencial y resistencia a enfermedades y plagas.</div><div><br></div><div>“El Perú es el centro de origen del cacao, ya que concentra la mayor variedad genética pero no se cuenta con una instancia especializada en investigación y desarrollo a nivel nacional. Contamos con bancos de germoplasma (banco de semillas), pero la mayoría carece de especialistas y medios económicos para investigar y documentar estos recursos genéticos”, informan expertos de APPCACAO.</div><div><br></div><div>SEPA MÁS:</div><div><br></div><div>— El Perú produce el 2% del total de cacao en el mundo.</div><div><br></div><div>— Nuestro país es el primer productor mundial de cacao con doble certificación (orgánico y Fairtrade)</div><div><br></div><div>— Somos el segundo productor mundial de cacao orgánico.</div><div><br></div><div>Más información en:</div><div>Programa Innóvate Perú</div><div>www.innovateperu.gob.pe</div><div>Calle Manuel Gonzales Olaechea 435 – San Isidro, Lima</div><div>Teléfono: 6404420</div>', ' 21/06/2018'),
(24, 2, 'Salón del Chocolate París', 'Kuyay es un chocolate fino cuyo origen es Bagua Grande, Amazonas y su próximo destino es Francia. ', 'Esta vez es el turno de Kuyay quien fue invitado para participar enn el Salón de Cacao y del Chocolate en la Ciudad de México. Loren ipsum es simplemente el texto de relleno de las imprentas.', 'Jonathan Reyna y Carolina León son los productores de cacao que orgullosos viajaran a Paris para representar al Perú. Ellos también participaron hace poco en la Expoalimentaria. El Chocolate Bitter al 70 % de cacao de Kuyay fue ganador de la Medalla de Oro en la categoría, Dark Chocolate de origen elaborado con azúcar alternativa natural.', '<p class=&quot;MsoNormal&quot;>Los chocolates Kuyay tienen certificación orgánica y se comercializan en los hoteles más lujosos del Perú. En los próximos meses se estará empezando a exportar. Uno de las ideas que impulsa estos empresarios del chocolate en el Perú es desterrar el mito que el “chocolate engorda”, siempre y cuando no sea una golosina.<o:p></o:p></p><p class=&quot;MsoNormal&quot;></p><p class=&quot;MsoNormal&quot;>Actualmente, la empresa Kuyay tiene 9 sabores de chocolates algunos contienen frutas deshidratadas como el aguaymanto, blueberry y pasas como incrustaciones. Kuyay en quechua significa “armonía con la naturaleza”. El nombre fue inspirado por la calidad del cacao que se produce en Bagua Grande. La empresa es un sueño familiar que ha empezó con éxito y continuará dejando en alto el nombre del Perú a nivel internacional.</p>', '20180615165028.jpg', '201806151650282.jpg', '201806151650283.jpg', 'fb2', 1, 'Salón del Chocolate París', 'Kuyay es un chocolate fino cuyo origen es Bagua Grande, Amazonas y su próximo destino es Francia. ', '<p class=&quot;MsoNormal&quot;>Chocolates Kuyay de la familia Reyna León salió al mercado\r\nen Julio de 2017 y en pocos meses obtuvo Medalla de Oro en el Salón del Cacao\r\nen Lima. Salón de Chocolate de Paris es el evento chocolatero más importante\r\ndel mundo. <o:p></o:p></p>', '<p class=&quot;MsoNormal&quot;>Jonathan Reyna y Carolina León son los productores de cacao\r\nque orgullosos viajaran a Paris para representar al Perú. Ellos también\r\nparticiparon hace poco en la Expoalimentaria. El Chocolate Bitter al 70 % de\r\ncacao de Kuyay fue ganador de la Medalla de Oro en la categoría, Dark Chocolate\r\nde origen elaborado con azúcar alternativa natural.<o:p></o:p></p>', '<p class=&quot;MsoNormal&quot;>Los chocolates Kuyay tienen certificación orgánica y se\r\ncomercializan en los hoteles más lujosos del Perú. En los próximos meses se\r\nestará empezando a exportar. Uno de las ideas que impulsa estos empresarios del\r\nchocolate en el Perú es desterrar el mito que el “chocolate engorda”, siempre y\r\ncuando no sea una golosina.<o:p></o:p></p><p class=&quot;MsoNormal&quot;>\r\n\r\n</p><p class=&quot;MsoNormal&quot;>Actualmente, la empresa Kuyay tiene 9 sabores de chocolates\r\nalgunos contienen frutas deshidratadas como el aguaymanto, blueberry y pasas\r\ncomo incrustaciones. Kuyay en quechua significa “armonía con la naturaleza”. El\r\nnombre fue inspirado por la calidad del cacao que se produce en Bagua Grande.\r\nLa empresa es un sueño familiar que ha empezó con éxito y continuará dejando en\r\nalto el nombre del Perú a nivel internacional.<o:p></o:p></p>', '15/09/2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `producto_id` int(11) NOT NULL,
  `producto_orden` int(11) DEFAULT NULL,
  `producto_nombre` varchar(100) DEFAULT NULL,
  `producto_descripcion` text,
  `producto_imagen` varchar(100) NOT NULL,
  `producto_imagen2` varchar(100) DEFAULT NULL,
  `producto_imagen3` varchar(100) DEFAULT NULL,
  `producto_activo` int(11) DEFAULT NULL,
  `producto_nombre_ingles` varchar(100) DEFAULT NULL,
  `producto_descripcion_ingles` text,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_id`, `producto_orden`, `producto_nombre`, `producto_descripcion`, `producto_imagen`, `producto_imagen2`, `producto_imagen3`, `producto_activo`, `producto_nombre_ingles`, `producto_descripcion_ingles`, `categoria_id`) VALUES
(22, 6, 'Chocolate Dark 70% con Aguaymanto', '<p>- 70% de sólidos de cacao y panela con incrustaciones de aguaymanto. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas. </p><p>\r\n- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', '20180611202603.jpg', '201806151746572.jpg', '201806151746573.jpg', 1, 'Chocolate Dark 70% con Aguaymanto ingles', '<p>- 70% de solidos de cacao y panela con incrustaciones de aguaymanto. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas. </p><p>\r\n- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', 2),
(4, 4, 'Chocolate Bitter 70%', '<p>- Chocolate con aromas cítricos, apanelados y frutos secos.<br></p><p>- Medalla de oro en el Salón del Cacao y Chocolate Perú 2017.<br></p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas.</p><p>\r\n- Con certificación orgánica para la norma europea, norteamericana y peruana\r\n</p>', '20180611202656.jpg', '201806151740232.jpg', '201806151740233.jpg', 1, 'Chocolate Bitter 70% ingles', '<p>- Chocolate con aromas cítricos, apanelados y frutos secos.<br></p><p>- Medalla de oro en el Salón del Cacao y Chocolate Perú 2017.<br></p><p>- Cacao fino de aroma de origen Bagua Grande - Amazonas.</p><p>- Con certificación orgánica para la norma europea, norteamericana y peruana</p>', 2),
(5, 3, 'Chocolate con leche 50%', '<p>- 50% de sólidos de cacao con leche y azucar. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas.\r\n</p>', '20180615174327.jpg', '201806151743272.jpg', '201806151743273.jpg', 1, 'Chocolate con leche 50% ingles', '<p>- 50% de solidos de cacao con leche y azucar. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas.\r\n</p>', 1),
(14, 5, 'Chocolate Dark 70% con Blueberry', '<p>- 70% de sólidos de cacao y panela con incrustaciones de blueberry. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas. </p><p>\r\n- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', '20180611202632.jpg', '201806151738122.jpg', '201806151738123.jpg', 1, 'Chocolate Dark 70% con Blueberry en ingles', '<p>- 70% de solidos de cacao y panela con incrustaciones de blueberry. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas. </p><p>\r\n- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', 2),
(15, 22, 'producto 22', 'asdds', '20180605004420.jpg', '', '', 1, 'pro nombre2 ingles', 'pro desc ingles', 3),
(18, 1, 'Chocolate con leche y pasas 50%', '<p>- 50% de sólidos de cacao con leche y azucar con incrustaciones de pasas.\r\n</p><p>- Cacao fino de aroma de origen Bagua Grande - Amazonas.\r\n</p>', '20180615174504.jpg', '201806151745042.jpg', '201806151745043.jpg', 1, 'Chocolate con leche y pasas 50% INGLES', '<p>ingles\r\n- 50% de solidos de cacao con leche y azucar con incrustaciones de pasas.\r\n</p><p>- Cacao fino de aroma de origen Bagua Grande - Amazonas.\r\n</p>', 1),
(19, 666, 'ee', 'ee', '20180605172347.jpg', '', '', 2, 'ee', 'ee', 2),
(12, 7, 'Chocolate Dark 70% con sal de maras y nibs de cacao', '<p>- 70% de sólidos de cacao y panela con incrustaciones de sal de maras y nibs de cacao. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas. </p><p>\r\n- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', '20180611202529.jpg', '201806151733322.jpg', '201806151733323.jpg', 1, 'Chocolate Dark 70% con sal de maras y nibs de cacao ingles', '<p>- 70% de solidos de cacao y panela con incrustaciones de sal de maras y nibs de cacao. </p><p>\r\n- Cacao fino de aroma de origen Bagua Grande - Amazonas. </p><p>\r\n- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', 2),
(13, 13, 'agregar 13', 'pro desc ', '20180604170614.jpg', '', '', 1, 'wqeqwqwew', 'pro desc ingles', 3),
(23, 2, 'Chocolate con leche y café 50%', '<p>- 50% de sólidos de cacao con leche y azucar con incrustaciones de café molido.\r\n</p><p>- Cacao fino de aroma de origen Bagua Grande - Amazonas.\r\n</p>', '20180615174424.jpg', '201806151744242.jpg', '201806151744243.jpg', 1, 'Chocolate con leche y café 50% ingles', '<p>- 50% de solidos de cacao con leche y azucar con incrustaciones de café molido.<br></p><p>- Cacao fino de aroma de origen Bagua Grande - Amazonas.\r\n</p>', 1),
(24, 8, 'Chocolate Premium Dark 80%', '<p>- 80% de sólidos de cacao y panela.\r\n</p><p>- Cacao fino de aroma de origen Bagua Grande – Amazonas.\r\n</p><p>- Chocolate con aromas cítricos, apanelados y frutos secos.\r\n</p><p>- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', '20180611201324.jpg', '201806151800452.jpg', '201806151800453.jpg', 1, 'Chocolate Premium Dark 80% ingles', '<p>- 80% de sólidos de cacao y panela.\r\n</p><p>- Cacao fino de aroma de origen Bagua Grande – Amazonas.\r\n</p><p>- Chocolate con aromas cítricos, apanelados y frutos secos.\r\n</p><p>- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n</p>', 5),
(25, 9, 'Chocolate Premium Dark 90%', '<p>- 90% de sólidos de cacao y panela.\r\n</p><p>- Cacao fino de aroma de origen Bagua Grande – Amazonas.\r\n</p><p>- Chocolate con aromas cítricos, apanelados y frutos secos.\r\n</p><p>- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n\r\n</p>', '20180611201424.jpg', '201806151801072.jpg', '201806151801073.jpg', 1, 'Chocolate Premium Dark 90% ingles', '<p>- 90% de sólidos de cacao y panela.\r\n</p><p>- Cacao fino de aroma de origen Bagua Grande – Amazonas.\r\n</p><p>- Chocolate con aromas cítricos, apanelados y frutos secos.\r\n</p><p>- Con certificación orgánica para la norma europea, norteamericana y peruana.\r\n\r\ni</p>', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `tema_id` int(11) NOT NULL,
  `tema_opcion` int(11) DEFAULT NULL,
  `tema_nombre` varchar(150) DEFAULT NULL,
  `tema_activo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`tema_id`, `tema_opcion`, `tema_nombre`, `tema_activo`) VALUES
(1, 1, 'Tema de Intranet', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` text,
  `usuario_user` varchar(150) DEFAULT NULL,
  `usuario_pass` varchar(150) DEFAULT NULL,
  `usuario_tipo` int(3) DEFAULT NULL,
  `usuario_activo` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`),
  ADD KEY `FI_categoria_orden` (`categoria_orden`),
  ADD KEY `FI_categoria_nombre` (`categoria_nombre`),
  ADD KEY `FI_categoria_activo` (`categoria_activo`),
  ADD KEY `FI_categoria_nombre_ingles` (`categoria_nombre_ingles`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`noticia_id`),
  ADD KEY `FI_galeria_orden` (`noticia_orden`),
  ADD KEY `FI_galeria_titulo` (`noticia_titulo`),
  ADD KEY `FI_galeria_imagen` (`noticia_imagen`),
  ADD KEY `FI_galeria_activo` (`noticia_activo`),
  ADD KEY `FI_galeria_titulo_ingles` (`noticia_titulo_ingles`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `FI_producto_orden` (`producto_orden`),
  ADD KEY `FI_producto_nombre` (`producto_nombre`),
  ADD KEY `FI_producto_imagen` (`producto_imagen`),
  ADD KEY `FI_producto_activo` (`producto_activo`),
  ADD KEY `FI_producto_nombre_ingles` (`producto_nombre_ingles`),
  ADD KEY `FI_categoria_id` (`categoria_id`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`tema_id`),
  ADD KEY `FI_tema_opcion` (`tema_opcion`),
  ADD KEY `FI_tema_nombre` (`tema_nombre`),
  ADD KEY `FI_tema_activo` (`tema_activo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `FI_usuario_user` (`usuario_user`),
  ADD KEY `FI_usuario_pass` (`usuario_pass`),
  ADD KEY `FI_usuario_tipo` (`usuario_tipo`),
  ADD KEY `FI_usuario_activo` (`usuario_activo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `noticia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `tema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
