create database usuarios;

use usuarios;

create table tbl_usuarios(
    `codigo_usuario` int auto_increment,
    `nombre` varchar(30) not null,
    `primer_apellido` varchar(30) not null,
    `segundo_apellido` varchar(30) not null,
    `correo` varchar(50) not null,
    `contraseña` varchar(50) not null,
    primary key(codigo_usuario)
);

INSERT INTO tbl_usuarios(codigo_usuario, nombre, primer_apellido, segundo_apellido, correo, contraseña) VALUES('1','Raul','Alda','Requena','raul.alda@seat.com','1234567890');