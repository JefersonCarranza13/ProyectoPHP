CREATE DATABASE IF NOT EXISTS tienda2;

USE tienda2;

CREATE TABLE IF NOT EXISTS t_usuarios(
    id_usuario  int(11)     auto_increment   NOT NULL,
    nombre      varchar(100)                 NOT NULL,
    apellido    varchar(100)                 NOT NULL,
    email       varchar(200)                 NOT NULL,
    password    varchar(200)                 NOT NULL,
    rol         varchar(20)                  NOT NULL,
    imagen      varchar(255),
    constraint  pk_usuario      Primary key(id_usuario),
    constraint  uq_email        unique(email)

)ENGINE=InnoDb; 

INSERT INTO t_usuarios VALUE(NULL, "Jeferson", "Carranza", "jefersoncarranzaruiz@gmail.com", "123456789", "ADMIN", "imagen");
