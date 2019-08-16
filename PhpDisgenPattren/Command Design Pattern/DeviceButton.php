<?php

// This is known as the invoker
// It has a method press() that when executed
// causes the execute method to be called

// The execute method for the Command interface then calls 
// the method assigned in the class that implements the
// Command interface
 class DeviceButton{
	
	private $theCommand;
	
	public function __construct( $newCommand){
		
		$this->theCommand = $newCommand;
		
	}
	
	public function press(){
		
		$this->theCommand->execute();
		
	}
	
	// Now the remote can undo past commands
	
	public function pressUndo(){
		
		$this->theCommand->undo();
		
	}
	
}