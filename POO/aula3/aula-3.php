<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="_css/estilo.css">
  <title>Programação orientada a objetos</title>
</head>

<body>
  <pre>
      <div>
      <?php
      require_once 'Caneta.php';
      $novaCaneta = new Caneta("Macr", "Preta", 1.5);
      $novaCaneta->cor = "Azul";
      $novaCaneta->modelo = "BIC";

      print_r($novaCaneta);
      ?>
      <form action="index.html" method="get">
        <input type="submit" value="voltar">
      </form>
    </div>
  </pre>

</body>

</html>