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

class tx_t3bconfig_wrapper_pagetitle {
	/**
	 * @param string $content
	 * @return string
	 */
	public function render($content) {
		require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('t3b_config') . 'Classes/Utility/PageTitle.php';
		/* @var T3b\T3bConfig\Utility\PageTitle $pageTitleUtility */
		$pageTitleUtility = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('T3b\T3bConfig\Utility\PageTitle');
		return $pageTitleUtility->render($content);
	}
}