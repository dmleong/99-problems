<?php
//Multiplying the digits of an integer and continuing the process gives the surprising result that the sequence of
//products always arrives at a single digit number. For example,
//
//715 ---- 35 ---- 15
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


class Persistence {
	public $persistence = 0;
	public $result = 0;

	function multiply($int) {
		$integer = str_split($int);
		$result = array();


		for ($i = 0; $i < count($integer); $i++) {
			$value = $integer[$i] * $integer[$i+1];

			if ($value > 0) {
				array_push($result, $value);
			}

		}

		$this->increment();
		$val = array_product($result);

		if ($val >= 10) {
			$val = $this->multiply($val);
			return $val;
		} else {
			return $val;
		}
	}


	function increment() {
		return $this->persistence++;
	}


	function persistence($int) {
		if ($int < 10) {
			echo 0;
		}

		$this->multiply($int);
		$persistence = $this->increment();

		echo "The persistence is " . $persistence . "\n";

	}

}

new Persistence(4000);



//1) $int to string
//2) if $int <= 10 return 0
//3) if $int > 10 for y in x { product * = y }, increment persistence
//3) if product >= 10 return 1 + persistence(product)
