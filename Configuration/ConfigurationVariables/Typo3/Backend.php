<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/****************************************************
 *	Page- and User-TS
 ****************************************************/

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3b_config/Configuration/TSConfig/Page.ts">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3b_config/Configuration/TSConfig/User.ts">');