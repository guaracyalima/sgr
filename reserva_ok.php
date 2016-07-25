<?php include 'functions.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reservado</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="icon" type="image/png" href="/img/favicon.ico" />
	<meta http-equiv="refresh" content=1;url="index.php">

</head>
<body>
	<h1 class="text-center">Reservado com sucesso!</h1>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns ">
			

			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>MATRICULA</th>
						<th>Data</th>
						
					</tr>
				</thead>
				<?php 
				get_criaComprovanteDeReserva();
				?>


			</tbody>
		</table>

	</div>
</div>

</body>
</html>
