<?php include 'functions.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Reservas</title>

	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="icon" type="image/png" href="/img/favicon.ico"/>
	
</head>
<body>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns ">
			<ul class="cardapioSemanalUL">
				<table>
					<thead>
						<tr>
							<th>Data</th>
							<th>Ingrediente</th>
							<th>Ingrediente</th>
							<th>Ingrediente</th>
							<th>Ingrediente</th>
							<th>Ingrediente</th>
							<th>Ingrediente</th>
							<th>Data</th>
							<th>Descricao</th>

						</tr>
					</thead>
					<tbody>

						<?php 
						get_cardapio_semanal();
						?>
									
</tbody>
</table>
<a href="admin/exibir.php">Voltar</a>	
			
			<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">	 
				</div>
			</div>		 

			<script src="js/vendor/jquery.js"></script>
			<script src="js/vendor/what-input.js"></script>
			<script src="js/vendor/foundation.js"></script>
			<script src="js/app.js"></script>		

		</body>
		</html>