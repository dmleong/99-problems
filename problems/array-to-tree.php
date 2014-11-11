<?php

class Node {
	public $value = null;
	public $left = null;
	public $right = null;

	public function __construct($value) {
		$this->value = $value;
	}

	public function compare($newValue) {
		if ($newValue > $this->value) {
			if (isset($this->right)) {
				$this->right->compare($newValue);
			} else {
				$this->right = new Node($newValue);
			}
		}

		if ($newValue < $this->value) {
			if (isset($this->left)) {
				$this->left->compare($newValue);
			} else {
				$this->left = new Node($newValue);
			}
		}
	}

	public function sort() {
		if (isset($this->left)) {
			$this->left = $this->left->sort();
		} else (
			$this->left = array()
		);

		if (isset($this->right)) {
			$this->right = $this->right->sort();
		} else (
			$this->right = array()
		);

		$merged =  array_merge($this->left, array($this->value), $this->right);
		return $merged;
	}
}

class SortedTree {
	protected $root = null;

	/**
	 * Inserts a value into the sort tree
	 * @param $value
	 */
	public function insert($value) {
		if (!isset($this->root)) {
			$this->root = new Node($value);
			return;
		}

		$this->root->compare($value);
	}

	/**
	 * Returns the tree as a sorted array
	 * @return int[] The sorted array
	 */
	public function sorted() {
		return $this->root->sort();
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
