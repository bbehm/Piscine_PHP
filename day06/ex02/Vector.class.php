<?php
require_once 'Vertex.class.php';

class Vector {
	public static $verbose = FALSE;
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;

	public function __construct(array $vector) {
		if (isset($vector['dest']))
		{
			if (!(isset($vector['orig']))) {
				$orig = new Vertex ( array( 'x' => 0, 'y' => 0, 'z' => 0, 'w' => 1.0 ));
			} else {
				$orig = new Vertex (array( 'x' => $vector['orig']->getX(), 'y' => $vector['orig']->getY(), 'z' => $vector['orig']->getZ() ));
			}
			$this->_x = $vector['dest']->getX() - $orig->getX();
			$this->_y = $vector['dest']->getY() - $orig->getY();
			$this->_z = $vector['dest']->getZ() - $orig->getZ();
		}
		if (self::$verbose) {
			echo $this . ' constructed' . PHP_EOL;
		}
	}

	public function __destruct() {
		if (self::$verbose)
			echo $this . ' destructed' . PHP_EOL;
	}


	public function __toString()
    {
		return sprintf("Vector( x:%4.2f, y:%4.2f, z:%4.2f, w:%4.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
	}

	public function magnitude() {
		$magnitude = (float)sqrt((pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2)));
		if ($magnitude == 1) {
			return ("norm");
		} else {
			return ($magnitude);
		}
	}

	public function normalize() {
		$mag = $this->magnitude();
		if ($mag != 1) {
			$result = (new Vector(array ('dest' => new Vertex (array('x' => $this->_x / $mag, 'y' => $this->_y / $mag, 'z' => $this->_z / $mag )))));
			return ($result);
		} else {
			return (clone($this));
		}
	}

	public function add(Vector $rhs) {
		$result = new Vector (array('dest' => new Vertex(array( 'x' => $this->getX() + $rhs->getX(), 'y' => $this->getY() + $rhs->getY(), 'z' => $this->getZ() + $rhs->getZ() ))));
		return ($result);
	}
	public function sub(Vector $rhs) {
		$result = new Vector (array('dest' => new Vertex(array( 'x' => $this->getX() - $rhs->getX(), 'y' => $this->getY() - $rhs->getY(), 'z' => $this->getZ() - $rhs->getZ() ))));
		return ($result);
	}
	public function opposite() {
		$result = new Vector (array('dest' => new Vertex(array( 'x' => $this->getX() * -1, 'y' => $this->getY() * -1, 'z' => $this->getZ() * -1 ))));
		return ($result);
	}
	public function dotProduct(Vector $rhs) {
		return ((float)($this->getX() * $rhs->getX() + $this->getY() * $rhs->getY() + $this->getZ() * $rhs->getZ()));
	}
	public function scalarProduct($k) {
		$result = new Vector (array('dest' => new Vertex(array( 'x' => $this->getX() * $k, 'y' => $this->getY() * $k, 'z' => $this->getZ() * $k ))));
		return ($result);
	}

	public function cos(Vector $rhs) {
		$mag_a = $this->magnitude();
		$mag_b = $rhs->magnitude();
		$dot = $this->dotProduct($rhs);
		$angle = $mag_a * $mag_b;
		$cos = (float)($dot / $angle);
		return ($cos);
	}
	// get coordinates
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
	public function crossProduct(Vector $v)
	{
		$x = $this->_y * $v->getZ() - $this->_z * $v->getY();
		$y = $this->_x * $v->getZ() - $this->_z * $v->getX();
		$y = -$y;
		$z = $this->_x * $v->getY() - $this->_y * $v->getX();
		return new Vector(array('dest' => new Vertex( array('x' => $x, 'y' => $y, 'z' => $z))));
	}
	// print documentation
	public static function doc() {
        echo file_get_contents("Color.doc.txt");
	}
}
?>