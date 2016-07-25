<?php 

include 'config.php';
include '../../scripts.php';

if (isset($_POST['excluir_cardapio']) && $_POST['excluir_cardapio'] == 'excluir') {
	$cardapio_meta = $_POST['id_do_cardapio'];	
	
	$deletar_cardapio = mysql_query("DELETE FROM cardapio where ID = '$cardapio_meta'") or die(mysql_error());

	if ($deletar_cardapio >= 1) {
		echo "Deletado com sucesso!";
	}
} else{
	
	echo "Erro ao deletar cardapio";
	
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Listagem de  cardapio</title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">


	<link rel="stylesheet" type="text/css" href="../../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/app.css">
	<link rel="icon" type="image/png" href="../../img/favicon.ico" />
</head>


<body>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<h2 id="acesso">SGR - Gerenciador de cardapios</h2>

			<table>
				<thead>
					<tr>
						<th >ID</th>			           
						<th >Igrediente 1</th>
						<th >Igrediente 2</th>
						<th >Igrediente 3</th>
						<th >Igrediente 4</th>
						<th >Igrediente 5</th>
						<th >Igrediente 6</th>
						<th >Data</th> 
						<th >Info</th>
						<th  id="acao_cardapio">Editar</th>
						<th  id="acao_cardapio">Excluir</th>
					</tr>
				</thead>

				<?php 
				$cardapios = mysql_query("SELECT * FROM cardapio") or die(mysql_error());

				if (mysql_num_rows($cardapios) <= '0') {
					echo "Não há cardapios para exibir no momento. Tente novamente mais tarde";
				} else{
					while ($res_cardapios = mysql_fetch_array($cardapios)) {
						$id_do_cardapio =  $res_cardapios[0];
						$igrediente1 =  $res_cardapios[1];
						$igrediente2 =  $res_cardapios[2];
						$igrediente3 =  $res_cardapios[3];
						$igrediente4 =  $res_cardapios[4];
						$igrediente5 =  $res_cardapios[5];
						$igrediente6 =  $res_cardapios[6];
						$data =  $res_cardapios[7];
						$info =  $res_cardapios[8];
						
						?>
						<tbody>
							<tr>
								<td><?php echo $id_do_cardapio;?></td>
								<td><?php echo $igrediente1;?></td>
								<td><?php echo $igrediente2;?></td>
								<td><?php echo $igrediente3;?></td>
								<td><?php echo $igrediente4;?></td>
								<td><?php echo $igrediente5;?></td>
								<td><?php echo $igrediente6;?></td>
								<td><?php echo $data;?></td>
								<td><?php echo $info;?></td>
								<td>

									<form name="editar_cardapio" action="cardapio_editar.php" method="post" ectype="multipart/form-data"> 
										<input type="hidden" name="id_do_cardapio" value="<?php echo $id_do_cardapio; ?>" />

										<input type="submit" name="editar" value="Editar"/>
									</form>	


								</td>

								<td>

									<form name="excluir_cardapio" action="" method="post" ectype="multipart/form-data"> 
										<input type="hidden" name="id_do_cardapio" value="<?php echo $id_do_cardapio; ?>" />
										<input type="hidden" name="excluir_cardapio" value="excluir" />

										<input type="submit" name="excluir" value="excluir"/>
									</form>	

								</td>

								<?php     

							}
						}
						?>
					</tr>

					
				</tbody>
			</table>
			<a href="exibir.php">Voltar</a>	
			
			<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
		</div>
		
	</div>

</body>
</html>