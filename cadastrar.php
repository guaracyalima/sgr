<?php 
	
	include 'config.php';

	$nome = trim($_POST['nome']);
	$sobrenome = trim($_POST['sobrenome']);
	$email = trim($_POST['email']);
	$usuario = trim($_POST['usuario']);
	$info = trim($_POST['info']);

	//bloco de checagens

	if ((!$nome) || (!$sobrenome) || (!$email) ||(!$usuario)) {
		echo "Erro: ";

			if (!$nome) {
				echo "Nome é requerido";
			}

				if (!$sobrenome) {
					echo "sobrenome é requerido";
				}

					if (!$email) {
						echo "email is required";
					}

						if (!$usuario) {
							echo "username is required";
						}

		echo "Preencha os campos a baixo";

			include 'fomulario_cadastro.php';
	} else{
		//Verificar se o usuario digitado ja foi escolhido

		$sql_email_check = mysql_query(
			"SELECT COUNT(usuario_id) FROM usuarios WHERE email = '{$email}'");

		$sql_usuario_check = mysql_query(
			"SELECT COUNT(usuario_id) FROM usuarios WHERE usuario = '{$usuario}'");

		$eReg = mysql_fetch_array($sql_email_check);
		$uReg = mysql_fetch_array($sql_usuario_check);

		$email_check = $eReg[0];
		$usuario_check = $uReg[0];

		if (($email_check > 0) || ($usuario_check > 0)) {
			echo "<strong>Erro</strong>: ";

				if ($email_check > 0) {
					echo "Email ja cadastrado!";
					unset($email);
				}	
					if ($usuario_check > 0) {
						echo "Usuario ja esta sendo utilizado, tente novamente!";
						unset($usuario);
					}
			include 'fomulario_cadastro.php';		
		}else{
			//gerar senha randomica

			function makeRandomPassword(){
				$salt = "abchefghjkmnpqrstuvwxyz0123456789";
				srand((double)microtime()*1000000);

					$i = 0;

						while ($i <= 7) {
							$num = rand() % 33;
							$tmp = substr($salt, $num, 1);
							$pass = $pass . $tmp;

								$i++;
						}

				return $pass;		
			}
			$senha_randomica = makeRandomPassword();
			$senha = md5($senha_randomica);
		}

		//persistencia dos dados no DB

		$info = htmlspecialchars($info);

		$sql = mysql_query(
			"INSERT INTO usuarios
			 (nome, sobrenome, email, usuario, senha, info, data_cadastro)
			 	VALUES 
			 	('$nome', '$sobrenome', '$email', '$usuario', '$senha', '$info', now())")or die( mysql_error());

			if (!$sql) {
					echo "Erro ao criar conta!";
				}else{
					$usuario_id = mysql_insert_id();

					//Envia email ao usuario pra confirmar cadastro
						
						$headers = "MIME-Version: 1.0\n";
						$headers .="Content-type: text/html; charset=iso-8859-1\n";
						$headers .="FROM: http://guabirabadev.com.br - <help@guabirabadev.com.br>";

						$subject = "Confirmação de cadastro - guabirabadev.com.br";
						$mensagem = "Prezado {$nome} {$sobrenome},<br />
						Obrigado pelo seu cadastro em nosso site, <a href='http://www.teusite.com.br'>
						http://www.teusite.com.br</a>!<br /> <br />

						Para confirmar seu cadastro e ativar sua conta em nosso site, podendo acessar à
						áreas exclusivas, por favor clique no link abaixo ou copie e cole na barra de
						endereço do seu navegador.<br /> <br />

						<a href='http://www.teusite.com.br/ativar.php?id={$usuario_id}&code={$senha}'>

						http://www.teusite.com.br/ativar.php?id={$usuario_id}&code={$senha}

						</a>

						<br /> <br />
						Após a ativação de sua conta, você poderá ter acesso ao conteúdo exclusivo
						efetuado o login com os seguintes dados abaixo:<br > <br />

						<strong>Usuario</strong>: {$usuario}<br />
						<strong>Senha</strong>: {$senha_randomica}<br /> <br />

						Obrigado!<br /> <br />

						Webmaster<br /> <br /> <br />
						Esta é uma mensagem automática, por favor não responda!";

						mail($email, $subject, $mensagem, $headers);

						echo "Foi enviado para seu email - ( ".$email." ) um pedido de
						confirmação de cadastro, por favor verifique e sigas as instruções!";

				}	




	}
 ?>