<?php 

 class TurnTVOn implements Command {

	 private $theDevice;
	
	public function __construct(ElectronicDevice $newDevice){
		
		$this->theDevice = $newDevice;
		
	}
	
	public function execute() {
		
		$this->theDevice->on();
		
	}

	public function undo() {
		
		$this->theDevice->off();
		
	}
	
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////


class TurnTVOff implements Command {

	 private $theDevice;
	
	public function __construct(ElectronicDevice $newDevice){
		
		$this->theDevice = $newDevice;
		
	}
	
	public function execute() {
		
		$this->theDevice->off();
		
	}

	// Used if you want to allow for undo
	// Do the opposite of execute()
	
	public function undo() {
		
		$this->theDevice->on();
		
	}
	
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////


 class TurnTVUp implements Command {

	 private $theDevice;
	
	public function __construct(ElectronicDevice $newDevice){
		
		$this->theDevice = $newDevice;
		
	}
	
	public function execute() {
		
		$this->theDevice->volumeUp();
		
	}

	public function undo() {
		
		$this->theDevice->volumenDown();
		
	}
	
}



 class TurnItAllOff implements Command {
  private $theDevices;
 
  public function __construct(Array $newDevices) {
	  $this->theDevices = $newDevices;
  }
 
  public function execute() {
 
	 	foreach ($this->theDevices as $device) {
	    $device->off();
	}
    
  }

  public function undo() {
	
		foreach ($this->theDevices as $device) {
	    $device->on();
	}
	
  }
}



