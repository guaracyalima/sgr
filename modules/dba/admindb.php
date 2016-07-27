<?php include '../../functions.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">


	<link rel="stylesheet" type="text/css" href="../../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/app.css">
	<link rel="icon" type="image/png" href="../../img/favicon.ico"/>
	<script type="text/javascript" src="../../js/jquery-3.0.0.min.js"></script>
	<title>Admin_DB</title>
</head>
<body>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<h1 id="acesso">Adminsitrar banco de dados</h1>
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				
				<label>Aquivo
					<input type="file" name="file">
				</label>
				<input type="submit" name="submit" value="Enviar">
			</form>
		</div>
	</div>
</body>
</html>