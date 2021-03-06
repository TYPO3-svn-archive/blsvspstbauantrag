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
class Tx_Blsvspstbauantrag_Domain_Model_Bestandssicherung extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * antragsnummer
	 *
	 * @var Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung
	 */
	protected $antragsnummer;

	/**
	 * Returns the antragsnummer
	 *
	 * @return Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsnummer
	 */
	public function getAntragsnummer() {
		return $this->antragsnummer;
	}

	/**
	 * Sets the antragsnummer
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsnummer
	 * @return void
	 */
	public function setAntragsnummer(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsnummer) {
		$this->antragsnummer = $antragsnummer;
	}

}
?>