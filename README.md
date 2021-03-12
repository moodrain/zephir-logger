# zephir-logger
php extension for simple log written by zephir

#### Install

add ``extension=logger.so`` to your ``php.ini``

logger.so can be found in ext/modules

#### Usage

```
<?php

use Logger\Log;

// set where log file to place
Log::setPath('/var/log/php');

// set a callback function
function error_callback($message) {
	echo 'error callback ' . $message . PHP_EOL;
	return true; // will continue to write log
}

// set another callback function
function debug_callback_not_log($message) {
	echo 'debug_callback_not_log ' . $message . PHP_EOL;
	return false; // stop to write log
}

// bind some callback to distinct level
Log::setHandler('error', 'error_callback');
Log::setHandler('debug', 'debug_callback_not_log');

Log::error('something wrong');
Log::debug('debug message');
```
