<?php
	$login = "admin";
	
/* 	if($login == "admin"){
		$resultado = true;
	}else{
 		$resultado = false;
 	}
*/ 
	//Usando IF e else juntos
	$resultado = $login =="admin"?$x = true:$x = false;
	echo "Se o valor for 1 eh verdadeiro : [$resultado]";
?>