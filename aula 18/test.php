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
  <pre>
    <div>
      <?php
      $numberArrays = array(array(1, 2, 3), array(3, 4), array(5, 6),);
      $numberArrays[0][2] = $numberArrays[2][0];

      print_r($numberArrays);
      ?>
  
      <form action="index.html">
        <input type="submit" value="Voltar">
      </form>
    </div>
  </pre>


</body>

</html>