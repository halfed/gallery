<?php

class Cars {
	var $wheels = 4;
	
	function greeting() {
		return "hello";
	}
}

$bmw = new Cars();


class Trucks extends Cars {
	
}

$ram = new Trucks();
echo $ram->wheels;

?>