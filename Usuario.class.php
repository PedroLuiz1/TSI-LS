<?php

class Usuario {
    
    var $nome;
    var $uid;
    var $end;

    function addUser($nome) {
        $this->nome = $nome;

        echo "$nome adicionado com sucesso";
    }

    function updateUser($nome, $novonome) {
        echo "$nome alterado para $novonome com sucesso!";
    }

    function delUser($nome) {
        echo "$nome apagado com sucesso!";
    }

    function listUser(){
        echo "Lista de nomes";
    }
}