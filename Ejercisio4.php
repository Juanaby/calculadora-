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
        <h1>Area de un</h1>
        <hr>
        <form method="post">
            <label>Valor1</label>
            <input type="number" max="10000" min="0" name="valor1" placeholder="0" required autofocus>
            <label>Valor2</label>
            <input type="number" max="10000" min="0" name="valor2" placeholder="0">
            <hr>
            <input type="radio" class="for-check-input" name="opcion" value="circulo"
            required> Circulo
            <input type="radio" class="for-check-input" name="opcion" value="cuadrado"
            required> Cuadrado
            <input type="radio" class="for-check-input" name="opcion" value="triangulo"
            required> Triangulo
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar" >
            <input type="submit" class="btn btn-success w-25" value="Eliminar">
            <hr>

        </form>
    </div>
<div class="container">
    <?php
  if ($_POST){
        function Circulo (){
        $ra= ($_POST['valor1']*$_POST['valor1']);
        $area=$ra*3.1416;
        echo "El area del circulo es: $area"."cm2";
        }
        function Triangulo (){
            $ra= ($_POST['valor1']*$_POST['valor2']);
            $area=$ra/2;
            echo "El area del triangulo es: $area"."cm2";      
        }
        function Cuadrado (){
            $ra= ($_POST['valor1']*$_POST['valor1']);
            $area=$ra;
            echo "El area del cuadrado es: $area"."m2"; 
        }
        switch($_POST['opcion']){
            case 'circulo':
                Circulo();
                break;
            case 'triangulo':
                Triangulo();
                break;
            case 'cuadrado':
                Cuadrado();
                break;
            default:
            echo "Error en la opción seleccionada";
            break;
        } 
    }
    ?>
</div>
</body>
</html>