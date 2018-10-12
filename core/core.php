<?php

// Subpackage namespace
namespace LittleBizzy\MinifyHTML\Core;

// Aliased namespaces
use \LittleBizzy\MinifyHTML\Helpers;

/**
 * Core class
 *
 * @package Minify HTML
 * @subpackage Core
 */
final class Core extends Helpers\Singleton {



	/**
	 * Pseudo constructor
	 */
	protected function onConstruct() {

		// Factory object
		$this->plugin->factory = new Factory($this->plugin);

		// WP loaded hook
		add_action('wp_loaded', [$this, 'loaded'], PHP_INT_MAX);
	}



	/**
	 * Start buffering
	 */
	public function loaded() {
		$this->plugin->factory->buffer();
	}



}