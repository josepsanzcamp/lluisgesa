<?php
if(!isset($argv[1])) die();
$file=$argv[1];
$img=imagecreatefrompng($file);
$width=imagesx($img);
$height=imagesy($img);
if($width==600) {
	imagedestroy($img);
	die();
}
$width2=600;
$height2=$width2*$height/$width;
$im2=imagecreatetruecolor($width2,$height2);
$black=imagecolorallocate($im2,0,0,0);
imagecopyresized($im2,$img,0,0,0,0,$width2,$height2,$width,$height);
imagepng($im2,$file);
imagedestroy($img);
imagedestroy($im2);
?>