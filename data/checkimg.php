<?php
$files=glob("*.png");
foreach($files as $file) {
	$img=imagecreatefrompng($file);
	$width=imagesx($img);
	imagedestroy($img);
	if($width!=600) echo $file."\n";
}
?>