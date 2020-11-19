<?php
class Tyrion extends Lannister {
	public function sleepWith($who) {
		if (get_class($who) == 'Jaime') {
			echo "Not even if I'm drunk !" . PHP_EOL;
		} else if (get_class($who) == 'Sansa') {
			echo "Let's do this." . PHP_EOL;
		} else if (get_class($who) == 'Cersei') {
			echo "Not even if I'm drunk !" . PHP_EOL;
		}
	}
}
?>