<?php

	$conn = mysqli_connect('localhost','root','');
	$banco = mysqli_select_db($conn,'noticias');
	mysqli_set_charset($conn,'utf8');

	/*
	$sql = mysqli_query($conexao,"select * from administrador") or die("Erro");
	while($dados=mysqli_fetch_assoc($sql))
	{
		echo $dados['nome'].'<br>';
	}*/

	?>