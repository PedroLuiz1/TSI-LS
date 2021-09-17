<?php
$_POST['nome'] = $_POST['nome'] ?? '';
$_POST['professor'] = $_POST['professor'] ?? '';
$_POST['dia'] = $_POST['dia'] ?? '';
$_POST['descricao'] = $_POST['descricao'] ?? '';

echo "Nome da disciplina: ". $_POST['nome'] . "<br>". "Nome do professor: ". $_POST['professor']. "<br>".
"Dia da discplina: ". $_POST['dia'] . "<br>" . "Descrição: ". $_POST['descricao'];

if(empty($_POST['nome']) || empty($_POST['dia']) ) {
    die('<br><br>ERRO! Os campos nome e dia sao obrigatorios');
}
//abro o arquivo para gravar mais coisas nele
$arquivo = fopen('bancodedados.csv', 'a');

$dia = $_POST['dia'];

//Forma nao elegante
//$dia = substr( $dia, 8, 2) . '/'. substr($dia, 5, 2) . '/'. substr($dia, 0, 4);

//Formataçao de datas
$timestamp = strtotime($dia);
$dia = date( 'd/m/Y', $timestamp);

//escrevo no arquivo
fwrite($arquivo, "{$_POST['nome']};{$_POST['professor']}; $dia ;{$_POST['descricao']}\r\n");

//fecho o arquivo
fclose($arquivo);

echo "<br><br>{$_POST['nome']} gravada com sucesso!";