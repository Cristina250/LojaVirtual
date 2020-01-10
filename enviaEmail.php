<?php

if ($_POST['assunto'] && $_POST['mensagem']) 
{
	if (mail("cristinavb250@gmail.com","Trabalho  de PHP:
	{$_POST['assunto']}",$_POST['mensagem'])) 
	{
	echo "E-Mail enviado com sucesso!" . "<br />";
	}
else 
	{
	echo "Erro no envio do e-mail" . "<br />";
	}
}

?>