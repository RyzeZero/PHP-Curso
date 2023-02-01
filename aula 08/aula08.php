<!DOCTYPE html>
<html>

<head>
  <?php
  $txt = isset($_GET["text"]) ? $_GET["text"] : "texto generico";
  $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
  $cor = isset($_GET["color"]) ? $_GET["color"] : "#000000";

  ?>

  <style>
  span.text {
    font-size: <?php echo $tam;
    ?>;
    ;
    color: <?php echo $cor;
    ?>;
  }
  </style>

  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='_css/estilo.css'>
  <script src='main.js'></script>
</head>

<body>

  <div>

    <?php echo "<span class='text'>$txt</span>"; ?>
  </div>


</body>

</html>