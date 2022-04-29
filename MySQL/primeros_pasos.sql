


CREATE TABLE personas(
	
		nombre VARCHAR(50),
		apellidos VARCHAR(100),
		fechaNacimiento DATE,
		documento CHAR(8),
		altura FLOAT(10,2),
		sexo ENUM('Masculino','Femenino','Otros'),
		celular TINYINT(10),
		direccion TEXT,
		telefono TINYINT(10)
		
	
	);