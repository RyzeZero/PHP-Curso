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
    $number = isset($_GET["number"]) ? $_GET["number"] : 1;
    $operation = isset($_GET["operation"]) ? $_GET["operation"] : 2;

    switch ($operation) {
      case 1:
        $result = $number * 2;
        break;
      case 2:
        $result = $number ^ 3;
        break;
      case 3:
        $result = sqrt($number);
    }
    echo "O resultado foi : $result";
    ?>

    <form action="index.html">
      <input type="submit" value="reset">
    </form>
  </div>


</body>

</html>