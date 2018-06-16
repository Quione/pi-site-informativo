<?php
	include "include/conexao.php";
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	if($_POST){
		$nomecategoria = $_POST['nomecategoria'];
		$sql = "INSERT INTO categoria VALUES (null, '{$nomecategoria}')";
		
		if ($conn->query($sql) === TRUE) {
			$msg = "Cadastrado com sucesso";
		} else {
			$msg = "Error: " . $sql . "<br>" . $conn->error;
		}

	}
	
	$conn->close();
	


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <title>Nova Categoria</title>
  </head>
  <body>


<?php include "include/menu-adm.php"; ?>



<div class="container conteudo">

	<form class="form-horizontal" method="post" action="categorias-new.php">
<fieldset>

<!-- Form Name -->
<legend>Nova Categoria</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomecategoria">Nome</label>  
  <div class="col-md-8">
  <input id="nomecategoria" name="nomecategoria" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="primary"></label>
  <div class="col-md-4">
    <button id="primary" name="primary" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>
<?php 
	if(isset($msg)){
		echo '<div class="alert alert-warning" role="alert">';
		echo $msg;
		echo '</div>';
	}

?>
	

</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>