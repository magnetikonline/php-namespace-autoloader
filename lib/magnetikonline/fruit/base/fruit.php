<?php
namespace Magnetikonline\Fruit\Base;

// Our fruit abstract type

abstract class Fruit {

	private $typeIs = 'Fruit';


	abstract public function sayWhatIAm();

	protected function getBaseType() {

		return $this->typeIs;
	}
}
