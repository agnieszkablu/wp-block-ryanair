<?php
/**
 * Plugin name: Coding Challenge
 * Author: Ryanair WordPress team
 * Version: 1.0.0
 * Text Domain: ryanair-coding-challenge
 *
 * @package ryanair-coding-challenge
 */

namespace Ryanair\CodingChallenge;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const MAIN_FILE = __FILE__;
const MAIN_DIR  = __DIR__;
const VERSION   = '1.0.0';

require MAIN_DIR . '/vendor/autoload.php';

Modules\Config::register();
