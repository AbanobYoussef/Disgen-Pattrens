<?php

// Uses the Subject interface to update all Observers

class StockGrabber implements Subject{
	
	private $observers;
	private  $ibmPrice;
	private  $aaplPrice;
	private  $googPrice;
	
	public function __construct (){
		
		// Creates an ArrayList to hold all observers
		
	}
	
	public function register(Observer $newObserver) {
		
		// Adds a new observer to the ArrayList
		
		$this->observers[]=$newObserver;
		
	}

	public function unregister(Observer $deleteObserver) {
		
		// Get the index of the observer to delete

		// Print out message (Have to increment index to match)
		echo "<br>Observer ". (array_search($deleteObserver, $this->observers)+1) . " deleted<br>";
		

		// Removes observer from the ArrayList
		array_splice($this->observers, array_search($deleteObserver, $this->observers),1);
		
		
		
		
		
		
		
	}

	public function notifyObserver() {
		
		// Cycle through all observers and notifies them of
		// price changes
		
		foreach ($this->observers as $ob) {
		     $ob->update($this->ibmPrice, $this->aaplPrice, $this->googPrice);
		}
	}
	
	// Change prices for all stocks and notifies observers of changes
	
	public function setIBMPrice( $newIBMPrice){
		
		$this->ibmPrice = $newIBMPrice;
		
		self::notifyObserver();
		
	}
	
	public function setAAPLPrice( $newAAPLPrice){
		
		$this->aaplPrice = $newAAPLPrice;
		
		self::notifyObserver();
		
	}

	public function setGOOGPrice( $newGOOGPrice){
	
		$this->googPrice = $newGOOGPrice;
	
		self::notifyObserver();
	
	}
	
}