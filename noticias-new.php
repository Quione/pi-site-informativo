<?php
	include "include/conexao.php";
	include "include/functions.php";
	
	
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	
	if($_POST){
		
		$titulo = $_POST['titulo'];
		$conteudo = $_POST['conteudo'];
		$categoria = $_POST['categoria'];
		
		
		$foto = uploadImg();
		
		$sql = "INSERT INTO noticia VALUES (null, '{$titulo}', '{$conteudo}', now(), '{$foto}', '{$categoria}')";
		
		if ($conn->query($sql) === TRUE) {
			$msg = "Cadastrado com sucesso";
		} else {
			$msg = "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	
	$sql = "SELECT id_categoria,nome FROM categoria";
	$result = $conn->query($sql);
	
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

<form class="form-horizontal" action="noticias-new.php" method="post"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Notícias</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titulo">Título</label>  
  <div class="col-md-8">
  <input id="titulo" name="titulo" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titulo">Imagem</label>  
  <div class="col-md-8">
  <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="categoria">Categoria</label>
  <div class="col-md-8">
    <select id="categoria" name="categoria" class="form-control">
	
	<?php
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo '<option value=' . $row["id_categoria"].'>' . $row["nome"].'</option>';
		}
	} 
	?>	
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Text Area</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="conteudo" name="conteudo">default text</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
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