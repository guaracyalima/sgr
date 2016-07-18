<?php 
	session_start();
	include '../functions.php';
	session_checker();

	echo "Bem vindo <strong>". $_SESSION['nome'] ." ". $_SESSION['sobrenome'] . "</strong>";

	echo "O seu nivel de usuario é <strong>". $_SESSION['nivel_usuario']."</strong>";

	if ($_SESSION['nivel_usuario'] == 0) {
		echo "zé ninguem :=)";
	}

		if ($_SESSION['nivel_usuario'] == 1) {
			echo "ze pandeiro xD";
		}
			echo "<a href=\"logout.php\">Sair</a>";
 ?>
