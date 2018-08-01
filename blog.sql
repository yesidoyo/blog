CREATE DATABASE IF NOT EXISTS `blog`
DEFAULT CHARACTER SET = 'utf8' DEFAULT COLLATE 'utf8_general_ci';

USE `blog`;

CREATE TABLE `blog`.`noticias`
(
id int NOT NULL AUTO_INCREMENT,
titulo varchar(255) NOT NULL,
descripcion varchar(1023) NOT NULL,
imagen varchar(255),
fecha datetime NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO `noticias` VALUES 
(1,'SuperSmash Bros. Ultimate no incorporará todos los escenarios de la saga','Los escenarios del nuevo Super Smash Bros. no seguirán el mismo ejemplo que los personajes, que en este caso sí estarán presentes todos.','uploads/1.jpg','2018-03-27 16:46:00'),
(2,'PUBG retira su demanda a los creadores de Fortnite sin dar explicaciones','Fortnite no fue el primer título al que PUBG Corp. demandó por plagio, aunque -con diferencia- fue el que más ruido hizo.','uploads/2.jpg','2016-01-16 16:50:00'),
(3,'Ya tenemos fecha para la temporada 5 de Fortnite. Y este fin de semana hay doble experiencia','Dentro de un par de semanas comenzarán nuevos desafíos que desbloquearán numerosas recompensas.','uploads/3.jpg','2018-04-01 16:55:00'),
(4,'Así creó BioWare las cuatro alabardas, los exotrajes acorazados de Anthem','Así serán las \"armaduras\" voladoras con las que repartiremos plomo y destrucción en Anthem.','uploads/4.jpg','2018-02-08 17:00:00'),
(5,'The Messenger, todo un homenaje a los Ninja Gaiden clásicos en forma de metroidvania, en 12 minutos de gameplay','La prometedora propuesta de Sabotage y Devolver Digital trata de conquistarnos con este completo gameplay.','uploads/5.jpg','2018-01-15 17:05:00'),
(6,'Captain Spirit, la precuela de Life is Strange 2, ya se puede descargar gratis en Xbox, PS4 y PC','Ya puedes hacerte con la precuela de \'Life is Strange 2\' en PC y consolas totalmente gratis','uploads/6.jpg','2015-02-27 17:10:00'),
(7,'El primer tráiler de la temporada 4 de \'Better Call Saul\' nos lleva de vuelta a Los Pollos Hermanos','\'Better Call Saul\' es una de las mejores series que uno puede ver en la actualidad. Es cierto que está poco menos que condenada a no llegar al nivel de \'Breaking Bad\', pero eso no quita para que tenga tantísimas virtudes.','uploads/7.jpg','2013-06-01 17:15:00'),
(8,'\'Predator\' tiene un nuevo y espectacular tráiler: Shane Black quiere resucitar la franquicia con una violenta secuela para adultos','Sólo un mes después de lanzar el primer adelanto, Fox ha presentado un nuevo y espectacular tráiler de \'Predator\' (\'The Predator\'), secuela que pretende relanzar la franquicia para las nuevas generaciones.','uploads/8.jpg','2017-06-03 17:20:00'),
(9,'El tráiler de \'La última Sharknado\' promete la más casposa orgía de destrucción para despedir la saga por todo lo alto','Sería un hipócrita si negase que hace ya cinco años la primera \'Sharknado\' me robó el corazón con ese desmadrado, cutre y casposo cachondeo que la convirtió en un auténtico fenómeno televisivo.','uploads/9.jpg','2011-03-06 17:25:00'),
(10,'La secuela de \'Spider-Man: Homecoming\' ya tiene título: \'Far From Home\'','No se la juegan. La secuela de \'Spider-Man: Homecoming\' mantendrá la referencia hogareña y se titulará \'Spider-Man: Far From Home\' (\"Lejos de casa\").','uploads/10.jpg','2018-06-05 17:30:00'),
(11,'\'It: Capítulo 2\' completa su reparto con Xavier Dolan: ya se rueda la secuela del film de terror más taquillero de la historia','Xavier Dolan y Will Beinbrink también quieren flotar. Esta semana comenzó el rodaje de la secuela de \'IT\' y el reparto se ha completado con estos dos últimos fichajes.','uploads/11.jpg','2017-05-03 17:35:00'),
(12,'\'Creed II\' lanza su potente tráiler: el hijo de Apollo vs. el hijo de Drago','Warner acaba de presentar el potente primer tráiler de \'Creed II\', la secuela del spin-off de la saga sobre Rocky Balboa. Michael B. Jordan vuelve a dar vida al protagonista, Adonis Creed.','uploads/12.jpg','2014-04-27 17:40:00'),
(17,'Blazing Chrome y su clara inspiración en Contra con su nuevo y frenético gameplay','El juego nos hará regresar a la época dorada de los juegos de acción y plataformas en 2D cuando llegue este año a PC.','uploads/13.jpg','2018-06-04 18:00:00'),
(18,'Bring you home se corona como Mejor Juego del Año en los XI Premios Nacionales de la Industria del Videojuego','Los Premios Nacionales de la Industria del Videojuego volvieron a poner el broche al Gamelab 2018, repartiendo un extra de reconocimiento entre lo mejor y lo más destacado del panorama español con el aval de la Academia Española de las Artes y las Ciencias Interactivas. Y pese a que sólo hubo un ganador a mejor juego del año, se puede decir que cuatro títulos han dominado las categorías.','uploads/14.png','2018-06-21 18:10:00'),
(19,'PUBG por 20 euros, Dragon Ball FighterZ por 40 euros, y muchas ofertas más en Cazando Gangas','Estamos a punto de cerrar el mes de junio, pero no podemos hacerlo sin antes echar un último vistazo a las mejores ofertas de la semana. Además, con la llegada del verano es el momento idóneo para sacar partido de estas rebajas, ya que podremos hacernos con un montón de juegos por poco dinero. Así tendremos este periodo vacacional de vicio asegurado. ¡Vamos allá!','uploads/15.jpg','2018-04-11 18:15:00'),
(20,'Splinter Cell: Conviction y Death Squared entre los juegos de Games With Gold en julio','Aunque ha sucedido un poco más tarde de lo que estamos acostumbrados, Microsoft ha confirmado cuáles serán los juegos de Games With Gold que podrán descargar durante el mes de julio aquellos usuarios que estén suscritos a Xbox Live Gold, que para no faltar a la costumbre serán dos de Xbox One y otros dos de Xbox 360.','uploads/16.jpg','2018-06-13 18:20:00');