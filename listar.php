<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$sql = 'SELECT 
            nome, professor, dia, descricao
        FROM
            disciplinas';

echo '<table border="1">
        <tr>
            <td>Nome</td><td>Prrofessor</td><td>Dia</td><td>Descricao</td>
        <tr>';

foreach($bd->query($sql) as $registro) {
    echo "<tr> 
                <td>{$registro['nome']}</td>
                <td>{$registro['professor']}</td>
                <td>{$registro['dia']}</td>
                <td>{$registro['descricao']}</td>     
           </tr>";                 
}

echo '</table>';