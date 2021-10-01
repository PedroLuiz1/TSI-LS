<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome'] = $_POST['nome'] ?? '';
$_POST['professor'] = $_POST['professor'] ?? '';
$_POST['dia'] = $_POST['dia'] ?? '';
$_POST['descricao'] = $_POST['descricao'] ?? '';

if(empty($_POST['nome']) || empty($_POST['dia']) ) {
    die('<br><br>ERRO! Os campos nome e dia sao obrigatorios');
}

echo "Nome da disciplina: ". $_POST['nome'] 
. "<br>". "Nome do professor: ". $_POST['professor'] 
. "<br>"."Dia da discplina: ". $_POST['dia'] 
. "<br>" . "Descrição: ". $_POST['descricao'];

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Conectamos com o Banco MySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

//Preparamos a consulta para evitar SQL Injection
$stmt = $bd->prepare('INSERT disciplinas 
                            (nome, professor, dia, descricao, end_ip) 
                        VALUES
                            (:nome, :professor, :dia, :descricao, :end_ip)');

//Colocamos os valores para serem inseridos no banco
//em um vetor linkando label com valor passado pelo usuario
$valores[':nome'] = $_POST['nome'];
$valores[':professor'] = $_POST['professor'];
$valores[':dia'] = $_POST['dia'];
$valores[':descricao'] = $_POST['descricao'];
$valores[':end_ip'] = $_SERVER['REMOTE_ADDR'];

//Executamos a consulta SQL
if($stmt->execute($valores)){
    header('Location: listar.php?gravado=1');
} else {
    echo "<br><br> Erro, Nao consegui gravar no banco";
}