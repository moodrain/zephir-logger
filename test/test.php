<?php

use Logger\Log;

$path = '/var/log/php';

! file_exists($path) && mkdir('/var/log/php', 0777, true);

Log::setPath($path);

function error_callback($message) {
	    echo PHP_EOL . 'error callback ' . $message . PHP_EOL;
}

Log::setHandler('error', 'error_callback');

Log::error('something wrong');

