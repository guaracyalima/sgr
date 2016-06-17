<?php 
	include 'config.php';
	$recupera = $_POST['recupera'];
	$email = $_POST['email'];

	switch ($recupera) {
		case 'recupera':
			recuperar_senha($email);
			break;
		
		default:
			include 'formulario_senha_perdida.html';
			break;
	}

		function recupera_senha($email){
			if (!isset($email)) {
				echo "Por a casao não viu o campo email? <br>
				Informe o mesmo email utilizado no cadastro";

				include 'formulario_senha_perdida.html';

				exit();
			}

			//checagem de email cadastrado ou não

			$sql_check = mysql_query("SELECT * FROM usuarios WHERE email = '{$email}'");
			$sql_check_num = mysql_num_rows($sql_check);

			if ($sql_check_num == 0) {
				echo "Email não encontrado!";

				include 'formulario_senha_perdida.html';

				exit();
			}

			//se passar pelo metodo acima, gera nova senha:

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
				$sql = mysql_query(
					"UPDATE usuarios SET senha = '{$senha}' WHERE email = '{$email}'");

				$headers = "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\n";
				$headers .= "From: Teu Domínio - Webmaster<email@guabirabadev.com.br>";

				$subject = "Sua nova senha em teusite.com.br";

				$message = "Olá, redefinimos sua senha.<br /><br />
				<strong>Nova Senha</strong>: {$senha_randomica}<br /><br />

				<a href='http://www.guabirabadev.com/formulario_login.html'>

				http://www.guabirabadev.com/formulario_login.html

				</a><br /><br />
				Obrigado!<br /><br />
				Webmaster<br /><br /><br />

				Esta é uma mensagem automática, por favor não responda!";

				mail($email, $subject, $message, $headers);

				echo "Sua nova senha foi gerada com sucesso e enviada para o seu email!<br />
				Por favor verifique seu email!<br /><br />";

				include "formulario_login.html";

		}
 ?>