<?php

class Node {
	public $value = null;
	public $left = null;
	public $right = null;

	public function __construct($value) {
		$this->value = $value;
	}
}

class SortedTree {
	protected $root = null;

	/**
	 * Inserts a value into the sort tree
	 * @param $value
	 */
	public function insert($value) {

	}

	/**
	 * Returns the tree as a sorted array
	 * @return int[] The sorted array
	 */
	public function sorted() {

	}
}

$input = array(7, 2, 4, 3, 8, 9, 10);

$tree = new SortedTree();
foreach($input as $value) {
	$tree->insert($value);
}

// At this point tree should internally look like this:
//         7
//        / \
//       2   8
//        \   \
//         4   9
//        /     \
//       3      10

$sorted = $tree->sorted();

print_r($sorted);		// Yields, [2, 3, 4, 7, 8, 9, 10]
