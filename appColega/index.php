<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//chama o controle de acesso
require_once('sessao/controle.php');

//chama a conexao com o banco
require_once('banco/conecta.php');

//Recupera todos os colegas para listar
$stmt = $bd->query('SELECT id, nome FROM colegas');

//joga todos os registros na variavel $registros
$registros = $stmt->fetchAll();

//chama o html para mostrar para o usuario
require('telas/index.tela.php');

