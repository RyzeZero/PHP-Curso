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
    $numberUser = $_GET["numberUser"];
    $numberEnd = $_GET["numberEnd"];
    $numberIncrement = $_GET["numberIncrement"];

    echo "$numberUser ";

    while ($numberUser + $numberIncrement  <= $numberEnd) {
      $numberUser =  $numberUser + $numberIncrement;
      echo "$numberUser ";
    }

    if ($numberUser + $numberIncrement == $numberEnd) {
      echo $numberEnd;
    }

    ?>

    <form action="index.html">

      <input type="submit" value="Voltar">
    </form>
  </div>


</body>

</html>