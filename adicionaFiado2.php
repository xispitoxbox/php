<?php

$nome = $_POST['nome'];
$con = mysqli_connect("localhost", "root", "", "fiado");
$sql = "select nome from cliente where nome like '%$nome%'";
$result = mysqli_query($con, $sql);
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
		<form method="POST" action="adicionaFiado3.php">

			<select name="cliente">
				
				<?php 
					while ($aux = mysqli_fetch_array($result)) {
					echo "<option value=$aux[nome]>$aux[nome]</option>";
					}
				?>
			</select>
			<br>
			<input type="submit" name="enviar">
			
		</form>
	</section>

</body>
</html>