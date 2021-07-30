CREATE TABLE usuarios(
    idusuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario VARCHAR(20),
    clave VARCHAR(255),
    tooken VARCHAR(10),
    tipo INT

);