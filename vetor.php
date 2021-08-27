<?php

$despesas[0] = 345.55;
$despesas[1] = 135.00;
$despesas[2] = 600.00;
$despesas[3] = 900.00;
$despesas[4] = 400.00;

for($i = 0; $i < 5; $i++) {
    echo $despesas[$i];
}

unset($despesas); //Apague destroi o vetor

$despesas['mercado'] = 345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400.00;

echo "<br>Despesas<br>";

foreach ( $despesas as $nome /*indice*/ => $gasto /*valor*/ ) {

    echo "$nome: R$ ". number_format($gasto, 2, ',', '.') . "<br>";
}