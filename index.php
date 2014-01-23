<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pessoas</title>
    </head>
    <body>
        <center>
        <?php 
            require_once('menu.php');
            session_start();
            
            
            if(isset($_SESSION["cadastros"])){
                echo "<dl>";
                foreach($_SESSION["cadastros"] as $pessoa){
                    if ($pessoa != NULL) {
                        echo '<fieldset>';
                        echo '<dt><b>Nome:</b> ' . $pessoa["nome"] . '</dt>';
                        echo '<dd><b>CPF:</b> ' . $pessoa["cpf"] . '</dd>';
                        echo '<dd><b>Nascimento:</b> ' . $pessoa["nascimento"] . '</dd>';
                        echo '<dd><b>Sexo:</b> ' . $pessoa["sexo"] . '</dd>';
                        echo '<dd><b>Estado:</b> ' . $pessoa["estado"] . '</dd>';
                        echo '<dd><b>Telefone:</b> ' . $pessoa["telefone"] . '</dd>';
                        echo '<dd><b>Observações:</b> ' . $pessoa["observacoes"] . '</dd>';
                        echo '</fieldset>';
                    }
                }
                echo "</dl>";
            }
             
            else{
                echo 'Não existem pessoas cadastradas';
            }
        
        ?>
    </center>
    </body>
</html>
