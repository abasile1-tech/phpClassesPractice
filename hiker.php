<?php
	class Hiker {
		private $stamina;
		private $hydration;
		protected $skill;

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

	/**
	 * Always ultramega experienced
	 */
	class UltraMegaHiker extends UltraHiker {
		/**
		 * overriding the constructor
		 */
		function __construct($stamina,$hydration) {
			$this->skill = "ultramega experienced";
		}
		/**
		 * overriding beUltra
		 */
		function beUltra()
		{
			return "I am ultramega. I am the best of the best.";
		}
		/**
		 * overriding setSkill to avoid changing for the best of the best!
		 */
		function setSkill($skill)
		{
			echo("\nMy skill is ultramega and cannot be changed!\n");
		}
		static function saySomething($input) {
			echo("Here is what you put: " . $input);
		}
	}

	$mysteriousMan = new Hiker("high","high","experienced");

	echo("It is a new day and the hiker has a " . $mysteriousMan->getStamina() . " stamina and a " . $mysteriousMan->getHydration() . " hydration.\n");

	$mysteriousMan->setStamina("medium");
	$mysteriousMan->setHydration("low");

	echo("Hours have past and the hiker has a " . $mysteriousMan->getStamina() . " stamina and a " . $mysteriousMan->getHydration() . " hydration.\n");

	$ultraMan = new UltraHiker("ultra high","ultra high","ultra experienced");

	echo("The new hiker is " . $ultraMan->getSkill() . "." . " He says '" . $ultraMan->beUltra() . "'\n");

	$ultraMegaMan = new UltraMegaHiker("ultramega high","ultramega high");

	echo("An even newer hiker who is " . $ultraMegaMan->getSkill() . " has appeared and says '" . $ultraMegaMan->beUltra() . "'\n");

	// attempting to set the skill of ultraMegaMan to "low" just won't work ha ha
	// He is ultraMegaMan and his skill is always ultramega experienced!
	$ultraMegaMan->setSkill("barely experienced");
	echo("ultraMegaMan is still " . $ultraMegaMan->getSkill() . "\n");
	// trying out a static method without creating an instance of the class
	UltraMegaHiker::saySomething("funny funny funny stuff");
	
