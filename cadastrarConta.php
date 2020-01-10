<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'banco');
if(!$con) echo mysqli_error($con);

$nomeUsuario = $_POST['loginCad'];
$senhaUsuario = $_POST['senhaCad'];
$emailUsuario= $_POST['emailCad'];

//$hash = password_hash($senhaUsuario, PASSWORD_DEFAULT);

$insere = "INSERT INTO usuario (login, senha, email) VALUES('$nomeUsuario', '$senhaUsuario', '$emailUsuario')";
$procuraLogin = mysqli_query($con, "SELECT * FROM usuario WHERE login = '$nomeUsuario'");
	
	if(mysqli_num_rows($procuraLogin) == 1)
	{
		header('location:criarConta.php?msg=Usuario ja existente');
	}	
	else
	{
		$_SESSION['login'] = $nomeUsuario;
		$_SESSION['senha'] = $senhaUsuario;
		mysqli_query($con,$insere);
		header('location:novaPagina.php');
	}
?>