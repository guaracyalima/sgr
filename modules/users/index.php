<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
     <meta http-equiv="Content-Type" content="text/html">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>SGR - pagina inicial</title>

  <link rel="stylesheet" type="text/css" href="../css/foundation.css">
  <link rel="stylesheet" type="text/css" href="../css/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="../css/app.css">
  <link rel="icon" type="image/png" href="../img/favicon.ico"/>

</head>

<body>
<body>

<?php
    $login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
            echo"Bem-Vindo, $login_cookie <br>";
            echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
        }else{
            echo"Bem-Vindo, convidado <br>";
            echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
        }
?>
</body>
</html>