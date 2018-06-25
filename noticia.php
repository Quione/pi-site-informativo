<?php
	include "include/conexao.php";

	$id = $_GET['id'];
	
	$sql = "SELECT id_noticia,titulo,conteudo, data_postagem FROM noticia where id_noticia={$id}";
	$noticia = $conn->query($sql);
	
	$sql = "SELECT id_noticia,titulo,conteudo FROM noticia";
	$mais_lidas = $conn->query($sql);
	
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
  <?php include "include/nav-header.php"; ?>
	<div class="container topo">
		<div class="row">
		<div class="col-md-5">
		<img src="img/logo.jpg" width="70"/>
		</div>
		<div class="col-md-7">
	<?php include "include/form-login-index.php"; ?>
		</div>

		</div>
	</div>
<?php include "include/menu-principal.php"; ?>



<div class="container conteudo">
<div class="row">
<div class="col-md-8">


	<?php

	if($noticia){
		while ($row = $noticia->fetch_assoc()) {
			echo '<h1>'.$row["titulo"].'</h1>';
			echo '<p><span>21/01/2018</span></p>';
			
			?>
			
				<p>
					<i class="fab fa-facebook-square fa-2x"></i> <i class="fab fa-instagram fa-2x"></i> <i class="fab fa-google-plus-square fa-2x"></i> <i class="fab fa-twitter-square fa-2x"></i>
				</p>
				 <img src="img/noticia2.jpg" alt="Second slide" width="100%">
	
			
			<?php
			
			echo '<p>'.$row["conteudo"].'</p>';
			
			
		}
	}
	
	?>	


	
	</div>
<div class="col-md-4">
<h3>MAIS LIDAS</H3>


	<?php
	
	if ($mais_lidas->num_rows > 0) {
		while($row = $mais_lidas->fetch_assoc()) {
			echo '<div class="mais-lidas">';
			echo '<h5><a href="noticia.php?id='.$row["id_noticia"].'">'.$row["titulo"].'</a></h5>';
			echo '<p>'.mb_substr( $row["conteudo"], 0, 70, 'UTF-8' ).'</p>';
			echo '</div>';
		}
	} 
	?>	


</div>
</div>
</div>

<footer>
	<div class="container">
	
	</div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>