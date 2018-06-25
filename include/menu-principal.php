<?php
	include "include/conexao.php";
	
	$sql = "SELECT id_categoria,nome FROM categoria";
	$categorias = $conn->query($sql);
	
	$conn->close();

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="#">CATEGORIAS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	
	
	
	<?php
	
	if ($categorias->num_rows > 0) {
		while($row = $categorias->fetch_assoc()) {
			echo '<li class="nav-item">';
			echo '<a class="nav-link" href="noticias.php?categoria='.$row["id_categoria"].'">'.$row["nome"].' <span class="sr-only">(current)</span></a>';
			echo '</li>';
		}
	} else {
		echo "0 results";
	}
	?>	

 
    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="pesquisa.php">
      <input name="p" id="p" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div> </div>
</nav>