<?php
/**
 * Module interface
 *
 * @package ryanair-coding-challenge
 */

namespace Ryanair\CodingChallenge\Interfaces;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Module interface
 */
interface Module {

	/**
	 * Register hooks
	 *
	 * @return void
	 */
	public static function register(): void;
}
