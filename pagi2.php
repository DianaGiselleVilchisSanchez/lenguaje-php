<html>
<head>
  <title>Resultado del cálculo de IMC</title>
</head>
<body>
  <?php
  $peso = $_REQUEST['peso'];
  $estatura = $_REQUEST['estatura'];

  $imc = $peso / ($estatura * $estatura);

  echo "Su IMC es: " . number_format($imc, 2);
  ?>
</body>
</html>