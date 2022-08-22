<?php 
	// $a = 5;
	// $b = "5";

	// echo $a==$b;//ans:true//its lossely type //data type not same but answer right

	// $a =5;
	// $b ="5";

	// echo $a===$b;//ans:false//data type not same

	// $a = 5;
	// $b ="5";

	// echo $a!==$b;//answer true//value same data type different?

	// $a = 5;
	// $b = '5';

	// echo $a!=$b;//answer false // value same but data type not same


	// != and <> //same oparetor
	
	// $a =8;
	// $b =2;
	// echo $a<=>$b;//if value same then return 0//1st value minus secound value then 1st value bigger then secound value answer 1 else -1
	// var_dump(0=="a");
	// var_dump("1"=="01");
	// var_dump("10"=="1e1");
	// var_dump("1000" == "1e3");
	$x = '<br>';
	echo 0b011 + 0b100 + 0b111.$x;
	echo $x;
	echo [1,2,2] <=> [1,1,-3];
	echo $x;
	echo [3,4,8] <=> [3,6,7];
	echo $x;
	echo [9,9,9] <=> [7,7,9];
	echo $x;
	echo [1,2,1] <=>[1,1,2];