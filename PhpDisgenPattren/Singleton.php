<?php 
//
// Singleton 
//
class DataBase
{
	public static $inst;
	public static function get()
	{
		if(!isset(self::$inst))
		{
			self::$inst=new DataBase();
		}
		return self::$inst;
	}
	private function __construct(){}

	public function getQuery()
	{
		return "SELECT * FROM some_table";
	}
}


class DB
{
	
	PUBLIC function __construct()
	{
		
	}
}


///////////////////////////////////////
$db=DataBase::get();
$db1=DataBase::get();
$db2=DataBase::get();
echo $db->getQuery()."<br>";
echo "<pre>";
var_dump($db);
var_dump($db1);
var_dump($db2);
echo "</pre>";
////////////////////////////////////////
$d=new DB();
$d1=new DB();
$d2=new DB();
echo "<pre>";
var_dump($d);
var_dump($d1);
var_dump($d2);
echo "</pre>";