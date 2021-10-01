<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$sql = 'SELECT 
           id, nome, professor, dia, descricao
        FROM
            disciplinas';

$_GET['apagado'] = $_GET['apagado'] ?? false;           
  
if($_GET['apagado'] == 1) {
    echo "<font color = green> Apagado com sucesso</font>";
}

$_GET['gravado'] = $_GET['gravado'] ?? false;

if($_GET['gravado'] == 1) {
    echo "<font color = green> Gravado com sucesso</font>";
} 



echo '  <a href="disciplina.html">Adicionar Disciplina</a><br>
        <form action ="apagarDisciplina.php" method="post">
        <table border="1">
        <tr>
            <th>Nome</th><th>Professor</th><th>Dia</th><th>Descricao</th><th>Ações</th>
        <tr>';

foreach($bd->query($sql) as $registro) {
    echo "<tr> 
                <td>{$registro['nome']}</td>
                <td>{$registro['professor']}</td>
                <td>{$registro['dia']}</td>
                <td>{$registro['descricao']}</td>
                <td><button name='apagar' value='{$registro['id']}'>apagar</button><td>     
           </tr>";                 
}
echo '</table>
    </form>';