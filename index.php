<?php 
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('m/d/Y h:i:s a', time());
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <h1>Avaliação SOCPS II</h1>
    <h2>Matheus Henrique de Oliveira</h2>
    <h2> <?php echo $date ?> </h2>
</body>
</html>