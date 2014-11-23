<?php
//Multiplying the digits of an integer and continuing the process gives the surprising result that the sequence of
//products always arrives at a single digit number. For example,
//
//715 ---- 35 ---- 15 ---- 527 ---- 14 ---- 4
//4000 ---- 0
//9
//
//The number of times products need to be calculated to reach a single digit is called the persistence number of that
//integer. Thus, the persistence number of 715 is 3, the persistence number of 27 is 2, the persistence number of 4000
//is 1, and the persistence number of 9 is 0.
//
//You are to write an iterative program that will continually prompt the user to enter a positive integer until EOF has
//been entered via the keyboard. For each number entered your program should output the persistence of the number.
//Please note that the correct spelling of persistence is p-e-r-s-i-s-t-e-n-c-e. The word does not contain the letter “a”.

class persistence {

	public $myArray = array();

	function persistence($int) {
		//Forcing the type here so that the integer becomes a string
		$myArray = (string)$int;
		$length = count($myArray);

		for ($i = 0; $i <= $length; $i++) {
			$currentResult = $myArray[$i];
			echo (($myArray[$length-$i] * $currentResult) . "\n");
		}

//	echo ($myArray[0] * $myArray[1] * $myArray[2]);

	}

	function multiply($i) {
		if (isset($this->$myArray[$i])) {

		}
	}
}


persistence(715);


//1) Find how many integers are in $i
//2) Multiply each of them together
//3) Take the result and repeat 2 and count how many times you've done 2
//4) If the length of the result is 1, return how many times you've done 2
