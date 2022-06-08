-- 1 passo ciar o banco de dados e suas tabelas
-- Base de Dados: 'db_login'

CREATE DATABASE db_login;

-- Estrutura da tabela 'users'
CREATE TABLE IF NOT EXISTS users (
user_id  int(11) NOT NULL AUTO_INCREMENT,
user_name varchar(255) NOT NULL,
user_date varchar(255) NOT NULL,
user_mensagem varchar(255) NOT NULL,
active int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (`user_id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;






-- Estrutura da tabela `users`
CREATE TABLE IF NOT EXISTS usuarios (
user_id int(11) NOT NULL AUTO_INCREMENT,
user_name varchar(255) NOT NULL,
senha varchar(255) NOT NULL


)
