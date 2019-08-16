<?php
include 'sorts.php';
interface sort{
	function sort();
}
/**
 * 
 */
class quicksort implements sort{
	private $data;
	function __construct(array $data)
	{
		$this->data=$data;
	}

	public function sort()
	{
		return sort\qsort($this->data);
	}
}

class mergesort implements sort{
	private $data;
	function __construct(array $data)
	{
		$this->data=$data;
	}

	public function sort()
	{
		return sort\mergeSort($this->data);
	}
}


function arrsort(&$unsorted_numbers)
{
	if (count($unsorted_numbers)>20) {
		$s=new quicksort($unsorted_numbers);
		$unsorted_numbers=$s->sort();
	}
	else {
		$s=new mergesort($unsorted_numbers);
		$unsorted_numbers=$s->sort();
	}
}

function print_array($array){
    echo "<pre>";
    print_r($array);
    echo "<br/>";
    echo "</pre>";
}

    $unsorted_numbers = array(3,7,1,26,43,12,6,21,23,73,2,5,6,4,7,8,9,0,3,2,1,4,7,8,5,68,6,5,5,16616,1,7,15,7,151);
  	arrsort($unsorted_numbers);
    print_array($unsorted_numbers);
