<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('sessao/controle.php');
require_once('banco/conecta.php');

$nome = $_POST['nome'] ?? '';

if($nome) {
   
$stmt = $bd->prepare('INSERT colegas (nome) VALUES (:nome)');

    if($stmt->execute([':nome' => $nome])) {

        echo "$nome gravado com sucesso";

    } else {

        echo '<br><br> Erro, Nao consegui gravar no Banco';
    }

} else {
    
    echo "Nao consegui gravar no banco";
}