create database ejemplito;
show databases;
use ejemplito;
show tables;
create table tb_usuario(
documento int not null,
nombre varchar(100) not null,
fecha_nac date not null,
foto varchar(100) null,
contraseña varchar(100) not null,
primary key(documento)
);


select * from tb_usuario;
