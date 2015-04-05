<?php
$x = 0;
if($x ==1){
	echo "<b>X eh igual a 1</b><p></p>";
}else
	echo "<b>X NAO eh igual a 1</b><p></p>";
$login = "admin";
$senha =123;

if ($login == "admin" && $senha == 123){
	echo "<i>Logado no sistema!!</i>";
}else 
	echo"<b>Usuario e senha Invalida</b>";
?>