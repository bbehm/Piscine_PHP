<?php
class UnholyFactory {
	public function __construct() {
		static $absorbed = [];
		$this->absorbed = $absorbed;
	}
	
	public function absorb($task) {
		if (get_parent_class($task) != "Fighter") {
			echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
		} else if (!in_array($task, $this->absorbed)) {
			$this->absorbed[] = $task;
			$str_task = strtolower(get_parent_class($task));
			echo "(Factory absorbed a " . $str_task . " of type " . $task->type . ")" . PHP_EOL;
		} else {
			$str_task = strtolower(get_parent_class($task));
			echo "(Factory already absorbed a " . $str_task . " of type " . $task->type . ")" . PHP_EOL;
		}
	}

	public function fabricate($type) {
		$name = NULL;
		foreach ($this->absorbed as $key => $value) {
			if ($type == $value->type) {
				$name = $value->name;
				$str_task = strtolower(get_parent_class($value));
				echo "(Factory fabricates a " . $str_task . " of type " . $value->type . ")" . PHP_EOL;
				return $value;
			}
		}
		echo "(Factory hasn't absorbed any fighter of type " . $type . ")" . PHP_EOL;
		return $name;
	}
}
?>