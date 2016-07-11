<?php include '/admin/config.php'; ?>
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

<?php 
	
	function get_cardapio(){
	$sql = mysql_query("SELECT * FROM cardapio LIMIT 1");
	
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

<!--/*********************************************************************************************************/-->

<?php 
	
	function get_cardapio_semanal(){
	$sql = mysql_query("SELECT * FROM cardapio ORDER BY data");
	
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

  <li class="dataCardapio">Data: <?php echo $data; ?></li>
  <li class="itemCardapio"><?php echo $ingrediente1; ?></li>
  <li class="itemCardapio"><?php echo $ingrediente2; ?></li>
  <li class="itemCardapio"><?php echo $ingrediente3; ?></li>
  <li class="itemCardapio"><?php echo $ingrediente4; ?></li>
  <li class="itemCardapio"><?php echo $ingrediente5; ?></li>
  <li class="itemCardapio"><?php echo $ingrediente6; ?></li>
  ----------------------------

  
  


<?php
		}
	}
}
?>

<!--/*********************************************************************************************************/-->

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


<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>MATRICULA</th>
      <th>NOME</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $matricula; ?></td>
      <td><?php echo $nome; ?></td>      
    </tr>
	</tbody>
</table>


<?php
		}
	}
}
?>


<!--/*********************************************************************************************************/-->

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


<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>MATRICULA</th>
      <th>NOME</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $matricula; ?></td>
      <td><?php echo $data; ?></td>      
    </tr>
	</tbody>
</table>


<?php
		}
	}
}
?>

<!--/*********************************************************************************************************/-->

<?php 
	
	function set_reserva(){



	$matricula = trim($_POST['matricula']);
	

	$sql = mysql_query(
			"INSERT INTO reserva
			 (matricula, data)
			 	VALUES 
			 	('$matricula', now())")or die( mysql_error());

				echo "Reserva efetuada com sucesso!";
			if (!$sql) {
					echo "Erro ao reservar almoço. Tente novamente mais tarde ou contate o administrador do sistema.";
				}
}
?>