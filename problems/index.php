<?php

/**
 * FizzBuzz
 *
 * for 1 to 100,
 * print "Fizz" if number is divisible by 3
 * print "Buzz" if number is divisible by 5
 * print "FizzBuzz if number is divisible by both
 * else print the number
 *
 * @return void
 */
function fizzbuzz() {

	for ($i = 1; $i <= 100; $i++) {
		if ($i % 3 == 0 && $i % 5 == 0) {
			echo nl2br($i . " FuzzBuzz" . "\n");
		} elseif ($i % 3 == 0) {
			echo nl2br($i . " Fizz" . " \n");
		} elseif ($i % 5 == 0) {
			echo nl2br($i . " Buzz" . " \n");
		} else {
			echo nl2br($i . "\n");
		}
	}
}

fizzbuzz();
