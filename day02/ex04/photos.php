#!/usr/bin/php
<?php

function fetch_images($html, $url) {
	preg_match_all('/<img[^>]*>/', $html, $matches);
	$images = [];
	foreach ($matches[0] as $elem) {
		preg_match('/src="([^"]+)"/', $elem, $temp );
		if (count($temp) != 0) {
			if (strpos($temp[1], 'http') === false) {
				$img_url = $url."/".$temp[1];
				array_push($images, $img_url);
			} else {
				array_push($images, $temp[1]);
			}
		}
	}
	return ($images);
}

function create_directory($url) {
	$dir_name = preg_replace("/^.*?:\/\//", '', $url);
	if (file_exists($dir_name) && is_dir($dir_name)) {
		return $dir_name;
	}
	mkdir($dir_name, 0755, true);
	return ($dir_name);
}

function download_images($images, $directory) {
	foreach ($images as $imageUrl) {
		$filename = basename($imageUrl);
		$filepath = "./".$directory.$filename;
		file_put_contents($filepath, file_get_contents($imageUrl));
	}
}

if ($argc == 2) {
	$url = $argv[1];
	$html = file_get_contents($argv[1]);
	if (!empty($html)) {
		$images = fetch_images($html, $url);
		$directory = create_directory($url);
		download_images($images, $directory);
	}
} else {
	echo "Wrong amount of arguments\n";
}

?>