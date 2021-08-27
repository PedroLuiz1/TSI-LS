<?php

$semana['Segunda'] = 'Aula de PI';
$semana['Terca'] = 'Aula de CMS';
$semana['Quarta'] = 'Aula de BD';
$semana['Quinta'] = 'Aula de PHP';
$semana['Sexta'] = 'Aula de JavaScript';

echo "<br>Semana<br>";

foreach ($semana as $dia => $valor) {
    
    echo "<br>$dia: $valor<br>";
}