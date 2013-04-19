<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);
$configurationVariablesPath = $extensionPath . 'Configuration/ConfigurationVariables/';

include_once($configurationVariablesPath . 'Typo3/System.php');
if (TYPO3_MODE == 'BE') {
	include_once($configurationVariablesPath . 'Typo3/Backend.php');
}
if (getenv('APPLICATION_ENV') == 'development') {
	include_once($configurationVariablesPath . 'Typo3/Development.php');
}
include_once($configurationVariablesPath . 'Extensions/RealUrl.php');