<?php
	// $classes = ["a"=>"one","d"=>"two","b"=>"three","c"=>"four"];
	// extract($classes);
	// echo $a;
	// $a="sl";
	// $students = ["a"=>"bd",1=>"sar",3=>"aer","kwt"];
	// extract($students,EXTR_PREFIX_ALL,'x');
	// echo $x_a.$x_3.$x_4;
	// $students=[
	// 	["river"=>"padma","zamuna","bangabandu"],
	// 	["river"=>"dhaka","chittagong","rajshahi"]
	// ];
	// foreach ($students as $value) {
	// 	extract($value);
	// 	echo $river.' '.$value[0].'<br>';
	// }

	// $students = [
	// 			 ['first','azhar',12,'nothing'],
	// 			 ['second','raihan',15,'teacher'],
	// 			 ['third','uddin',17,'businessman'],
	// 			];
	// foreach ($students as list($a)) {
	// 	echo $a.'<br>';
	// }
	
	$countries = ['a'=>'bd','b'=>'aue','c'=>'ksa','d'=>'bkd'];

	echo count($countries);
	echo "<pre>";
		print_r( array_count_values($countries));
	echo "</pre>";
	echo key($countries);
	echo ' '.current($countries);
	echo ' '.next($countries);
	echo ' '.prev($countries);
	echo ' '.reset($countries);
	echo ' '.current($countries);
	echo reset($countries);
	echo array_sum($countries);
	echo array_product($countries);
	echo "<hr>";

	for ($i=0; $i < count($countries) ; $i++) { 
		echo key($countries).'=>'.current($countries),"<br>";
		next($countries);
	}

	print_r(array_flip($countries));