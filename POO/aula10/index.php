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
      require_once "Professor.php";
      require_once "Funcionario.php";
      require_once "Aluno.php";


      $pessoa = new Pessoa("Carlos", 35, "Masculino");

      $aluno = new Aluno("teste", "teste");


      $professor = new Professor("Professor de Matematica", 11);
      $professor->setSalario(19);
      $professor->setNome("Claudio");
      $professor->setIdade(38);
      $professor->setSexo("Masculino");

      $funcionario = new Funcionario("Programador", "trabalhando");
      $funcionario->setNome("Fernando");
      $funcionario->setIdade(24);
      $funcionario->setSexo("Feminino");


      //print_r($funcionario);
      print_r($professor);
      echo $professor->getSalario();
      $professor->receberSalario();


      ?>
      <form action="aula-7.php" method="get">
        <input type="submit" value="avançar" />
      </form>
    </div>
  </pre>
</body>

</html>