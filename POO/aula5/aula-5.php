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
      require_once 'BankAccount.php';
      $jubis = new bankAccount();

      $contaCorrente = "conta corrente";
      $contaPoupanca = "conta poupança";
      $jubis->contaCorrente = $contaCorrente;
      $jubis->contaPoupanca = $contaPoupanca;

      $jubis->setAccountType($contaPoupanca);
      print_r($jubis->openBankAccount($contaPoupanca));
      print_r($jubis);

      ?>
      <form action="index.html" method="get">
        <input type="submit" value="voltar">
      </form>
    </div>
  </pre>

</body>

</html>