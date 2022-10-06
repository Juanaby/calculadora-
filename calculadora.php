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
        <h1>Calculadora PHP</h1>
        <hr>
        <form method="post">
            <label>Número 1</label>
            <input type="number" max="10000" min="0" name="numero1" placeholder="0"
            required autofocus>
            <hr>
            <label>Número 2</label>
            <input type="number" max="10000" min="0" name="numero2" placeholder="0"
            required>
            <hr>
            <input type="radio" class="for-check-input" name="opcion" value="sumar"
            required> Sumar
            <input type="radio" class="for-check-input" name="opcion" value="restar"
            required> Restar
            <input type="radio" class="for-check-input" name="opcion" value="multiplicar"
            required> Multiplicar
            <input type="radio" class="for-check-input" name="opcion" value="division"
            required> División
            <input type="radio" class="for-check-input" name="opcion" value="potenciacion"
            required> Potenciación
            <input type="radio" class="for-check-input" name="opcion" value="concatenacion"
            required> Concatenación
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar">
            <input type="reset" class="btn btn-success w-25" value="Limpiar">
            <hr>
        </form>
    </div>
<div class="container">
    <?php
        if ($_POST){
            function Sumar (){
                echo "la suma de los numeros es: ".($_POST['numero1']+$_POST['numero2']);
            }
            function Restar (){
                echo "la resta de los numeros es: ".($_POST['numero1']-$_POST['numero2']);
            }
            function Multiplicar (){
                echo "la multiplicacion de los numeros es: ".($_POST['numero1']*$_POST['numero2']);
            }
            function Division (){
                if ($_POST['numero2']==0)
                $d="Error: division por 0";
                else
                $d=$_POST['numero1']/$_POST['numero2'];
                echo "La division de los numeros es: ".$d;
            }
            function Potenciacion (){
                echo "la potenciacion de los numeros es: ".(pow($_POST['numero1'],$_POST['numero2']));
            }
            function Concatenacion (){
                echo "la concatenacion de los numeros es: ".($_POST['numero1'].$_POST['numero2']);
            }
            switch($_POST['opcion']){
                case 'sumar':
                    Sumar();
                    break;
                case 'restar':
                    Restar();
                    break;
                case 'multiplicar':
                    Multiplicar();
                    break;
                case 'division':
                    Division();
                    break;
                case 'potenciacion':
                    Potenciacion();
                    break;
                case 'concatenacion':
                    Concatenacion();
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