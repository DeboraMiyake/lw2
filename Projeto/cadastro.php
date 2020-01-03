    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
		<title>Cadastro</title>
       <link rel="stylesheet" href="css2.css" />
    </head>
    <body>
    <div class= "cadastro">
  	<form method="post" action="conf_cadastro.php">
                <h2>Cadastre-se: </h2>
                <p>Nome Completo: <input type="text" name="nome" maxlength="35" placeholder="Informe o nome" autofocus /></p>
                <p>CPF: <input type="text" name="cpf" maxlength="11"/></p>
                <p>RG: <input type="text" name="rg" maxlength="9"/></p>
                <p>Telefone: <input type="text" name="telefone" maxlength="11"/></p> 
                <p>Endereço: <input type="text" name="endereco" maxlength="35"/></p> 
                <p>Número: <input type="text" name="numero" maxlength="6"/></p>
                <p>CEP: <input type="text" name="cep" maxlength="8"/></p>
                <p>Cidade: <input type="text" name="cidade" maxlength="20"/></p>
                <p>Estado: <select name="estado" size="1">
                    <option value="0">Selecione o Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select></p>
                <p>E-mail: <input type="email" name="email" maxlength="30"/></p>
                <p>Senha: <input type="password" name="senha" maxlength="10"/></p>
                <p>Confirme a senha: <input type="password" name="confirmacao" maxlength="10"></p>
                <h2><input type="submit" name="cadastrar"></h2>

               
   
    </form>
    </div>
    </body>
</html>