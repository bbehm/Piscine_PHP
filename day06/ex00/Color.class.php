<?php

class Color {
	public static $verbose = FALSE;
	public $blue;
	public $green;
	public $red;

	public function __toString() {
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
	}

	public function __construct(array $rgb) {
		if (!isset($rgb['rgb'])) {
			$this->blue = (int)$rgb['blue'];
			$this->green = (int)$rgb['green'];
			$this->red = (int)$rgb['red'];
		} else {
			$this->blue = (int)$rgb['rgb'] & 255;
			$this->green = (int)$rgb['rgb'] >> 8 & 0xFF;
			$this->red = (int)$rgb['rgb'] >> 16 & 0xFF;
		}
		if (self::$verbose) {
			echo $this . ' constructed.' . PHP_EOL;
		}
	}

	public function __destruct() {
		if (self::$verbose) {
			echo $this . ' destructed.' . PHP_EOL;
		}
	}
	
	public function add($rhs) {
		return (new Color(array(
			'red' => $this->red + $rhs->red,
			'green' => $this->green + $rhs->green,
			'blue' => $this->blue + $rhs->blue)));
	}

	public function sub($rhs) {
		return (new Color(array(
			'red' => $this->red - $rhs->red,
			'green' => $this->green - $rhs->green,
			'blue' => $this->blue - $rhs->blue)));
	}

	public function mult($f) {
		return (new Color(array(
			'red' => $this->red * $f,
			'green' => $this->green * $f,
			'blue' => $this->blue * $f)));
	}

	public static function doc() {
        echo file_get_contents("Color.doc.txt");
	}
}
?>