<?php 

include '../config.php';

$ingrediente1 = trim($_POST['ingrediente1']);
$ingrediente2 = trim($_POST['ingrediente2']);
$ingrediente3 = trim($_POST['ingrediente3']);
$ingrediente4 = trim($_POST['ingrediente4']);
$ingrediente5 = trim($_POST['ingrediente5']);
$ingrediente6 = trim($_POST['ingrediente6']);	
$info = trim($_POST['info']);

$sql = mysql_query(
	"INSERT INTO cardapio
	(ingrediente1, ingrediente2, ingrediente3, ingrediente4, ingrediente5, ingrediente6, data, info)
	VALUES 
	('$ingrediente1', '$ingrediente2', '$ingrediente3', '$ingrediente4', '$ingrediente5', '$ingrediente6', now(), '$info')")or die( mysql_error());

echo "Picado cadastrado com sucesso!";
if (!$sql) {
	echo "Erro ao criar conta!";
}


?>