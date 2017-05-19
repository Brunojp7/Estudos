<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 430, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 380, 350, "Bruno Jacinto Parpagnoli", $titleColor);
imagestring($image, 3, 400, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, "certificado-" . date("Y-m-d"). ".jpg", 10);
imagedestroy($image);


 ?>