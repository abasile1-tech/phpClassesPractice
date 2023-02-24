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

	class UltraHiker extends Hiker {
		function beUltra() {
			return "I am ultra.";
		}
	}

	class UltraMegaHiker extends UltraHiker {
		/**
		 * overriding beUltra
		 */
		function beUltra()
		{
			return "I am ultramega. I am the best of the best.";
		}
	}

	$mysteriousMan = new Hiker("high","high","experienced");

	echo("It is a new day and the hiker has a " . $mysteriousMan->getStamina() . " stamina and a " . $mysteriousMan->getHydration() . " hydration.\n");

	$mysteriousMan->setStamina("medium");
	$mysteriousMan->setHydration("low");

	echo("Hours have past and the hiker has a " . $mysteriousMan->getStamina() . " stamina and a " . $mysteriousMan->getHydration() . " hydration.\n");

	$ultraMan = new UltraHiker("ultra high","ultra high","ultra experienced");

	echo("The new hiker is " . $ultraMan->getSkill() . "." . " He says '" . $ultraMan->beUltra() . "'\n");

	$ultraMegaMan = new UltraMegaHiker("ultramega high","ultramega high", "ultramega experienced");

	echo("An even newer hiker has appeared and says '" . $ultraMegaMan->beUltra() . "'\n");