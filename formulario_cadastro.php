<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8"/>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="icon" type="image/png" href="/img/favicon.ico" />
</head>

</head>
<body>

<div class="row">
    <div class="medium-6 medium-centered large-4 large-centered columns">
      <div class="signup-panel">
      		<br>

				<form name="cadastro" method="POST" action="cadastrar.php">
					<div class="row colum log-in-form">
						<h4 class="text-center"> Cadastro de usuario</h4>
					<label>Nome</label>
						<input name="nome" type="text" id="nome" placeholder="Ex: Dentusco" value="<?php echo $nome;  ?>"/>

					<label>Sobre nome</label>	
						<input name="sobrenome" type="text" id="sobrenome"  placeholder="Ex: Metalhedlino da Silva" value="<?php echo $sobrenome; ?>" />

					<label>Email</label>	
						<input name="email" type="text" id="email" placeholder="Ex: minindiubrabu@proved.com" value="<?php echo $email; ?>" />

					<label>Nome de usuario</label>	
						<input name="usuario" type="text" id="usuario" placeholder="Ex: dentusco" value="<?php echo $usuario; ?>" />

					<label>Descrição</label>	
						<textarea name="info" placeholder="Ex: I am ROOT" id="info"><?php echo $info; ?></textarea>

					<input type="submit" name="submit" value="Cadastrar" class="button expanded"/>
					</div>
				</form>

		</div>		
	</div>
</div>

		
</body>
</html>