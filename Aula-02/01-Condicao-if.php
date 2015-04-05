<?php
	$x = 2; //Operador de atribuição (=)
	
	if (1==1){//IF é a condição SE
		echo "<b>IF eh a condicao SE: </b>";
		echo "1 eh igual a 1<p></p>";
	}
	
	//Condição de maior
	 
	if ($x > 1){
		echo "<b>Condicao de maior:</b> ";
		echo "	X eh maior que 1<p></p>";
	}
	
	//Condição de Menor
	
	if ($x < 1){
		echo "<b>Condicao de Menor: </b>";
		echo "X eh menor que 1 <p></p>";
	}
	
	//Condição de Maior ou igual
	if ($x >= 1){
		echo "<b>Condicao de Maior ou igual:</b> ";
		echo "X eh maior ou igual a 1<p></p>";
	}
	
	//Condição de Menor ou igual
	
	if ($x <= 1){
		echo "<b>Condicao de Menor ou igual: </b>";
		echo "<br>X eh menor ou igual a 1 <p></p>";
	}
	
	//Usando OR
	if($x == 1 or $x <= 10){
		echo "<b>Usando OR: </b>";
		echo "X eh igual a 1 ou X eh maior ou igual a 10<p></p>";
	}
	
	$conta = 555675;
	$senha = 1234;
	if($conta == 555675 and $senha == 1234){
		echo "<b>Trabalhando com AND: </b>";
		echo "Pode sacar o dinheiro da conta $conta<p></p>";
		}
	$y = true;
	if ($y){//Forma resumida de falar que Y eh verdadeiro
		echo "<b>Y eh igual a true</b>";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>