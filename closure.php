<?php 
	// $client = "azhar";
	// $output = function() use ($client){
	// 	echo  "this is $client";
	// };
	// $output();
	
	function myClosure($num){
		return function($x) use($num){
			return $x*$num;
		};
	}
	$closure = myClosure(10);
	echo $closure(2)."<br>";
	echo $closure(3)."<br>";
