<?php
	include "include/conexao.php";
	
	$sql = "SELECT id_categoria,nome FROM noticia";
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


    <title>Hello, world!</title>
  </head>
  <body>


<?php include "include/menu-adm.php"; ?>



<div class="container conteudo">


<div class="card">

  <div class="card-header">
  <div class="row">
  <div class="col-md-8">
    <h3>NOTÍCIAS</h3>
	</div>
	<div class="col-md-4 button-item">
	<a href="" class="btn btn-primary"> Novo</a>
	</div>
	</div>
  </div>
  <div class="card-body">
	<div class="row">
		  <div class="col-md-8 ">
			<h5 class="card-title">Título Notícia 1</h5>
			<p class="card-text">Resumo da notícia</p>
			
		  </div>
		  <div class="col-md-4 button-item">
			<a href="" class="btn btn-warning"> Atualizar</a>
			<a href="" class="btn btn-danger"> Excluir</a>
		  </div>
	  </div> 
   </div>
   
   <hr />
   
   
    <div class="card-body">
	<div class="row">
		  <div class="col-md-8">
			<h5 class="card-title">Título Notícia 2</h5>
			<p class="card-text">Resumo da notícia</p>
			
		  </div>
		  <div class="col-md-4 button-item">
			<a href="" class="btn btn-warning"> Atualizar</a>
			<a href="" class="btn btn-danger"> Excluir</a>
		  </div>
	  </div> 
   </div>
</div>

</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>