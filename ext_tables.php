<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// register the typo script provided by this extension
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 't3b_config');