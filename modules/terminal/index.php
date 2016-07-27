<!DOCTYPE html>
<html>
<head>
	<title>Editar cardapio</title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">


	<link rel="stylesheet" type="text/css" href="../../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/app.css">
	<link rel="icon" type="image/png" href="../../img/favicon.ico" />
</head>
<body>
	<script type="text/javascript" src="ajax.js"></script>

	<div class="row">

		<div class="small-12 medium-12 large-12 columns">


			<ul class="accordion" data-accordion data-allow-all-closed="true" id="Container">
				<li class="accordion-item " data-accordion-item>
					<a href="#" class="accordion-title acdTitulo">Nescessita de ajuda para descobrir a sua matricula?</a>
					<div class="accordion-content" data-tab-content id="Pesquisar">
						Infome o seu nome: 
						<input type="text" name="txtnome" id="txtnome"/> 
						<input type="button" name="btnPesquisar" value="Pesquisar" onclick="getDados();"/>
						Resultados da pesquisa:
						<section id="Resultado"></section>
					</div>
					
				</li>
			</ul>
			<form action="verifica_matricula.php" method="POST" name="" id="">
				<h3>Autenticar reserva de almoço</h3>
				<label>Informe a  matricula
					<input type="" name="matricula">
					<button name="reservar"  value="Reservar" id="reservar" class="alert button expanded">Autenticar</button>

				</label>
			</form>


			

		</div>
	</div>

	<script src="../../js/vendor/jquery.js"></script>
	<script src="../../js/vendor/what-input.js"></script>
	<script src="../../js/vendor/foundation.js"></script>
	<script src="../../js/app.js"></script>	
</body>
</html>