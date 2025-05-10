<?php

namespace Traits;

trait Singleton {
	protected static $instance = null;

	public function __construct() {
	}

	final public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}
}