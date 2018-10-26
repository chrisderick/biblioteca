CREATE TABLE autor (
  id_autor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_autor VARCHAR(255) NULL,
  pais_autor VARCHAR(100) NULL,
  PRIMARY KEY(id_autor)
);

CREATE TABLE categoria (
  idcategoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(40) NULL,
  PRIMARY KEY(idcategoria)
);

CREATE TABLE livro (
  id_livro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_idcategoria INTEGER UNSIGNED NOT NULL,
  autor_id_autor INTEGER UNSIGNED NOT NULL,
  titulo_livro VARCHAR(255) NULL,
  editora_livro VARCHAR(40) NULL,
  ano_livro YEAR NULL,
  adulto_livro BOOL NULL,
  PRIMARY KEY(id_livro),
  INDEX livro_FKIndex1(autor_id_autor),
  INDEX livro_FKIndex2(categoria_idcategoria)
);


