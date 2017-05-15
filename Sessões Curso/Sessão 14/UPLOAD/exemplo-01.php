<form method="POST" enctype="multipart/form-data">
	
<input type="file" name="fileUpload">

<button type="submit">Send</button>

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$file = $_FILES["fileUpload"];

	if ($file["error"]) {

		throw new Exception("Error: " . $file["error"]);

	}//Fim verificação de erros no arquivo.

	$dirUploads = "uploads";

	if (!is_dir($dirUploads)) {

		mkdir($dirUploads);

	}//Fim verificação de existência de diretório.

	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
		
		echo "Upload realizado com sucesso!";

	}//Fim movimentação do diretório final do arquivo.

	else {

		throw new Exception("Não foi possível fazer o upload.");
		
	}
}//Fim verificação do método === POST

 ?>