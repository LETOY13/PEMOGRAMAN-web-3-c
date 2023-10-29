<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>latihan3a</title>
	<style>
		.higlight {
			color: #1A0547;
			font-weight: bolder;
			font-style: italic;
			text :28px
			border : 1px solid;
		}
	</style>
</head>
<body>

</body>
</html>

<?php

function ganti_Style($tulisan, $kelas) {
	return'<span class ="'. $kelas .'">'.$tulisan . '</span>';
}

	$tulisan = "Hello World Here I Come!";
	$kelas = "hoglight";

	$styledText = ganti_Style($tulisan, $kelas);
	echo $styledText;

?>