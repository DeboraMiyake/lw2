<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Listagem</title>
    </head>
    <body>
        <?php
          //variáveis
          //  import_request_variables("gp");
            include("conexao.php");
          
            foreach($_POST as $nome_campo => $valor){
               $comando = "\$" . $nome_campo . "='" . $valor . "';";
               eval($comando);
            } 
            
            
            echo "<h3>Listagem completa</h3>";
            $consulta = mysqli_query($mysqli,"Select * from usuario");

             $n = mysqli_num_rows($consulta);
             echo '<table border="1">';
             echo '<tr><td>Nome</td><td>Email</td><td>CPF</td><td>RG</td><td>Endereço</td><td>Numero</td><td>Cep</td><td>Cidade</td><td>Estado</td><td>Telefone</td></tr>';
             for ($i = 0; $i < $n; $i++) {
             // $linha ´ e um vetor associativo
               $linha = mysqli_fetch_assoc($consulta);

               //Imprimindo os elementos...
                echo '<tr><td>' . $linha['nome'] . '</td>';
                echo '<td>' . $linha['email'] . '</td>';
                echo '<td>' . $linha['cpf'] . '</td>';
                echo '<td>' . $linha['rg'] . '</td>';
                echo '<td>' . $linha['endereco'] . '</td>';
                echo '<td>' . $linha['numero'] . '</td>';
                echo '<td>' . $linha['cep'] . '</td>';
                echo '<td>' . $linha['cidade'] . '</td>';
                echo '<td>' . $linha['estado'] . '</td>';
                echo '<td>' . $linha['telefone'] . '</td></tr>';
             }
             echo '</table>';
            
        ?>
    </body>
</html>