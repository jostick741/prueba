<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>
  <?php
  
  echo "El primer numero es: ";
  echo $_REQUEST['numero1'];
  echo"<br>";
  echo "El segundo numero es :";
  echo $_REQUEST['numero2'];
  $resultado=$_REQUEST['numero1']+$_REQUEST['numero2'];
  echo"<br>";
  echo "el resultado es :";
  echo $resultado;
  ?>
</body>

</html>