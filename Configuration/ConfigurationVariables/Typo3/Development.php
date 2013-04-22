<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/****************************************************
 *	Backend
 ****************************************************/

// set the session timeout to eight hours
$GLOBALS['TYPO3_CONF_VARS']['BE']['sessionTimeout'] = 28800;

/****************************************************
 *	Display errors
 ****************************************************/

// display error messages with the registered errorhandler
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 1;

// display failed database queries
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = 1;

// display an error message, when a 404 error occurs
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageNotFound_handling'] = 1;

/****************************************************
 *	Logging
 ****************************************************/

// write errors to the developer log (requires an installed devlog extension)
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_errorDLOG'] = TRUE;

// write exceptions to the developer log (requires an installed devlog extension)
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_exceptionDLOG'] = TRUE;

// write deprecation messages to a log file
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'file';

/****************************************************
 *	Caching
 ****************************************************/

// disable ext_localconf and ext_tables caching
$GLOBALS['TYPO3_CONF_VARS']['EXT']['extCache'] = 0;

// disable phpcode caching
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_phpcode']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// disable the translation cache
$GLOBALS['TYPO3_CONF_VARS']['SYS']['lang']['cache']['lifetime'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// disable extbase caching
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_reflection']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_object']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// disable fluid caching
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['fluid_template']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';