    <?php
    $login_user = $_POST['login'];
	$senha_user = $_POST['senha'];
	$entrar = $_POST['entrar'];
	include("conexao.php");

	if (isset($entrar)) {
        
        $verifica = mysqli_query($mysqli,"SELECT * FROM usuario WHERE email = '$login_user' AND senha = '$senha_user'") or die("erro ao selecionar");
        if(mysqli_num_rows($verifica)<=0){
        echo "<meta http-equiv='refresh' content='0.5;url=cadastro.php'>";
        die();
        }
	    else{
        echo "<meta http-equiv='refresh' content='0.5;url=produtos.php'>"; 
		
	   }
   }
	?>
