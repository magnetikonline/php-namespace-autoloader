<?php
namespace Magnetikonline\Fruit;

// Apple fruit implementation

class Apple extends Base\Fruit {

	public function sayWhatIAm() {

		echo("I'm an Apple, which is a type of " . $this->getBaseType() . ".\n");
	}
}
