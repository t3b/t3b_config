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