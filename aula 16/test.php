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
    $text = "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum omnis tempore cum beatae corporis velit minus
    non ipsum eligendi consequuntur. Obcaecati saepe aspernatur necessitatibus aliquid nulla quo voluptates dolores
    quas?";
    $res = wordwrap($text, 5, "</br>", false);
    echo $res;

    ?>

    <form action="index.html">
      <input type="submit" value="Voltar">
    </form>
  </div>


</body>

</html>