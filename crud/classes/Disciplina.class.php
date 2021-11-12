<?php

class Disciplina {

    var $bd;

    function __construct($bd) {

        $this->bd = $bd;
    }

    function listar() {
        $sql = 'SELECT id, nome, professor, dia, descricao FROM disciplinas ORDER BY nome';
        foreach ($this->bd->query($sql) as $registro) {

            $lista[$registro['id']] = $registro;
        }

        return $lista;
    }

    function apagar($id) {

        $id = preg_replace('/\D/', '', $id);

        if($this->bd->query("DELETE FROM disciplinas WHERE id = $id")){

            return true;

        }else {

            return false;
        }
    }

    function criar($dados) {
        $nome = $dados['nome'];
        $prof = $dados['prof'];
        $dia = $dados['dia'];
        $desc = $dados['desc'];
    }
}