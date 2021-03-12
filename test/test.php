<?php

use Logger\Log;

$path = '/var/log/php';

! file_exists($path) && mkdir('/var/log/php', 0777, true);

Log::setPath($path);

function error_callback($message) {
	echo 'error callback ' . $message . PHP_EOL;
	return true;
}

function debug_callback_not_log($message) {
	echo 'debug_callback_not_log ' . $message . PHP_EOL;
	return false;
}

Log::setHandler('error', 'error_callback');
Log::setHandler('debug', 'debug_callback_not_log');

Log::error('something wrong');
Log::debug('debug message');

