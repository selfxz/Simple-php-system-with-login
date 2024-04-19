CREATE DATABASE sesion;
USE sesion;

CREATE TABLE t_usuario (
    nombre_usu VARCHAR(50),
    email_usu VARCHAR(100),
    password_usu VARCHAR(255)
);

CREATE TABLE t_cli (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40),
    email VARCHAR(100),
    telefono INT(10),
    dni INT(10),
    fecha DATE
);

CREATE TABLE t_inmu (
    id_inmueble INT AUTO_INCREMENT PRIMARY KEY,
    ubi_pro VARCHAR(100),
    descripcion TEXT,
    costo DECIMAL(10, 2)
);

CREATE TABLE t_ter (
    id_terreno INT AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(20),
    tipo_propiedad VARCHAR(15),
    vivienda VARCHAR(15),
    precio DECIMAL(10, 2)
);