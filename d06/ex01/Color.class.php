<?php
class Color
{
	public $red;
	public $green;
	public $blue;
	static public $verbose = FALSE;

	public function __construct($array) {
		if (isset($array["rgb"]))
		{
			$rgb = intval($array["rgb"]);
			$this->red = ($rgb >> 16) & 0xFF;
            $this->green = ($rgb >> 8) & 0xFF;
            $this->blue = $rgb & 0xFF;
		}
		else if (isset($array["red"]) && isset($array["green"]) && isset($array["blue"]))
		{
			$this->red = intval($array["red"]);
			$this->green = intval($array["green"]);
			$this->blue = intval($array["blue"]);
		}
		if (self::$verbose)
			echo $this." constructed.".PHP_EOL;
	}
	public function __destruct() {
		if (self::$verbose)
			echo $this." destructed.".PHP_EOL;
	}
	public function __toString() {
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
	}
	static public function doc() {
		return (file_get_contents("Color.doc.txt"));
	}
	public function add(Color $rhs) {
		return new Color(array(
		'red' => $this->red + $rhs->red,
		'green' => $this->green + $rhs->green,
		'blue' => $this->blue + $rhs->blue
		));
	}
	public function sub(Color $rhs) {
		return new Color(array(
		'red' => $this->red - $rhs->red,
		'green' => $this->green - $rhs->green,
		'blue' => $this->blue - $rhs->blue
		));
	}
	public function mult($f) {
		return new Color(array(
		'red' => $this->red * $f,
		'green' => $this->green * $f,
		'blue' => $this->blue * $f
		));
	}
}
?>