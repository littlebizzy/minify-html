<?php

// Subpackage namespace
namespace LittleBizzy\MinifyHTML\Core;

// Aliased namespaces
use \LittleBizzy\MinifyHTML\Html;
use \LittleBizzy\MinifyHTML\Helpers;

/**
 * Object Factory class
 *
 * @package Minify HTML
 * @subpackage Core
 */
class Factory extends Helpers\Factory {



	/**
	 * Options object
	 */
	protected function createOptions() {
		return new Options;
	}



	/**
	 * Buffer instance
	 */
	protected function createBuffer() {
		return Html\Buffer::instance($this->plugin);
	}



	/**
	 * Parser object
	 */
	protected function createParser($args) {
		return new Html\Parser($args);
	}



}