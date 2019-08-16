<?php

interface socialMediaAdapter{

	function post();
}

class faceBook{

	private $msg; 
	function post($msg){
		echo $msg."<br>" ;
		
	}
}
class faceBookAdapter{

	private $faceBook;
		public function __construct()
		{
			$this->faceBook=new faceBook();
		}
	function post($msg){
		$this->faceBook->post($msg);
	}
}

$f=new faceBookAdapter();
$f->post("Hello");
$f2=new faceBookAdapter();
$f->post("Hello");
$f3=new faceBookAdapter();
$f->post("Hello");
$f4=new faceBookAdapter();
$f->post("Hello");