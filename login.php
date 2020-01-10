<?php
$con = mysqli_connect('localhost', 'root', '', 'banco');
if(!$con) echo mysqli_error($con);

session_start();

$loginU = $_POST['login'];
$senhaU = $_POST['senha'];
$resultado = mysqli_query($con, "SELECT * FROM usuario");

//$verificaHash = password_verify($senhaU, $hash);

if(mysqli_num_rows($resultado) == 0){
	header('location:inicioLogin.php');
}

while($linha = mysqli_fetch_assoc($resultado))
	{	
			if($linha['login'] == $loginU && $linha['senha'] == $senhaU)
			{
				
				$_SESSION['login'] = $loginU;
				$_SESSION['senha'] = $senhaU;
				header('location:novaPagina.php');
				break;
			}
	}
	if(!$linha)
	{	
	header('location:inicioLogin.php?msg1=Login inválido');
	}
	//header('location:novaPagina.php');
?>