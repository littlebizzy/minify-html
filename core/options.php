<?php

// Subpackage namespace
namespace LittleBizzy\MinifyHTML\Core;

/**
 * Options class
 *
 * @package Minify HTML
 * @subpackage Core
 */
class Options {



	/**
	 * Parsing arguments
	 */
	private $args;



	/**
	 * Minify decision
	 */
	private $minify;



	/**
	 * Initializing
	 */
	public function __construct() {

		/**
		 * Decides if replace extra spaces by single spaces
		 * Enabled by default, can be deactivated via constant
		 */
		$this->args['spacing'] = !defined('MINIFY_HTML_REMOVE_EXTRA_SPACING') || MINIFY_HTML_REMOVE_EXTRA_SPACING;

		/**
		 * Decides if remove line breaks
		 * Enabled by default, it can be deactivated via constant
		 */
		$this->args['lineBreaks'] = !defined('MINIFY_HTML_REMOVE_LINE_BREAKS') || MINIFY_HTML_REMOVE_LINE_BREAKS;

		/**
		 * Defines the regexp pattern modifiers for proper UTF8 support
		 * Enabled by default, it can be deactivated via constant
		 */
		$this->args['utf8Support'] = !defined('MINIFY_HTML_UTF8_SUPPORT') || MINIFY_HTML_UTF8_SUPPORT;

		/**
		 * Decides if remove HTML comments
		 * Enabled by default, it can be deactivated via constant
		 */
		$this->args['comments'] = !defined('MINIFY_HTML_REMOVE_COMMENTS') || MINIFY_HTML_REMOVE_COMMENTS;

		/**
		 * Decides if minify inline styles between <style></style> tags
		 * Enabled by default, it can be deactivated via constant
		 */
		$this->args['styles'] = !defined('MINIFY_HTML_INLINE_STYLES') || MINIFY_HTML_INLINE_STYLES;

		/**
		 * Decides if minify inline scripts between <script></script> tags
		 * Disabled by default, it can be enabled via constant
		 */
		$this->args['scripts'] = defined('MINIFY_HTML_INLINE_SCRIPTS') && MINIFY_HTML_INLINE_SCRIPTS;

		/**
		 * Decides if remove conditionals tags like
		 * <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
		 * Enabled by default, it can be deactivated via constant
		 */
		$this->args['conditional'] = !defined('MINIFY_HTML_REMOVE_CONDITIONALS') || MINIFY_HTML_REMOVE_CONDITIONALS;

		/**
		 * Decides if removes self-closing markup for HTML5 documents
		 * Disabled by default, it can be enabled via constant
		 */
		$this->args['selfClosing'] = defined('MINIFY_HTML_REMOVE_HTML5_SELF_CLOSING') && MINIFY_HTML_REMOVE_HTML5_SELF_CLOSING;

		// Minify or not decision
		$this->minify = $this->args['spacing'] || $this->args['lineBreaks'] || $this->args['comments'] ||
						$this->args['styles'] || $this->args['scripts'] || $this->args['conditional'] || $this->args['selfClosing'];
	}



	/**
	 * Returns minify decision
	 */
	public function minify() {
		return $this->minify;
	}



	/**
	 * Retrieve parsing arguments
	 */
	public function args() {
		return $this->args;
	}



}