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
	 * Buffer instance
	 */
	protected function createBuffer() {
		return Html\Buffer::instance($this->plugin);
	}



	/**
	 * Parser object
	 */
	protected function createParser() {
		return new Html\Parser;
	}



}