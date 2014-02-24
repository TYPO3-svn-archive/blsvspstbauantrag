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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Sportstättenbau Antragsstellung
 *
 * @author Hubertus Golf <bertigolf@blsv.de>
 */
class Tx_Blsvspstbauantrag_Domain_Model_AntragsanforderungTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getStatusReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getStatus()
		);
	}

	/**
	 * @test
	 */
	public function setStatusForIntegerSetsStatus() { 
		$this->fixture->setStatus(12);

		$this->assertSame(
			12,
			$this->fixture->getStatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getArtReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getArt()
		);
	}

	/**
	 * @test
	 */
	public function setArtForIntegerSetsArt() { 
		$this->fixture->setArt(12);

		$this->assertSame(
			12,
			$this->fixture->getArt()
		);
	}
	
	/**
	 * @test
	 */
	public function getFall1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getFall1()
		);
	}

	/**
	 * @test
	 */
	public function setFall1ForbooleanSetsFall() { 
		$this->fixture->setFall1(true);

		$this->assertSame(
			true,
			$this->fixture->getFall1()
		);
	}
	
	/**
	 * @test
	 */
	public function getFall2ReturnsInitialValueForBoolean() {
		$this->assertSame(
				FALSE,
				$this->fixture->getFall2()
		);
	}
	
	/**
	 * @test
	 */
	public function setFall2ForBooleanSetsFall() {
		$this->fixture->setFall2(true);
	
		$this->assertSame(
				true,
				$this->fixture->getFall2()
		);
	}
	/**
	 * @test
	 */
	public function getFall3ReturnsInitialValueForBoolean() {
		$this->assertSame(
				FALSE,
				$this->fixture->getFall3()
		);
	}
	
	/**
	 * @test
	 */
	public function setFall3ForBooleanSetsFall() {
		$this->fixture->setFall3(true);
	
		$this->assertSame(
				true,
				$this->fixture->getFall3()
		);
	}
	
	/**
	 * @test
	 */
	public function getVorzeitigerbaubeginnReturnsInitialValueForBoolean() {
		$this->assertSame(
				FALSE,
				$this->fixture->getVorzeitigerbaubeginn()
		);
	}
	
	/**
	 * @test
	 */
	public function setVorzeitigerbaubeginnForBooleanSetsVorzeitigerbaubeginn() {
		$this->fixture->setVorzeitigerbaubeginn(true);
	
		$this->assertSame(
				true,
				$this->fixture->getVorzeitigerbaubeginn()
		);
	}
	
	/**
	 * @test
	 */
	public function getVereinsnummerReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVereinsnummer()
		);
	}

	/**
	 * @test
	 */
	public function setVereinsnummerForIntegerSetsVereinsnummer() { 
		$this->fixture->setVereinsnummer(12);

		$this->assertSame(
			12,
			$this->fixture->getVereinsnummer()
		);
	}
	
	/**
	 * @test
	 */
	public function getVereinsnameReturnsInitialValueForString() {
		$this->assertSame(
				'',
				$this->fixture->getVereinsname()
		);
	}
	
	/**
	 * @test
	 */
	public function setVereinsnameForStringSetsVereinsname() {
		$this->fixture->setVereinsname('Conceived at T3CON10');
	
		$this->assertSame(
				'Conceived at T3CON10',
				$this->fixture->getVereinsname()
		);
	}
	
	/**
	 * @test
	 */
	public function getStimmkreisReturnsInitialValueForInteger() {
		$this->assertSame(
				0,
				$this->fixture->getStimmkreis()
		);
	}
	
	/**
	 * @test
	 */
	public function setStimmkreisForIntegerSetsStimmkreis() {
		$this->fixture->setStimmkreis(12);
	
		$this->assertSame(
				12,
				$this->fixture->getStimmkreis()
		);
	}
	
	/**
	 * @test
	 */
	public function getBlsvkreisReturnsInitialValueForInteger() {
		$this->assertSame(
				0,
				$this->fixture->getBlsvkreis()
		);
	}
	
	/**
	 * @test
	 */
	public function setBlsvkreisForIntegerSetsBlsvkreis() {
		$this->fixture->setBlsvkreis(12);
	
		$this->assertSame(
				12,
				$this->fixture->getBlsvkreis()
		);
	}
	
	
	/**
	 * @test
	 */
	public function getAnsprechpartnernameReturnsInitialValueForString() { 
		$this->assertSame(
				'',
				$this->fixture->getAnsprechpartnername()
		);
	}

	/**
	 * @test
	 */
	public function setAnsprechpartnernameForStringSetsAnsprechpartnername() { 
		$this->fixture->setAnsprechpartnername('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartnername()
		);
	}
	
	/**
	 * @test
	 */
	public function getBaugenehmigungspflichtigReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getBaugenehmigungspflichtig()
		);
	}

	/**
	 * @test
	 */
	public function setBaugenehmigungspflichtigForBooleanSetsBaugenehmigungspflichtig() { 
		$this->fixture->setBaugenehmigungspflichtig(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getBaugenehmigungspflichtig()
		);
	}
	
	/**
	 * @test
	 */
	public function getMassnahme1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMassnahme1ForStringSetsMassnahme1() { 
		$this->fixture->setMassnahme1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMassnahme1()
		);
	}
	
	/**
	 * @test
	 */
	public function getMassnahmekosten1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMassnahmekosten1()
		);
	}

	/**
	 * @test
	 */
	public function setMassnahmekosten1ForIntegerSetsMassnahmekosten1() { 
		$this->fixture->setMassnahmekosten1(12);

		$this->assertSame(
			12,
			$this->fixture->getMassnahmekosten1()
		);
	}
	
	/**
	 * @test
	 */
	public function getBegruendungReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBegruendungForStringSetsBegruendung() { 
		$this->fixture->setBegruendung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBegruendung()
		);
	}
	
}
?>