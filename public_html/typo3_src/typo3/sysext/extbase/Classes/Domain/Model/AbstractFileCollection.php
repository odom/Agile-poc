<?php
namespace TYPO3\CMS\Extbase\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Oliver Hader <oliver.hader@typo3.org>
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
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * A file object (File Abstraction Layer)
 *
 * @api experimental! This class is experimental and subject to change!
 */
abstract class AbstractFileCollection extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * @var \TYPO3\CMS\Core\Resource\Collection\AbstractFileCollection
	 */
	protected $object;

	/**
	 * @param \TYPO3\CMS\Core\Resource\Collection\AbstractFileCollection $object
	 */
	public function setObject(\TYPO3\CMS\Core\Resource\Collection\AbstractFileCollection $object) {
		$this->object = $object;
	}

	/**
	 * @return \TYPO3\CMS\Core\Resource\Collection\AbstractFileCollection
	 */
	public function getObject() {
		return $this->object;
	}
}

?>