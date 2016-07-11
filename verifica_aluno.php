<?php include '/admin/config.php'; ?>
<?php include 'functions.php' ?>
<?php 

	$matricula = $_POST['matricula'];
    $reservar = $_POST['reservar'];
        if (isset($reservar)) {
                     
            $verifica = mysql_query("SELECT * FROM alunos WHERE matricula = '$matricula'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Aluno nao encontrado. Tente novamente mais tarde ou contate o administrador do sistema.');window.location.href='index.php';</script>";
                    die();


                }else{

                	$sql = mysql_query(
			"INSERT INTO reserva
			 (matricula, data)
			 	VALUES 
			 	('$matricula', now())")or die( mysql_error());

                	
                	
                    setcookie("matricula",$matricula);
                    header("Location:reserva_ok.php");   

                }

             

            	

				$sql_check_num = mysql_num_rows($sql);

			if ($sql_check_num == 0) {
				echo "Fudeu na passagem da matricula";

				include 'index.html';

				exit();
			}

        }
 ?>

 