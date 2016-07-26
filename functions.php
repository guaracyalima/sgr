<?php include '/admin/config.php'; ?>
<?php 
function session_checker(){
	if (!isset($_SESSION['usuario_id'])) {
		header("Location:formulario_login.html");
		exit();
	}
}

?>
<?php 

function get_criaComprovanteDeReserva(){
	
	$sql = mysql_query("SELECT * FROM reserva order by id desc LIMIT 1");
	$contar = mysql_num_rows($sql);

	if ($contar <='0'){
		echo "<p>Aluno não encontrado. Tente novamente mais tarde ou contate o administrador do sistema!</p>";
	}else {
		while ($rs = mysql_fetch_array ($sql)){
			$id = $rs['0'];
			$matricula = $rs['1'];
			$data = $rs['2'];
			?>
			<tbody>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $matricula; ?></td>
					<td><?php echo $data; ?></td>      
				</tr>				
				<?php				
			}
		}
		
	}?>
	<?php 

	function getNumReservasDia(){
		$data = date("d-m-Y");
		$sql = mysql_query("SELECT * FROM reserva where data = '$data'");
		
		$contar = mysql_num_rows($sql);
		
		if ($contar <='0'){
			echo "<p>Lista de reservas não encontrada. Tente novamente mais tarde ou contate o administrador do sistema!</p>";
		}else {
			while ($rs = mysql_fetch_array ($sql)){
				$id = $rs['0'];
				$matricula = $rs['1'];
				$data = $rs['2'];
				
				?>
				
				<tbody>
					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $matricula; ?></td>
						<td><?php echo $data; ?></td>      
					</tr>
					

					<?php
					
				}
			}
			echo "Total de inscritos ".$contar;
		}
		?>
		<?php 
		
		function get_cardapio(){
			$sql = mysql_query("SELECT * FROM cardapio ORDER BY data DESC LIMIT 1");		
			$contar = mysql_num_rows($sql);
			if ($contar <='0'){
				echo "<p>Cardapio do dia ainda não foi criado. Tente novamente mais tarde!</p>";
			}else {
				while ($rs = mysql_fetch_array ($sql)){
					$id = $rs['0'];
					$ingrediente1 = $rs['1'];
					$ingrediente2 = $rs['2'];
					$ingrediente3= $rs['3'];
					$ingrediente4 = $rs['4'];
					$ingrediente5= $rs['5'];
					$ingrediente6 = $rs['6'];
					$data = $rs['7'];
					$info = $rs['8'];
					?>
					<li><?php echo $ingrediente1; ?></li>
					<li><?php echo $ingrediente2; ?></li>
					<li><?php echo $ingrediente3; ?></li>
					<li><?php echo $ingrediente4; ?></li>
					<li><?php echo $ingrediente5; ?></li>
					<li><?php echo $ingrediente6; ?></li>
					<li>Data: <?php echo $data; ?></li>
					<?php
				}
			}
		}
		?>
		<?php 
		
		function get_cardapio_semanal(){
			$sql = mysql_query("SELECT * FROM cardapio ORDER BY data DESC LIMIT 7");			
			$contar = mysql_num_rows($sql);			
			if ($contar <='0'){
				echo "<p>Cardapio do dia ainda não foi criado. Tente novamente mais tarde!</p>";
			}else {
				while ($rs = mysql_fetch_array ($sql)){
					$id = $rs['0'];
					$ingrediente1 = $rs['1'];
					$ingrediente2 = $rs['2'];
					$ingrediente3= $rs['3'];
					$ingrediente4 = $rs['4'];
					$ingrediente5= $rs['5'];
					$ingrediente6 = $rs['6'];
					$data = $rs['7'];
					$info = $rs['8'];
					?>					
					<tr>
						<td><?php echo $id; ?>  </td>
						<td><?php echo $ingrediente1; ?></td>
						<td><?php echo $ingrediente2; ?></td>
						<td><?php echo $ingrediente3; ?></td>
						<td><?php echo $ingrediente4; ?></td>
						<td><?php echo $ingrediente5; ?></td>
						<td><?php echo $ingrediente6; ?></td>
						<td><?php echo $data; ?></td>  
						<td><?php echo $info; ?>  </td>
					</tr>
					<?php
				}
			}
		}
		?>
		<?php 

		function lista_alunos_matriculados(){
			$sql = mysql_query("SELECT * FROM alunos ORDER BY id");

			$contar = mysql_num_rows($sql);

			if ($contar <='0'){
				echo "<p>Sem alunos cadastrados. Tente novamente mais tarde ou contate o administrador do sistema.</p>";
			}else {
				while ($rs = mysql_fetch_array ($sql)){
					$id = $rs['0'];
					$matricula = $rs['1'];
					$nome = $rs['2'];

					?>
					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $matricula; ?></td>
						<td><?php echo $nome; ?></td>      
					</tr>
					<?php
				}
			}
		}
		?>
		<?php 

		function get_reservas(){
			$sql = mysql_query("SELECT * FROM reserva ORDER BY data");

			$contar = mysql_num_rows($sql);

			if ($contar <='0'){
				echo "<p>Sem reservas cadastrados. Tente novamente mais tarde ou contate o administrador do sistema.</p>";
			}else {
				while ($rs = mysql_fetch_array ($sql)){
					$id = $rs['0'];
					$matricula = $rs['1'];
					$data = $rs['2'];

					?>

					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $matricula; ?></td>
						<td><?php echo $data; ?></td>      
						<?php
					}
				}
			}
			?>

			<?php 
			function get_listarUsuarios(){
				$sql = mysql_query("SELECT * FROM usuarios");
				$contar = mysql_num_rows($sql);

				if ($contar <='0'){
					echo "<p>Sem usuarios cadastrados. Tente novamente mais tarde ou contate o administrador do sistema.</p>";
				}else {
					while ($rs = mysql_fetch_array ($sql)){
						$id = $rs['0'];
						$login = $rs['1'];


						?>

						<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $login; ?></td>
							<?php
						}
					}
				}
				?>
