<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" http-equiv="content-type" content="text/html">
  <title>Ejercicio Mi Tiendita</title>
</head>
<body>
  <?php
    //Variables
    $compra = 201.00;
    $productos = "sadsd";
    

    if ($compra < 19)
    {
      if ($productos == "mascotas")
        echo "No se puede realizar el envio";
      else
        echo "Los gastos de envio son $9.00";
    }
    else if ($compra >= 19 & $compra <= 40)
      echo "Los gastos de envio son $9.00";
    else if ($compra > 200)
      echo "CODIGODESC77";
    else
      echo "No se puede calcular los gastos de envio";
  ?>
</body>
</html>