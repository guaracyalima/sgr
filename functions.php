<?php 
	function session_checker(){
		if (!isset($_SESSION['usuario_id'])) {
			header("Location:formulario_login.html");
				exit();
		}
	}



	function get_criaComprovanteDeReserva(){
		$sql = mysql_query("SELECT * FROM reserva ORDER BY id LIMIT 1");
	}
 ?>