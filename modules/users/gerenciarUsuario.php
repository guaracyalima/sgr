<?php include '../../functions.php' ?>



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Gerenciar Usuarios</title>

	<link rel="stylesheet" type="text/css" href="../../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/app.css">
	<link rel="icon" type="image/png" href="../../img/favicon.ico"/>
	
</head>
<body>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns ">

			<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Usuario</th>
            
    </tr>
  </thead>
  <tbody>
			<?php 
				get_listarUsuarios();
			 ?>
</tr>
	</tbody>
</table>
<a href="exibir.php">Voltar</a>	
			
			<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
		</div>
	</div>
	
</body>

</html>