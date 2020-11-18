<?php
require_once 'Color.class.php';

class Vertex {
	public static $verbose = FALSE;
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;

	// construct is used to set up a class when it is initialized
	public function __construct(array $info) {
		$this->_x = $info['x'];
		$this->_y = $info['y'];
		$this->_z = $info['z'];
		if (isset($info['color']) && !empty($info['color'])) {
			$this->_color = $info['color'];
		} else {
			$this->_color = new Color( array('red' => 0xFF, 'green' => 0xFF, 'blue' => 0xFF));
		}
		if (isset($info['w'])) {
			$this->_w = $info['w'];
		} else {
			$this->_w = 1.0;
		}
		if (self::$verbose) {
			echo $this . ' constructed' . PHP_EOL;
		}
	}
	
	public function __toString() {
		$res = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f",
		$this->_x, $this->_y, $this->_z, $this->_w);
		if (self::$verbose) {
			$res = $res . ", " . $this->_color->__toString();
		}
		$res = $res . " )";
		return $res;
	}
	/*
	** destruct is called when there are no more references to the object you created.
	** PHP's garbage collection will clean up the object by first calling its destructor and then removing it from memory. 
	*/
	public function __destruct() {
		if (self::$verbose) {
			echo $this . ' destructed' . PHP_EOL . ".";
		}
	}
	// get coordinates
	public function getColor() {
		return ($this->_color);
	}
	public function getX() {
		return ($this->_x);
	}
	public function getY() {
		return ($this->_y);
	}
	public function getZ() {
		return ($this->_z);
	}
	public function getW() {
		return ($this->_w);
	}
	// set coordinates
	public function setColor($color) {
		$this->_color = $color;
	}
	public function setX($x) {
		$this->_x = $x;
	}
	public function setY($y) {
		$this->_y = $y;
	}
	public function setZ($z) {
		$this->_z = $z;
	}
	public function setW($w) {
		$this->_w = $w;
	}
	// get class documentation
	public static function doc() {
        echo file_get_contents("Vertex.doc.txt");
	}
}

?>