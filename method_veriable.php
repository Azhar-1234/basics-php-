<?php
	class foo{
		public function test(){
			$name="Bar";
			$this->$name();
		}
		public function Bar(){
			echo "this is a bar";
		}
	}
	$obj = new foo;
	$func = "test";
	$obj->$func();

	