
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_LOGGER_H
#define PHP_LOGGER_H 1

#ifdef PHP_WIN32
#define ZEPHIR_RELEASE 1
#endif

#include "kernel/globals.h"

#define PHP_LOGGER_NAME        "logger"
#define PHP_LOGGER_VERSION     "0.0.1"
#define PHP_LOGGER_EXTNAME     "logger"
#define PHP_LOGGER_AUTHOR      "Phalcon Team"
#define PHP_LOGGER_ZEPVERSION  "0.12.21-8a412a1"
#define PHP_LOGGER_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(logger)

	int initialized;

	/** Function cache */
	HashTable *fcache;

	zephir_fcall_cache_entry *scache[ZEPHIR_MAX_CACHE_SLOTS];

	/* Cache enabled */
	unsigned int cache_enabled;

	/* Max recursion control */
	unsigned int recursive_lock;

	
ZEND_END_MODULE_GLOBALS(logger)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(logger)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) ZEND_MODULE_GLOBALS_ACCESSOR(logger, v)
#else
	#define ZEPHIR_GLOBAL(v) (logger_globals.v)
#endif

#ifdef ZTS
	ZEND_TSRMLS_CACHE_EXTERN()
	#define ZEPHIR_VGLOBAL ((zend_logger_globals *) (*((void ***) tsrm_get_ls_cache()))[TSRM_UNSHUFFLE_RSRC_ID(logger_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(logger_globals)
#endif

#define ZEPHIR_API ZEND_API

#define zephir_globals_def logger_globals
#define zend_zephir_globals_def zend_logger_globals

extern zend_module_entry logger_module_entry;
#define phpext_logger_ptr &logger_module_entry

#endif
