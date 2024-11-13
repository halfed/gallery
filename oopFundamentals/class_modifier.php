<?php

class Cars {
	static $wheel_count = 4;
	static $door_count = 4;
	//protected $seat_count = 2;
	
	static function car_detail() {
		echo Cars::$wheel_count;
		echo "<br/>";
		echo Cars::$door_count;
	}
}


echo Cars::$door_count;

echo Cars::car_detail();
?>