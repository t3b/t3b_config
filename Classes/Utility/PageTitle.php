<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Thorsten Boock <thorsten@nerdcenter.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace T3b\T3bConfig\Utility;

class PageTitle {
	/**
	 * @var string
	 */
	protected $defaultSeparator = ': ';

	/**
	 * @var array
	 */
	protected $configuration = array();

	/**
	 * @var array
	 */
	protected $titleRenderingConfiguration = array();

	/**
	 * @param string $content
	 * @return string
	 */
	public function render($content) {
		$this->init();
		if (!isset($this->configuration['tx_t3bconfig_enableTitleRendering']) || !$this->configuration['tx_t3bconfig_enableTitleRendering']) {
			return $content;
		}
		return $this->getPageTitle();
	}

	/**
	 * Initialization
	 */
	protected function init() {
		$this->configuration = $GLOBALS['TSFE']->config['config'];
		if (isset($GLOBALS['TSFE']->tmpl->setup['plugin.']) && is_array($GLOBALS['TSFE']->tmpl->setup['plugin.'])
			&& isset($GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_t3bconfig.']) && is_array($this->configuration['plugin.']['tx_t3bconfig.'])
			&& isset($GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_t3bconfig.']['titleRendering.']) && is_array($this->configuration['plugin.']['tx_t3bconfig.']['titleRendering.'])) {
			$this->titleRenderingConfiguration = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_t3bconfig.']['titleRendering.'];
		}
	}

	/**
	 * @return string
	 */
	protected function getPageTitle() {
		$siteTitle = trim($GLOBALS['TSFE']->tmpl->setup['sitetitle']);

		switch ((integer) self::stdWrap($this->configuration, 'noPageTitle')) {
			case 1:
				return $siteTitle;
				break;
			case 2:
				return '';
				break;
			default:
		}

		$pageTitle = $GLOBALS['TSFE']->altPageTitle ? $GLOBALS['TSFE']->altPageTitle : $GLOBALS['TSFE']->page['title'];

		if (self::stdWrap($this->configuration, 'pageTitleFirst')) {
			$titleParts = array($pageTitle, $siteTitle);
		} else {
			$titleParts = array($siteTitle, $pageTitle);
		}

		$separator = isset($this->configuration['pageTitleSeparator']) ? self::stdWrap($this->configuration, 'pageTitleSeparator') : $this->defaultSeparator;
		return self::glueTitleParts($separator, $titleParts);
	}

	/**
	 * @param array $configuration
	 * @param string $key
	 * @return string|NULL
	 */
	protected static function stdWrap(array $configuration, $key) {
		if (isset($configuration[$key])) {
			if (isset($configuration[$key . '.']) && is_array($configuration[$key . '.'])) {
				return $GLOBALS['TSFE']->cObj->stdWrap($configuration[$key], $configuration[$key . '.']);
			}
			return $configuration[$key];
		}
		return NULL;
	}

	/**
	 * @param string $glue
	 * @param array $titleParts
	 * @return string
	 */
	protected static function glueTitleParts($glue, array $titleParts) {
		foreach ($titleParts as $key => $titlePart) {
			if (empty($titlePart)) {
				unset($titleParts[$key]);
			}
		}
		return implode($glue, $titleParts);
	}
}