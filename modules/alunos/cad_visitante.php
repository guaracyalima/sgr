<?php 

include '../../admin/config.php';

$matricula = trim($_POST['matricula']);	
$nome = trim($_POST['nome']);
$sobrenome = trim($_POST['sobrenome']);
$email = trim($_POST['email']);
$telefone = trim($_POST['telefone']);
$campus = trim($_POST['campus']);
$cidade = trim($_POST['cidade']);
$cpf = trim($_POST['cpf']);
$info = trim($_POST['info']);
$data = trim($_POST['calendario']);
$tipo = "visitante";
$sql = mysql_query(
	"INSERT INTO alunos
	(matricula, nome, sobrenome, email, telefone, campus, cidade, cpf, informacoes, data, tipo)
	VALUES 
	('$matricula', '$nome', '$sobrenome', '$email', '$telefone', '$campus', '$cidade','$cpf', '$info', '$data', '$tipo')")or die( mysql_error());


echo"<script language='javascript' type='text/javascript'>alert('visitante cadastrado com sucesso!');window.location.href='../../admin/exibir.php';</script>";

if (!$sql) {
	echo "Erro ao cadastrar visitante! Tente novamente mais tarde ou contate o administrador do sistema.";
}


?>