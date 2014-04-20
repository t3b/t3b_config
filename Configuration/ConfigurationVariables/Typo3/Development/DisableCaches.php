<?php

/**
 * The new bootstrapping process that is shipped with TYPO3 since version 6.2.0
 * makes it impossible for us to change the cache configurations from here
 * before the cache is build.
 *
 * That's why you'll have to manually include this file in your
 * AdditionalConfiguration.php file:
 *
 * // the package manager is not initialized at this point so we cannot use the
 * // ExtensionManagement Utility to get the extension path
 * include_once 'ext/t3b_config/Configuration/ConfigurationVariables/Typo3/Development/DisableCaches.php';
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// disable phpcode caching
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_phpcode']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// disable the translation cache
$GLOBALS['TYPO3_CONF_VARS']['SYS']['lang']['cache']['lifetime'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['l10n']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// disable extbase caching
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_reflection']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_object']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// disable fluid caching
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['fluid_template']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// disable caching of ext_localconf, ext_tables, autoloader etc
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_core']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_classes']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\TransientMemoryBackend';

// disable the pages cache
$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_pages']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

// you will want to disable op caches for development purposes.
// if you forgot doing this, we're glad to help you out.
// @todo this probably should be done somewhere else
\TYPO3\CMS\Core\Utility\OpcodeCacheUtility::clearAllActive();
if (extension_loaded('Zend OPcache') && ini_get('opcache.enable')) {
	ini_set('opcache.enable', 0);
}