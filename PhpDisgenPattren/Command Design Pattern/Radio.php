<?php

class Radio implements ElectronicDevice {

	private $volume = 0;
	
	public function on() {
		
		echo "Radio is on"."</br>";
		
	}

	public function off() {
		
		echo "Radio is off"."</br>";
		
	}

	public function volumeUp() {
		
		$this->volume++;
		
		echo "Radio Volume is at: " . $this->volume."</br>";
		
	}

	public function volumenDown() {
		
		$this->volume--;
		
		echo "Radio Volume is at: " . $this->volume."</br>";
		
	}
	
}