<?php

//muito util para DEBUG(NAO USAR EM PRODUÇAO)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//basico
$nome = 'Pedro Luiz'; //variavel

echo 'Olá, ' . $nome . '!<br><br>'; //operador de concatenaçao

echo "Olá, $nome!"; // aspas duplas n precisa do operador de concatenaçao

//Condicionais

if( $nome == 'Pedro') {
    echo '<br><br>o nome é igual';

} else {
    echo '<br><br> nao é igual';
}

$dia = 'sexta';
echo '<br><br>';

switch($dia) {
    case 'segunda':

        echo "Estude";
    break;

    case 'terça':

        echo 'va para aula de CMS';
    break;

    case 'quarta':

        echo 'Va para aula de BD';
    break;
    
    case 'quinta':

        echo 'Seja feliz aqui e agora';
    break;

    case 'sexta':

        echo 'Va para Kombuca';
    break;

    default:
        
        echo 'Vá Descansar';
}

//if ternario
$animal = 'cachorro';

$tipo = $animal == 'cachorro' ? 'mamifero' : 'desconhecido';

echo "<br>$animal é um animal do tipo $tipo<br>";



//loopings

for( $i = 0; $i < 10; $i++){
    echo "<br>Essa é a linha $i<br>";
}

$i = 0;

while($i < 10) {
    echo "<br>Essa é a linha $i<br>";

    $i++;
}

$i = 0;

do {

    echo "<br>Essa é a linha $i<br>";

    $i++;
}while($i < 10);

//Como chamar outros codigos

include 'link.html'; //se nao existir link.html da um erro e continua a execuçao

require 'link.html'; //se nao existir link.html, da um erro fatal e para o programa

include_once 'link.html'; //verifica se ja foi incluido antess, se sim, nao inclui novamente

require_once 'link.html'; //verifica se ja foi incluido antess, se sim, nao inclui novamente