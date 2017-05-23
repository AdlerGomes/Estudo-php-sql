<?php
	

	// $conexao = mysql_connect('localhost', 'root', 'adler,' 'estudo');
	// $select_db = mysql_select_db("estudo");
	// mysqli_set_charset($conexao, 'utf8');	

	// $nomeEmpresa = $_POST["nomeEmpresa"];
	// $nomeDiretor = $_POST["nomeDiretor"];



	// $string_sql = "INSERT INTO clientes (nomeEmpresa, nomeDiretor) VALUES ('$nomeEmpresa', '$nomeDiretor')";


	

	// if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
 //        echo "<p>Cadastro feito com sucesso</p>";
 //        echo '<a href="Aula operador tenario.php">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
 //    } else {
 //        echo "Erro, não possível inserir no banco de dados";
 //    }

	// mysql_close($conexao);


$nomeEmpresa = $_POST['nomeEmpresa'];
$nomeDiretor = $_POST['nomeDiretor'];
$strcon = mysqli_connect('localhost','root','adler','estudo') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO clientes VALUES ";
$sql .= "('$nomeEmpresa', '$nomeDiretor')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";


	


?>