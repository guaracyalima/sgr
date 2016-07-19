<?php
include ('geraPDF/class.ezpdf.php');

// instancia um novo documento PDF
$pdf = new Cezpdf();  

//seta a fonte
$pdf->selectFont('geraPDF/fonts/Courier.afm');  

$conexao = mysql_connect('localhost','root','');
mysql_select_db('reserva',$conexao);

		$data = date("d-m-Y");
		$sql = 'SELECT * FROM reserva where data = "$data"';

$res = mysql_query($sql, $conexao);

//seta os cabeçalhos da tabela que será mostrada, serão os nomes dos campos de nossa tabela
$cols = array(Nome, Endereço, Telefone);

$optionsText = array(justification=>'center', spacing=>1.0);  
/*
justification=> seta a posição de um label, pode ser center, right, left, aright, ou aleft
leading = > define o tamanho que cada linha usará para se mostrada, deverá  ser um int
spacing => define o espaçamento entrelinhas, deverá ser um float
você pode usar apenas leading ou apenas spacing, nunca os dois 
*/


$optionsTable = array(showLines=>1, showHeadings=>1, shaded=>2, textCol=>array(0.1, 0.1, 1), shadeCol=>array(1, 0.1, 0.1), shadeCol2=>array(0.1, 1, 0.1), fontSize=>12, titleFontSize=>12, rowGap=>5, colGap=>5, lineCol=>array(0, 0 ,1), xPos=>'center', width=>400); 
/*
showlines => define se haverá¡ bordas na tabela, 0 = sem bordas, 1 = (padrão) com bordas laterais e por colunas, 2 = separa cada célula da tabela com linhas
showHeadings => define se irá mostrar o cabeçalho, 0 = não mostra, 1 = mostra
shaded => define como será sombreada as linhas, 0 = sem sombra, 1 = (padrão) mostra sombra de modo alternado, 2 = mostra sombra em todos com tons alternados
textCol => define a cor do texto no documento, a cor está no formato RGB
shadeCol => define a primeira cor do sombreado na tabela, formato RGB
shadeCol2 => define a segunda cor do sombreado na tabela, formato RGB
fontSize => define o tamanho da fonte nos dados da tabela
titleFontSize => define o tamanho da fonte do título da tabela
rowGap => equivalente ao cellspacing do html
colGap => equivalente ao colspacing do html
lineCol => define a cor das linhas da tabela, formato RGB
xPos => define a posição da tabela na pagina, padrão é center mas pode ser left,right,center ou centre
*/

while($linha = mysql_fetch_row($res))
{
  $data[] = array($linha[1], $linha[2], $linha[3]); //Coloca os dados num array 
  // $data[] = array(Nome=>$linha[1], Endereço=>$linha[2], Telefone=>$linha[3]); 
  // Desta  forma comentada não se faz necessário o array $cols que seta os cabeçalhos da tabela, assim os cabeçalhos seriam os índices do array
} 
mysql_free_result($res);
mysql_close($conexao);

// Adiciona um texto ao documento
//o número 10 se refere ao tamanho da fonte e o array $optionsText define algumas propriedades como explicado na sua declaração logo acima
$pdf->ezText('Lista de endereços com origem em MySQL',10,$optionsText); 

//$pdf->ezText('Digite seu texto aqui');  //Poderia ser desta forma mais simples 


$pdf->ezText('');  //Para quebra de linha
$pdf->ezTable($data, $cols, 'AGENDA',$optionsTable);
/* 
Chama o método ezTable que espera receber ao menos um array que serão os dados da consulta armazenados no laço anterior.

O array $cols define os cabeçalhos da tabela, pode ser omitido este parâmetro mas o array com os dados deverá possuir.

Seus índices como sendo os nomes que serão mostrados no cabeçalho da tabela, os índices poderiam ser os nomes dos campos da tabela

AGENDA é o nome da tabela

$OptionsTable são algumas propriedades da tabela que foram descritas anteriormente ao serem criadas e que agora são passadas para a tabela para que esta seja formatada de acordo com nossa necessidade, exceto o array $data, os outros parâmetros podem ser omitidos, a tabela será criada com valores default.

O array $optionsTable por exemplo pode nem existir para gerar a tabela, ele apenas dão a possibilidade de personalizar nossa tabela
*/

// $pdf->ezTable($data); //Poderia ser desta forma apenas passando o array

// Adiciona uma imagem ao documento, o número 100 se refere ao tamanho da imagem
$pdf->ezImage('FreeBSD.jpg',100);


// Um exemplo para mostrar a funcionalidade da propriedade spacing definida no array $cols tente trocar o valor 1.0 para 1.5 e veja o que acontece.

$pdf->ezNewPage(); //Cria uma nova página

$pdf->ezText('This is a simple test about how to',10,$optionsText);
$pdf->ezText('create a PDF document using PHP language',11,$optionsText);
$pdf->ezText('to generate it with apache help, of course!',12, $optionsText);
$pdf->ezStream(); 
?>