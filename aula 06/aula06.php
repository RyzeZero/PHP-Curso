<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/estilo.css'>
  <script src='main.js'></script>
</head>

<body>
  <div>
    <?php
    $value = $_GET["value"];
    printf("o preço é R$ $value");

    $value += ($value * 10 / 100);
    $valueFormat = number_format($value, 2, ",", ".");
    print " </br>o preço com % 10 de aumento é R$ $valueFormat";

    $anoAtual = $_GET["ano"];
    print "o ano atual é $anoAtual o ano seguinte é " . ++$anoAtual;
    ?>

  </div>
</body>

</html>