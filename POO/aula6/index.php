<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="_css/estilo.css" />
  <title>Programação orientada a objetos</title>
</head>

<body>
  <pre>
    <div>
      <?php
      require_once "ControleRemoto.php";

      $c = new ControleRemoto();
      $c->ligar();
      $c->abirMenu();
      ?>
      <form action="aula-6.php" method="get">
        <input type="submit" value="avançar" />
      </form>
    </div>
  </pre>
</body>

</html>