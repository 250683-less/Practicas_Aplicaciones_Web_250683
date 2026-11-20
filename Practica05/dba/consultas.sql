-- COMANDOS PARA CARGAR LA BASE DE DATOS
-- PARA MECAGEST Y SU INTERACCION CON PHP

-- 1. Crear la Base de Datos
CREATE DATABASE IF NOT EXISTS db_mecagest;

-- 2. Usar/ Activar la Base de Datos
USE db_mecagest;

-- 3. Crear la Tabla de Usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status TINYINT DEFAULT 1
);

-- 4. Visualizar la estructura de la tabla
DESCRIBE usuarios;

-- 5. Seleccionar los registros de la tabla
SELECT * FROM usuarios;

-- 6. Ejemplo de insercion de un nuevo usuario
INSERT INTO usuarios VALUES(DEFAULT, "Leslie Yariveth", "250683@utxicotepec.edu.mx",
md5("Less2007?"), now(), null, 1);

-- 7. Insercion multiple de otros dos usuarios
INSERT INTO usuarios(nombre,email, password) values
("Juan Pérez", "j.perez.@gmail.com", md5("12345")),
("Patricia Reyes", "patty.reyes@outlook.com", md5("6789")); 