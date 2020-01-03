 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Cadastro</title>
       <link rel="stylesheet" href="css2.css" />
    </head>
    <body>  
        <?php
            include("conexao.php");
            
            //ATRIBUIR TODOS OS ELEMENTOS DO FORMULÁRIO A UMA VARIÁVEL COM O MESMO NOME 
            foreach($_POST as $nome_campo => $valor){
               $comando = "\$" . $nome_campo . "='" . $valor . "';";
               eval($comando);
            } 
            
            //VERIFICA SE O CAMPO NÃO FOI PREENCHIDO
            if (empty($nome) || empty($senha) || empty($confirmacao) || empty($email) || empty($cpf) || empty($rg) || empty($endereco)|| empty($numero)|| empty($cep) || empty($cidade) || empty($estado) || empty($telefone)){
               echo "<script>alert('O preenchimento de todos os campos é obrigatório.');window.location.href='cadastro.php';</script>";
            
            }
            
            //VERIFICA SE O CAMPO FOI PREENCHIDO COM UM VALOR ABAIXO DO PERMITIDO            
            elseif(strlen($senha)<3){
                echo "<script>alert(' Campo <b>Senha</b>, deve ter no mínimo 8 caracteres.');window.location.href='cadastro.php';</script>";
                      
            }
                //Verifica senha
             elseif($senha != $confirmacao){
                echo "<script>alert(' Verifique a confirmação de senha.');window.location.href='cadastro.php';</script>";die();
                      
            }
            //ROTINA PARA INSERIR NO BANCO DE DADOS
            else {
                $result = mysqli_query($mysqli,"INSERT INTO usuario VALUES('$nome','$senha','$confirmacao','$email','$cpf','$rg','$endereco','$numero','$cep','$cidade','$estado','$telefone')");
                if ($result == true) {
                    echo "<br>";
                } else {
                    $msg = mysqli_error($mysqli);
                     echo "<script>alert('/n Falha no cadastro.Falha no INSERT! Mensagem de erro: '$msg');</script>"; 
                    
                }
            }
            //EXIBE OS DADOS DO REGISTRO
            echo " <div class='dados'><br/><br/><h2>Dados cadastrais</h2>";
            echo "<br/>Nome: $nome";
            echo "<br/>Email: $email";
            echo "<br/>CPF: $cpf";
            echo "<br/>RG: $rg";
            echo "<br/>Endereço: $endereco";
            echo "<br/>Número: $numero";
            echo "<br/>Cep: $cep";
            echo "<br/>Cidade: $cidade";
            echo "<br/>Estado: $estado";
            echo "<br/>Telefone: $telefone";
            
            echo '<a href="listagem.php"><h3>Listagem completa:</h3></a></div>'; 
        ?>
    </body>
</html>