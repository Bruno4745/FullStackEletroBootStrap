<?php
	require_once('./include/conexao.php');

	if(!empty($_POST['nome']) and !empty($_POST['mensagem'])){
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
				
		$sql = "INSERT INTO comentario (nome, mensagem) VALUES ('$nome', '$mensagem')";
		$result = $conn->query($sql);			

		?>
			<script>
				alert("Comentario enviado com sucesso!");
			</script>
		<?php
	}
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
		<title>Contato - Full Stack Eletro</title>
	</head>

	<body	>
		<!--MENU-->
		<?php
			include_once('./include/menu.html');
		?>

		<div class="jumbotron bg-white mb-0">
			<h2 class="display-4">Contato</h2>
			<hr class="my-4">
			<div class="row text-center my-5">
				<div class="col col-12 col-sm-6 mt-2	">
					<img src="../imagens/email.png" style="width: 70px">
					<p>contato@fullstackeletro.com</p>
				</div>
				<div class="col col-12 col-sm-6">
					<img src="../imagens/whatsapp.png" style="width: 70px">
					<p>(11) 2222-3333</p>
				</div>
			</div>
		</div>

		<div class="container mb-5 col-10">
			<form method="post"> 
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
				</div>
				<div class="form-group">
					<label for="mensagem">Mensagem</label>
					<textarea class="form-control" name="mensagem" placeholder="Digite uma mensagem" required></textarea>
				</div>
				<button type="submit" class="btn btn-success">Enviar</button>
				<button type="reset" class="btn btn-warning">Limpar</button>
			</form>
		</div>

		<?php
			$sql = "SELECT * FROM comentario;";
			$result = $conn->query($sql);

			if($result->num_rows > 0){
				echo '<h4>Mensagens Enviadas:</h4>';
				while($rows = $result->fetch_assoc()){
					echo '<hr>Data: ', $rows['data'];
					echo '<br>Nome: ', $rows['nome'];
					echo '<br>Comentario: ', $rows['mensagem'];
				}
			}
		?>

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