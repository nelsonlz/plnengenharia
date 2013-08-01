
DROP TABLE IF EXISTS PlanerEngenharia.tbl_user;
CREATE TABLE IF NOT EXISTS PlanerEngenharia.tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);
INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');

DROP TABLE IF EXISTS PlanerEngenharia.tbl_cliente;
CREATE TABLE IF NOT EXISTS PlanerEngenharia.tbl_cliente (
    id          INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome        VARCHAR(40) NOT NULL,
    cpf         VARCHAR(24) NOT NULL,
    cep         VARCHAR(14),
    endereco    VARCHAR(40),
    bairro      VARCHAR(40),
    complemento VARCHAR(40),
    cidade      VARCHAR(40),
    Estado      VARCHAR(40),
    Telefone    VARCHAR(24),
    Telefone2   VARCHAR(24),
    email       VARCHAR(100)
);

-- TIPO DO  TIPO (PREVENÇÃO DE INCENCIO E D PROJETO IDRAULICO SANITARIO,
-- ANDAMENTO DO PROJETO (TEXTO),
-- PRAZO DE ENTRADA (TEXTO),

DROP TABLE IF EXISTS PlanerEngenharia.tbl_projetos;
CREATE TABLE IF NOT EXISTS PlanerEngenharia.tbl_projetos (
    id         INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente integer,
    Entrada    date,
    tipoProjeto integer not null
    
);

DROP TABLE IF EXISTS PlanerEngenharia.tbl_comentario;
CREATE TABLE IF NOT EXISTS PlanerEngenharia.tbl_comentario (
    id  INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_projeto integer,
    email varchar(100) not null,
    nome  varchar(40) not null,
    mensagem text
);


DROP TABLE IF EXISTS PlanerEngenharia.tbl_ProjetoEstatus;
CREATE TABLE IF NOT EXISTS PlanerEngenharia.tbl_ProjetoEstatus (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_projeto INTEGER NOT NULL,
    TEXTO TEXT NOT NULL
);
 
DROP TABLE IF EXISTS PlanerEngenharia.tbl_TipoProjeto;
CREATE TABLE IF NOT EXISTS PlanerEngenharia.tbl_TipoProjeto (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricao varchar(40) not null
);