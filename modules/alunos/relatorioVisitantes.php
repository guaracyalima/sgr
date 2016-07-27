<?php include '../../functions.php' ?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Reservas</title>

	<link rel="stylesheet" type="text/css" href="../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="icon" type="image/png" href="../img/favicon.ico"/>
	
</head>
<body>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns ">

			
			<table>
				<thead>
					<tr>
						
						<th>MATRICULA</th>
						<th>NOME</th>
						<th>SOBRENOME</th>
						<th>E-MAIL</th>
						<th>TELEFONE</th>
						<th>CAMPUS</th>
						<th>CIDADE</th>
						<th>CPF</th>
						<th>INFORMAÇÕES</th>
						<th>DATA</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php 
					get_relatorioVisitantes();
					?>
				</tbody>
			</table>
			<a href="exibir.php">Voltar</a>	
			
			<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
		</div>
	</div>
	
</body>

</html>