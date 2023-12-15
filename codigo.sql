USE ac3;
CREATE TABLE personas (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(255) NOT NULL,
	apellido VARCHAR(255),
	trabajo VARCHAR(255) NOT NULL
);

INSERT INTO personas (nombre, apellido, trabajo) VALUES
('Pepe', 'apellido', 'profesor'),
('Alvaro', 'Mora', 'contable'),
('Jesus', 'Muñoz', 'Informatico'),
('Ivan', 'Muñoz', 'Cartero'),
('Pablo', 'Murillo','Informatico'),
('Joaquin', 'Ortega', 'Diseñador'),
('Antonio', 'Pérez', 'Fontanero'),
('Jose', 'Rueda', 'Arquitecto'),
('Miguel', 'Ruiz', 'Ingeniero'),
('Ignacio', 'Sanz','Medico');
