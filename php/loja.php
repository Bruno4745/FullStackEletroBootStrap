<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<title>Nossas Lojas - Full Stack Eletro</title>
	</head>

	<body>
		<!--MENU-->
		<?php
			include_once('./include/menu.html');
		?>

		<div class="jumbotron bg-white">
			<h2 class="display-4">Nossas Lojas</h2>
			<hr class="my-4">
			<div class="row text-center">
				<div class="col col-12 col-sm-6 col-md-4 mb-5">
					<h3>Sao Paulo</h3>
					<p>Avenida Paulista, 985</p>
					<p>3 &ordm; andar</p>
					<p>Jardins</p>
					<p>(11) 1234-5678</p>
				</div>
				<div class="col col-12 col-sm-6 col-md-4 mb-5">
					<h3>Rio de Janeiro</h3>
					<p>Avenida Presidente Vargas, 214</p>
					<p>10 &ordm; andar</p>
					<p>Centro</p>
					<p>(21) 8765-4321</p>
				</div>
				<div class="col col-12 col-sm-6 col-md-4 mb-5">
					<h3>Santa Catarina</h3>
					<p>Rua Major &Aacute;vila, 237</p>
					<p>Vila Mariana</p>
					<p>(47) 1357-2468</p>
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