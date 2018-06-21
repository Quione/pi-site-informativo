<?php
	session_start();
	
	if($_POST && isset($_POST['login']) && isset($_POST['senha'])){
		
		include "include/conexao.php";
		
		$login = $_POST['login'];		
		$chave = "@PROJETOFINAL#123";
		$senha = crypt($_POST['senha'],$chave);

		$query = $conn->query("Select * from administrador where login = '{$login}' and senha ='{$senha}' ");
		$count = $query->num_rows;
		$row = $query->fetch_assoc();
		print_r($row);
		
		if ($count > 0)
			{
				$_SESSION['id'] = $row['id_administrador'];
				$_SESSION['nome'] = $row['nome'];
				header('location:painel.php');
			}
		  else
			{
				echo '
				
					<script>
						alert("Login Inválido!")
						window.location="login.php";
					</script>
				';
			}
		
	}else{
		echo "off";
	}

?>