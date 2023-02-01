<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/estilo.css'>
  <script src='main.js'></script>
</head>

<body>
  <div>
    <?php
    function soma()
    {
      $p = func_get_args();
      $total = func_num_args();
      $s = 0;

      for ($i = 0; $i < $total; $i++) {
        $s += $p[$i];
      }
      return $s;
    }

    $result = soma(1, 8, 9, 6);

    echo "A soma dos valores é igual a $result";
    ?>

    <form action="index.html">

      <input type="submit" value="Voltar">
    </form>
  </div>


</body>

</html>