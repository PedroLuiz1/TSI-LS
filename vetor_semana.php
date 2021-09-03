<?php
/*
$semana['Segunda'] = 'Aula de PI';
$semana['Terca'] = 'Aula de CMS';
$semana['Quarta'] = 'Aula de BD';
$semana['Quinta'] = 'Aula de PHP';
$semana['Sexta'] = 'Aula de JavaScript';

echo "<br>Semana<br>";

foreach ($semana as $dia => $valor) {
    
    echo "<br>$dia: $valor<br>";
}
*/
/*$aulas['Pi'] = 'segunda';
$aulas['CMS'] = 'terça';
$aulas['Direito'] = 'terça';
$aulas['BD'] = 'quarta';
$aulas['Lingserv'] = 'quinta';
$aulas['Scriptweb'] = 'sexta';

//var_dump($aulas) //ajuda na depuraçao do codigo

foreach($aulas as $materia => $dia) {
    echo "<br>Na $dia temos aula de $materia";
}*/

$aulas['segunda'][0] = 'pi';
$aulas['terça'][0] = 'cms';
$aulas['terça'][1] = 'direito';
$aulas['quarta'][0] = 'bd';
$aulas['quinta'][0] = 'lingserv';
$aulas['sexta'][0] = 'scriptweb';
$aulas['sexta'][1]= 'kumbuca';

foreach($aulas as $dia => $disciplinas) {
        echo "Aula(s) na $dia: ";

        foreach($disciplinas as $disciplina ) {
            echo "$disciplina, ";

        }

        echo "<br>";
}

include('linkform.html');
