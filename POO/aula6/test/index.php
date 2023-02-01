<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Conta do Banco</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>

<body>
  <pre>
    <?php
    require_once 'ContaBanco.php';
    $pessoa1 = new ContaBanco();
    $pessoa2 = new ContaBanco();

    $pessoa1->abrirConta("CC");
    $pessoa1->setDono("José");
    $pessoa1->setNumConta(1111);

    $pessoa2->abrirConta("CP");
    $pessoa2->setDono("Anna");
    $pessoa2->setNumConta(2222);

    $pessoa1->depositar(300);
    $pessoa2->depositar(500);

    $pessoa2->sacar(100);

    $pessoa1->pagarMensal();
    $pessoa2->pagarMensal();

    $pessoa1->sacar(338);
    $pessoa2->sacar(530);

    $pessoa1->fecharConta();
    $pessoa2->fecharConta();

    print_r($pessoa1);
    print_r($pessoa2);

    ?>
  </pre>

</body>

</html>