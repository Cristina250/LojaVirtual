<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'banco');

if(!$con) 
{
echo mysqli_error($con);
}
    if(empty($_SESSION['carrinho']))
    {
        $precoTotal = 0;
        ?>
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <?php
    }
    else
    {
        echo '<form action="gerenciarCarrinho.php?funcao=atualizar" method = "POST">';
        $varQtd = '';
            foreach($_SESSION['carrinho'] as $id => $qtd)
            {
            	$sql = mysqli_query($con,"SELECT * FROM produto WHERE id = '$id' "); 
            	$linhas = mysqli_fetch_assoc($sql);
            ?>

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade Digitada</th>
                        <th class="text-center">Preco</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                           <?php echo '<a class="thumbnail pull-left" href="#"> <img class="media-object" src= " ' . $linhas['foto'] . ' " style="width: 72px; height: 72px;"> </a>' ?>
                            <div class="media-body">
                                <?php echo '<h4 class="media-heading"><a href="#"> ' . $linhas['nome'] . ' </a></h4>' ?>
                                <span>Status: </span><span class="text-success"><strong>Estoque</strong></span>

                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <?php 
                                echo '<input type="number" name="quantidade['.$id.']" value="'.$qtd.'" />';
                                echo '<input type="submit" class="btn btn-success" value="Atualizar quantidade">';
                                
                            ?>
                        </td>
                            <?php echo '<td class="col-sm-1 col-md-1 text-center"><strong> ' . $linhas['preco']. ' </strong></td>' ?><?php 
                                $preco = $linhas['preco'] * $qtd;
                                $precoTotal += $preco;
                            ?>
                        <td class="col-sm-1 col-md-1">
                         <?php echo '<a class="btn btn-success" href="gerenciarCarrinho.php?funcao=remover&id='. $linhas['id'] .'">Remover</a>' ?>
                        </td>
                    </tr> 
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <?php echo '<td class="text-right"><h5><strong> ' . $preco . ' </strong></h5></td>' ?>
                    </tr>

                    <?php 
                            $varQtd .= $qtd;
                            $array = str_split($varQtd);
                        }
                 	  }   
                     ?>

                     </form>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <?php echo '<td class="text-right"><h3><strong> ' . $precoTotal . ' </strong></h3></td>' ?>
                    </tr>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href= "novaPagina.php" class="btn btn-success">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuar comprando
                        </a>
                        </td>
                        <td>
                            <?php 
                           
                            echo '<a href="gerenciarCarrinho.php?funcao=finalizar" class="btn btn-success">
                                Finalizar compras <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>' 
                            
                            ?>
                        </td>                     
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

