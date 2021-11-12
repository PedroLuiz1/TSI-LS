<?php

include 'banco/pdo.php';

include 'classes/Disciplina.class.php';

$objDisciplina = new Disciplina($bd);

include 'telas/header.php';

if(isset($_POST['apagar'])) {

   $apagado = $objDisciplina->apagar($_POST['apagar']);
}

if(isset($_POST['criar'])){

    $criado = $objDisciplina->criar();
}

$lista = $objDisciplina->listar();

include 'telas/lista.php';

include 'telas/footer.php';

