#!/usr/bin/php
<?php
	function ft_is_sort($tab) {
		$original = $tab;
		sort($tab);
		return $original === $tab;
	}
?>