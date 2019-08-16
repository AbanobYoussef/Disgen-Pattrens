<?php
// Blueprint for classes that will have decorators
interface Pizza {
	
	public function getDescription();
	
	public function getCost();
	
}

// Implements the Pizza interface with only the required
// methods from the interface

// Every Pizza made will start as a PlainPizza

class PlainPizza implements Pizza {
 
	public function getDescription() {
		
		return "Thin dough"."<br>";
	
	}

	public function getCost() {

		echo "Cost of Dough: " . 4.00."<br>";
		
		return 4.00;
	
	}
 
}




// Has a "Has a" relationship with Pizza. This is an
// Aggregation Relationship

abstract class ToppingDecorator implements Pizza {

	protected $tempPizza;
	
	// Assigns the type instance to this attribute
	// of a Pizza
	
	// All decorators can dynamically customize the Pizza
	// instance PlainPizza because of this
	
	public function __construct(Pizza $newPizza){
		
		$this->tempPizza = $newPizza;
		
	}
	
	public function getDescription() {
		
		return $this->tempPizza->getDescription();
		
	}

	public function getCost() {
		
		return  $this->tempPizza->getCost();
		
	}
	
}





class Mozzarella extends ToppingDecorator {

	public function __construct(Pizza $newPizza) {
		
		parent::__construct($newPizza);
		
		echo "Adding Dough"."<br>";
		
		echo"Adding Moz"."<br>";
	}
	
	// Returns the result of calling getDescription() for
	// PlainPizza and adds " mozzarella" to it
	
	public function getDescription(){
		
		return $this->tempPizza->getDescription() .", mozzarella"."<br>";
		
	}
	
	public function getCost(){
		
		echo "Cost of Moz: " . .50."<br>";
		
		return $this->tempPizza->getCost() . .50."<br>";
		
	}
	
}




class TomatoSauce extends ToppingDecorator {

	public function __construct(Pizza $newPizza) {
		
		parent::__construct($newPizza);
		
		echo "Adding Sauce"."<br>";
	}
	
	// Returns the result of calling getDescription() for
	// PlainPizza, Mozzarella and then TomatoSauce
	
	public function getDescription(){
		
		return $this->tempPizza->getDescription() . ", tomato sauce"."<br>";
		
	}
	
	public function getCost(){
		
		echo "Cost of Sauce: " . .35."<br>";
		
		return $this->tempPizza->getCost() . .35."<br>";
		
	}
	
}


		
		$basicPizza = new TomatoSauce(new Mozzarella(new PlainPizza()));
		
		echo "Ingredients: " . $basicPizza->getDescription()."<br>";
		
		echo "Price: " . $basicPizza->getCost()."<br>";



