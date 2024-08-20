<?php
define("MYSQL_HOST", 'localhost');
define("MYSQL_DATABASE", 'landing');
define("MYSQL_USER", 'root');
define("MYSQL_PASS", 'senhasinistra');
$erro = null;
try {
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DATABASE, MYSQL_USER, MYSQL_PASS );
} catch ( PDOException $e ) {
    $erro = 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}