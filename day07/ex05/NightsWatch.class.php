<?php
class NightsWatch {
	private $_team = [];

	public function recruit($member) {
		$this->_team[] = $member;
	}

	public function fight() {
		foreach ($this->_team as $recruit) {
			if (method_exists($recruit, 'fight')) {
				$recruit->fight();
			}
		}
	}
}

?>