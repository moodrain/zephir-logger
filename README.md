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
	    echo PHP_EOL . 'error callback ' . $message . PHP_EOL;
}

// bind callback to a level
Log::setHandler('error', 'error_callback');

// do log
Log::error('something wrong');
```
