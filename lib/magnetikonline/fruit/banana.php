<?php
namespace Magnetikonline\Fruit;

// Banana fruit implementation

class Banana extends Base\Fruit {

	public function sayWhatIAm() {

		echo("I'm a Banana, which is a type of " . $this->getBaseType() . ".\n");
	}
}
