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
    $site = "testando substring";
    $sub = substr($site, 0, 8);
    echo "$sub ";

    ?>

    <form action="index.html">
      <input type="submit" value="Voltar">
    </form>
  </div>


</body>

</html>