<?php 
include 'config.php';

	$matricula = trim($_POST['matricula']);
	$valor = trim($_POST['valor']);
	$tipo = trim($_POST['tipo']);
	
	//bloco de checagens

	if ((!$matricula) || (!$valor) || (!$tipo)) {
		echo "Erro: ";

			if (!$matricula) {
				echo "É obrigatorio informar a matricula! <br />";
			}

				if ((!$valor) || ($valor <= 0)) {
					echo "É obrigatorio informar o valor a ser depositado em creditos! <br />";
				}

					if (!$tipo) {
							echo "Precisa informar para quem vai os creditos <br />";
						}

		echo "Preencha os campos a baixo <br />";

			include 'recargas.html';
	} else{
		//Verificar se o usuario digitado ja foi escolhido

		$sql_email_check = mysql_query(
			"SELECT COUNT(matricula) FROM alunos WHERE matricula = '{$matricula}'");

		$sql_usuario_check = mysql_query(
			"SELECT COUNT(matricula) FROM alunos WHERE matricula = '{$matricula}'");

		$eReg = mysql_fetch_array($sql_email_check);
		$uReg = mysql_fetch_array($sql_usuario_check);

		$email_check = $eReg[0];
		$usuario_check = $uReg[0];
		
		}

		//persistencia dos dados no DB

		$sql = mysql_query("UPDATE alunos SET saldo = '{$valor}' WHERE matricula = '{$matricula}' ")or die( mysql_error());

			if (!$sql) {
					echo "Erro ao recaregar. Tente novamente mais tarde!";
				}else{			

						echo "Recarga efetivada com sucesso. o seu novo saldo é de R$ ".$valor;

				}	
?>