<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title></title>
</head>
<body>
<?php

	$nomeEmpresa = $_POST["nomeEmpresa"];
	$nomeDiretor = $_POST["nomeDiretor"];
	$erro = 0;

	

	if ($erro==0) {
		echo "ta tudo certo";
		include 'insere.inc';
	}

?>
</body>
</html>

