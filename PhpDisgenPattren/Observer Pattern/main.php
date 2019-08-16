<?php
include "Subject.php";
include "Observer.php";
include "StockGrabber.php";
include "StockObserver.php";


		// Create the Subject object
		// It will handle updating all observers 
		// as well as deleting and adding them
		
		 $stockGrabber = new StockGrabber();
		
		// Create an Observer that will be sent updates from Subject
		
		 $observer1 = new StockObserver($stockGrabber);
		
		$stockGrabber->setIBMPrice(197.00);
		$stockGrabber->setAAPLPrice(677.60);
		$stockGrabber->setGOOGPrice(676.40);
		
		$observer2 = new StockObserver($stockGrabber);
		
		$stockGrabber->setIBMPrice(197.00);
		$stockGrabber->setAAPLPrice(677.60);
		$stockGrabber->setGOOGPrice(676.40);
		
		// Delete one of the observers
		$stockGrabber->unregister($observer2);
		// stockGrabber.unregister(observer2);
		
		$stockGrabber->setIBMPrice(197.00);
		$stockGrabber->setAAPLPrice(677.60);
		$stockGrabber->setGOOGPrice(676.40);
		