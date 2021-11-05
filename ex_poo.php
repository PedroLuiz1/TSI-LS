<?php
include 'Usuario.class.php';

$objUsuario = new Usuario;
class Main {
    var $usuario;

    function run() {

        $this->instanciaUsuario();

        echo "O atributo é: " . $this->usuario->nome . "<br><br>";

        $this->usuario->addUser('Pedro');

        echo "<br><br>O atributo é: " . $this->usuario->nome . "<br><br>";
    }

    function instanciaUsuario() {
        $this->usuario = new Usuario;
    }
}

$main = new Main;
$main->run();