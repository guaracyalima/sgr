
<!DOCTYPE html>
<html>
<head>
	<title>Criar cardapio</title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">


	<link rel="stylesheet" type="text/css" href="../../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/app.css">
	<link rel="stylesheet" type="text/css" href="../../css/jqui.css">
	<link rel="icon" type="image/png" href="../../img/favicon.ico" />

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>


	<script>
		$(function() {
			$("#calendario").datepicker({dateFormat: 'dd-mm-yy',

				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
			});
		});
	</script>

</head>
<body>

<?php include '../../admin/menuAdmin.php'; ?>

	<div class="row">
		<div class="medium-6 medium-centered large-4 large-centered columns">
			<div class="signup-panel">
				<br>

				<form name="cadastro" method="POST" action="criaCardapioSemanal.php">
					<div class="row colum log-in-form">
						<h4 class="text-center" id="cabecalhosMenores"> Cardapio diario</h4>



						<label class="labels">Ingrediente</label>
						<input class="inputCadastros" name="ingrediente1" type="text" id="ingrediente1" placeholder="Ex: Arroz" value="<?php echo $ingrediente1;  ?>"/>

						<label class="labels">Ingrediente</label>	
						<input class="inputCadastros" name="ingrediente2" type="text" id="ingrediente2"  placeholder="Ex: Feijão" value="<?php echo $ingrediente2; ?>" />

						<label class="labels">Ingrediente</label>	
						<input class="inputCadastros" name="ingrediente3" type="text" id="ingrediente3" placeholder="Ex: Farofa de porco" value="<?php echo $ingrediente3; ?>" />

						<label class="labels">Ingrediente</label>	
						<input class="inputCadastros" name="ingrediente4" type="text" id="ingrediente4" placeholder="Ex: Pipoca" value="<?php echo $ingrediente4; ?>" />

						<label class="labels">Ingrediente</label>	
						<input class="inputCadastros" name="ingrediente5" type="text" id="ingrediente5" placeholder="Ex: Mandioca frita" value="<?php echo $ingrediente5; ?>" />
						
						<label class="labels">Ingrediente</label>	
						<input class="inputCadastros" name="ingrediente6" type="text" id="ingrediente6" placeholder="Ex: Camarão empanado" value="<?php echo $ingrediente6; ?>" />	


						<label class="labels">Descrição</label>	
						<textarea class="inputCadastros" name="info" placeholder="Ex: I am ROOT" id="info"><?php echo $info; ?></textarea>

						<label class="labels">Data</label>	
						<input type="text" class="inputCadastros" name="calendario" id="calendario" placeholder="dia - mes - ano" value="<?php echo $calendario; ?>" />


						<input type="submit" name="submit" value="Cadastrar" class="button expanded"/>
					</div>
				</form>

			</div>		
		</div>
	</div>

	<script src="../../js/vendor/jquery.js"></script>
	<script src="../../js/vendor/what-input.js"></script>
	<script src="../../js/vendor/foundation.js"></script>
	<script src="../../js/app.js"></script>	
	<script src="../../js/jquery-1-9.js"></script>
	<script src="../../js/jqui.js"></script>		
</body>
</html>