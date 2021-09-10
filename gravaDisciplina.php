<?php
$_POST['disciplina'] = $_POST['disciplina'] ?? 'Nao Informado';
$_POST['professor'] = $_POST['professor'] ?? 'Nao Informado';
$_POST['dia'] = $_POST['dia'] ?? 'Nao Informado';
$_POST['descricao'] = $_POST['descricao'] ?? 'Nao Informado';

echo "Nome da disciplina: ". $_POST['disciplina'] . "<br>". "Nome do professor: ". $_POST['professor']. "<br>".
"Dia da discplina: ". $_POST['dia'] . "<br>" . "Descrição: ". $_POST['descricao'];

//abro o arquivo para gravar mais coisas nele
$arquivo = fopen('bancodedados.csv', 'a');

$dia = $_POST['dia'];

//Forma nao elegante
//$dia = substr( $dia, 8, 2) . '/'. substr($dia, 5, 2) . '/'. substr($dia, 0, 4);

//Formataçao de datas
$timestamp = strtotime($dia);
$dia = date( 'd/m/Y', $timestamp);

//escrevo no arquivo
fwrite($arquivo, "{$_POST['disciplina']};{$_POST['professor']}; $dia ;{$_POST['descricao']}\r\n");

//fecho o arquivo
fclose($arquivo);

echo "<br><br>{$_POST['disciplina']} gravada com sucesso!";