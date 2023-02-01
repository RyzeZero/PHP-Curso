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
  <div>
    <?php
    require_once 'Caneca.php';
    $caneca1 = new Caneca;
    $caneca1->cor = "preta";
    $caneca1->estaCheia();

    if ($caneca1) {

      $caneca1->estaVazia();
    }


    ?>
    <form action="index.html" method="get">
      <input type="submit" value="voltar">
    </form>
  </div>

</body>

</html>