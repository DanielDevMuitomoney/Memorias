create database login;
use login;
CREATE TABLE `login`.`new_table` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`usuario_id`));

select*from usuarios;

insert into usuarios (usuario,senha) values ('Daniel',md5('123'));

select usuario_id, usuario from usuarios where  usuario='Daniel' and senha=md5('123');
truncate table usuarios;
