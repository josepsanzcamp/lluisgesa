<?php
$files=array_merge(glob("*.jpg"),glob("*.png"));
foreach($files as $file) {
	$img=imagecreatefromstring(file_get_contents($file));
	$width=imagesx($img);
	imagedestroy($img);
	if($width!=600) echo $file."\n";
}
?>