


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



CREATE TABLE alumnos(

	documento VARCHAR(20),
	nombre VARCHAR(50),
	apellidos VARCHAR(50),
	tipoDocumento ENUM("CI""pasaporte"),
	fechaNacimiento DATE,
);
