<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$stmt = $bd->prepare('DELETE FROM disciplinas WHERE id = :id');

$success = $stmt->execute([':id' => $_POST['apagar']]);

header('Location: listar.php?apagado=' . $success);