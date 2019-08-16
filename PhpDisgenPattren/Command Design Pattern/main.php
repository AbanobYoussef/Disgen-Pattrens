<?php 

include "ElectronicDevice.php";
include "Television.php";
include "Radio.php";
include "Command.php";
include "Commands.php";
include "DeviceButton.php";
include "TVRemote.php";
		
		// Gets the ElectronicDevice to use
		
		$newDevice = TVRemote::getDevice();
		
		// TurnTVOn contains the command to turn on the tv
		// When execute() is called on this command object
		// it will execute the method on() in Television
		
		$onCommand = new TurnTVOn($newDevice);
		
		// Calling the execute() causes on() to execute in Television
		
		$onPressed = new DeviceButton($onCommand);
		
		// When press() is called theCommand.execute(); executes
		
		$onPressed->press();
		
		//----------------------------------------------------------
		
		// Now when execute() is called off() of Television executes
		
		$offCommand = new TurnTVOff($newDevice);
		
		// Calling the execute() causes off() to execute in Television
		
		$onPressed = new DeviceButton($offCommand);
		
		// When press() is called theCommand.execute(); executes
		
		$onPressed->press();
		
		//----------------------------------------------------------
		
		// Now when execute() is called volumeUp() of Television executes
		
		$volUpCommand = new TurnTVUp($newDevice);
				
		// Calling the execute() causes volumeUp() to execute in Television
				
		$onPressed = new DeviceButton($volUpCommand);
				
		// When press() is called theCommand.execute(); executes
				
		$onPressed->press();
		$onPressed->press();
		$onPressed->press();
		
		//----------------------------------------------------------
		
		// Creating a TV and Radio to turn off with 1 press
		
		$theTV = new Television();
		
		$theRadio = new Radio();
		
		// Add the Electronic Devices to a List
		
		$allDevices = [];
		
		$allDevices[0]=$theTV;
		$allDevices[1]=$theRadio;
		
		// Send the List of Electronic Devices to TurnItAllOff
		// where a call to run execute() on this function will
		// call off() for each device in the list 
		
		$turnOffDevices = new TurnItAllOff($allDevices);
		
		// This calls for execute() to run which calls for off() to
		// run for every ElectronicDevice
		
		$turnThemOff = new DeviceButton($turnOffDevices);
		
		$turnThemOff->press();
		
		//----------------------------------------------------------
		
		/*
		 * It is common to be able to undo a command in a command pattern
		 * To do so, DeviceButton will have a method called undo
		 * Undo() will perform the opposite action that the normal
		 * Command performs. undo() needs to be added to every class
		 * with an execute()
		 */
		
		$turnThemOff->pressUndo();
		
		// To undo more than one command add them to a LinkedList
		// using addFirst(). Then execute undo on each item until 
		// there are none left. (This is your Homework)







		
		