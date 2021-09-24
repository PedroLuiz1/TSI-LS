<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome'] = $_POST['nome'] ?? '';
$_POST['ano'] = $_POST['ano'] ?? '';

if(empty($_POST['nome']) || empty($_POST['ano']) ) {
    die('<br><br>ERRO! Os campos nome e ano sao obrigatorios');
}

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Conectar com o banco
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

//Consulta evitando SQL injection
$stmt = $bd->prepare('INSERT filmes
                            (nome, ano)
                      VALUES
                            (:nome, :ano)');

//Colocamos os valores para serem inseridos no banco
//em um vetor linkando label com valor passado pelo usuario
$valores[':nome'] = $_POST['nome'];
$valores[':ano'] = $_POST['ano'];

//Executamos a consulta SQL
if($stmt->execute($valores)){
    echo "<br><br>Dados inseridos com sucesso";
} else {
    echo "<br><br> Erro, Nao consegui gravar no banco";
}
