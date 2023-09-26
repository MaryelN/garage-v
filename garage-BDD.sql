-- Active: 1695750511165@@mysql-maryel-n.alwaysdata.net@3306@maryel-n_garage
-- #SQL TABLES
CREATE TABLE garage(
        id_garage INT  AUTO_INCREMENT  NOT NULL ,
        adresse   Varchar (50) NOT NULL ,
        tel       Int NOT NULL ,
        email     Varchar (50) NOT NULL,
	CONSTRAINT PK_garage PRIMARY KEY (id_garage)
);
