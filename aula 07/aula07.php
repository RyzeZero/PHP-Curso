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
    $number = $_GET["num1"];
    $number2 = $_GET["num2"];
    $operator = $_GET["op"];
    $type = ($operator == "s") ? $number + $number2 : $number * $number2;

    echo "<h2>Soma dos Valores </h2>";
    echo "</br>os valores escolhiros foram $number e $number2";
    echo "</br> a soma dos valores é $type";

    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo "</br><h2>Qual a sua Idade : </h2>";
    echo "</br> Quem nasceu em $ano tem $idade anos";
    ?>

  </div>
</body>

</html>