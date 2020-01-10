 <?php
    $con = mysqli_connect('localhost', 'root', '', 'banco');
    if(!$con)
     {
        echo mysqli_error($con);
     }

    $sql = mysqli_query($con, "SELECT * FROM produto");
    $sql2 = mysqli_query($con, "SELECT * FROM produto where nome = 'Romeu e Julieta'"); 
    $sql3 = mysqli_query($con, "SELECT * FROM produto where nome = 'Calzone de nozes'"); 
    $sql4 = mysqli_query($con, "SELECT * FROM produto where nome = 'Belgrano'"); 

    $linhaBuscada1 = mysqli_fetch_assoc($sql2);
    $linhaBuscada2 = mysqli_fetch_assoc($sql3);
	  $linhaBuscada3 = mysqli_fetch_assoc($sql4);
	
	session_start();

	if(@$_SESSION['login'] && @$_SESSION['senha'])
	{
	
?>
<!DOCTYPE html>
<html lang="en">

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
      <?php echo '<a class="navbar-brand" href="#"> '.$_SESSION['login'].'</a>' ?>
      <a class="nav-link" href="sair.php">Sair da conta</a>
      <?php 
		}
			else
			{
				header('location:inicioLogin.php');
			}
	  ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="novaPagina.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre</a>
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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="categoria1.php?categoria1=doce" class="list-group-item">Doces</a>
          <a href="categoria2.php?categoria2=salgado" class="list-group-item">Salgados</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
             <?php echo '<img class="d-block img-fluid" src=" ' . $linhaBuscada1['foto'] . ' " alt="First slide">' ?>
            </div>
            <div class="carousel-item">
             <?php echo '<img class="d-block img-fluid" src=" ' . $linhaBuscada2['foto'] . ' " alt="Second slide">' ?>
            </div>
            <div class="carousel-item">
               <?php echo '<img class="d-block img-fluid" src=" ' . $linhaBuscada3['foto'] . ' " alt="Third slide">' ?>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          <?php
          $con = mysqli_connect('localhost', 'root', '', 'banco');
          if(!$con) echo mysqli_error($con);
          $sql = mysqli_query($con, "SELECT * FROM produto");
    
          while($linha = mysqli_fetch_assoc($sql)){
         ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <?php echo '<a href="#"><img class="card-img-top" src="'. $linha['foto'] .'" alt=""></a>' ?>
              <div class="card-body">
                <h4 class="card-title">
                 <?php echo '<a href="especificacaoDoProduto.php?id='.$linha['id'].'">'. $linha['nome'] .'</a>' ?>
                </h4>
                <?php echo '<h5>'. $linha['preco'] .'</h5>' ?>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php }?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
