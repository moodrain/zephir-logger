
extern zend_class_entry *logger_log_ce;

ZEPHIR_INIT_CLASS(Logger_Log);

PHP_METHOD(Logger_Log, setPath);
PHP_METHOD(Logger_Log, getPath);
PHP_METHOD(Logger_Log, setHandler);
PHP_METHOD(Logger_Log, write);
PHP_METHOD(Logger_Log, debug);
PHP_METHOD(Logger_Log, info);
PHP_METHOD(Logger_Log, warn);
PHP_METHOD(Logger_Log, error);
void zephir_init_static_properties_Logger_Log(TSRMLS_D);

ZEND_BEGIN_ARG_INFO_EX(arginfo_logger_log_setpath, 0, 0, 1)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, path, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, path)
#endif
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_logger_log_sethandler, 0, 0, 2)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, level, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, level)
#endif
	ZEND_ARG_INFO(0, callback)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_logger_log_write, 0, 0, 2)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, level, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, level)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, message, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, message)
#endif
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_logger_log_debug, 0, 0, 1)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, message, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, message)
#endif
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_logger_log_info, 0, 0, 1)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, message, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, message)
#endif
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_logger_log_warn, 0, 0, 1)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, message, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, message)
#endif
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_logger_log_error, 0, 0, 1)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, message, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, message)
#endif
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(logger_log_method_entry) {
	PHP_ME(Logger_Log, setPath, arginfo_logger_log_setpath, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Logger_Log, getPath, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Logger_Log, setHandler, arginfo_logger_log_sethandler, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Logger_Log, write, arginfo_logger_log_write, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Logger_Log, debug, arginfo_logger_log_debug, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Logger_Log, info, arginfo_logger_log_info, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Logger_Log, warn, arginfo_logger_log_warn, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Logger_Log, error, arginfo_logger_log_error, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_FE_END
};
