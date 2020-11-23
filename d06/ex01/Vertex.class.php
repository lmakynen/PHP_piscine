<?php
require_once 'Color.class.php';

class Vertex
{
	private $_x;
	private $_y;
	private $_z;
	private $_color;
	private $_w = 1.0;
	static public $verbose = FALSE;

	public function __construct($array) {
		if (isset($array['x']) && isset($array['y']) && isset($array['z']))
		{
			$this->_x = $array['x'];
			$this->_y = $array['y'];
			$this->_z = $array['z'];
			if (isset($array['w']))
				$this->_w = $array['w'];
			if (isset($array['color']))
				$this->_color = $array['color'];
			else
				$this->_color = new Color (array('red' => 255, 'green' => 255, 'blue' => 255));
		}
		if (self::$verbose)
			echo $this." constructed".PHP_EOL;
	}
	public function __destruct() {
		if (self::$verbose)
			echo $this." destructed".PHP_EOL;
	}
	public function __toString() {
		if (self::$verbose)
			return (sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, $this->_color )", $this->_x, $this->_y, $this->_z, $this->_w));
		else
			return (sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
	}
	static public function doc() {
		return (file_get_contents("Vertex.doc.txt"));
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
	public function getColor() {
		return ($this->_color);
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
	public function setColor($color) {
		$this->_color = $color;
	}
}
?>