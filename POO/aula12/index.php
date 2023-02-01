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
      require_once 'Mamifero.php';
      require_once 'Reptil.php';
      require_once 'Peixe.php';
      require_once 'Ave.php';
      //$a = new Animal(); ----- classe abstrata não pode ser Objeto! -------\\

      $m = new Mamifero();
      $r = new Reptil();
      $p = new Peixe();
      $a = new Ave();

      $m->locomover();
      $m->alimentar();
      $m->emitirSom();

      $r->locomover();
      $r->alimentar();
      $r->emitirSom();

      $p->locomover();
      $p->alimentar();
      $p->emitirSom();

      $a->locomover();
      $a->alimentar();
      $a->emitirSom();
      ?>
      <form action="index.php" method="get">
        <input type="submit" value="avançar" />
      </form>
    </div>
  </pre>
</body>

</html>