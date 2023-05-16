CREATE DATABASE sigce;
use sigce;

create table Aprendiz(
ide_Apr int primary key auto_increment unique,
Nom_Apr varchar(70) not null,
ape_Apr varchar(70) not null,
fic_Apr int not null
);

create table Citacion(
ide_Cit int primary key auto_increment,
FK_id_Gra int not null,
Art_Cit varchar(100) not null,
fec_cit date not null,
FK_ide_Apr int not null,
FK_ide_ins int not null
);

create table Gravedad(
id_Gra int primary key,
Nom_Gra varchar(30),
des_Gra varchar(50)
);
create table Instructor(
ide_ins int primary key auto_increment unique,
Nom_ins varchar(70) not null
);

ALTER TABLE Citacion ADD FOREIGN KEY (FK_id_Gra) references Gravedad (id_Gra);
ALTER TABLE Citacion ADD FOREIGN KEY (FK_ide_ins) references Instructor (ide_ins);

-- instructor --
INSERT INTO `sigce`.`instructor` (`ide_ins`, `Nom_ins`) VALUES ('11111', 'Tatiana Cabrera');
INSERT INTO `sigce`.`instructor` (`ide_ins`, `Nom_ins`) VALUES ('2', 'Cristian Buitrago');
-- gravedad --
INSERT INTO `sigce`.`gravedad` (`id_Gra`, `Nom_Gra`) VALUES ('1', 'Leve');
INSERT INTO `sigce`.`gravedad` (`id_Gra`, `Nom_Gra`) VALUES ('2', 'Graves');
INSERT INTO `sigce`.`gravedad` (`id_Gra`, `Nom_Gra`) VALUES ('3', 'Muy graves');
-- Aprendiz --
INSERT INTO `sigce`.`aprendiz` (`ide_Apr`, `Nom_Apr`, `ape_Apr`, `fic_Apr`) VALUES ('1019762470', 'CARLOS ANDRES', 'SARMIENTO CASCAVITA', '2687351');
INSERT INTO `sigce`.`aprendiz` (`ide_Apr`, `Nom_Apr`, `ape_Apr`, `fic_Apr`) VALUES ('1126704240', 'MARIANA', 'HERNANDEZ', '2687351');
INSERT INTO `sigce`.`aprendiz` (`ide_Apr`, `Nom_Apr`, `ape_Apr`, `fic_Apr`) VALUES ('2626', 'An', 'lala', '2687351');
-- Citacion --
INSERT INTO `sigce`.`citacion` (`FK_id_Gra`, `Art_Cit`, `fec_cit`, `FK_ide_Apr`, `FK_ide_ins`) VALUES ('1', 'llegada tarde', '2023-05-15', '1019762470', '11111');
INSERT INTO `sigce`.`citacion` (`FK_id_Gra`, `Art_Cit`, `fec_cit`, `FK_ide_Apr`, `FK_ide_ins`) VALUES ('3', 'Tomar en clase', '2023-05-16', '2626', '11111');
INSERT INTO `sigce`.`citacion` (`FK_id_Gra`, `Art_Cit`, `fec_cit`, `FK_ide_Apr`, `FK_ide_ins`) VALUES ('2', 'daño silla', '2023-07-26', '2626', '2');


