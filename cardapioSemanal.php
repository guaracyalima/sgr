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
		<div class="small-12 medium-12 large-6 columns ">
			<ul class="cardapioSemanalUL">
				<?php 
					get_cardapio_semanal();
				 ?>
			</ul>	 
		</div>
	</div>		 

 <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>		

</body>
</html>