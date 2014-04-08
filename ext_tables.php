<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// add meta data describing how to render the robots meta tag field
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', array(
	'tx_t3bconfig_robots' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:t3b_config/Resources/Private/Language/locallang_db.xml:pages.tx_t3bconfig_robots',
		'config' => array (
			'type'	=>	'select',
			'items'	=>	array(
				array('LLL:EXT:t3b_config/Resources/Private/Language/locallang_db.xml:pages.tx_t3bconfig_robots.default', 0),
				array('LLL:EXT:t3b_config/Resources/Private/Language/locallang_db.xml:pages.tx_t3bconfig_robots.index_nofollow', 1),
				array('LLL:EXT:t3b_config/Resources/Private/Language/locallang_db.xml:pages.tx_t3bconfig_robots.noindex_follow', 2),
				array('LLL:EXT:t3b_config/Resources/Private/Language/locallang_db.xml:pages.tx_t3bconfig_robots.noindex_nofollow', 3),
			),
		)
	),
));
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', 'tx_t3bconfig_robots', '1,5', 'after:description');

// register the typo script provided by this extension
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 't3b_config');