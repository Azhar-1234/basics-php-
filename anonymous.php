<?php
	// function makeGreeting($name,$time){
	// 	return 'my name is '.$name.' now time'.' '.$time;
	// }
	// echo makeGreeting('azhar',9.00);
	
	// $makeGreeting = function($name,$timeOfDay){
	// 	return "time is $timeOfDay name is $name";
	// };
	// echo $makeGreeting('azhar',9.00);

	// function shout($message){
	// 	echo $message($name);
	// }
	// shout(function(){
	// 	return "hellow";
	// });
	
	// $luckydip=[
	// 	function(){
	// 		echo "you get car";
	// 	},	
	// 	function(){
	// 		echo "you get troppy";
	// 	},
	// 	function(){
	// 		echo "you get beg";
	// 	}
	// ];
	// $choice=rand(1,2);

	// $luckydip [$choice]();

	// $numbers = range(1,20);
	// foreach (
	// 	array_filter($numbers,function($val){
	// 	return $val%2==0;}) as $val){
	// 	echo $val,"<br>";
	// }

	// $even = array_filter($numbers,function($val){
	// 	return $val%2==0;
	// });
	// foreach ($even as $val) {
	// 	echo $val;
	// }

	$students = [
		["name"=>'azhar',"age"=>30],
		["name"=>'uddin',"age"=>21],
		["name"=>'tuhin',"age"=>22]
	];
	usort($students, 
		function($studentA,$studentB){
			return ($studentA['name']<$studentB['name'])?-1:1;	
		}
	);
	foreach ($students as $val) {
		echo "name is $val[name] $val[age] old"."<br>";		
	}	
