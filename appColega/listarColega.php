<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$sql = 'SELECT id, nome FROM colegas';

echo '<a href="colega.html">Adicionar novo Colega</a><br>
      <form action = "apagarColega.php" method="post">
      <table border="1">
        <tr>
            <th>Nome</th><th>Açoes</th>    
        </tr>';

foreach($bd->query($sql) as $registro) {
    echo "<tr>
            <td>{$registro['nome']}</td>
            <td><button name='excluir' value='{$registro['id']}'>excluir</button>
            <button name='editar' value='{$registro['id']}'>editar</button><td>
          </tr>";
}     
echo "</table>
     </form";   
