<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   echo "<hr>Questão 7<hr>";
   $salario= 5200.00;
   $percentualaumento=15;
   $valoraumento= ($salario * $percentuaumento)/100;
   $novosalario= ($salario + $valoraumento);
   echo "<br> O sálario é: $salario";
   echo "<br> O percentual de aumento será: $percentualaumento";
   echo "<br> O valor do aumento vai ser: $valoraumento";
   ?>
   
</body>
</html>