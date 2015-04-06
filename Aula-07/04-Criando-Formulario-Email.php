<?php if (!$_REQUEST['submit']):?>	
<Doctype html>
<html>
	<head>
		<title>04 Criando formulario de email</title>
		<meta charset="utf8">
	</head>
	<body>
	<form action="04-Criando-Formulario-Email.php" method="post">
		<fieldset style="width:500px; margin:0 auto">
		<legnd style="font-size:24px">Formulario de exemplo</legnd><br>
		<label>Nome: <input type="text" name="nome" size="30"/></label><p>
		<label>Email: <input type="text" name="email" size="30"/></label><p>
		<label>Assunto: <input type="text" name="assunto" size="28"/></label><p>
		<label>Mensagem:<br><textarea rows="10" cols="31" name="mensagem"></textarea></label><p>
		<input type="submit" name="submit" value="Enviar">
		</fieldset>
	</form>
	<?php else:?>
	<?php 
	$mensagem = "Dados envidos via email\n\n";
	$mensagem.= "Nome: ".$_REQUEST["nome"]."\n";
	$mensagem.= "Email: ".$_REQUEST["email"]."\n";
	$mensagem.= "Assunto: ".$_REQUEST["assunto"]."\n";
	$mensagem.= "Mensagem: ".$_REQUEST["mensagem"]."\n";
	
	$to = "contato@suportems.com.br";
	$assunto = "Dados enviado por email";
	$header = "header: from: contato@suportems.com.br";
	
	mail($to,$assunto,$mensagem,$header);
	?>
	<a href="04-Criando-Formulario-Email.php>Voltar</a>
	<?php endif; ?>
	</body>
</html>