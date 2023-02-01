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
      $caneta1 = new Caneta("BIC", "Azul", 0.5);
      $caneta2 = new Caneta("Faber", "Vermelha", 1.5);
      print_r($caneta1);
      print_r($caneta2);
      ?>
      <form action="index.html" method="get">
        <input type="submit" value="voltar">
      </form>
    </div>
  </pre>

</body>

</html>