<?php
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$con = mysqli_connect("localhost", "root", "", "fiado");
$sql = "insert into fiado (nome, valor) values ('$nome', '$valor')";
$sql2 = "select valor from cliente where nome = '$nome'";
$resultadoTotal = mysqli_query($con, $sql2);
$aux = mysqli_fetch_array($resultadoTotal);
$total = $valor + $aux[valor];
$sql3 = "update fiado set valor = $total where nome = $nome";
mysqli_query($con, $sql3);
mysqli_query($con, $sql);

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
		<p>Adicionado <?php echo $valor; ?> em <?php echo $nome; ?></p>
	</section>

</body>
</html>