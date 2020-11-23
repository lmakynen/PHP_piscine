<?php
class Targaryen
{
	public function getBurned() {
		if (method_exists($this, 'resistsFire'))
			if ($this->resistsFire() == TRUE)
				return ("emerges naked but unharmed");
		return ("burns alive");
	}
}
?>