<?php 
	session_start();
	include 'config.php';

		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

			if ((!$usuario) || (!$senha)) {
				echo "Todos os campos devem ser preenchidos";

				include 'formulario_login.html';
			}else{
				$senha = md5($senha);
				$sql = mysql_query(
					"SELECT * FROM usuarios WHERE usuario='{$usuario}' AND senha = '{$senha}' AND ativado = '1'");

				$login_check = mysql_num_rows($sql);

				if ($login_check > 0) {
					while ( $row = mysql_fetch_array($sql)) {
						foreach ($row as $key => $val) {
							$$key = stripslashes($val);
						}

						$_SESSION['usuario_id'] = $usuario_id;
						$_SESSION['nome'] = $nome;
						$_SESSION['sobrenome'] = $sobrenome;
						$_SESSION['email'] = $email;
						$_SESSION['nivel_usuario'] = $nivel_usuario;

							mysql_query(
								"UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id = '{$usuario_id}'");

						header("Location: area_restrita.php");

					}else{
						echo "Erro ao logar! usuario ou senha não localizados.";
						include 'formulario_login.html';
					}
				}
			}
			
 ?>