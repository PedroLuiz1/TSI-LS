<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = $_POST['nome'] ?? '';

if($nome) {
   
$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$stmt = $bd->prepare('INSERT colegas (nome) VALUES (:nome)');

    if($stmt->execute([':nome' => $nome])) {
        echo "$nome gravado com sucesso";
    } else {
        echo '<br><br> Erro, Nao consegui gravar no Banco';
    }
} else {
    echo "Nao consegui gravar no banco";
}