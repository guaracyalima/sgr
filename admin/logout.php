<?php 
	session_start();
	if (!isset($_REQUEST['logmeout'])) {
		echo "Deseja realmente sair?"
		echo "<a href\"logout.php?logmeout\">sim</a> |";
		echo " <a href=\"javascript:history.go(-1)\">não</a>";
	}else{
		session_destroy();
		if (!session_is_registered('nome')) {
			echo "Você não esta mais logado!";
			echo "<br /><br /><strong>Login:</strong><br /><br />";

			include "formulario_login.html";
		}
	}
 ?>