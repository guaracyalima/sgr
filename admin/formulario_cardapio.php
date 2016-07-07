<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>SGR - Cardapio</title>

	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="icon" type="image/png" href="/img/favicon.ico" />

</head>
<body>


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

					<input type="submit" name="submit" value="Cadastrar" class="button expanded"/>
					</div>
				</form>

		</div>		
	</div>
</div>



</body>
</html>