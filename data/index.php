<!DOCTYPE html>
<html>
<head>
<title>Lluis Gesa, 1976-2020</title>
<style>
body { font-family:Arial,Helvetica,sans-serif; background-color:#336699; }
.grid-item { margin:0 10px 7px 0; }
</style>
</head>
<body>
<div class="grid">
<?php
$urls=file("data.txt",FILE_IGNORE_NEW_LINES);
foreach($urls as $url) {
	$img="images/".basename($url).".png";
	echo "<div class=\"grid-item\"><a href=\"${url}\" target=\"_blank\"><img src=\"${img}\"/></a></div>\n";
}
?>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script>
var $grid=$('.grid').imagesLoaded(function() {
	$grid.masonry({
		itemSelector:'.grid-item',
	});
});
</script>
</body>
</html>
