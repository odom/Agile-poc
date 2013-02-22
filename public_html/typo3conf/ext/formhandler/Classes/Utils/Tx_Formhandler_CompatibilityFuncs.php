<?php
/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * A class providing helper functions for Formhandler to stay compatible with older TYPO3 versions.
 * 
 * Copied the two methods "viewArray" and "convertVersionNumberToInteger" from EXT:extdeveval
 *
 * @author	Reinhard Führicht <rf@typoheads.at>
 */
class Tx_Formhandler_CompatibilityFuncs {

	static private $instance = NULL;

	static public function getInstance() {
		if (self::$instance === NULL) {
			self::$instance = new Tx_Formhandler_CompatibilityFuncs();
		}
		return self::$instance;
	}

	protected function __construct() {}

	private function __clone() {}

	/**
	 * @param array $array
	 * @return string
	 * @author Oliver Hader <oliver.hader@typo3.org>
	 */
	public static function viewArray($array) {
		if (class_exists('t3lib_utility_Debug') && is_callable('t3lib_utility_Debug::viewArray')) {
			return t3lib_utility_Debug::viewArray($array);
		} else {
			return t3lib_div::view_array($array);
		}
	}

	/**
	 * @param string $versionNumber
	 * @return integer
	 * @author Oliver Hader <oliver.hader@typo3.org>
	 */
	public static function convertVersionNumberToInteger($versionNumber) {
		if (class_exists('t3lib_utility_VersionNumber') && is_callable('t3lib_utility_VersionNumber::convertVersionNumberToInteger')) {
			return t3lib_utility_VersionNumber::convertVersionNumberToInteger($versionNumber);
		} else {
			return t3lib_div::int_from_ver($versionNumber);
		}
	}

	/**
	 * @param mixed $value Value to be checked
	 * @return boolean
	 */
	public function canBeInterpretedAsInteger($value) {
		if (class_exists('t3lib_utility_Math') && is_callable('t3lib_utility_Math::canBeInterpretedAsInteger')) {
			return t3lib_utility_Math::canBeInterpretedAsInteger($value);
		} else {
			return t3lib_div::testInt($value);
		}
	}

	/**
	 * @param string $llFile File to be loaded
	 * @param string $lang Language to be loaded
	 * @return array
	 */
	public function readLLXMLfile($llFile, $lang) {
		if (class_exists('t3lib_l10n_parser_Llxml')) {
			$xmlParser = t3lib_div::makeInstance('t3lib_l10n_parser_Llxml');
			$LOCAL_LANG = $xmlParser->getParsedData($llFile, $lang);
		} else {
			$LOCAL_LANG = t3lib_div::readLLXMLfile($llFile, $lang);
		}
		return $LOCAL_LANG;
	}
}
?>