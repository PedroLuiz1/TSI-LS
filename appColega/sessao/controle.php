<?php
//Controle de acesso, se o usuário estiver "logado", pode acessar o conteúdo
session_start();

if(!isset($_SESSION['id'])){

    echo 'Faça o login antes!  <a href="login.html">login<a>';
    exit();
}
//FIM controle de acesso