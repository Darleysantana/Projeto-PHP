<?php
session_start();
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operacao = $_POST["operacao"];
if($num1 == null || $num2 == null)
{
$_SESSION['Erro'] = "Se faz necessário escrever algum valor!";
header("Location: calculadora.php");
}
else{
    if($operacao == "1")
    {
        echo $num1 + $num2;
    }
    
    else if($operacao == "2")
    {
        echo $num1 - $num2;
    }
    else if($operacao == "3")
    {
        echo $num1 * $num2;
    }
    else if($operacao == "4")
    {
        echo $num1 / $num2;
    }
    else if($operacao == "5")
    {
        echo $num1 ** $num2;
    }
    else if($operacao == "6")
    {
        echo sqrt($num1);
        echo "<br>";
        echo sqrt($num2);
    }
    else{
        echo $num1 % $num2;
        }   
}
