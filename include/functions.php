<?php

function uploadImg(){
			// ENVIA IMAGEM
			$target_dir = "img/noticia/"; // MUDA DIRETÓRIO
			$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			$extension = strtolower(pathinfo($_FILES["imagem"]["name"] ,PATHINFO_EXTENSION));
			$newName = md5(uniqid("")).".".$extension;
			
			
			// VERIFICA SE IMAGEM É JPG, PNG OU GIR
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
			}
			if ($uploadOk == 0) {
				$msg = "Error de Upload";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_dir.$newName)) {
					
				} else {
					$msg = "Error de Upload";
				}
			}
			
		return $newName;
		
}
	?>