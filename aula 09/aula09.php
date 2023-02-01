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
    $year = isset($_GET["year"]) ? $_GET["year"] : null;
    $age = date("Y") - $year;

    if ($year >= 1900 && $year <= 2022) {
      echo "Você nasceu no ano de $year </br>";
      echo "Você tem atualmente $age anos.";
    } elseif ($year == null || $year >= 2023 || $year <= 1899) {
      $year = null;
      echo "Ano não encontrado voltar para pagina anterior";
    }

    ?>
    <form action="index.html">
      <input type="submit" value="reset">
    </form>
  </div>
</body>

</html>