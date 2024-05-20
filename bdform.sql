CREATE DATABASE gymvirtual;
USE text;

CREATE TABLE formularioG(
   
    Nombre VARCHAR(30),
    Edad INT(3),
    Sexo VARCHAR(10),
    Telefono INT(13)
);

ALTER TABLE evaluacion ADD Telefono VARCHAR(13);
DROP TABLE evaluacion