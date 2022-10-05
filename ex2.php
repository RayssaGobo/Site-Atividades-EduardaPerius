<!DOCTYPE html>
<html lang = "pt-br">
<heade>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-acale=1.0">
    <meta http-equiv="X-UA-Compatible" cotent ="ie=edge">
    <title>Document</title>
</head>
<body>
     <?php
     $altura = 1.72;
     $peso = 80;
     $imc=$peso/($altura*$altura);

     $imc = number_format ($imc, 2);

     echo "$imc";
     ?>
     </body>
     </html>