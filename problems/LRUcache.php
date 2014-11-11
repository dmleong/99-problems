<?php

/**
 * An LRUCache (Least Recently Used Cache) is a fixed item size object cache.
 *
 * To add or update an object in the cache you can use the set method
 * $cache = new LRUCache();
 * $cache->set('key1', $someComplexObject);
 *
 * To retrieve an object in the cache you can use the get method
 * $cache->get('key1'); 	//Returns $someComplexObject
 *
 * As the cache grows it will cap at some fixed size described by the maxItems
 * property
 *
 * When you attempt to add a new object into a full cache, it will discard the
 * Least Recently Used cached item.
 *
 * Calling ->set('key', ...) or ->get('key') constitutes a "use" of 'key'
 */
class LRUCache {
	public $maxItems;
	public $cache = array();
	public $cacheOrder = array();

	public function __construct($maxItems = 10) {
		$this->maxItems = $maxItems;
	}

	public function set($key, $value) {
		if (count($this->cacheOrder) >= $this->maxItems) {
			array_pop($this->cacheOrder);
		}

		$this->update($key);
		$this->cache[$key] = $value;
	}

	public function get($key) {
		if (isset($this->cache[$key])) {
			$this->update($key);
			return $this->cache[$key];
		} else {
			return false;
		}
	}

	public function update($key) {
		if (isset($this->cacheOrder[$key])) {
			unset($this->cacheOrder[$key]);
		}

		array_unshift($cacheOrder, $key);
	}
}
