<?php
/**
 * PHP e MySQL para iniciantes
 *
 * Arquivo que faz a conex�o com o banco de dados utilizando MySQLi
 *
 * PHP 5+, MySQL 4.1+
 *
 * @author Thiago Belem <contato@thiagobelem.net>
 * @link /mysql/php-e-mysql-para-iniciantes-consulta-simples/
 */
// Dados de acesso ao servidor MySQL
$MySQL = array(
  'servidor' => 'localhost',  // Endere�o do servidor
  'usuario' => 'root',    // Usu�rio
  'senha' => 'usabw',        // Senha
  'banco' => 'empresas'    // Nome do banco de dados
);
$MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);
// Verifica se ocorreu um erro e exibe a mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error(), E_USER_ERROR);