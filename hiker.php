<?php
	class Hiker {
		public $stamina;
		public $hydration;
		public $skill;

		function getStamina() {
			return $this->stamina;
		}
		function getHydration() {
			return $this->hydration;
		}
		function getSkill() {
			return $this->skill;
		}

		function setStamina($stamina) {
			$this->stamina = $stamina;
		}
		function setHydration($hydration) {
			$this->hydration = $hydration;
		}
		function setSkill($skill) {
			$this->skill = $skill;
		}
	}

	$mysteriousMan = new Hiker;
	$mysteriousMan->setStamina("high");
	$mysteriousMan->setHydration("low");
	$mysteriousMan->setSkill("experienced");

	echo("The hiker has a " . $mysteriousMan->getStamina() . " stamina.");