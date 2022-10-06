<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="stylesheet" href="united-1.js"> 
     <link href="calculadora.css" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Ejericisio numero 3</h1>
        <hr>
        <form method="post">
            <label>Número 1</label>
            <input type="number" max="10000" min="0" name="numero1" placeholder="0" required autofocus>
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar" >
            <input type="submit" class="btn btn-success w-25" value="Eliminar">
            <hr>
        </form>
    </div>
<div class="container">
    <?php

    $Llamada=$_POST['numero1'];    

    if ($Llamada<=3){
        echo ("El valor de la llamada es de 200 pesos");
        
    }
    else{
        $Extra=$Llamada-3;
        $Subtotal=$Extra*30;
        $Total=$Subtotal+200;

        echo ("La duración de la llamada fue de: ".$Llamada. " ". "Minutos");
        echo "<br>";
        echo ("El cobro de la llamada es de: $Total"." ". "Pesos");

    }
    ?>
</div>
</body>
</html>