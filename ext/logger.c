
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "logger.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *logger_log_ce;

ZEND_DECLARE_MODULE_GLOBALS(logger)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(logger)
{
	REGISTER_INI_ENTRIES();
	zephir_module_init();
	ZEPHIR_INIT(Logger_Log);
	
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(logger)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_logger_globals *logger_globals TSRMLS_DC)
{
	logger_globals->initialized = 0;

	/* Cache Enabled */
	logger_globals->cache_enabled = 1;

	/* Recursive Lock */
	logger_globals->recursive_lock = 0;

	/* Static cache */
	memset(logger_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);

	
	
}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_logger_globals *logger_globals TSRMLS_DC)
{
	
}

static PHP_RINIT_FUNCTION(logger)
{
	zend_logger_globals *logger_globals_ptr;
	logger_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(logger_globals_ptr);
	zephir_initialize_memory(logger_globals_ptr);

		zephir_init_static_properties_Logger_Log(TSRMLS_C);
	
	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(logger)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}



static PHP_MINFO_FUNCTION(logger)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_LOGGER_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_LOGGER_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_LOGGER_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_LOGGER_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_LOGGER_ZEPVERSION);
	php_info_print_table_end();
	
	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(logger)
{
#if defined(COMPILE_DL_LOGGER) && defined(ZTS)
	ZEND_TSRMLS_CACHE_UPDATE();
#endif

	php_zephir_init_globals(logger_globals);
	php_zephir_init_module_globals(logger_globals);
}

static PHP_GSHUTDOWN_FUNCTION(logger)
{
	
}


zend_function_entry php_logger_functions[] = {
	ZEND_FE_END

};

static const zend_module_dep php_logger_deps[] = {
	
	ZEND_MOD_END
};

zend_module_entry logger_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	php_logger_deps,
	PHP_LOGGER_EXTNAME,
	php_logger_functions,
	PHP_MINIT(logger),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(logger),
#else
	NULL,
#endif
	PHP_RINIT(logger),
	PHP_RSHUTDOWN(logger),
	PHP_MINFO(logger),
	PHP_LOGGER_VERSION,
	ZEND_MODULE_GLOBALS(logger),
	PHP_GINIT(logger),
	PHP_GSHUTDOWN(logger),
#ifdef ZEPHIR_POST_REQUEST
	PHP_PRSHUTDOWN(logger),
#else
	NULL,
#endif
	STANDARD_MODULE_PROPERTIES_EX
};

/* implement standard "stub" routine to introduce ourselves to Zend */
#ifdef COMPILE_DL_LOGGER
# ifdef ZTS
ZEND_TSRMLS_CACHE_DEFINE()
# endif
ZEND_GET_MODULE(logger)
#endif
