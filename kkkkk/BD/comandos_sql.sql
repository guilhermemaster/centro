create database g_indexsystem
CREATE TABLE  `g_indexsystem`.`configuracoes` (
  `idConfiguracoes` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idConfiguracoes`))
show tables
insert into configuracoes(nome, senha, email) values('Guilherme', 'leticia','guilhermebali@gmail.com') 
select * from configuracoes
select nome from ' where nome='Guilherme'
upadate configuracoes set 