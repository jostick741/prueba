<html>
<body>

    <?php

        echo "El primer numero ingresado es: ";
        echo $_REQUEST['num1'];
        echo "<br>";
        echo "El primer segundo ingresado es: ";
        echo $_REQUEST['num3'];
        echo "<br>";
        $resultado=$_REQUEST['num1']+$_REQUEST['num2'];
        echo"El resultado de la suma de los dos numeros es :";
        echo $resultado;
    ?>

</body>

</html>