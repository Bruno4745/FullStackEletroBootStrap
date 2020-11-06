<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
		<title>Full Stack Eletro</title>
	</head>

	<body>
		<!-- MENU -->
		<!--Pelo index estar na pasta raiz, os links e imagens nao funcionam.
		Por isso criei um novo arquivo para fazer o include, com o endereco das imagens e links certos.
		O mesmo vale para o rodape.-->
		<?php
			include_once('./php/include/menuIndex.html');
		?>
		
		<div class="jumbotron bg-white">
			<h2 class="display-4">Seja bem vindo(a)!</h2>
			<p>Aqui em nossa loja, <i>programadores tem desconto </i>nos produtos para sua casa!</p>
			<hr class="my-4">
			<p>Conheca todos os nossos produtos clicando abaixo!</p>
			<a class="btn btn-success btn-lg" href="./php/produtos" role="button">Nossos Produtos!</a>
		</div>
		
		<footer id="rodape">
			<?php
				include_once('./php/include/rodapeIndex.html');
			?>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>