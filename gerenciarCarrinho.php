<?php
$con = mysqli_connect('localhost', 'root', '', 'banco');

if(!$con) 
{
echo mysqli_error($con);
}

session_start();

if(@$_SESSION['login'] && @$_SESSION['senha'])
{
  if(isset($_SESSION['carrinho']))
  {
    //header('location: carrinho.php');  
  }
  else
  {
    $_SESSION['carrinho'] = array();
  }
  //ADCIONAR
  if(isset($_GET['funcao']))
  {  
      if($_GET['funcao'] == 'adicionar')
      { 
        if(!isset($_SESSION['carrinho'][$_GET['id']]))
        { 
          $_SESSION['carrinho'][$_GET['id']] = 1; 
          header('location: carrinho.php?id=' . $_GET['id']);
        } 
    }
    //REMOVER
    if($_GET['funcao'] == 'remover')
    {
        if(isset($_SESSION['carrinho'][$_GET['id']]))
        {
           unset($_SESSION['carrinho'][$_GET['id']]);
           header('location: carrinho.php?id' . $_GET['id']);
        }
        else
        {
          header('locarion:inicio.php');
        }
    } 
  }
  //atualizar
  if($_GET['funcao'] == 'atualizar')
  {
      foreach ($_POST['quantidade'] as $key => $value) 
      {
          if($value > 0)
          {
            $_SESSION['carrinho'][$key] = $value;
            header('location: carrinho.php');
          }
      }
  }
  //Finalizar
  if(@$_GET['funcao'] == 'finalizar')
  { 
     foreach ($_SESSION['carrinho'] as $key => $value) 
     {
        $sql = mysqli_query($con, "SELECT * FROM produto where id = '$key'"); 
        $linhaBuscada = mysqli_fetch_assoc($sql);
        $quantidadeAtual = $linhaBuscada['quantidade'] - $value;
        $query = mysqli_query($con,"UPDATE produto SET quantidade = '$quantidadeAtual' WHERE id = '$key'");
     }
      session_destroy();
  }
}
else
{
  header('location:novaPagina.php');
}

?>