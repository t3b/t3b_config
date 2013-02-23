<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/****************************************************
 *	Page- and User-TS
 ****************************************************/

$GLOBALS['TYPO3_CONF_VARS']['BE']['defaultPageTSconfig'] .= LF . '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3b_config/Configuration/TSConfig/Page.ts">';
$GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUserTSconfig'] .= LF . '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3b_config/Configuration/TSConfig/User.ts">';