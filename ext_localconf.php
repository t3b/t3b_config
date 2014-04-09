<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3b_config']);
$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);
$configurationVariablesPath = $extensionPath . 'Configuration/ConfigurationVariables/';

include_once($configurationVariablesPath . 'Typo3/System.php');
if (TYPO3_MODE == 'BE') {
	include_once($configurationVariablesPath . 'Typo3/Backend.php');
}
if (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()->isDevelopment()) {
	include_once($configurationVariablesPath . 'Typo3/Development.php');
}
if ($extensionConfiguration['includeDefaultRealurlConfiguration']) {
	include_once($configurationVariablesPath . 'Extensions/RealUrl.php');
}