
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar visitantes</title>
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

				<form name="cadastro" method="POST" action="cad_visitante.php">
					<div class="row colum log-in-form">
						<h4 class="text-center" id="cabecalhosMenores"> Cadastro de visitantes</h4>


						<label class="labels">Matricula
							<input class="inputCadastros" name="matricula" type="text" id="matricula" placeholder="Ex: 12L08532" value="<?php echo $ingrediente6; ?>" />	
						</label>

						<label class="labels">Nome
							<input class="inputCadastros" name="nome" type="text" id="nome" placeholder="Ex: Joaqui" value="<?php echo $ingrediente1;  ?>"/>
						</label>

						<label class="labels">Sobrenome
							<input class="inputCadastros" name="sobrenome" type="text" id="sobrenome"  placeholder="Ex: Mohammed Abdul Hasim" value="<?php echo $ingrediente2; ?>" />
						</label>

						<label class="labels">E-mail
							<input class="inputCadastros" name="email" type="text" id="email"  placeholder="Ex: Mohammed Abdul Hasim" value="<?php echo $email; ?>" />
						</label>

						<label class="labels">Telefone
							<input class="inputCadastros" name="telefone" type="text" id="telefone"  placeholder="Ex: Mohammed Abdul Hasim" value="<?php echo $email; ?>" />
						</label>


						<label class="labels">Campus
							<input class="inputCadastros" name="campus" type="text" id="campus" placeholder="Ex: Corrente" value="<?php echo $ingrediente3; ?>" />
						</label>

						<label class="labels">Cidade
							<input class="inputCadastros" name="cidade" type="text" id="cidade" placeholder="Ex: Santos" value="<?php echo $ingrediente4; ?>" />


							<label class="labels">CPF
								<input class="inputCadastros" name="cpf" type="text" id="cpf" placeholder="Ex: 123.456.789.11" value="<?php echo $ingrediente5; ?>" />
							</label>

							

							<label class="labels">Informações
								<textarea class="inputCadastros" name="info" placeholder="Ex: participante do congresso de venda de data mining" id="info"><?php echo $info; ?></textarea>
							</label>	



							<label class="labels">Data
								<input type="text" class="inputCadastros" name="calendario" id="calendario" placeholder="dia - mes - ano" value="<?php echo $calendario; ?>" />
							</label>


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