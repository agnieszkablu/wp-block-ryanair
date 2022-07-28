<?php
/**
 * Class dedicated for plugin configuration
 *
 * @package ryanair-coding-challenge
 */

namespace Ryanair\CodingChallenge\Modules;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use \Ryanair\CodingChallenge\Interfaces\Module;
use const \Ryanair\CodingChallenge\MAIN_FILE;

/**
 * Config module
 */
abstract class Config implements Module {

	/**
	 * Register hooks
	 *
	 * @return void
	 */
	public static function register(): void {
		load_plugin_textdomain( 'ryanair-coding-challenge', false, '/' . dirname( plugin_basename( MAIN_FILE ) ) . '/languages/' );
	}
}
