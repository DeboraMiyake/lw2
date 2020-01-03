<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "cadastro";
$user = "root";
$pass = "";
// conecta ao banco de dados
$mysqli = new mysqli($host, $user, $pass, $db) ; 


if ($mysqli->connect_errno) {
    echo "Falha na conexao:";
}


?>