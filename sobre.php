<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
    <body>
	
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Densenvolvimento web 2</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="inicio.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login\sobre.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inicioLogin.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
           <li class="nav-item">
            <form action="busca.php" method="POST">
              <input type="text" name="busca" placeholder="Buscar..." required />
          <button id="btnBusca">Buscar</button>
        </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

		
	<div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong><h2>Trabalho</h2></strong>
					</div>
					<div class="panel-body">
                        <p class="text-justify">
                              <br>
                              Nota do Semestre = (trabalho + prova + exercícios) / 3
                              <br>
                              Trabalho
                              Desenvolva o site de uma loja virtual 100% funcional (vocês escolhem os produtos). . O que será cobrado:
                              <br>
                              HTML e CSS: a biblioteca Bootstrap poderá ser utilizada, e o site poderá ter como base um dos templates disponíveis aqui
                              <br>
                              É possível incorporar a biblioteca no seu trabalho carregando os seus arquivos diretamente do servidor da Bootstrap:
                              <br>
                              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                              BD com usuários, produtos, etc... (com SGBD MySQL)
                              <br>
                              Sistema de login, caixa de busca, menu de categorias de produtos e listagem inicial de produtos em destaque
                              Tela de cadastro de usuário
                              <br>
                              Fale conosco (formulário de contato, deve enviar e-mail via PHP)
                              Tela específica para detalhar apenas 1 produto clicado (deve funcionar para todos produtos dinamicamente, apenas 1 PHP para todos). Deve possuir um botão de compra que manda para a tela do carrinho.
                              <br>
                              Tela do carrinho de compras. Ao finalizar a compra, mande um e-mail para o usuário com o "recibo" da compra e limpe o carrinho. O carrinho deve permitir mudar a quantidade de cada produto e também removê-los. O valor total da compra também deve ser mostrado e atualizado conforme as quantidades forem alteradas.
                              <br>
                              O site deverá ser entregue e apresentado para a turma dia 19/06. Pode ser feito em duplas.
                              <br>
                              Recuperação: 26/06
                              <br>
                              Correções e melhoramentos no trabalho, podendo elevar a nota deste até 6
                              Entrega de exercícios atrasados, valendo até 6 cada
                              Prova substitutiva para a nota da prova, valendo a maior nota entre as 2
                        </p>
					</div>
				</div>
                </div>
			</div>
		</div>
	
	<footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
           </div>
    </footer>

    </body>
</html>