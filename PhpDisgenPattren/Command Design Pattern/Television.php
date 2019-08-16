<?php 
class Television implements ElectronicDevice {

	private  $volume = 0;
	
	public function on() {
		
		echo "TV is on"."</br>";
		
	}

	public function off() {
		
		echo "TV is off"."</br>";
		
	}

	public function volumeUp() {
		
		$this->volume++;
		
		echo "TV Volume is at: " . $this->volume."</br>" ;
		
	}

	public function volumenDown() {
		
		$this->volume--;
		
		echo "TV Volume is at: " . $this->volume."</br>";
		
	}
	
}