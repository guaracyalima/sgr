<?php include '../../admin/config.php'; ?>
<?php include '../../functions.php' ?>
<?php 

$matricula = $_POST['matricula'];
$reservar = $_POST['reservar'];


if (isset($reservar)) {

    $verifica = mysql_query("SELECT * FROM alunos WHERE matricula = '$matricula'") or die("Erro ao localizar aluno. Tente novmaente mais tarde ou contate o administrador do sistema.");
    if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Aluno nao encontrado. Tente novamente mais tarde ou contate o administrador do sistema.');window.location.href='index.php';</script>";
        die();

    }else{
        $data = date("d-m-Y");
        $estado = "ok";
        $sql = mysql_query(
           "UPDATE reserva SET estado = 'validado' WHERE matricula = '$matricula'")or die( mysql_error());

        setcookie("matricula",$matricula);
        echo"<script language='javascript' type='text/javascript'>alert('Reserva autenticada com sucesso! <br> Bom apetite!');window.location.href='index.php';</script>";
        die();
        

    }

    $sql_check_num = mysql_num_rows($sql);

    if ($sql_check_num == 0) {
        echo "Erro na passagem da matricula";

        include '../../index.html';

        exit();
    }

}
?>

