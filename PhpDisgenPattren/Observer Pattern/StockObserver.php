<?php
// Represents each Observer that is monitoring changes in the subject

class StockObserver implements Observer {
	
	private  $ibmPrice;
	private  $aaplPrice;
	private  $googPrice;
	
	// Static used as a counter
	
	private static  $observerIDTracker = 0;
	
	// Used to track the observers
	
	private  $observerID;
	
	// Will hold reference to the StockGrabber object
	
	private  $stockGrabber;
	
	public function __construct( $stockGrabber){
		
		// Store the reference to the stockGrabber object so
		// I can make calls to its methods
		
		$this->stockGrabber = $stockGrabber;
		
		// Assign an observer ID and increment the static counter
		
		$this->observerID = ++self::$observerIDTracker;
		
		// Message notifies user of new observer
		
		echo "New Observer " . $this->observerID.'///////////////////////////////////////////<br>';
		
		// Add the observer to the Subjects ArrayList
		
		$this->stockGrabber->register($this);
		
	}
	
	// Called to update all observers
	
	public function update( $ibmPrice,  $aaplPrice,  $googPrice) {
		
		$this->ibmPrice = $ibmPrice;
		$this->aaplPrice = $aaplPrice;
		$this->googPrice = $googPrice;
		
		self::printThePrices();
		
	}
	
	public function printThePrices(){
		
		echo $this->observerID . "<br>IBM: " . $this->ibmPrice . "<br>AAPL: " . 
				$this->aaplPrice . "<br>GOOG: " . $this->googPrice . "<br>";
		
	}
	
}