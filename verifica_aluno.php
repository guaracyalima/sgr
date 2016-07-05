<?php include 'config.php'; ?>
<?php include 'functions.php' ?>
<?php 

	$matricula = $_POST['matricula'];
    $reservar = $_POST['reservar'];
        if (isset($reservar)) {
                     
            $verifica = mysql_query("SELECT * FROM alunos WHERE matricula = '$matricula'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Vai ficar com fome kkkk xD');window.location.href='index.html';</script>";
                    die();


                }else{
                    setcookie("matricula",$matricula);
                    header("Location:reserva_ok.php");                    
                }

             
            	function instanciaReservanoDb(){
				$sql = mysql_query(
				"INSERT INTO reservas
				 (data_reserva, matricula, )
			 	VALUES 
			 	(now(), '{$matricula}')")or die( mysql_error());

					if (!$sql) {
						echo "Erro ao instanciar reservas";
					}
				}

				$sql_check_num = mysql_num_rows($sql);

			if ($sql_check_num == 0) {
				echo "Fudeu na passagem da matricula";

				include 'index.html';

				exit();
			}

        }
 ?>