<?php
class Targaryen {
	public function resistsFire() {
		return false;
	}
	public function getBurned() {
		if ($this->resistsFire() == TRUE) {
			return 'emerges naked but unharmed';
		} else {
			return 'burns alive';
		}
	}
}
?>