
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/fcall.h"
#include "kernel/string.h"
#include "kernel/concat.h"
#include "kernel/file.h"


ZEPHIR_INIT_CLASS(Logger_Log) {

	ZEPHIR_REGISTER_CLASS(Logger, Log, logger, log, logger_log_method_entry, 0);

	zend_declare_property_string(logger_log_ce, SL("path"), "./", ZEND_ACC_PRIVATE|ZEND_ACC_STATIC);

	zend_declare_property_null(logger_log_ce, SL("handlers"), ZEND_ACC_PRIVATE|ZEND_ACC_STATIC);

	return SUCCESS;

}

PHP_METHOD(Logger_Log, setPath) {

	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zval *path_param = NULL;
	zval path;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&path);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &path_param);

	zephir_get_strval(&path, path_param);


	zephir_update_static_property_ce(logger_log_ce, ZEND_STRL("path"), &path);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Logger_Log, getPath) {

	zval _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);


	zephir_read_static_property_ce(&_0, logger_log_ce, SL("path"), PH_NOISY_CC | PH_READONLY);
	RETURN_CTORW(&_0);

}

PHP_METHOD(Logger_Log, setHandler) {

	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zval *level_param = NULL, *callback, callback_sub;
	zval level;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&level);
	ZVAL_UNDEF(&callback_sub);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &level_param, &callback);

	zephir_get_strval(&level, level_param);


	zephir_update_static_property_array_multi_ce(logger_log_ce, SL("handlers"), callback, SL("z"), 1, &level);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Logger_Log, write) {

	zval handlers;
	zend_bool pass;
	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *level_param = NULL, *message_param = NULL, _0, fun$$3, _1$$3, _2$$4, _3$$4, _4$$4, _6$$4, _7$$4, _8$$4, source$$4, _9$$4, _10$$4, _11$$4;
	zval level, message, path$$4, _5$$4, file$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&level);
	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&path$$4);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&file$$4);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&fun$$3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&source$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_10$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&handlers);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &level_param, &message_param);

	zephir_get_strval(&level, level_param);
	zephir_get_strval(&message, message_param);


	pass = 1;
	ZEPHIR_OBS_VAR(&_0);
	zephir_read_static_property_ce(&_0, logger_log_ce, SL("handlers"), PH_NOISY_CC);
	ZEPHIR_CPY_WRT(&handlers, &_0);
	if (zephir_array_isset(&handlers, &level)) {
		ZEPHIR_OBS_VAR(&fun$$3);
		zephir_array_fetch(&fun$$3, &handlers, &level, PH_NOISY, "logger/log.zep", 28);
		ZEPHIR_CALL_ZVAL_FUNCTION(&_1$$3, &fun$$3, NULL, 0, &message);
		zephir_check_call_status();
		pass = zephir_get_boolval(&_1$$3);
	}
	if (pass) {
		ZEPHIR_INIT_VAR(&_2$$4);
		zephir_read_static_property_ce(&_3$$4, logger_log_ce, SL("path"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_4$$4);
		ZVAL_STRING(&_4$$4, "/");
		zephir_fast_trim(&_2$$4, &_3$$4, &_4$$4, ZEPHIR_TRIM_RIGHT);
		zephir_get_strval(&_5$$4, &_2$$4);
		ZEPHIR_CPY_WRT(&path$$4, &_5$$4);
		ZEPHIR_INIT_VAR(&_6$$4);
		ZVAL_STRING(&_6$$4, "Y-m-d");
		ZEPHIR_CALL_FUNCTION(&_7$$4, "date", NULL, 1, &_6$$4);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_8$$4);
		ZEPHIR_CONCAT_VSV(&_8$$4, &path$$4, "/", &_7$$4);
		zephir_get_strval(&file$$4, &_8$$4);
		ZEPHIR_INIT_NVAR(&_6$$4);
		ZVAL_STRING(&_6$$4, "a");
		ZEPHIR_CALL_FUNCTION(&source$$4, "fopen", NULL, 2, &file$$4, &_6$$4);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&_6$$4);
		ZVAL_STRING(&_6$$4, "Y-m-d H:i:s");
		ZEPHIR_CALL_FUNCTION(&_9$$4, "date", NULL, 1, &_6$$4);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&_6$$4);
		zephir_ucfirst(&_6$$4, &level);
		ZEPHIR_INIT_VAR(&_10$$4);
		ZEPHIR_GET_CONSTANT(&_10$$4, "PHP_EOL");
		ZEPHIR_INIT_VAR(&_11$$4);
		ZEPHIR_CONCAT_VSVSVV(&_11$$4, &_9$$4, " [", &_6$$4, "]: ", &message, &_10$$4);
		zephir_fwrite(NULL, &source$$4, &_11$$4);
		zephir_fclose(&source$$4);
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Logger_Log, debug) {

	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *message_param = NULL, _0;
	zval message;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &message_param);

	zephir_get_strval(&message, message_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "debug");
	ZEPHIR_CALL_SELF(NULL, "write", NULL, 0, &_0, &message);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Logger_Log, info) {

	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *message_param = NULL, _0;
	zval message;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &message_param);

	zephir_get_strval(&message, message_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "info");
	ZEPHIR_CALL_SELF(NULL, "write", NULL, 0, &_0, &message);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Logger_Log, warn) {

	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *message_param = NULL, _0;
	zval message;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &message_param);

	zephir_get_strval(&message, message_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "warning");
	ZEPHIR_CALL_SELF(NULL, "write", NULL, 0, &_0, &message);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Logger_Log, error) {

	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *message_param = NULL, _0;
	zval message;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &message_param);

	zephir_get_strval(&message, message_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "error");
	ZEPHIR_CALL_SELF(NULL, "write", NULL, 0, &_0, &message);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

void zephir_init_static_properties_Logger_Log(TSRMLS_D) {

	zval _0;
	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
		ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	array_init(&_0);
	zephir_update_static_property_ce(logger_log_ce, ZEND_STRL("handlers"), &_0);
	ZEPHIR_MM_RESTORE();

}

