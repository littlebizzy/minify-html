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
	 * Input args
	 */
	private $args;



	/**
	 * Constants for tag delimitation
	 */
	const TAG_INI = '370748f2338fd94c291b227346333735';
	const TAG_END = '4c79af2f7f3a90cc0c7fed9fd42172d9';



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

			// Transforms
			$tags_src = [];
			$tags_new = [];
			$tags = ['script', 'pre', 'textarea', 'style'];

			// Prepare delimiters
			foreach ($tags as $tag) {

				// Tag
				$ini = '<'.$tag;
				$end = '/'.$tag.'>';

				// Source and new tag
				$tags_src[] = $ini;
				$tags_src[] = $end;
				$tags_new[] = self::TAG_INI.$ini;
				$tags_new[] = $end.self::TAG_END;
			}

			// Splits the content
			$parts = str_ireplace($tags_src, $tags_new, $html);
			$parts = explode(self::TAG_END, $parts);

			// Init
			$minified = '';

			// Enum parts
			foreach ($parts as $part) {

				// Find tag start
				$pos = stripos($part, self::TAG_INI);
				if (false === $pos) {
					$before = $part;
					$inside = '';

				// Full tag
				} else {

					// Detect before and inside content
					$before = substr($part, 0, $pos);
					$inside = substr($part, $pos + 32);

					// Process styles
					if ('<style' == strtolower(substr($inside, 0, 6))) {

						// Check transformation
						if ($styles) {

							// Remove left, right and extra espaces with UTF8 support
							$inside = preg_replace(['/\>[^\S ]+/'.$pm, '/[^\S ]+\</'.$pm, '/(\s)+/'.$pm], ['>', '<', '\\1'], $inside);

							// Remove CSS comments
							if ($comments) {
								$inside = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $inside);
							}

							// Safe minification
							$inside = str_replace([chr(10), ' {', '{ ', ' }', '} ', '( ', ' )', ' :', ': ', ' ;', '; ', ' ,', ', ', ';}'],
												  ['', 		'{',  '{',  '}',  '}',  '(',  ')',  ':',  ':',  ';',  ';',  ',',  ',',  '}'], $inside);
						}

					// Process scripts
					} elseif ('<script' == strtolower(substr($inside, 0, 7))) {

						// Check transformation
						if ($scripts) {

							// Remove Javascript comments
							if ($comments) {

							}
						}
					}
				}

				// Remove HTML comments
				if ($comments) {

				}

				// Add chunk
				$minified .= $before.$inside;
			}

			// Done
			$html = $minified;
		}

		/**
		 * Removes self-closing markup for HTML5 documents
		 */
if (false && $selfClosing) {
			$test = strtolower(substr(ltrim($html, 0, 15)));
			if ($test == '<!doctype html>') {
				$html = str_replace(' />', '>', $buffer);
			}
		}

		if ($conditional) {

		}

		// Remove extra spacing
if (false && $spacing) {
			$html = preg_replace('/\s+/', ' ', trim($html));
		}

		// Remove line breaks
if (false && $lineBreaks) {
			$html = str_replace(chr(13).chr(10), chr(10), $html);
			$html = str_replace(chr(10), '', $html);
		}

		// Done
		return $html;
	}



}