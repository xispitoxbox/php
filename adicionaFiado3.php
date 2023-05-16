<?php

$nome = $_POST['cliente'];

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<section>
		<form action="adicionaFiado4.php" method="POST">
		<input type="hidden" name="nome" value="<?php echo $nome; ?>">
		<p>Valor: <input type="text" name="valor"></p>
		<br>
		<input type="submit" name="enviar">
		</form>
	</section>

</body>
</html>