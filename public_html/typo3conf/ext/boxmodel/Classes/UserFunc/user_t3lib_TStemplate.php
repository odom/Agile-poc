<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Web Essentials <extensions@web-essentials.asia>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

function user_includeCustomTsFiles(&$_params, &$pObj) {
	$extKey = 'boxmodel';

		// load custom ts files when loading all ts files from the extension
	if ($pObj->hasGenerated == FALSE && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded($extKey)) {

			// trailing / is needed: eq: Configuration/TypoScript/custom/
		$customPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extKey) . 'Configuration/TypoScript/custom/';
		$files = \TYPO3\CMS\Core\Utility\GeneralUtility::getAllFilesAndFoldersInPath(array(), $customPath, 'ts');

		$orderedFiles = array();
		$mixedFiles = array();
		foreach ($files as $file) {
			$fileParts = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode('/', $file);
			$filename = $fileParts[count($fileParts) - 1];

				// constant file is exluded due to manual include
			if ($filename == 'constants.ts') continue;

				// prepare include ts
			$file = str_replace(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extKey), 'EXT:' . $extKey . '/', $file);
			$file = '<INCLUDE_TYPOSCRIPT: source="FILE: ' . $file . '">';

			$priority = intval($filename);
			if ($priority) {
				$orderedFiles[$priority] .= LF . $file;

					// the file is included now, nothing to do
				continue;
			}

				// all files in here have no priority set
			$mixedFiles[] = $file;
		}

			// start appending found ts files to boxmodel
		$customInclusion = '';

			// low priority first
		if (count($mixedFiles) > 0) {
			$customInclusion .= LF . implode(LF, $mixedFiles);
		}

			// ones with priority
		if (count($orderedFiles) > 0) {
			ksort($orderedFiles);
			$customInclusion .= LF . implode(LF, $orderedFiles);
		}

		$GLOBALS['TYPO3_CONF_VARS']['FE']['defaultTypoScript_setup.']['boxmodel/Configuration/TypoScript/'] = $customInclusion;
		$pObj->hasGenerated = TRUE;
	}
}
?>