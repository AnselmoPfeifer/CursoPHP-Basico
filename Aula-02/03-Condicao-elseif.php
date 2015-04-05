<?php
	$login = "admin";
	$senha = 123;
	if ($login = "admin" and $senha == 123){
		echo "<i>Usuario Logado no sistema</i>";
	}elseif($login = "admin" && $senha <> 123){
		echo "<i><b>O uusario esta certo mas a senha eh invalida!</i></b>";
	}else{
		echo "Erro ao efetuar login";
	}	
?>