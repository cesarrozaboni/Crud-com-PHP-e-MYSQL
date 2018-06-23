//Criando o banco de dados
create database cadastro_pessoas;


//Criando a tabela Pessoa
CREATE TABLE pessoas (
pesId int(8) not null unique primary key auto_increment,
pesNome varchar(255),
pesDataNascimento date,
pesSexo char(1),
pesTelefone varchar(255),
pesEmail varchar(255)
) AUTO_INCREMENT=1;
