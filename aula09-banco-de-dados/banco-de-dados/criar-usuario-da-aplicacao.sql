/* altera o modo de autenticação no MySQL para aceitar o 
   modo antigo usado pelo PHP
*/
/*
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'senac'; 
*/




/* criar usuário específico para aplicação agenda */
/* 
Mysql 8.0
CREATE USER 'aplicacao_agenda'@'localhost' IDENTIFIED WITH mysql_native_password BY 'agenda123'; 
*/
/* MariaDB */
CREATE USER 'aplicacao_agenda'@'localhost' IDENTIFIED BY 'agenda123'; 

grant select, insert, update, delete on usuarios.* to 'aplicacao_agenda'@'localhost' ;
