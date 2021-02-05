<?php 
session_start();
?>
<!DOCTYPE html>

<html>
	<head>
		<title> Calculadora </title>
		<meta charset="utf-8">
		<link href="StyleCalculadora.css" rel="stylesheet">
	</head>

	<body>
        <div id = "Corpo">
        
        <?php 
        if(isset($_SESSION['Erro'])){
            echo $_SESSION['Erro'];
            unset($_SESSION['Erro']);}
            
        ?>
        
            <h1>Calculadora</h1>
		    <form action = "calculadora1.php" method="POST" class = "formulario">
                <label for="">Numero 1:</label>
			     <input type="number" name="num1"><br>
                 <label for="">Numero 2:</label>
			    <input type="number" name="num2"><br>
                 <select name="operacao" id="operacao">

                    <option value="1">soma</option>
                    <option value="2">subtração</option>
                    <option value="3">multiplicação</option>
                    <option value="4">divisão</option>
                    <option value="5">expoente</option>
                    <option value="6">raiz quadrada</option>
                    <option value="7">modulo</option>
                </select>
                <input type="submit" value="Calcular"><br>
            </form>
            
        </div>
	</body>

</html>
