<?php
include(__DIR__. '/header.tela.php');
include(__DIR__. '/menu.tela.php');
?>
<form method="post" action="apagaColega.php">
      <table border="1">
        <tr>
            <th>ID</th><th>Colega</th><th>Ações</th>
        </tr>

        <?php
        foreach($registros as $registro){
        
            echo "<tr>
                        <td>{$registro['id']}</td>
                        <td>{$registro['nome']}</td>
                        <td>
                            <button name='id_para_editar' value='{$registro['id']}'>Editar</button>&nbsp;
                            <button name='id_para_apagar' value='{$registro['id']}'>Apagar</button>
                        </td>
                    </tr>
                ";
        
        }
        ?>

    </table>
</form>
<?php 
include( __DIR__ . '/footer.tela.php');