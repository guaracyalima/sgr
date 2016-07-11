<?php
 // inclui a conexão
 include_once('/admin/config.php');

 // Abre o Arquvio no Modo r (para leitura)
 $arquivo = fopen ('COTAHISTA1986.csv', 'r');

 // Lê o conteúdo do arquivo
 while(!feof($arquivo))
 {
  // Pega os dados da linha
  $linha = fgets($arquivo, 1024);

  // Divide as Informações das celular para poder salvar
  $dados = explode(';', $linha);

  // Verifica se o Dados Não é o cabeçalho ou não esta em branco
  if($dados[0] != 'Nome' && !empty($linha))
  {
   mysql_query('INSERT INTO emails (nome, email) VALUES ("'.$dados[0].'", "'.$dados[1].'")');
  }
 }

 // Fecha arquivo aberto
 fclose($arquivo);
?>