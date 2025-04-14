CREATE DATABASE banco_alunos;

CREATE TABLE alunos (
    nome varchar (50),
    matricula int (50),
    curso varchar (50),
    email varchar (50),
    telefone int (50),
    endereco varchar (50),
    cep int (50),
    cidade varchar (50),
    uf varchar (50),
    curso_horas varchar (50),
    carga_horaria varchar (50)
);

ALTER TABLE alunos
ADD COLUMN id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;

INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria) VALUES
('Lucas','01','ads','lucasblank@hotmail.com','9999999999','rua 10','88888888','palhoça','sc','ingles','20'), 
('Mariana','02','marketing','mariana.silva@gmail.com','988887777','avenida Brasil','77777777','florianópolis','sc','espanhol','25'),
('Carlos','03','design','carlos.design@yahoo.com','977776666','rua das Palmeiras','66666666','são josé','sc','francês','30'),
('Ana','04','vendas','ana.vendas@hotmail.com','966665555','travessa do Sol','55555555','biguaçu','sc','alemão','28'),
('Pedro','05','rh','pedro.rh@outlook.com','955554444','rua do Comércio','44444444','blumenau','sc','italiano','35');
