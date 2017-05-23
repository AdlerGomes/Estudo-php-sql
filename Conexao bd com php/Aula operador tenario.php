<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8"/>
    <title> Estudos </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
     <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="brand" href="#">Adler</a>
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Contatos</a></li>
          <li><a href="#">Sobre</a></li>
        </ul>
      </div>
    </div>
   

    <form class="form-horizontal" action="insere.php" method="POST">
      <div class="control-group">
        <label class="control-label" for="inputEmpresa">Nome da empresa</label>
        <div class="controls">
          <input type="text"  placeholder="Empresa" name="nomeEmpresa"> 
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputDiretor">Nome do diretor</label>
        <div class="controls">
          <input type="text"  placeholder="Diretor" name="nomeDiretor">
        </div>
      </div>
      <div class="control-group">
          <button type="submit" class="btn">Enviar</button>
      </div>
    </form>



    <!-- <form action="insere.php" method="POST">
    
    <h1>Insira os dados a seguir:</h1>
    
        <label>Nome da Empresa:</label><br><input type="text" name="nomeEmpresa"/><br> 
        <label>Nome do Diretor:</label><br><input type="text" name="nomeDiretor"><br>
    

        <input type="submit" value="Enviar"/>

    </form> -->
    
    
	



    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>