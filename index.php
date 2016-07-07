<?php
$media_dir = './media';
$images = scandir($media_dir);

$images = array_filter($images, image_filter);
$images = array_reverse($images);

function image_filter($path){
	global $media_dir;
	return !is_dir($media_dir . '/' . $path);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>valo phone!</title>
	<link href="/style.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="/valo_phone_icon.png">
</head>
<body>
	<div id="header">
		<h1 id="title">Valo on a phone</h1>
		<div id="desc">
			text pictures of valo on a phone to
		</div>
		<a id="number" href="tel:+13123138256">
			<span>(312)-313-</span><span id="as-letters">VALO</span>
		</a>
	</div>
	<div id="posts">
<?php
foreach($images as $image){
	echo "<div class=\"post\"><img src=\"$media_dir/$image\"></div>";
}
?>
	</div>
</body>
</html>
