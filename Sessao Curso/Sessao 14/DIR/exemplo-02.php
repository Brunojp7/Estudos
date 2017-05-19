<?php 

$images = scandir("images");

$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".", ".."))){

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s, ", filemtime($filename));
		$info["ulr"] = "http://localhost/Curso%20PhP%207/Sessão%2014/DIR/" . str_replace("\\", "/", $filename);


		array_push($data, $info);

	}
}

echo json_encode($data);
?>