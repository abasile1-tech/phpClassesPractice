<?php
	class Hiker {
		public $stamina;
		public $hydration;
		public $skill;

		function __construct($stamina,$hydration,$skill) {
			$this->stamina = $stamina;
			$this->hydration = $hydration;
			$this->skill = $skill;
		}

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

	$mysteriousMan = new Hiker("high","high","experienced");

	echo("It is a new day and the hiker has a " . $mysteriousMan->getStamina() . " stamina and a " . $mysteriousMan->getHydration() . " hydration.\n");

	$mysteriousMan->setStamina("medium");
	$mysteriousMan->setHydration("low");

	echo("Hours have past and the hiker has a " . $mysteriousMan->getStamina() . " stamina and a " . $mysteriousMan->getHydration() . " hydration.");