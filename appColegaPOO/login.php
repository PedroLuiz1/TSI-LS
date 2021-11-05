<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('banco/conecta.php');

//Inicializo a sessao
session_start();

//preparamos a consulta no banco buscando o usuario
$stmt = $bd->prepare('SELECT id, nome, senha FROM usuarios WHERE email = :email');

//executamos a consulta no banco
$stmt->execute([':email' => $_POST['email']]);

//recuperamos o registro retornado na consulta
$registro = $stmt->fetch(PDO::FETCH_ASSOC);

//se retornar algo, existe um user com o email fornecido
if($registro) {
    
    //verifica se a senha bate com o hash da senha gravado no banco
    if(password_verify($_POST['senha'], $registro['senha'])) {

        //defino as variaveis de sessao
        $_SESSION['nome'] = $registro['nome'];
        $_SESSION['id'] = $registro['id'];
        
        include('telas/header.tela.php');
        include('telas/menu.tela.php');
        include('telas/footer.tela.php');

    }else {

        //se errar a senha, eu destruo a sessao
        session_destroy();

        echo "Credenciais invalidas <br> <a href='login.html'>Tente novamente</a>";
    }

}else{

    //se nao existir o usuario com o email fornecido, destruo a sessao
    session_destroy();

    echo "Credenciais invalidas<br> <a href='login.html'>Tente novamente</a>";
}