<?php 
// Each command you want to issue will implement 
// the Command interface

 interface Command {
	
	public function execute();
	
	// You may want to offer the option to undo a command
	
	public function undo();
	
}