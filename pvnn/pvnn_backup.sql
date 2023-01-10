 CREATE TABLE usuarios (
	id INT(4) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(100),
    senha VARCHAR(12),
    username VARCHAR(50),
    telefone VARCHAR(14),
    dtNascimento VARCHAR(8),
    tipoUsuario VARCHAR(30),
    PRIMARY KEY (id));
    
CREATE TABLE postagens (
    idPosts INT(4) NOT NULL AUTO_INCREMENT,
    autor VARCHAR(50),
    texto VARCHAR(500),
    comentarios VARCHAR(100),
    likes INT(4),
    tipoPostagem VARCHAR(20),
    livro VARCHAR(10000),
    PRIMARY KEY (idPosts));
    
CREATE TABLE categorias (
    idCat INT(4) NOT NULL AUTO_INCREMENT,
    tipo VARCHAR(30),
    tag VARCHAR(12),
    PRIMARY KEY (idCat));