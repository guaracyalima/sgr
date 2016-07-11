<?php 

	include 'config.php';

	$usuario_id = $_REQUEST['id'];
	$senha = $_REQUEST['code'];

	$sql = mysql_query(
		"UPDATE usuarios SET ativado = '1' WHERE usuario_id = '{$usuario_id}' AND senha = '{$senha}'");

	$sql_doublecheck = mysql_query(
		"SELECT * FROM usuarios WHERE usuario_id = '{$usuario_id}' AND senha = '{$senha}' AND ativado = '1'");


	$doublecheck = mysql_num_rows($sql_doublecheck);

	if ($doublecheck == 0) {
		echo "<strong>Conta não ativada!</strong>";
	}elseif ($doublecheck > 0) {
		echo "<strong>Ativado com sucesso! <br /> Faça login pra continuar</strong>";

		include 'formulario_login.html';
	}


 ?>