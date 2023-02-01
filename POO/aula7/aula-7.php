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
    require_once "Fighter.php";
    $lutador = array();
    $lutador[0] = new Fighter("Anderson", "Brasil", 28, 1.83, 78.2, 10, 2, 1);
    $lutador[1] = new Fighter("Mike Durant", "Estados Unidos", 30, 1.93, 120.0, 15, 5, 1);
    $lutador[2] = new Fighter("Davon", "Alemanhã", 29, 1.83, 68.2, 17, 6, 3);
    $lutador[3] = new Fighter("Drew", "Canada", 27, 1.83, 68.2, 11, 1, 0);
    $lutador[4] = new Fighter("Marcos Costa", "Brasil", 32, 1.85, 78.2, 15, 2, 1);
    $lutador[5] = new Fighter("Kenshiro Miagalhwa", "Japão", 29, 1.73, 64.2, 16, 3, 2);

    $lutador[0]->status();
    $lutador[1]->apresentar();
    ?>
      <form action="index.html" method="get">
        <input type="submit" value="voltar">
      </form>
    </div>
  </pre>

</body>

</html>