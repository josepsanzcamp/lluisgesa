<!DOCTYPE html>
<html>
<head>
<title>Lluis Gesa, 1976-2020</title>
<meta name="description" content="Recull de missatges pel Lluis Gesa, bon amic i company de lluita, mai t'oblidare!!!" />
<meta name="keywords" content="lluis gesa 1976 2020 hlod-wig"/>
<style>
body { font-family:Arial,Helvetica,sans-serif; background-color:#336699; }
.grid { margin:0 auto; }
.grid-item { margin:0 10px 7px 0; }
</style>
</head>
<body>
<div class="grid">
<?php
$urls=file("data.txt",FILE_IGNORE_NEW_LINES);
foreach($urls as $url) {
	if($url=="") continue;
	if(strpos($url,"|")!==false) {
		$temp=explode("|",$url);
		$url=$temp[0];
		$img="images/".$temp[1].".jpg";
	} else {
		$img="images/".basename($url).".jpg";
	}
	if(strpos($url,"://")===false) {
		$url="";
	}
	$temp=imagecreatefromjpeg("../${img}");
	$w=intval(imagesx($temp)/2);
	$h=intval(imagesy($temp)/2);
	imagedestroy($temp);
	echo "<div class=\"grid-item\">";
	if($url!="") echo "<a href=\"${url}\" target=\"_blank\">";
	echo "<img src=\"${img}\" width=\"${w}\" height=\"${h}\"/>";
	if($url!="") echo "</a>";
	echo "</div>\n";
}
?>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script>
$(".grid").masonry({
	itemSelector:".grid-item",
	fitWidth:true,
});
</script>
</body>
</html>
