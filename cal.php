<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="calculadora">
<div class="nomecalculadora"><h1 class="calc">CALCULADORA</h1></div>

    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<input class= "n1" type="number" name="n1" placeholder="Número 1"><br>
<input type="radio" name="operador" value="+" requerid>Somar<br>
<input type="radio" name="operador" value="-" requerid>Subtração<br>
<input type="radio" name="operador" value="/" requerid>Divisão<br>
<input type="radio" name="operador" value="*" requerid>Multiplicação<br>
<input class= "n2" type="number" name="n2" placeholder="Número 2"><br><br>
<button type="submit">Calcular</button>
    </form>

<div class="resultado">
    <h2>
        <?php 

        if($_SERVER['REQUEST_METHOD']=='POST'){

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operador = $_POST['operador'];

        switch($operador){
            case'+':
                $resultado = $n1+$n2;
                break;

            case'-':
                $resultado = $n1-$n2;
                break;
            
            case'/':
                if($n2==0){
                $resultado =0;
            }else{
                $resultado = $n1/$n2;
            }
            break;                

            case'*':
                $resultado = $n1*$n2;
                break;

        }
echo "Resultado = " .$resultado;
}

?>
    </h2>
</div>
