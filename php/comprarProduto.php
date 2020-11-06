<?php

    require_once('./include/conexao.php');	

    if(isset($_GET['comprar'])){
        $id = $_GET['comprar'];
        
        $sql = "SELECT * FROM produto WHERE idproduto = $id;";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="../js/funcoesProduto.js"></script>

        <title>Formulario de Compra</title>
    </head>

    <body>
        <?php
            include_once('./include/menu.html');
        ?>
            
        <header>
            <h2>Formulario de Compra</h2>
            <hr>
		</header>
		
		<div class="container my-5">
			<div class="row">
				<div class="col-4">
					<img src="../<?php echo $row['imagem']?>" style="width: 100%">
				</div>
				<div class="col-8">
					<form method="post" name="formulario_compra"> 
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
						</div>
						<div class="form-group">
							<label for="endereco">Endereco</label>
							<input type="text" class="form-control" name="endereco" placeholder="Digite seu endereco" required>
						</div>
						<div class="form-group">
							<label for="telefone">Telefone</label>
							<input type="text" class="form-control" name="telefone" placeholder="Digite seu telefone" required>
						</div>
						<div class="form-group">
							<label for="produto">Produto</label>
							<input type="text" class="form-control" name="produto" value="<?php echo utf8_encode($row['descricao'])?>" readonly>
						</div>
						<div class="form-group">
							<label for="valor">Valor Unitario</label>
							<input type="number" class="form-control" name="valor" value="<?php echo $row['precofinal']?>" readonly>
						</div>
						<div class="form-group">
							<label for="quantidade">Quantidade</label>
							<input type="number" class="form-control" name="quantidade" value="1" onchange="calcValorTotal()" min="1" required>
						</div>
						<div class="form-group">
							<label for="total">Valor Total</label>
							<input type="number" class="form-control" name="total" value="<?php echo $row['precofinal']?>" readonly>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
						<button type="reset" class="btn btn-warning">Limpar</button>
						<a href="./produtos.php" class="btn btn-danger float-right">Voltar</a>
						<?php
							require('./action/finalizarCompra.php');
						?>
					</form>
				</div>
			</div>
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