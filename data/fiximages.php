<?php
if(!isset($argv[1])) die();
$file=$argv[1];
$img=imagecreatefromstring(file_get_contents($file));
$width=imagesx($img);
$height=imagesy($img);
$width2=600;
$height2=$width2*$height/$width;
$im2=imagecreatetruecolor($width2,$height2);
$black=imagecolorallocate($im2,0,0,0);
imagecopyresized($im2,$img,0,0,0,0,$width2,$height2,$width,$height);
$file=str_replace(".png",".jpg",$file);
imagejpeg($im2,$file);
imagedestroy($img);
imagedestroy($im2);
?>