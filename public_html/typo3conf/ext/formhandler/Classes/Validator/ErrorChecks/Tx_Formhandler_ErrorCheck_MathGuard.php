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
 *
 * $Id: Tx_Formhandler_ErrorCheck_MathGuard.php 50192 2011-07-27 18:42:39Z reinhardfuehricht $
 *                                                                        */

/**
 * Validates that a specified field's value matches the expected result of the MathGuard question
 *
 * @author	Reinhard Führicht <rf@typoheads.at>
 * @package	Tx_Formhandler
 * @subpackage	ErrorChecks
 */
class Tx_Formhandler_ErrorCheck_MathGuard extends Tx_Formhandler_AbstractErrorCheck {

	public function check() {
		$checkFailed = '';
		if (t3lib_extMgm::isLoaded('mathguard')) {
			require_once(t3lib_extMgm::extPath('mathguard') . 'class.tx_mathguard.php');

			$captcha = t3lib_div::makeInstance('tx_mathguard');
			$valid = $captcha->validateCaptcha();
			if (!$valid) {
				$checkFailed = $this->getCheckFailed();
			}
		}
		return $checkFailed;
	}

}
?>