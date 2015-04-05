<!Doctype html>
<html>
<head>
	<title>Trabalhando com While</title>
</head>
	<body>
		<?php 
			echo "Trabalhando com while: <p>";
			$i = 0;
			while ($i <=10){
				echo $i."<br>";
				$i ++;
			}
			$i = 1;
		?>
		
		//Trabalhando com while de forma simplificada.<br>
		<?php while($i <= 10):?>
		Esse eh o valor de i: <?=$i?>	<? $i++;?><br>
		<?php endwhile;?>
	</body>
</html>