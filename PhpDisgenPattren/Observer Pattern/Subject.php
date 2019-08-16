<?php

// This interface handles adding, deleting and updating
// all observers 

 interface Subject {
	
	public function register(Observer $o);
	public function unregister(Observer $o);
	public function notifyObserver();
	
}