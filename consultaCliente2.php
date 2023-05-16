<?php

$nome = $_POST['nome'];

$con = mysqli_connect("localhost", "root", "", "fiado");
$sql = "select * from cliente where nome like '%$nome%'";
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

			<table>
				<tr>
					<td>Nome</td>
					<td>Total</td>
				</tr>
				<tr>
					<?php 
					while ($aux = mysqli_fetch_array($result)) {
						echo "
						<tr>
							<td>$aux[nome]</td>
							<td>$aux[valor]</td>
								
						</tr>";
					}
					?>
				</tr>
			</table>
	</section>

</body>
</html>