<?php

// Subpackage namespace
namespace LittleBizzy\MinifyHTML\Html;

// Aliased namespaces
use \LittleBizzy\MinifyHTML\Helpers;

/**
 * Buffer class
 *
 * @package Minify HTML
 * @subpackage HTML
 */
class Buffer extends Helpers\Singleton {



	/**
	 * Start buffering
	 */
	protected function onConstruct() {
		@ob_start([$this, 'output']);
	}



	/**
	 * Ouput buffer operations
	 * Strongly inspired in Minify HTML plugin
	 * https://wordpress.org/plugins/minify-html-markup/
	 */
	public function output($buffer) {

		// XML test
		$test = strtolower(substr(ltrim($buffer), 0, 5));
		if ($test == '<?xml') {
			return $buffer;
		}

		/**
		 * Defines the regexp pattern modifiers
		 * By default activates the UTF8 support
		 */
		$pm = 's';
		if (!defined('MINIFY_HTML_UTF8_SUPPORT') || MINIFY_HTML_UTF8_SUPPORT) {
			if (mb_detect_encoding($buffer, 'UTF-8', true)) {
				$pm = 'u';
			}
		}

		/**
		 * Special chars treatment
		 * - Replaces carriage return + line feed by only line feed
		 * - Replaces tabs by spaces
		 */
		$buffer = str_replace(chr(13).chr(10), chr(10), $buffer);
		$buffer = str_replace(chr(9), ' ', $buffer);

		/**
		 * Parse the entire HTML markup
		 */
		/* $buffer = $this->plugin->factory->parser([
			'buffer' 		=> $buffer,
			'pm' 			=> $pm,
			'start'			=> $start,
			'end'			=> $end,
			'comments' 		=>
			'styles'		=> (!defined('MINIFY_HTML_INLINE_STYLES') || MINIFY_HTML_INLINE_STYLES),
			'scripts'		=>
			'conditional' 	=>
		}); */

		/**
		 * Removes self-closing markup for HTML5 documents
		 * Disabled by default
		 */
		if (defined('MINIFY_HTML_SELF_CLOSING') && MINIFY_HTML_SELF_CLOSING) {
			$test = strtolower(substr(ltrim($buffer), 0, 15));
			if ($test == '<!doctype html>') {
				$buffer = str_replace(' />', '>', $buffer);
			}
		}

		// Done
		return $buffer;
	}



}