<?php
if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "Ilovemylittleponey") {
	$picture_path = "../img/42.png";
	$picture = base64_encode(file_get_contents($picture_path));
	echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,$picture'></body></html>\n";
} else {
	header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
	header('HTTP/1.0 401 Unathorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
}
?>