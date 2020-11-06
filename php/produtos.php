<?php
	require_once('./include/conexao.php');	
?>
			
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/produtos.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="../js/funcoesProduto.js"></script>
		
		<title>Produtos - Full Stack Eletro</title>
	</head>

	<body>
		<!--MENU-->
		<?php
			include_once('./include/menu.html');
		?>

		<header>
			<h2>Produtos</h2>
			<hr>
		</header>		

		<div class="container col categoria" style="width: 250px">
			<h3>Categorias</h3>
			<ul class="list-group">
				<li class="list-group-item"onclick="exibir_categoria('todos')">Mostrar todos (12)</li>
				<li class="list-group-item"onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
				<li class="list-group-item"onclick="exibir_categoria('fogao')">Fogão (2)</li>
				<li class="list-group-item"onclick="exibir_categoria('microondas')">Micro-ondas (3)</li>
				<li class="list-group-item"onclick="exibir_categoria('lavadouraroupa')">Lavadoura de Roupas (2)</li>
				<li class="list-group-item"onclick="exibir_categoria('lavalouca')">Lava Louças (2)</li>
			</ul>
		</div>

		<!--Produtos ainda nao estao completamente responsivos, as vezes passa para baixo.
			Mas sem sucesso para resolver-->
		<div class="container m-0 p-0 col col-6 col-sm-7 col-md-8 col-lg-9 produtos">
			<?php
				$sql = "SELECT * FROM produto";
				$result = $conn->query($sql);

				if($result->num_rows > 0){
					while($rows = $result->fetch_assoc()){
			?>			
					<div class="produto_unidade" id="<?php echo $rows["categoria"]?>" style="width: 242px">
						<img src="../<?php echo $rows["imagem"]?>" onmouseover="aumentarImg(this)" onmouseout="diminuirImg(this)">
						<p class="nome_produto"><?php echo utf8_encode($rows["descricao"])?></p>
						<hr>
						<p class="preco_antigo">R$ <?php echo $rows["preco"]?></p>
						<p class="preco_novo">R$ <?php echo $rows["precofinal"]?></p>
            			<a href="./comprarProduto.php?comprar=<?php echo $rows["idproduto"]?>" class="btn btn-sm btn-success my-2" style="width: 100%">Comprar</a>
					</div>
			<?php
					}
				}
			?>
		</div>

		<footer id="rodape">
			<?php
				include_once('./include/rodape.html');
			?>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>