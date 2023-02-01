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
    include "functions.php";

    text();
    ?>

    <form action="index.html">
      <input type="submit" value="Voltar">
    </form>
    <form action="script2.php">
      <input type="submit" value="pagina 2">
    </form>
  </div>


</body>

</html>