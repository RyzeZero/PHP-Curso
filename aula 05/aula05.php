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
    $number1 = $_GET["a"];
    $number2 = $_GET["b"];
    $total = $number1 + $number2;
    $media = ($number1 + $number2) / 2;

    echo "valor recebido $number1 e $number2";
    printf("<br/> a soma de $number1 com $number2 é igual a $total");
    printf("<br/> A Media foi: $media");
    ?>

  </div>
</body>

</html>