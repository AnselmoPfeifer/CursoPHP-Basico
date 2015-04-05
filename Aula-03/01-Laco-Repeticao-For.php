<!-- Usando o for normal -->
<ol>
	<?php
		for($i=0;$i<10;$i++)
			echo '<li><a href="#'.$i.'">Home</a></li>';
	?>
</ol>

<!-- Versao contraida do for -->
<ol>
<?php for($i=0;$i<10;$i++):?>
		<li><a href="#<?=$i; ?>">Home</</a></li>	
<?php endfor; ?>
</ol>