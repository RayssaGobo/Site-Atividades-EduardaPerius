<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     $altura = 1.72;
     $peso = 80;
     $imd = $peso/pow($altura,2);
     echo "<h4>Calculo do IMC</h4";
     echo "<p>Altura: $altura</p>";
     echo "<p>Peso: $peso</p>";
     echo "<p> IMC: $imc</p>";
     if ($imc < 18.5){
        echo "<h3>Baixo Peso</h3>";
     }else{
         if($imc >=18.5 && $imc < 25)
         echo "<h3>Peso Ideal</h3>";
     }else{
         if($imc >=25 && $imc < 30){
             echo "<h3>Sobrepeso</h3>";
         }else{
             if ($imc >= 30 && $imc < 40){
                 echo "<h3>Obesiade </h3>";
         }else{
             echo "<h3>Obsidade Grave!</h3";
         }
     }
?>
</body>
</html>