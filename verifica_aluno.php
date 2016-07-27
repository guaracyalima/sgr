<?php include '/admin/config.php'; ?>
<?php include 'functions.php' ?>
<?php 

$matricula = $_POST['matricula'];
$reservar = $_POST['reservar'];

// $hoje = date('d-m-Y');
// $verificaPraHoje = mysql_query("SELECT matricula FROM reserva WHERE data = '$hoje'");
// echo $verificaPraHoje;

if (isset($reservar)) {

    $verifica = mysql_query("SELECT * FROM alunos WHERE matricula = '$matricula'") or die("Erro ao localizar aluno. Tente novmaente mais tarde ou contate o administrador do sistema.");
    if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Aluno nao encontrado. Tente novamente mais tarde ou contate o administrador do sistema.');window.location.href='index.php';</script>";
        die();

    }

    // else if (mysql_num_rows($verificaPraHoje) <=1) {
    //     echo"<script language='javascript' type='text/javascript'>alert('Almoco já reservado para hoje. Tente novamente mais tarde ou contate o administrador do sistema.');window.location.href='index.php';</script>";
    //     die();

    // }

    else{
        $data = date("d-m-Y");
        $sql = mysql_query(
           "INSERT INTO reserva
           (matricula, data)
           VALUES 
           ('$matricula', '$data')")or die( mysql_error());

        setcookie("matricula",$matricula);
        header("Location:reserva_ok.php");

    }

    $sql_check_num = mysql_num_rows($sql);

    if ($sql_check_num == 0) {
        echo "Erro na passagem da matricula";

        include 'index.html';

        exit();
    }

}
?>

