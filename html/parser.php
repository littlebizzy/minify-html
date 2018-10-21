<?php

// Subpackage namespace
namespace LittleBizzy\MinifyHTML\Html;

/**
 * Parser class
 *
 * @package Minify HTML
 * @subpackage HTML
 */
class Parser {



	/**
	 * Default args
	 */
	private $defaults = [
		'utf8Support' 	=> true,
		'spacing'		=> false,
		'lineBreaks'	=> false,
		'comments'		=> false,
		'styles'		=> false,
		'scripts'		=> false,
		'conditional'	=> false,
		'selfClosing'	=> false,
	];



	/**
	 * Input args
	 */
	private $args;



	/**
	 * Constructor
	 */
	public function __construct($args) {
		$this->args = array_merge($this->defaults, $args);
	}



	/**
	 * Parse HTML using the provided options
	 */
	public function parse($html) {

		// Get vars
		extract($this->args);

		// Check for heavy changes
		if ($comments || $styles || $scripts) {

			// Regexp pattern modifier
			$pm = $utf8Support? 'u' : 's';

			// Prepare line feeds
			$html = str_replace(chr(13).chr(10), chr(10), $html);

			if ($comments) {

			}

			if ($styles) {

			}

			if ($scripts) {

			}
		}

		/**
		 * Removes self-closing markup for HTML5 documents
		 */
		if ($selfClosing) {
			$test = strtolower(substr(ltrim($html, 0, 15)));
			if ($test == '<!doctype html>') {
				$html = str_replace(' />', '>', $buffer);
			}
		}

		if ($conditional) {

		}

		// Remove extra spacing
		if ($spacing) {
			$html = preg_replace('/\s+/', ' ', trim($html));
		}

		// Remove line breaks
		if ($lineBreaks) {
			$html = str_replace(chr(13).chr(10), chr(10), $html);
			$html = str_replace(chr(10), '', $html);
		}

		// Done
		return $html;
	}



}