<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// disable the deprecation log. for production systems, you do not want to enable this. for development systems, it gets enabled automatically in Development.php.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '';