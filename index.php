<?php


$nome = 'Pedro Luiz';


echo 'Olá, ' . $nome . '!<br><br>';

echo "Olá, $nome!";

if( $nome == 'Pedro') {
    echo '<br><br>o nome é igual';

} else {
    echo '<br><br> nao é igual';
}

for( $i = 0; $i < 10; $i++){
    echo "<br>Essa é a linha $i<br>";
}