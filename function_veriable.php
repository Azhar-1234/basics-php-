<?php 
	function foo(){
		echo "this is foo";
	}
	function bar($arg=""){
		echo "dslk".$arg;
	}
	function echoit($string){
		echo $string;
	}

	$func = "foo";
	$func();

	$func2 = "bar";
	$func2('hellow');