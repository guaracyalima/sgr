<?php 

include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar cardapio</title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">


	<link rel="stylesheet" type="text/css" href="../../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/app.css">
	<link rel="icon" type="image/png" href="../../img/favicon.ico" />
</head>
<body>


	<?php 

	if (isset($_POST['cadastrar_cardapio']) && $_POST['cadastrar_cardapio'] == 'cad') {
		$id_do_cardapio = $_POST['id_do_cardapio'];
		$igrediente1 =  $_POST['ingediente1'];
		$igrediente2 =  $_POST['ingediente2'];
		$igrediente3 =  $_POST['ingediente3'];
		$igrediente4 =  $_POST['ingediente4'];
		$igrediente5 =  $_POST['ingediente5'];
		$igrediente6 =  $_POST['ingediente6'];
		$data =  $_POST['data'];
		$info =  $_POST['info'];


		if (empty($_POST['id_do_cardapio'])) {
			$data = date("d-m-Y");
			$editar_cardapio = mysql_query("UPDATE cardapio SET ingediente1 = '$ingediente1', ingediente2 = '$ingediente2', ingediente3 = '$ingediente3', ingediente4 = '$ingediente4', ingediente5 = '$ingediente5', ingediente6 = '$ingediente6', data = '$data', info = '$info' WHERE id = $id_do_cardapio") or die (mysql_error());


			if ($editar_cardapio >= '1') {
				echo "Cardapio atualizado com sucesso!";
			} else{
				echo "Erro ao atualizar cardapio. Tente novamente mais tarde ou ontate o administrador do sistema.";
			}
		}
	}


	$editar_cardapio_id = $_POST['id_do_cardapio'];

	$cardapios = mysql_query("SELECT * FROM cardapio  WHERE id = '$editar_cardapio_id'") or die(mysql_error());

	if (mysql_num_rows($cardapios) <= '0') {
		echo "Não há cardapios para exibir no momento. <br /> Tente novamente mais tarde";
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


			<table>
				<thead>
					<tr>
						<th width="200"></th>
						<th></th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td> 

							<form name="editar_cardapio" id="editar_cardapio">

								<input type="text" name="ingediente1" value="<?php echo $igrediente1;  ?>" />		      	
								<input type="text" name="ingediente2" value="<?php echo $igrediente2;  ?>" />
								<input type="text" name="ingediente3" value="<?php echo $igrediente3;  ?>" />
								<input type="text" name="ingediente4" value="<?php echo $igrediente4;  ?>" />
								<input type="text" name="ingediente5" value="<?php echo $igrediente5;  ?>" />
								<input type="text" name="ingediente6" value="<?php echo $igrediente6;  ?>" />
								<input type="text" name="data" value="<?php echo $data;  ?>" />
								<textarea name="info" value="<?php echo $info;  ?>"></textarea>

								<input type="hidden" name="id_do_cardapio" value="<?php echo $id_do_cardapio?>"/>

								<input type="hidden" name="cadastrar_cardapio" value="cad">

								<input type="submit"  value="Editar">
								
							</form>	
						</td>
						
					</tr>
				</tbody>
			</table>	

			<?php
		}
	}
	?>    
</body>
</html>