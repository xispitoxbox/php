<?php

$nome = $_POST['nome'];

$conn = mysqli_connect("localhost", "root", "", "fiado");
$sql = "insert into cliente (nome) values ('$nome');";
mysqli_query($conn, $sql);
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
		<p><?php echo $nome; ?> adicionado com sucesso.</p>
		<p><a href="index.php">Voltar a pagina inicial</a></p>
	</section>

</body>
</html>