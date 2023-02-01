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
    $numberUser = $_GET["numberUser"];
    $numberEnd = $_GET["numberEnd"];
    $operation = $_GET["operation"];

    switch ($operation) {
      case 1:
        $result = $numberUser + $numberEnd;
        echo "A soma entre $numberUser com $numberEnd é igual a : $result";
        break;
      case 2:
        $result = $numberUser - $numberEnd;
        echo "A subtração entre $numberUser com $numberEnd é igual a : $result";
        break;
      case 3:
        $result = $numberUser * $numberEnd;
        echo "A multiplicação entre $numberUser com $numberEnd é igual a : $result";
        break;
      case 4:
        $result = $numberUser / $numberEnd;
        echo "A divisão entre $numberUser com $numberEnd é igual a : $result";
    }
    ?>

    <form action="index.html">

      <input type="submit" value="Voltar">
    </form>
  </div>


</body>

</html>