<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Hubertus Golf <bertigolf@blsv.de>, BLSV
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

/**
 *
 *
 * @package blsvspstbauantrag
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Blsvspstbauantrag_Domain_Model_Hilfetexte extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Überschift
	 *
	 * @var string
	 */
	protected $heading;

	/**
	 * Hilfekurz
	 *
	 * @var string
	 */
	protected $hilfekurz;

	/**
	 * ausführliche hilfe
	 *
	 * @var string
	 */
	protected $hilfelang;

	/**
	 * Returns the heading
	 *
	 * @return string $heading
	 */
	public function getHeading() {
		return $this->heading;
	}

	/**
	 * Sets the heading
	 *
	 * @param string $heading
	 * @return void
	 */
	public function setHeading($heading) {
		$this->heading = $heading;
	}

	/**
	 * Returns the hilfekurz
	 *
	 * @return string $hilfekurz
	 */
	public function getHilfekurz() {
		return $this->hilfekurz;
	}

	/**
	 * Sets the hilfekurz
	 *
	 * @param string $hilfekurz
	 * @return void
	 */
	public function setHilfekurz($hilfekurz) {
		$this->hilfekurz = $hilfekurz;
	}

	/**
	 * Returns the hilfelang
	 *
	 * @return string $hilfelang
	 */
	public function getHilfelang() {
		return $this->hilfelang;
	}

	/**
	 * Sets the hilfelang
	 *
	 * @param string $hilfelang
	 * @return void
	 */
	public function setHilfelang($hilfelang) {
		$this->hilfelang = $hilfelang;
	}

}
?>