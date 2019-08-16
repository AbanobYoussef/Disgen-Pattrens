<?php 
interface shap{
 	function draw();
}

class rec implements shap{

	private $x;
	private $y;
	public function __construct()
	{
		 $this->x=1;
	     $this->y=1;
	}
	public function draw(){
		echo $this->x + $this->y;
	}

}

class cir implements shap{

	private $r;
	public function __construct()
	{
		 $this->r=1;
	}
	public function draw(){
		echo  $this->y;
	}

}

class factory {
	private $type;
	static public function creat($type){
		if($type=="rec")
		{
			return new rec();
		}
		else if($type=="cir")
		{
			return new cir();
		}
	}

}

$rec=factory::creat("rec");
$cir=factory::creat("cir");
echo "<pre>";
var_dump($rec);
var_dump($cir);
echo "</pre>";