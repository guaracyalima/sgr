<?php include 'functions.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Reservas</title>

	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="icon" type="image/png" href="/img/favicon.ico" />
	<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>

				<script type="text/javascript">
					function time()
					{
					today=new Date();
					h=today.getHours();
					m=today.getMinutes();
					s=today.getSeconds();
					document.getElementById('txt').innerHTML= " "+h+" : "+ m +" : "+ s;
					setTimeout('time()',500);
					}
				</script>
</head>
<body onload="time()">

<script type="text/javascript" src="js/ajax.js"></script>
 
	<div class="row">
		<div class="small-3 medium-3 large-3 columns preta">
			<img src="img/if.jpg">
				<br />	
					<script language="JavaScript">

						document.write("<font color='#000000' size='3' face='arial'>")
						var mydate=new Date()
						var year=mydate.getYear()
						if (year<2000)
						year += (year < 1900) ? 1900 : 0
						var day=mydate.getDay()
						var month=mydate.getMonth()
						var daym=mydate.getDate()
						if (daym<10)
						daym="0"+daym
						var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
						var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Março de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
						document.write("   "+dayarray[day]+", "+daym+" "+montharray[month]+ " "+year+" ")
						document.write("</b></i></font>")
					</script>
	<div id="txt">
		
	</div>
		<div class="cardapio">
			<h4 class="text-center tituloCardapio">Cardápio</h4>
				<ul>
					<?php get_cardapio(); ?>
					
				</ul>
			<p class="text-center"><a href="cardapioSemanal.php">cardápio da semana</a></p>
		</div>
		</div>
			<div class="small-9 medium-9 large-9 columns">
				<ul class="accordion" data-accordion data-allow-all-closed="true" id="Container">
						  <li class="accordion-item is-active" data-accordion-item>
						    <a href="#" class="accordion-title acdTitulo">Nescessita de ajuda para descobrir a sua matricula?</a>
						    <div class="accordion-content" data-tab-content id="Pesquisar">
						      Infome o seu nome: 
				                <input type="text" name="txtnome" id="txtnome"/> 
				                <input type="button" name="btnPesquisar" value="Pesquisar" onclick="getDados();"/>
				                Resultados da pesquisa:
				            <section id="Resultado"></section>
						    </div>
						    
						  </li>
				</ul>
			<h1 id="acesso">Acesso ao refeitório</h1>
				<div id="verde">
					<form action="verifica_aluno.php" method="POST" name="" id="">
						<label class="matricula">Matrícula
							<input class="input" name="matricula" type="text" id="matricula" placeholder="Ex: 12L08532" autofocus>
						</label>								
						<button name="reservar"  value="Reservar" id="reservar" class="alert button expanded">Reservar</button>
					</form>
				</div>	
			</div>	
		</div>

	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>		

</body>
</html>