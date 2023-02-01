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
      require_once "Pessoa.php";

      $visitante = new Visitante("Marcela Fernandez", 23, "Feminino");
      $aluno = new Aluno("matriculado", "Engenharia");
      $aluno->setNome("Jeferson Almeida");
      $aluno->setIdade(26);
      $bolsista = new Bolsista("matriculado", "Analise e Desenvolvimento de Sistemas");
      $bolsista->setNome("Miguel Machado");
      $bolsista->setIdade(25);

      ?>
      <form action="aula-7.php" method="get">
        <input type="submit" value="avançar" />
      </form>
    </div>
  </pre>
</body>

</html>