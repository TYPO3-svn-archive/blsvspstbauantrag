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
 * Test case for class Tx_Blsvspstbauantrag_Domain_Model_Regelantrag.
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
class Tx_Blsvspstbauantrag_Domain_Model_RegelantragTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Blsvspstbauantrag_Domain_Model_Regelantrag
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Blsvspstbauantrag_Domain_Model_Regelantrag();
	}

	public function tearDown() {
		unset($this->fixture);
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
	public function getFeuserReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFeuser()
		);
	}

	/**
	 * @test
	 */
	public function setFeuserForIntegerSetsFeuser() { 
		$this->fixture->setFeuser(12);

		$this->assertSame(
			12,
			$this->fixture->getFeuser()
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
	public function getAnsprechpartnernameReturnsInitialValueForString() { }

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
	public function getAnsprechpartnervornameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnsprechpartnervornameForStringSetsAnsprechpartnervorname() { 
		$this->fixture->setAnsprechpartnervorname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartnervorname()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnsprechpartenertitelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnsprechpartenertitelForStringSetsAnsprechpartenertitel() { 
		$this->fixture->setAnsprechpartenertitel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartenertitel()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnsprechpartnerteldienstReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnsprechpartnerteldienstForStringSetsAnsprechpartnerteldienst() { 
		$this->fixture->setAnsprechpartnerteldienst('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartnerteldienst()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnsprechpartnertelprivatReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnsprechpartnertelprivatForStringSetsAnsprechpartnertelprivat() { 
		$this->fixture->setAnsprechpartnertelprivat('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartnertelprivat()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnsprechpartnermobilReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnsprechpartnermobilForStringSetsAnsprechpartnermobil() { 
		$this->fixture->setAnsprechpartnermobil('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartnermobil()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnsprechpartneremailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnsprechpartneremailForStringSetsAnsprechpartneremail() { 
		$this->fixture->setAnsprechpartneremail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartneremail()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck1ForStringSetsVerwendungszweck1() { 
		$this->fixture->setVerwendungszweck1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck1()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl1()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl1ForIntegerSetsAnzahl1() { 
		$this->fixture->setAnzahl1(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl1()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb1()
		);
	}

	/**
	 * @test
	 */
	public function setVbb1ForBooleanSetsVbb1() { 
		$this->fixture->setVbb1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb1()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil1()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil1ForIntegerSetsKostenanteil1() { 
		$this->fixture->setKostenanteil1(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil1()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck2ForStringSetsVerwendungszweck2() { 
		$this->fixture->setVerwendungszweck2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck2()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl2()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl2ForIntegerSetsAnzahl2() { 
		$this->fixture->setAnzahl2(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl2()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb2ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb2()
		);
	}

	/**
	 * @test
	 */
	public function setVbb2ForBooleanSetsVbb2() { 
		$this->fixture->setVbb2(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb2()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil2()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil2ForIntegerSetsKostenanteil2() { 
		$this->fixture->setKostenanteil2(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil2()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck3ForStringSetsVerwendungszweck3() { 
		$this->fixture->setVerwendungszweck3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck3()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl3()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl3ForIntegerSetsAnzahl3() { 
		$this->fixture->setAnzahl3(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl3()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb3ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb3()
		);
	}

	/**
	 * @test
	 */
	public function setVbb3ForBooleanSetsVbb3() { 
		$this->fixture->setVbb3(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb3()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil3()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil3ForIntegerSetsKostenanteil3() { 
		$this->fixture->setKostenanteil3(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil3()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck4ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck4ForStringSetsVerwendungszweck4() { 
		$this->fixture->setVerwendungszweck4('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck4()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl4()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl4ForIntegerSetsAnzahl4() { 
		$this->fixture->setAnzahl4(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl4()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb4ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb4()
		);
	}

	/**
	 * @test
	 */
	public function setVbb4ForBooleanSetsVbb4() { 
		$this->fixture->setVbb4(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb4()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil4()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil4ForIntegerSetsKostenanteil4() { 
		$this->fixture->setKostenanteil4(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil4()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck5ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck5ForStringSetsVerwendungszweck5() { 
		$this->fixture->setVerwendungszweck5('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck5()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl5()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl5ForIntegerSetsAnzahl5() { 
		$this->fixture->setAnzahl5(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl5()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb5ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb5()
		);
	}

	/**
	 * @test
	 */
	public function setVbb5ForBooleanSetsVbb5() { 
		$this->fixture->setVbb5(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb5()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenenteil5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenenteil5()
		);
	}

	/**
	 * @test
	 */
	public function setKostenenteil5ForIntegerSetsKostenenteil5() { 
		$this->fixture->setKostenenteil5(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenenteil5()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck6ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck6ForStringSetsVerwendungszweck6() { 
		$this->fixture->setVerwendungszweck6('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck6()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl6ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl6()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl6ForIntegerSetsAnzahl6() { 
		$this->fixture->setAnzahl6(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl6()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb6ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb6()
		);
	}

	/**
	 * @test
	 */
	public function setVbb6ForBooleanSetsVbb6() { 
		$this->fixture->setVbb6(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb6()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil6ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil6()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil6ForIntegerSetsKostenanteil6() { 
		$this->fixture->setKostenanteil6(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil6()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck7ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck7ForStringSetsVerwendungszweck7() { 
		$this->fixture->setVerwendungszweck7('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck7()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl7ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl7()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl7ForIntegerSetsAnzahl7() { 
		$this->fixture->setAnzahl7(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl7()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb7ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb7()
		);
	}

	/**
	 * @test
	 */
	public function setVbb7ForBooleanSetsVbb7() { 
		$this->fixture->setVbb7(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb7()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil7ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil7()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil7ForIntegerSetsKostenanteil7() { 
		$this->fixture->setKostenanteil7(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil7()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck8ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck8ForStringSetsVerwendungszweck8() { 
		$this->fixture->setVerwendungszweck8('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck8()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl8ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl8()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl8ForIntegerSetsAnzahl8() { 
		$this->fixture->setAnzahl8(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl8()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb8ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb8()
		);
	}

	/**
	 * @test
	 */
	public function setVbb8ForBooleanSetsVbb8() { 
		$this->fixture->setVbb8(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb8()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil8ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil8()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil8ForIntegerSetsKostenanteil8() { 
		$this->fixture->setKostenanteil8(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil8()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck9ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck9ForStringSetsVerwendungszweck9() { 
		$this->fixture->setVerwendungszweck9('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck9()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl9ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl9()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl9ForIntegerSetsAnzahl9() { 
		$this->fixture->setAnzahl9(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl9()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb9ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb9()
		);
	}

	/**
	 * @test
	 */
	public function setVbb9ForBooleanSetsVbb9() { 
		$this->fixture->setVbb9(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb9()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil9ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil9()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil9ForIntegerSetsKostenanteil9() { 
		$this->fixture->setKostenanteil9(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil9()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck10ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck10ForStringSetsVerwendungszweck10() { 
		$this->fixture->setVerwendungszweck10('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck10()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl10ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl10()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl10ForIntegerSetsAnzahl10() { 
		$this->fixture->setAnzahl10(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl10()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb10ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb10()
		);
	}

	/**
	 * @test
	 */
	public function setVbb10ForBooleanSetsVbb10() { 
		$this->fixture->setVbb10(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb10()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil10ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil10()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil10ForIntegerSetsKostenanteil10() { 
		$this->fixture->setKostenanteil10(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil10()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck11ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck11ForStringSetsVerwendungszweck11() { 
		$this->fixture->setVerwendungszweck11('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck11()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl11ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl11()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl11ForIntegerSetsAnzahl11() { 
		$this->fixture->setAnzahl11(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl11()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb11ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb11()
		);
	}

	/**
	 * @test
	 */
	public function setVbb11ForBooleanSetsVbb11() { 
		$this->fixture->setVbb11(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb11()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil11ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil11()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil11ForIntegerSetsKostenanteil11() { 
		$this->fixture->setKostenanteil11(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil11()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck12ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck12ForStringSetsVerwendungszweck12() { 
		$this->fixture->setVerwendungszweck12('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck12()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl12ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl12()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl12ForIntegerSetsAnzahl12() { 
		$this->fixture->setAnzahl12(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl12()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb12ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb12()
		);
	}

	/**
	 * @test
	 */
	public function setVbb12ForBooleanSetsVbb12() { 
		$this->fixture->setVbb12(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb12()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil12ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil12()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil12ForIntegerSetsKostenanteil12() { 
		$this->fixture->setKostenanteil12(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil12()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck13ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck13ForStringSetsVerwendungszweck13() { 
		$this->fixture->setVerwendungszweck13('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck13()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl13ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl13()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl13ForIntegerSetsAnzahl13() { 
		$this->fixture->setAnzahl13(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl13()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb13ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb13()
		);
	}

	/**
	 * @test
	 */
	public function setVbb13ForBooleanSetsVbb13() { 
		$this->fixture->setVbb13(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb13()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil13ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil13()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil13ForIntegerSetsKostenanteil13() { 
		$this->fixture->setKostenanteil13(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil13()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck14ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck14ForStringSetsVerwendungszweck14() { 
		$this->fixture->setVerwendungszweck14('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck14()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl14ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl14()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl14ForIntegerSetsAnzahl14() { 
		$this->fixture->setAnzahl14(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl14()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb14ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb14()
		);
	}

	/**
	 * @test
	 */
	public function setVbb14ForBooleanSetsVbb14() { 
		$this->fixture->setVbb14(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb14()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil14ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil14()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil14ForIntegerSetsKostenanteil14() { 
		$this->fixture->setKostenanteil14(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil14()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck15ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck15ForStringSetsVerwendungszweck15() { 
		$this->fixture->setVerwendungszweck15('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck15()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl15ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl15()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl15ForIntegerSetsAnzahl15() { 
		$this->fixture->setAnzahl15(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl15()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb15ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb15()
		);
	}

	/**
	 * @test
	 */
	public function setVbb15ForBooleanSetsVbb15() { 
		$this->fixture->setVbb15(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb15()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil15ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil15()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil15ForIntegerSetsKostenanteil15() { 
		$this->fixture->setKostenanteil15(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil15()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck16ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck16ForStringSetsVerwendungszweck16() { 
		$this->fixture->setVerwendungszweck16('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck16()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl16ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl16()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl16ForIntegerSetsAnzahl16() { 
		$this->fixture->setAnzahl16(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl16()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb16ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb16()
		);
	}

	/**
	 * @test
	 */
	public function setVbb16ForBooleanSetsVbb16() { 
		$this->fixture->setVbb16(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb16()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil16ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil16()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil16ForIntegerSetsKostenanteil16() { 
		$this->fixture->setKostenanteil16(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil16()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck17ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck17ForStringSetsVerwendungszweck17() { 
		$this->fixture->setVerwendungszweck17('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck17()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl17ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl17()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl17ForIntegerSetsAnzahl17() { 
		$this->fixture->setAnzahl17(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl17()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb17ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb17()
		);
	}

	/**
	 * @test
	 */
	public function setVbb17ForBooleanSetsVbb17() { 
		$this->fixture->setVbb17(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb17()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil17ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil17()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil17ForIntegerSetsKostenanteil17() { 
		$this->fixture->setKostenanteil17(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil17()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck18ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck18ForStringSetsVerwendungszweck18() { 
		$this->fixture->setVerwendungszweck18('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck18()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl18ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl18()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl18ForIntegerSetsAnzahl18() { 
		$this->fixture->setAnzahl18(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl18()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb18ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb18()
		);
	}

	/**
	 * @test
	 */
	public function setVbb18ForBooleanSetsVbb18() { 
		$this->fixture->setVbb18(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb18()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil18ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil18()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil18ForIntegerSetsKostenanteil18() { 
		$this->fixture->setKostenanteil18(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil18()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck19ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck19ForStringSetsVerwendungszweck19() { 
		$this->fixture->setVerwendungszweck19('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck19()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl19ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl19()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl19ForIntegerSetsAnzahl19() { 
		$this->fixture->setAnzahl19(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl19()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb19ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb19()
		);
	}

	/**
	 * @test
	 */
	public function setVbb19ForBooleanSetsVbb19() { 
		$this->fixture->setVbb19(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb19()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil19ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil19()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil19ForIntegerSetsKostenanteil19() { 
		$this->fixture->setKostenanteil19(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil19()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck20ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck20ForStringSetsVerwendungszweck20() { 
		$this->fixture->setVerwendungszweck20('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck20()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl20ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl20()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl20ForIntegerSetsAnzahl20() { 
		$this->fixture->setAnzahl20(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl20()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb20ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb20()
		);
	}

	/**
	 * @test
	 */
	public function setVbb20ForBooleanSetsVbb20() { 
		$this->fixture->setVbb20(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb20()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil20ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil20()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil20ForIntegerSetsKostenanteil20() { 
		$this->fixture->setKostenanteil20(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil20()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck21ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck21ForStringSetsVerwendungszweck21() { 
		$this->fixture->setVerwendungszweck21('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck21()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl21ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl21()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl21ForIntegerSetsAnzahl21() { 
		$this->fixture->setAnzahl21(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl21()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb21ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb21()
		);
	}

	/**
	 * @test
	 */
	public function setVbb21ForBooleanSetsVbb21() { 
		$this->fixture->setVbb21(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb21()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil21ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil21()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil21ForIntegerSetsKostenanteil21() { 
		$this->fixture->setKostenanteil21(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil21()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck22ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck22ForStringSetsVerwendungszweck22() { 
		$this->fixture->setVerwendungszweck22('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck22()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl22ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl22()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl22ForIntegerSetsAnzahl22() { 
		$this->fixture->setAnzahl22(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl22()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil22ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil22()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil22ForIntegerSetsKostenanteil22() { 
		$this->fixture->setKostenanteil22(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil22()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb22ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb22()
		);
	}

	/**
	 * @test
	 */
	public function setVbb22ForBooleanSetsVbb22() { 
		$this->fixture->setVbb22(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb22()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck23ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck23ForStringSetsVerwendungszweck23() { 
		$this->fixture->setVerwendungszweck23('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck23()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl23ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl23()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl23ForIntegerSetsAnzahl23() { 
		$this->fixture->setAnzahl23(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl23()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb23ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb23()
		);
	}

	/**
	 * @test
	 */
	public function setVbb23ForBooleanSetsVbb23() { 
		$this->fixture->setVbb23(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb23()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil23ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil23()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil23ForIntegerSetsKostenanteil23() { 
		$this->fixture->setKostenanteil23(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil23()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck24ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck24ForStringSetsVerwendungszweck24() { 
		$this->fixture->setVerwendungszweck24('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck24()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl24ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl24()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl24ForIntegerSetsAnzahl24() { 
		$this->fixture->setAnzahl24(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl24()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb24ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb24()
		);
	}

	/**
	 * @test
	 */
	public function setVbb24ForBooleanSetsVbb24() { 
		$this->fixture->setVbb24(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb24()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil24ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil24()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil24ForIntegerSetsKostenanteil24() { 
		$this->fixture->setKostenanteil24(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil24()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerwendungszweck25ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerwendungszweck25ForStringSetsVerwendungszweck25() { 
		$this->fixture->setVerwendungszweck25('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerwendungszweck25()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl25ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl25()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl25ForIntegerSetsAnzahl25() { 
		$this->fixture->setAnzahl25(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl25()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbb25ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbb25()
		);
	}

	/**
	 * @test
	 */
	public function setVbb25ForBooleanSetsVbb25() { 
		$this->fixture->setVbb25(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbb25()
		);
	}
	
	/**
	 * @test
	 */
	public function getKostenanteil25ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKostenanteil25()
		);
	}

	/**
	 * @test
	 */
	public function setKostenanteil25ForIntegerSetsKostenanteil25() { 
		$this->fixture->setKostenanteil25(12);

		$this->assertSame(
			12,
			$this->fixture->getKostenanteil25()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungbarmittelReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungbarmittel()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungbarmittelForIntegerSetsFinanzierungbarmittel() { 
		$this->fixture->setFinanzierungbarmittel(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungbarmittel()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierunggeldspendenReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierunggeldspenden()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierunggeldspendenForIntegerSetsFinanzierunggeldspenden() { 
		$this->fixture->setFinanzierunggeldspenden(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierunggeldspenden()
		);
	}
	
	/**
	 * @test
	 */
	public function getFianzierungkreditReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFianzierungkredit()
		);
	}

	/**
	 * @test
	 */
	public function setFianzierungkreditForIntegerSetsFianzierungkredit() { 
		$this->fixture->setFianzierungkredit(12);

		$this->assertSame(
			12,
			$this->fixture->getFianzierungkredit()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungaleistungReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungaleistung()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungaleistungForIntegerSetsFinanzierungaleistung() { 
		$this->fixture->setFinanzierungaleistung(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungaleistung()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungsachleistungReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungsachleistung()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungsachleistungForIntegerSetsFinanzierungsachleistung() { 
		$this->fixture->setFinanzierungsachleistung(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungsachleistung()
		);
	}
	
	/**
	 * @test
	 */
	public function getFianzierungkommuneReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFianzierungkommune()
		);
	}

	/**
	 * @test
	 */
	public function setFianzierungkommuneForIntegerSetsFianzierungkommune() { 
		$this->fixture->setFianzierungkommune(12);

		$this->assertSame(
			12,
			$this->fixture->getFianzierungkommune()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierunglkrReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierunglkr()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierunglkrForIntegerSetsFinanzierunglkr() { 
		$this->fixture->setFinanzierunglkr(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierunglkr()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungsonstigeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungsonstige()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungsonstigeForIntegerSetsFinanzierungsonstige() { 
		$this->fixture->setFinanzierungsonstige(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungsonstige()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungvorsteuerReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungvorsteuer()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungvorsteuerForIntegerSetsFinanzierungvorsteuer() { 
		$this->fixture->setFinanzierungvorsteuer(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungvorsteuer()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungzuschussReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungzuschuss()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungzuschussForIntegerSetsFinanzierungzuschuss() { 
		$this->fixture->setFinanzierungzuschuss(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungzuschuss()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungdarlehenReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungdarlehen()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungdarlehenForIntegerSetsFinanzierungdarlehen() { 
		$this->fixture->setFinanzierungdarlehen(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungdarlehen()
		);
	}
	
	/**
	 * @test
	 */
	public function getSicherunggrundschuldReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getSicherunggrundschuld()
		);
	}

	/**
	 * @test
	 */
	public function setSicherunggrundschuldForBooleanSetsSicherunggrundschuld() { 
		$this->fixture->setSicherunggrundschuld(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getSicherunggrundschuld()
		);
	}
	
	/**
	 * @test
	 */
	public function getSicherungkbuergschaftReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getSicherungkbuergschaft()
		);
	}

	/**
	 * @test
	 */
	public function setSicherungkbuergschaftForBooleanSetsSicherungkbuergschaft() { 
		$this->fixture->setSicherungkbuergschaft(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getSicherungkbuergschaft()
		);
	}
	
	/**
	 * @test
	 */
	public function getSicherungbbuergschaftReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getSicherungbbuergschaft()
		);
	}

	/**
	 * @test
	 */
	public function setSicherungbbuergschaftForBooleanSetsSicherungbbuergschaft() { 
		$this->fixture->setSicherungbbuergschaft(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getSicherungbbuergschaft()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfkommune1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfkommune1()
		);
	}

	/**
	 * @test
	 */
	public function setZwfkommune1ForBooleanSetsZwfkommune1() { 
		$this->fixture->setZwfkommune1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfkommune1()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfkommune2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfkommune2()
		);
	}

	/**
	 * @test
	 */
	public function setZwfkommune2ForIntegerSetsZwfkommune2() { 
		$this->fixture->setZwfkommune2(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfkommune2()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfkommune3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfkommune3()
		);
	}

	/**
	 * @test
	 */
	public function setZwfkommune3ForIntegerSetsZwfkommune3() { 
		$this->fixture->setZwfkommune3(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfkommune3()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfkommune4ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfkommune4()
		);
	}

	/**
	 * @test
	 */
	public function setZwfkommune4ForBooleanSetsZwfkommune4() { 
		$this->fixture->setZwfkommune4(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfkommune4()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfkommune5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfkommune5()
		);
	}

	/**
	 * @test
	 */
	public function setZwfkommune5ForIntegerSetsZwfkommune5() { 
		$this->fixture->setZwfkommune5(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfkommune5()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfkommune6ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfkommune6()
		);
	}

	/**
	 * @test
	 */
	public function setZwfkommune6ForIntegerSetsZwfkommune6() { 
		$this->fixture->setZwfkommune6(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfkommune6()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwflandkreis1()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis1ForBooleanSetsZwflandkreis1() { 
		$this->fixture->setZwflandkreis1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwflandkreis1()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwflandkreis2()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis2ForIntegerSetsZwflandkreis2() { 
		$this->fixture->setZwflandkreis2(12);

		$this->assertSame(
			12,
			$this->fixture->getZwflandkreis2()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwflandkreis3()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis3ForIntegerSetsZwflandkreis3() { 
		$this->fixture->setZwflandkreis3(12);

		$this->assertSame(
			12,
			$this->fixture->getZwflandkreis3()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis4ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwflandkreis4()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis4ForBooleanSetsZwflandkreis4() { 
		$this->fixture->setZwflandkreis4(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwflandkreis4()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwflandkreis5()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis5ForIntegerSetsZwflandkreis5() { 
		$this->fixture->setZwflandkreis5(12);

		$this->assertSame(
			12,
			$this->fixture->getZwflandkreis5()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis6ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwflandkreis6()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis6ForIntegerSetsZwflandkreis6() { 
		$this->fixture->setZwflandkreis6(12);

		$this->assertSame(
			12,
			$this->fixture->getZwflandkreis6()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis7ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwflandkreis7()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis7ForBooleanSetsZwflandkreis7() { 
		$this->fixture->setZwflandkreis7(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwflandkreis7()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis8ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwflandkreis8()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis8ForIntegerSetsZwflandkreis8() { 
		$this->fixture->setZwflandkreis8(12);

		$this->assertSame(
			12,
			$this->fixture->getZwflandkreis8()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwflandkreis9ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwflandkreis9()
		);
	}

	/**
	 * @test
	 */
	public function setZwflandkreis9ForIntegerSetsZwflandkreis9() { 
		$this->fixture->setZwflandkreis9(12);

		$this->assertSame(
			12,
			$this->fixture->getZwflandkreis9()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsonstige1()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige1ForBooleanSetsZwfsonstige1() { 
		$this->fixture->setZwfsonstige1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsonstige1()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsonstige2()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige2ForIntegerSetsZwfsonstige2() { 
		$this->fixture->setZwfsonstige2(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsonstige2()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsonstige3()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige3ForIntegerSetsZwfsonstige3() { 
		$this->fixture->setZwfsonstige3(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsonstige3()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige4ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsonstige4()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige4ForBooleanSetsZwfsonstige4() { 
		$this->fixture->setZwfsonstige4(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsonstige4()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsonstige5()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige5ForIntegerSetsZwfsonstige5() { 
		$this->fixture->setZwfsonstige5(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsonstige5()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige6ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsonstige6()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige6ForIntegerSetsZwfsonstige6() { 
		$this->fixture->setZwfsonstige6(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsonstige6()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige7ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsonstige7()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige7ForBooleanSetsZwfsonstige7() { 
		$this->fixture->setZwfsonstige7(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsonstige7()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige8ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsonstige8()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige8ForIntegerSetsZwfsonstige8() { 
		$this->fixture->setZwfsonstige8(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsonstige8()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsonstige9ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsonstige9()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsonstige9ForIntegerSetsZwfsonstige9() { 
		$this->fixture->setZwfsonstige9(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsonstige9()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfvorsteuer1()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer1ForBooleanSetsZwfvorsteuer1() { 
		$this->fixture->setZwfvorsteuer1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfvorsteuer1()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfvorsteuer2()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer2ForIntegerSetsZwfvorsteuer2() { 
		$this->fixture->setZwfvorsteuer2(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfvorsteuer2()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfvorsteuer3()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer3ForIntegerSetsZwfvorsteuer3() { 
		$this->fixture->setZwfvorsteuer3(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfvorsteuer3()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer4ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfvorsteuer4()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer4ForBooleanSetsZwfvorsteuer4() { 
		$this->fixture->setZwfvorsteuer4(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfvorsteuer4()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfvorsteuer5()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer5ForIntegerSetsZwfvorsteuer5() { 
		$this->fixture->setZwfvorsteuer5(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfvorsteuer5()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer6ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfvorsteuer6()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer6ForIntegerSetsZwfvorsteuer6() { 
		$this->fixture->setZwfvorsteuer6(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfvorsteuer6()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer7ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfvorsteuer7()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer7ForBooleanSetsZwfvorsteuer7() { 
		$this->fixture->setZwfvorsteuer7(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfvorsteuer7()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer8ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfvorsteuer8()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer8ForIntegerSetsZwfvorsteuer8() { 
		$this->fixture->setZwfvorsteuer8(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfvorsteuer8()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfvorsteuer9ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfvorsteuer9()
		);
	}

	/**
	 * @test
	 */
	public function setZwfvorsteuer9ForIntegerSetsZwfvorsteuer9() { 
		$this->fixture->setZwfvorsteuer9(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfvorsteuer9()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsmf1()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf1ForBooleanSetsZwfsmf1() { 
		$this->fixture->setZwfsmf1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsmf1()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsmf2()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf2ForIntegerSetsZwfsmf2() { 
		$this->fixture->setZwfsmf2(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsmf2()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsmf3()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf3ForIntegerSetsZwfsmf3() { 
		$this->fixture->setZwfsmf3(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsmf3()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf4ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsmf4()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf4ForBooleanSetsZwfsmf4() { 
		$this->fixture->setZwfsmf4(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsmf4()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsmf5()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf5ForIntegerSetsZwfsmf5() { 
		$this->fixture->setZwfsmf5(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsmf5()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf6ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsmf6()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf6ForIntegerSetsZwfsmf6() { 
		$this->fixture->setZwfsmf6(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsmf6()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf7ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsmf7()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf7ForBooleanSetsZwfsmf7() { 
		$this->fixture->setZwfsmf7(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getZwfsmf7()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf8ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsmf8()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf8ForIntegerSetsZwfsmf8() { 
		$this->fixture->setZwfsmf8(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsmf8()
		);
	}
	
	/**
	 * @test
	 */
	public function getZwfsmf9ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZwfsmf9()
		);
	}

	/**
	 * @test
	 */
	public function setZwfsmf9ForIntegerSetsZwfsmf9() { 
		$this->fixture->setZwfsmf9(12);

		$this->assertSame(
			12,
			$this->fixture->getZwfsmf9()
		);
	}
	
	/**
	 * @test
	 */
	public function getJahreszahl1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getJahreszahl1()
		);
	}

	/**
	 * @test
	 */
	public function setJahreszahl1ForIntegerSetsJahreszahl1() { 
		$this->fixture->setJahreszahl1(12);

		$this->assertSame(
			12,
			$this->fixture->getJahreszahl1()
		);
	}
	
	/**
	 * @test
	 */
	public function getJahreszahl2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getJahreszahl2()
		);
	}

	/**
	 * @test
	 */
	public function setJahreszahl2ForIntegerSetsJahreszahl2() { 
		$this->fixture->setJahreszahl2(12);

		$this->assertSame(
			12,
			$this->fixture->getJahreszahl2()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuvdurchschnittsergebnisReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGuvdurchschnittsergebnis()
		);
	}

	/**
	 * @test
	 */
	public function setGuvdurchschnittsergebnisForIntegerSetsGuvdurchschnittsergebnis() { 
		$this->fixture->setGuvdurchschnittsergebnis(12);

		$this->assertSame(
			12,
			$this->fixture->getGuvdurchschnittsergebnis()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbbgruende1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende1()
		);
	}

	/**
	 * @test
	 */
	public function setVbbgruende1ForBooleanSetsVbbgruende1() { 
		$this->fixture->setVbbgruende1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende1()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbbgruende2ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende2()
		);
	}

	/**
	 * @test
	 */
	public function setVbbgruende2ForBooleanSetsVbbgruende2() { 
		$this->fixture->setVbbgruende2(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende2()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbbgruende3ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende3()
		);
	}

	/**
	 * @test
	 */
	public function setVbbgruende3ForBooleanSetsVbbgruende3() { 
		$this->fixture->setVbbgruende3(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende3()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbbgruende4ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende4()
		);
	}

	/**
	 * @test
	 */
	public function setVbbgruende4ForBooleanSetsVbbgruende4() { 
		$this->fixture->setVbbgruende4(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende4()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbbgruende5ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende5()
		);
	}

	/**
	 * @test
	 */
	public function setVbbgruende5ForBooleanSetsVbbgruende5() { 
		$this->fixture->setVbbgruende5(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbbgruende5()
		);
	}
	
	/**
	 * @test
	 */
	public function getBegruendungsonstigeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBegruendungsonstigeForStringSetsBegruendungsonstige() { 
		$this->fixture->setBegruendungsonstige('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBegruendungsonstige()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbberklaerung1ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbberklaerung1()
		);
	}

	/**
	 * @test
	 */
	public function setVbberklaerung1ForBooleanSetsVbberklaerung1() { 
		$this->fixture->setVbberklaerung1(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbberklaerung1()
		);
	}
	
	/**
	 * @test
	 */
	public function getVbberklaerung2ReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getVbberklaerung2()
		);
	}

	/**
	 * @test
	 */
	public function setVbberklaerung2ForBooleanSetsVbberklaerung2() { 
		$this->fixture->setVbberklaerung2(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getVbberklaerung2()
		);
	}
	
	/**
	 * @test
	 */
	public function getVmlstichtagReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setVmlstichtagForDateTimeSetsVmlstichtag() { }
	
	/**
	 * @test
	 */
	public function getAnzahlbooteReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahlboote()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahlbooteForIntegerSetsAnzahlboote() { 
		$this->fixture->setAnzahlboote(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahlboote()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahlpferdeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahlpferde()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahlpferdeForIntegerSetsAnzahlpferde() { 
		$this->fixture->setAnzahlpferde(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahlpferde()
		);
	}
	
	/**
	 * @test
	 */
	public function getDatumbauberatungReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDatumbauberatungForDateTimeSetsDatumbauberatung() { }
	
	/**
	 * @test
	 */
	public function getDatumgespraechkvReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDatumgespraechkvForDateTimeSetsDatumgespraechkv() { }
	
	/**
	 * @test
	 */
	public function getOrtsbesichtigungkvReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getOrtsbesichtigungkv()
		);
	}

	/**
	 * @test
	 */
	public function setOrtsbesichtigungkvForBooleanSetsOrtsbesichtigungkv() { 
		$this->fixture->setOrtsbesichtigungkv(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getOrtsbesichtigungkv()
		);
	}
	
	/**
	 * @test
	 */
	public function getAbsendedatumReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setAbsendedatumForDateTimeSetsAbsendedatum() { }
	
	/**
	 * @test
	 */
	public function getEigentumReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getEigentum()
		);
	}

	/**
	 * @test
	 */
	public function setEigentumForBooleanSetsEigentum() { 
		$this->fixture->setEigentum(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getEigentum()
		);
	}
	
	/**
	 * @test
	 */
	public function getErbbaurechtReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErbbaurecht()
		);
	}

	/**
	 * @test
	 */
	public function setErbbaurechtForBooleanSetsErbbaurecht() { 
		$this->fixture->setErbbaurecht(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErbbaurecht()
		);
	}
	
	/**
	 * @test
	 */
	public function getPachtvertragReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getPachtvertrag()
		);
	}

	/**
	 * @test
	 */
	public function setPachtvertragForBooleanSetsPachtvertrag() { 
		$this->fixture->setPachtvertrag(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getPachtvertrag()
		);
	}
	
	/**
	 * @test
	 */
	public function getEigentuemerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEigentuemerForStringSetsEigentuemer() { 
		$this->fixture->setEigentuemer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEigentuemer()
		);
	}
	
	/**
	 * @test
	 */
	public function getGrundstuecksgroesseReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGrundstuecksgroesse()
		);
	}

	/**
	 * @test
	 */
	public function setGrundstuecksgroesseForIntegerSetsGrundstuecksgroesse() { 
		$this->fixture->setGrundstuecksgroesse(12);

		$this->assertSame(
			12,
			$this->fixture->getGrundstuecksgroesse()
		);
	}
	
	/**
	 * @test
	 */
	public function getFlurnummerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFlurnummerForStringSetsFlurnummer() { 
		$this->fixture->setFlurnummer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFlurnummer()
		);
	}
	
	/**
	 * @test
	 */
	public function getGemarkungReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGemarkungForStringSetsGemarkung() { 
		$this->fixture->setGemarkung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGemarkung()
		);
	}
	
	/**
	 * @test
	 */
	public function getLaufzeitReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setLaufzeitForDateTimeSetsLaufzeit() { }
	
	/**
	 * @test
	 */
	public function getErklrechtsanspruchReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklrechtsanspruch()
		);
	}

	/**
	 * @test
	 */
	public function setErklrechtsanspruchForBooleanSetsErklrechtsanspruch() { 
		$this->fixture->setErklrechtsanspruch(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklrechtsanspruch()
		);
	}
	
	/**
	 * @test
	 */
	public function getErklmeldepflichtReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklmeldepflicht()
		);
	}

	/**
	 * @test
	 */
	public function setErklmeldepflichtForBooleanSetsErklmeldepflicht() { 
		$this->fixture->setErklmeldepflicht(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklmeldepflicht()
		);
	}
	
	/**
	 * @test
	 */
	public function getErklbaubeginnReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklbaubeginn()
		);
	}

	/**
	 * @test
	 */
	public function setErklbaubeginnForBooleanSetsErklbaubeginn() { 
		$this->fixture->setErklbaubeginn(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklbaubeginn()
		);
	}
	
	/**
	 * @test
	 */
	public function getErklvollstaendigeangabenReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklvollstaendigeangaben()
		);
	}

	/**
	 * @test
	 */
	public function setErklvollstaendigeangabenForBooleanSetsErklvollstaendigeangaben() { 
		$this->fixture->setErklvollstaendigeangaben(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklvollstaendigeangaben()
		);
	}
	
	/**
	 * @test
	 */
	public function getErklsubventionReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklsubvention()
		);
	}

	/**
	 * @test
	 */
	public function setErklsubventionForBooleanSetsErklsubvention() { 
		$this->fixture->setErklsubvention(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklsubvention()
		);
	}
	
	/**
	 * @test
	 */
	public function getErklfinanzierungReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklfinanzierung()
		);
	}

	/**
	 * @test
	 */
	public function setErklfinanzierungForBooleanSetsErklfinanzierung() { 
		$this->fixture->setErklfinanzierung(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklfinanzierung()
		);
	}
	
	/**
	 * @test
	 */
	public function getMasnahmenartReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMasnahmenart()
		);
	}

	/**
	 * @test
	 */
	public function setMasnahmenartForIntegerSetsMasnahmenart() { 
		$this->fixture->setMasnahmenart(12);

		$this->assertSame(
			12,
			$this->fixture->getMasnahmenart()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnsprechpartnerfaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAnsprechpartnerfaxForStringSetsAnsprechpartnerfax() { 
		$this->fixture->setAnsprechpartnerfax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAnsprechpartnerfax()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzierungzuschussklReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzierungzuschusskl()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzierungzuschussklForIntegerSetsFinanzierungzuschusskl() { 
		$this->fixture->setFinanzierungzuschusskl(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzierungzuschusskl()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuvbeginnReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setGuvbeginnForDateTimeSetsGuvbeginn() { }
	
	/**
	 * @test
	 */
	public function getGuvendeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setGuvendeForDateTimeSetsGuvende() { }
	
	/**
	 * @test
	 */
	public function getGuvbilanzReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGuvbilanz()
		);
	}

	/**
	 * @test
	 */
	public function setGuvbilanzForIntegerSetsGuvbilanz() { 
		$this->fixture->setGuvbilanz(20);

		$this->assertSame(
			20,
			$this->fixture->getGuvbilanz()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuveuerechnungReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getGuveuerechnung()
		);
	}

	/**
	 * @test
	 */
	public function setGuveuerechnungForBooleanSetsGuveuerechnung() { 
		$this->fixture->setGuveuerechnung(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getGuveuerechnung()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuveinnahmengesamtReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGuveinnahmengesamt()
		);
	}

	/**
	 * @test
	 */
	public function setGuveinnahmengesamtForIntegerSetsGuveinnahmengesamt() { 
		$this->fixture->setGuveinnahmengesamt(12);

		$this->assertSame(
			12,
			$this->fixture->getGuveinnahmengesamt()
		);
	}
	
	/**
	 * @test
	 */
	public function getEinnahmenbeitraegeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getEinnahmenbeitraege()
		);
	}

	/**
	 * @test
	 */
	public function setEinnahmenbeitraegeForIntegerSetsEinnahmenbeitraege() { 
		$this->fixture->setEinnahmenbeitraege(12);

		$this->assertSame(
			12,
			$this->fixture->getEinnahmenbeitraege()
		);
	}
	
	/**
	 * @test
	 */
	public function getEinnahmenspendenReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getEinnahmenspenden()
		);
	}

	/**
	 * @test
	 */
	public function setEinnahmenspendenForIntegerSetsEinnahmenspenden() { 
		$this->fixture->setEinnahmenspenden(12);

		$this->assertSame(
			12,
			$this->fixture->getEinnahmenspenden()
		);
	}
	
	/**
	 * @test
	 */
	public function getEinnahmenzuschuesseReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getEinnahmenzuschuesse()
		);
	}

	/**
	 * @test
	 */
	public function setEinnahmenzuschuesseForIntegerSetsEinnahmenzuschuesse() { 
		$this->fixture->setEinnahmenzuschuesse(12);

		$this->assertSame(
			12,
			$this->fixture->getEinnahmenzuschuesse()
		);
	}
	
	/**
	 * @test
	 */
	public function getGuvausgabengesamtReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGuvausgabengesamt()
		);
	}

	/**
	 * @test
	 */
	public function setGuvausgabengesamtForIntegerSetsGuvausgabengesamt() { 
		$this->fixture->setGuvausgabengesamt(12);

		$this->assertSame(
			12,
			$this->fixture->getGuvausgabengesamt()
		);
	}
	
	/**
	 * @test
	 */
	public function getAusgabeninstandhaltungReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAusgabeninstandhaltung()
		);
	}

	/**
	 * @test
	 */
	public function setAusgabeninstandhaltungForIntegerSetsAusgabeninstandhaltung() { 
		$this->fixture->setAusgabeninstandhaltung(12);

		$this->assertSame(
			12,
			$this->fixture->getAusgabeninstandhaltung()
		);
	}
	
	/**
	 * @test
	 */
	public function getAusgabensportbetriebReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAusgabensportbetrieb()
		);
	}

	/**
	 * @test
	 */
	public function setAusgabensportbetriebForIntegerSetsAusgabensportbetrieb() { 
		$this->fixture->setAusgabensportbetrieb(12);

		$this->assertSame(
			12,
			$this->fixture->getAusgabensportbetrieb()
		);
	}
	
	/**
	 * @test
	 */
	public function getAusgabenverwaltungReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAusgabenverwaltung()
		);
	}

	/**
	 * @test
	 */
	public function setAusgabenverwaltungForIntegerSetsAusgabenverwaltung() { 
		$this->fixture->setAusgabenverwaltung(12);

		$this->assertSame(
			12,
			$this->fixture->getAusgabenverwaltung()
		);
	}
	
	/**
	 * @test
	 */
	public function getAusgabenabschreibungReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAusgabenabschreibung()
		);
	}

	/**
	 * @test
	 */
	public function setAusgabenabschreibungForIntegerSetsAusgabenabschreibung() { 
		$this->fixture->setAusgabenabschreibung(12);

		$this->assertSame(
			12,
			$this->fixture->getAusgabenabschreibung()
		);
	}
	
	/**
	 * @test
	 */
	public function getUeberschussfehlbetragReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getUeberschussfehlbetrag()
		);
	}

	/**
	 * @test
	 */
	public function setUeberschussfehlbetragForIntegerSetsUeberschussfehlbetrag() { 
		$this->fixture->setUeberschussfehlbetrag(12);

		$this->assertSame(
			12,
			$this->fixture->getUeberschussfehlbetrag()
		);
	}
	
	/**
	 * @test
	 */
	public function getVermoegensgegenstaendeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVermoegensgegenstaende()
		);
	}

	/**
	 * @test
	 */
	public function setVermoegensgegenstaendeForIntegerSetsVermoegensgegenstaende() { 
		$this->fixture->setVermoegensgegenstaende(12);

		$this->assertSame(
			12,
			$this->fixture->getVermoegensgegenstaende()
		);
	}
	
	/**
	 * @test
	 */
	public function getSachanlagenReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSachanlagen()
		);
	}

	/**
	 * @test
	 */
	public function setSachanlagenForIntegerSetsSachanlagen() { 
		$this->fixture->setSachanlagen(12);

		$this->assertSame(
			12,
			$this->fixture->getSachanlagen()
		);
	}
	
	/**
	 * @test
	 */
	public function getFinanzanlagenReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFinanzanlagen()
		);
	}

	/**
	 * @test
	 */
	public function setFinanzanlagenForIntegerSetsFinanzanlagen() { 
		$this->fixture->setFinanzanlagen(12);

		$this->assertSame(
			12,
			$this->fixture->getFinanzanlagen()
		);
	}
	
	/**
	 * @test
	 */
	public function getKassenbestandReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKassenbestand()
		);
	}

	/**
	 * @test
	 */
	public function setKassenbestandForIntegerSetsKassenbestand() { 
		$this->fixture->setKassenbestand(12);

		$this->assertSame(
			12,
			$this->fixture->getKassenbestand()
		);
	}
	
	/**
	 * @test
	 */
	public function getBankguthabenReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getBankguthaben()
		);
	}

	/**
	 * @test
	 */
	public function setBankguthabenForIntegerSetsBankguthaben() { 
		$this->fixture->setBankguthaben(12);

		$this->assertSame(
			12,
			$this->fixture->getBankguthaben()
		);
	}
	
	/**
	 * @test
	 */
	public function getRuecklagenfreiReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getRuecklagenfrei()
		);
	}

	/**
	 * @test
	 */
	public function setRuecklagenfreiForIntegerSetsRuecklagenfrei() { 
		$this->fixture->setRuecklagenfrei(12);

		$this->assertSame(
			12,
			$this->fixture->getRuecklagenfrei()
		);
	}
	
	/**
	 * @test
	 */
	public function getRuecklagenzweckReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getRuecklagenzweck()
		);
	}

	/**
	 * @test
	 */
	public function setRuecklagenzweckForIntegerSetsRuecklagenzweck() { 
		$this->fixture->setRuecklagenzweck(12);

		$this->assertSame(
			12,
			$this->fixture->getRuecklagenzweck()
		);
	}
	
	/**
	 * @test
	 */
	public function getRuecklagenbetriebReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getRuecklagenbetrieb()
		);
	}

	/**
	 * @test
	 */
	public function setRuecklagenbetriebForIntegerSetsRuecklagenbetrieb() { 
		$this->fixture->setRuecklagenbetrieb(12);

		$this->assertSame(
			12,
			$this->fixture->getRuecklagenbetrieb()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerbindlichkeitbankReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVerbindlichkeitbank()
		);
	}

	/**
	 * @test
	 */
	public function setVerbindlichkeitbankForIntegerSetsVerbindlichkeitbank() { 
		$this->fixture->setVerbindlichkeitbank(12);

		$this->assertSame(
			12,
			$this->fixture->getVerbindlichkeitbank()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerbindlichkeitblssmdReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVerbindlichkeitblssmd()
		);
	}

	/**
	 * @test
	 */
	public function setVerbindlichkeitblssmdForIntegerSetsVerbindlichkeitblssmd() { 
		$this->fixture->setVerbindlichkeitblssmd(12);

		$this->assertSame(
			12,
			$this->fixture->getVerbindlichkeitblssmd()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerbindlichkeitsonstigeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getVerbindlichkeitsonstige()
		);
	}

	/**
	 * @test
	 */
	public function setVerbindlichkeitsonstigeForIntegerSetsVerbindlichkeitsonstige() { 
		$this->fixture->setVerbindlichkeitsonstige(12);

		$this->assertSame(
			12,
			$this->fixture->getVerbindlichkeitsonstige()
		);
	}
	
	/**
	 * @test
	 */
	public function getJahreskapitaldienstReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getJahreskapitaldienst()
		);
	}

	/**
	 * @test
	 */
	public function setJahreskapitaldienstForIntegerSetsJahreskapitaldienst() { 
		$this->fixture->setJahreskapitaldienst(12);

		$this->assertSame(
			12,
			$this->fixture->getJahreskapitaldienst()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandmitglied1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandmitglied1()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandmitglied1ForIntegerSetsFachverbandmitglied1() { 
		$this->fixture->setFachverbandmitglied1(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandmitglied1()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0110bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0110bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0110bis26ForIntegerSetsMitglieder0110bis26() { 
		$this->fixture->setMitglieder0110bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0110bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0110ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0110ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0110ueber26ForIntegerSetsMitglieder0110ueber26() { 
		$this->fixture->setMitglieder0110ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0110ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0111bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0111bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0111bis26ForIntegerSetsMitglieder0111bis26() { 
		$this->fixture->setMitglieder0111bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0111bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0111ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0111ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0111ueber26ForIntegerSetsMitglieder0111ueber26() { 
		$this->fixture->setMitglieder0111ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0111ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0112bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0112bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0112bis26ForIntegerSetsMitglieder0112bis26() { 
		$this->fixture->setMitglieder0112bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0112bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0112ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0112ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0112ueber26ForIntegerSetsMitglieder0112ueber26() { 
		$this->fixture->setMitglieder0112ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0112ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandsmitglied2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandsmitglied2()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandsmitglied2ForIntegerSetsFachverbandsmitglied2() { 
		$this->fixture->setFachverbandsmitglied2(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandsmitglied2()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0210bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0210bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0210bis26ForIntegerSetsMitglieder0210bis26() { 
		$this->fixture->setMitglieder0210bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0210bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0210ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0210ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0210ueber26ForIntegerSetsMitglieder0210ueber26() { 
		$this->fixture->setMitglieder0210ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0210ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0211bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0211bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0211bis26ForIntegerSetsMitglieder0211bis26() { 
		$this->fixture->setMitglieder0211bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0211bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0211ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0211ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0211ueber26ForIntegerSetsMitglieder0211ueber26() { 
		$this->fixture->setMitglieder0211ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0211ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0212bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0212bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0212bis26ForIntegerSetsMitglieder0212bis26() { 
		$this->fixture->setMitglieder0212bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0212bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0212ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0212ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0212ueber26ForIntegerSetsMitglieder0212ueber26() { 
		$this->fixture->setMitglieder0212ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0212ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandsmitglied3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandsmitglied3()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandsmitglied3ForIntegerSetsFachverbandsmitglied3() { 
		$this->fixture->setFachverbandsmitglied3(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandsmitglied3()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0310bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0310bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0310bis26ForIntegerSetsMitglieder0310bis26() { 
		$this->fixture->setMitglieder0310bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0310bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0310ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0310ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0310ueber26ForIntegerSetsMitglieder0310ueber26() { 
		$this->fixture->setMitglieder0310ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0310ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0311bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0311bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0311bis26ForIntegerSetsMitglieder0311bis26() { 
		$this->fixture->setMitglieder0311bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0311bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0311ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0311ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0311ueber26ForIntegerSetsMitglieder0311ueber26() { 
		$this->fixture->setMitglieder0311ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0311ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0312bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0312bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0312bis26ForIntegerSetsMitglieder0312bis26() { 
		$this->fixture->setMitglieder0312bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0312bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0312ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0312ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0312ueber26ForIntegerSetsMitglieder0312ueber26() { 
		$this->fixture->setMitglieder0312ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0312ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandsmitglied4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandsmitglied4()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandsmitglied4ForIntegerSetsFachverbandsmitglied4() { 
		$this->fixture->setFachverbandsmitglied4(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandsmitglied4()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0410bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0410bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0410bis26ForIntegerSetsMitglieder0410bis26() { 
		$this->fixture->setMitglieder0410bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0410bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0410ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0410ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0410ueber26ForIntegerSetsMitglieder0410ueber26() { 
		$this->fixture->setMitglieder0410ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0410ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0411bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0411bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0411bis26ForIntegerSetsMitglieder0411bis26() { 
		$this->fixture->setMitglieder0411bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0411bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0411ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0411ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0411ueber26ForIntegerSetsMitglieder0411ueber26() { 
		$this->fixture->setMitglieder0411ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0411ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0412bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0412bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0412bis26ForIntegerSetsMitglieder0412bis26() { 
		$this->fixture->setMitglieder0412bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0412bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0412ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0412ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0412ueber26ForIntegerSetsMitglieder0412ueber26() { 
		$this->fixture->setMitglieder0412ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0412ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandsmitglied5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandsmitglied5()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandsmitglied5ForIntegerSetsFachverbandsmitglied5() { 
		$this->fixture->setFachverbandsmitglied5(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandsmitglied5()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0510bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0510bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0510bis26ForIntegerSetsMitglieder0510bis26() { 
		$this->fixture->setMitglieder0510bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0510bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0510ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0510ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0510ueber26ForIntegerSetsMitglieder0510ueber26() { 
		$this->fixture->setMitglieder0510ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0510ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0511bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0511bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0511bis26ForIntegerSetsMitglieder0511bis26() { 
		$this->fixture->setMitglieder0511bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0511bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0511ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0511ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0511ueber26ForIntegerSetsMitglieder0511ueber26() { 
		$this->fixture->setMitglieder0511ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0511ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0512bis26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0512bis26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0512bis26ForIntegerSetsMitglieder0512bis26() { 
		$this->fixture->setMitglieder0512bis26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0512bis26()
		);
	}
	
	/**
	 * @test
	 */
	public function getMitglieder0512ueber26ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMitglieder0512ueber26()
		);
	}

	/**
	 * @test
	 */
	public function setMitglieder0512ueber26ForIntegerSetsMitglieder0512ueber26() { 
		$this->fixture->setMitglieder0512ueber26(12);

		$this->assertSame(
			12,
			$this->fixture->getMitglieder0512ueber26()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandmannschaft1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandmannschaft1()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandmannschaft1ForIntegerSetsFachverbandmannschaft1() { 
		$this->fixture->setFachverbandmannschaft1(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandmannschaft1()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0110ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0110()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0110ForIntegerSetsSchuelerjugend0110() { 
		$this->fixture->setSchuelerjugend0110(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0110()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0110ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0110()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0110ForIntegerSetsErwachsene0110() { 
		$this->fixture->setErwachsene0110(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0110()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0111ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0111()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0111ForIntegerSetsSchuelerjugend0111() { 
		$this->fixture->setSchuelerjugend0111(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0111()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0111ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0111()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0111ForIntegerSetsErwachsene0111() { 
		$this->fixture->setErwachsene0111(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0111()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0112ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0112()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0112ForIntegerSetsSchuelerjugend0112() { 
		$this->fixture->setSchuelerjugend0112(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0112()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0112ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0112()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0112ForIntegerSetsErwachsene0112() { 
		$this->fixture->setErwachsene0112(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0112()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandmannschaft2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandmannschaft2()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandmannschaft2ForIntegerSetsFachverbandmannschaft2() { 
		$this->fixture->setFachverbandmannschaft2(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandmannschaft2()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0210ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0210()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0210ForIntegerSetsSchuelerjugend0210() { 
		$this->fixture->setSchuelerjugend0210(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0210()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0210ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0210()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0210ForIntegerSetsErwachsene0210() { 
		$this->fixture->setErwachsene0210(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0210()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0211ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0211()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0211ForIntegerSetsSchuelerjugend0211() { 
		$this->fixture->setSchuelerjugend0211(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0211()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0211ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0211()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0211ForIntegerSetsErwachsene0211() { 
		$this->fixture->setErwachsene0211(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0211()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0212ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0212()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0212ForIntegerSetsSchuelerjugend0212() { 
		$this->fixture->setSchuelerjugend0212(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0212()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0212ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0212()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0212ForIntegerSetsErwachsene0212() { 
		$this->fixture->setErwachsene0212(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0212()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandmannschaft3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandmannschaft3()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandmannschaft3ForIntegerSetsFachverbandmannschaft3() { 
		$this->fixture->setFachverbandmannschaft3(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandmannschaft3()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0310ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0310()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0310ForIntegerSetsSchuelerjugend0310() { 
		$this->fixture->setSchuelerjugend0310(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0310()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0310ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0310()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0310ForIntegerSetsErwachsene0310() { 
		$this->fixture->setErwachsene0310(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0310()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0311ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0311()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0311ForIntegerSetsSchuelerjugend0311() { 
		$this->fixture->setSchuelerjugend0311(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0311()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0311ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0311()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0311ForIntegerSetsErwachsene0311() { 
		$this->fixture->setErwachsene0311(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0311()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0312ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0312()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0312ForIntegerSetsSchuelerjugend0312() { 
		$this->fixture->setSchuelerjugend0312(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0312()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0312ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0312()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0312ForIntegerSetsErwachsene0312() { 
		$this->fixture->setErwachsene0312(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0312()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandmannschaft4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandmannschaft4()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandmannschaft4ForIntegerSetsFachverbandmannschaft4() { 
		$this->fixture->setFachverbandmannschaft4(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandmannschaft4()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0410ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0410()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0410ForIntegerSetsSchuelerjugend0410() { 
		$this->fixture->setSchuelerjugend0410(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0410()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0410ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0410()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0410ForIntegerSetsErwachsene0410() { 
		$this->fixture->setErwachsene0410(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0410()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0411ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0411()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0411ForIntegerSetsSchuelerjugend0411() { 
		$this->fixture->setSchuelerjugend0411(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0411()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0411ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0411()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0411ForIntegerSetsErwachsene0411() { 
		$this->fixture->setErwachsene0411(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0411()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0412ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0412()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0412ForIntegerSetsSchuelerjugend0412() { 
		$this->fixture->setSchuelerjugend0412(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0412()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0412ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0412()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0412ForIntegerSetsErwachsene0412() { 
		$this->fixture->setErwachsene0412(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0412()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandmannschaft5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandmannschaft5()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandmannschaft5ForIntegerSetsFachverbandmannschaft5() { 
		$this->fixture->setFachverbandmannschaft5(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandmannschaft5()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0510ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0510()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0510ForIntegerSetsSchuelerjugend0510() { 
		$this->fixture->setSchuelerjugend0510(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0510()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0510ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0510()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0510ForIntegerSetsErwachsene0510() { 
		$this->fixture->setErwachsene0510(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0510()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0511ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0511()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0511ForIntegerSetsSchuelerjugend0511() { 
		$this->fixture->setSchuelerjugend0511(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0511()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0511ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0511()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0511ForIntegerSetsErwachsene0511() { 
		$this->fixture->setErwachsene0511(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0511()
		);
	}
	
	/**
	 * @test
	 */
	public function getSchuelerjugend0512ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSchuelerjugend0512()
		);
	}

	/**
	 * @test
	 */
	public function setSchuelerjugend0512ForIntegerSetsSchuelerjugend0512() { 
		$this->fixture->setSchuelerjugend0512(12);

		$this->assertSame(
			12,
			$this->fixture->getSchuelerjugend0512()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene0512ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene0512()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene0512ForIntegerSetsErwachsene0512() { 
		$this->fixture->setErwachsene0512(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene0512()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandueleiter1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandueleiter1()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandueleiter1ForIntegerSetsFachverbandueleiter1() { 
		$this->fixture->setFachverbandueleiter1(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandueleiter1()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0110ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0110()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0110ForIntegerSetsAnzahl0110() { 
		$this->fixture->setAnzahl0110(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0110()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0111ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0111()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0111ForIntegerSetsAnzahl0111() { 
		$this->fixture->setAnzahl0111(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0111()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0112ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0112()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0112ForIntegerSetsAnzahl0112() { 
		$this->fixture->setAnzahl0112(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0112()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandueleiter2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandueleiter2()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandueleiter2ForIntegerSetsFachverbandueleiter2() { 
		$this->fixture->setFachverbandueleiter2(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandueleiter2()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0210ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0210()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0210ForIntegerSetsAnzahl0210() { 
		$this->fixture->setAnzahl0210(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0210()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0211ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0211()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0211ForIntegerSetsAnzahl0211() { 
		$this->fixture->setAnzahl0211(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0211()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0212ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0212()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0212ForIntegerSetsAnzahl0212() { 
		$this->fixture->setAnzahl0212(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0212()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandueleiter3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandueleiter3()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandueleiter3ForIntegerSetsFachverbandueleiter3() { 
		$this->fixture->setFachverbandueleiter3(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandueleiter3()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0310ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0310()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0310ForIntegerSetsAnzahl0310() { 
		$this->fixture->setAnzahl0310(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0310()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0311ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0311()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0311ForIntegerSetsAnzahl0311() { 
		$this->fixture->setAnzahl0311(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0311()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0312ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0312()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0312ForIntegerSetsAnzahl0312() { 
		$this->fixture->setAnzahl0312(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0312()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandueleiter4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandueleiter4()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandueleiter4ForIntegerSetsFachverbandueleiter4() { 
		$this->fixture->setFachverbandueleiter4(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandueleiter4()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0410ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0410()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0410ForIntegerSetsAnzahl0410() { 
		$this->fixture->setAnzahl0410(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0410()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0411ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0411()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0411ForIntegerSetsAnzahl0411() { 
		$this->fixture->setAnzahl0411(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0411()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0412ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0412()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0412ForIntegerSetsAnzahl0412() { 
		$this->fixture->setAnzahl0412(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0412()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandueleiter5ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandueleiter5()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandueleiter5ForIntegerSetsFachverbandueleiter5() { 
		$this->fixture->setFachverbandueleiter5(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandueleiter5()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0510ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0510()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0510ForIntegerSetsAnzahl0510() { 
		$this->fixture->setAnzahl0510(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0510()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0511ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0511()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0511ForIntegerSetsAnzahl0511() { 
		$this->fixture->setAnzahl0511(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0511()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnzahl0512ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAnzahl0512()
		);
	}

	/**
	 * @test
	 */
	public function setAnzahl0512ForIntegerSetsAnzahl0512() { 
		$this->fixture->setAnzahl0512(12);

		$this->assertSame(
			12,
			$this->fixture->getAnzahl0512()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandnutzung1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandnutzung1()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandnutzung1ForIntegerSetsFachverbandnutzung1() { 
		$this->fixture->setFachverbandnutzung1(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandnutzung1()
		);
	}
	
	/**
	 * @test
	 */
	public function getKinderjugendliche1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKinderjugendliche1()
		);
	}

	/**
	 * @test
	 */
	public function setKinderjugendliche1ForIntegerSetsKinderjugendliche1() { 
		$this->fixture->setKinderjugendliche1(12);

		$this->assertSame(
			12,
			$this->fixture->getKinderjugendliche1()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene1()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene1ForIntegerSetsErwachsene1() { 
		$this->fixture->setErwachsene1(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene1()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugw1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugw1()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugw1ForIntegerSetsMannschaftschuejugw1() { 
		$this->fixture->setMannschaftschuejugw1(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugw1()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugm1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugm1()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugm1ForIntegerSetsMannschaftschuejugm1() { 
		$this->fixture->setMannschaftschuejugm1(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugm1()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenw1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenw1()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenw1ForIntegerSetsMannschafterwachsenw1() { 
		$this->fixture->setMannschafterwachsenw1(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenw1()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenm1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenm1()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenm1ForIntegerSetsMannschafterwachsenm1() { 
		$this->fixture->setMannschafterwachsenm1(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenm1()
		);
	}
	
	/**
	 * @test
	 */
	public function getLizensierteuel1ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLizensierteuel1()
		);
	}

	/**
	 * @test
	 */
	public function setLizensierteuel1ForIntegerSetsLizensierteuel1() { 
		$this->fixture->setLizensierteuel1(12);

		$this->assertSame(
			12,
			$this->fixture->getLizensierteuel1()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandnutzung2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandnutzung2()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandnutzung2ForIntegerSetsFachverbandnutzung2() { 
		$this->fixture->setFachverbandnutzung2(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandnutzung2()
		);
	}
	
	/**
	 * @test
	 */
	public function getKinderjugendliche2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKinderjugendliche2()
		);
	}

	/**
	 * @test
	 */
	public function setKinderjugendliche2ForIntegerSetsKinderjugendliche2() { 
		$this->fixture->setKinderjugendliche2(12);

		$this->assertSame(
			12,
			$this->fixture->getKinderjugendliche2()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene2()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene2ForIntegerSetsErwachsene2() { 
		$this->fixture->setErwachsene2(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene2()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugw2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugw2()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugw2ForIntegerSetsMannschaftschuejugw2() { 
		$this->fixture->setMannschaftschuejugw2(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugw2()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugm2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugm2()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugm2ForIntegerSetsMannschaftschuejugm2() { 
		$this->fixture->setMannschaftschuejugm2(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugm2()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenw2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenw2()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenw2ForIntegerSetsMannschafterwachsenw2() { 
		$this->fixture->setMannschafterwachsenw2(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenw2()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenm2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenm2()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenm2ForIntegerSetsMannschafterwachsenm2() { 
		$this->fixture->setMannschafterwachsenm2(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenm2()
		);
	}
	
	/**
	 * @test
	 */
	public function getLizensierteuel2ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLizensierteuel2()
		);
	}

	/**
	 * @test
	 */
	public function setLizensierteuel2ForIntegerSetsLizensierteuel2() { 
		$this->fixture->setLizensierteuel2(12);

		$this->assertSame(
			12,
			$this->fixture->getLizensierteuel2()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandnutzung3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandnutzung3()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandnutzung3ForIntegerSetsFachverbandnutzung3() { 
		$this->fixture->setFachverbandnutzung3(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandnutzung3()
		);
	}
	
	/**
	 * @test
	 */
	public function getKinderjugendliche3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKinderjugendliche3()
		);
	}

	/**
	 * @test
	 */
	public function setKinderjugendliche3ForIntegerSetsKinderjugendliche3() { 
		$this->fixture->setKinderjugendliche3(12);

		$this->assertSame(
			12,
			$this->fixture->getKinderjugendliche3()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene3()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene3ForIntegerSetsErwachsene3() { 
		$this->fixture->setErwachsene3(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene3()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugw3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugw3()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugw3ForIntegerSetsMannschaftschuejugw3() { 
		$this->fixture->setMannschaftschuejugw3(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugw3()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugm3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugm3()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugm3ForIntegerSetsMannschaftschuejugm3() { 
		$this->fixture->setMannschaftschuejugm3(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugm3()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenw3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenw3()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenw3ForIntegerSetsMannschafterwachsenw3() { 
		$this->fixture->setMannschafterwachsenw3(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenw3()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenm3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenm3()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenm3ForIntegerSetsMannschafterwachsenm3() { 
		$this->fixture->setMannschafterwachsenm3(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenm3()
		);
	}
	
	/**
	 * @test
	 */
	public function getLizensierteuel3ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLizensierteuel3()
		);
	}

	/**
	 * @test
	 */
	public function setLizensierteuel3ForIntegerSetsLizensierteuel3() { 
		$this->fixture->setLizensierteuel3(12);

		$this->assertSame(
			12,
			$this->fixture->getLizensierteuel3()
		);
	}
	
	/**
	 * @test
	 */
	public function getFachverbandnutzung4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getFachverbandnutzung4()
		);
	}

	/**
	 * @test
	 */
	public function setFachverbandnutzung4ForIntegerSetsFachverbandnutzung4() { 
		$this->fixture->setFachverbandnutzung4(12);

		$this->assertSame(
			12,
			$this->fixture->getFachverbandnutzung4()
		);
	}
	
	/**
	 * @test
	 */
	public function getKinderjugendliche4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKinderjugendliche4()
		);
	}

	/**
	 * @test
	 */
	public function setKinderjugendliche4ForIntegerSetsKinderjugendliche4() { 
		$this->fixture->setKinderjugendliche4(12);

		$this->assertSame(
			12,
			$this->fixture->getKinderjugendliche4()
		);
	}
	
	/**
	 * @test
	 */
	public function getErwachsene4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getErwachsene4()
		);
	}

	/**
	 * @test
	 */
	public function setErwachsene4ForIntegerSetsErwachsene4() { 
		$this->fixture->setErwachsene4(12);

		$this->assertSame(
			12,
			$this->fixture->getErwachsene4()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugw4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugw4()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugw4ForIntegerSetsMannschaftschuejugw4() { 
		$this->fixture->setMannschaftschuejugw4(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugw4()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschaftschuejugm4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschaftschuejugm4()
		);
	}

	/**
	 * @test
	 */
	public function setMannschaftschuejugm4ForIntegerSetsMannschaftschuejugm4() { 
		$this->fixture->setMannschaftschuejugm4(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschaftschuejugm4()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenw4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenw4()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenw4ForIntegerSetsMannschafterwachsenw4() { 
		$this->fixture->setMannschafterwachsenw4(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenw4()
		);
	}
	
	/**
	 * @test
	 */
	public function getMannschafterwachsenm4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getMannschafterwachsenm4()
		);
	}

	/**
	 * @test
	 */
	public function setMannschafterwachsenm4ForIntegerSetsMannschafterwachsenm4() { 
		$this->fixture->setMannschafterwachsenm4(12);

		$this->assertSame(
			12,
			$this->fixture->getMannschafterwachsenm4()
		);
	}
	
	/**
	 * @test
	 */
	public function getLizensierteuel4ReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLizensierteuel4()
		);
	}

	/**
	 * @test
	 */
	public function setLizensierteuel4ForIntegerSetsLizensierteuel4() { 
		$this->fixture->setLizensierteuel4(12);

		$this->assertSame(
			12,
			$this->fixture->getLizensierteuel4()
		);
	}
	
	/**
	 * @test
	 */
	public function getNotwendigkeitauslastungReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitauslastung()
		);
	}

	/**
	 * @test
	 */
	public function setNotwendigkeitauslastungForBooleanSetsNotwendigkeitauslastung() { 
		$this->fixture->setNotwendigkeitauslastung(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitauslastung()
		);
	}
	
	/**
	 * @test
	 */
	public function getNotwendigkeitausrichtungReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitausrichtung()
		);
	}

	/**
	 * @test
	 */
	public function setNotwendigkeitausrichtungForBooleanSetsNotwendigkeitausrichtung() { 
		$this->fixture->setNotwendigkeitausrichtung(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitausrichtung()
		);
	}
	
	/**
	 * @test
	 */
	public function getNotwendigkeitbeduerfnisReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitbeduerfnis()
		);
	}

	/**
	 * @test
	 */
	public function setNotwendigkeitbeduerfnisForBooleanSetsNotwendigkeitbeduerfnis() { 
		$this->fixture->setNotwendigkeitbeduerfnis(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitbeduerfnis()
		);
	}
	
	/**
	 * @test
	 */
	public function getNotwendigkeitunterhaltReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitunterhalt()
		);
	}

	/**
	 * @test
	 */
	public function setNotwendigkeitunterhaltForBooleanSetsNotwendigkeitunterhalt() { 
		$this->fixture->setNotwendigkeitunterhalt(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getNotwendigkeitunterhalt()
		);
	}
	
	/**
	 * @test
	 */
	public function getBauberatungjaReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getBauberatungja()
		);
	}

	/**
	 * @test
	 */
	public function setBauberatungjaForBooleanSetsBauberatungja() { 
		$this->fixture->setBauberatungja(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getBauberatungja()
		);
	}
	
	/**
	 * @test
	 */
	public function getBauberatungdatumReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setBauberatungdatumForDateTimeSetsBauberatungdatum() { }
	
	/**
	 * @test
	 */
	public function getBauberatungneinReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getBauberatungnein()
		);
	}

	/**
	 * @test
	 */
	public function setBauberatungneinForBooleanSetsBauberatungnein() { 
		$this->fixture->setBauberatungnein(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getBauberatungnein()
		);
	}
	
	/**
	 * @test
	 */
	public function getBestkenntnisnahmeReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getBestkenntnisnahme()
		);
	}

	/**
	 * @test
	 */
	public function setBestkenntnisnahmeForBooleanSetsBestkenntnisnahme() { 
		$this->fixture->setBestkenntnisnahme(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getBestkenntnisnahme()
		);
	}
	
	/**
	 * @test
	 */
	public function getErklnutzungdritteReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklnutzungdritte()
		);
	}

	/**
	 * @test
	 */
	public function setErklnutzungdritteForBooleanSetsErklnutzungdritte() { 
		$this->fixture->setErklnutzungdritte(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklnutzungdritte()
		);
	}
	
	/**
	 * @test
	 */
	public function getErklkonzessionReturnsInitialValueForBoolean() { 
		$this->assertSame(
			FALSE,
			$this->fixture->getErklkonzession()
		);
	}

	/**
	 * @test
	 */
	public function setErklkonzessionForBooleanSetsErklkonzession() { 
		$this->fixture->setErklkonzession(FALSE);

		$this->assertSame(
			FALSE,
			$this->fixture->getErklkonzession()
		);
	}
	
	/**
	 * @test
	 */
	public function getAntragsnummer1ReturnsInitialValueForTx_Blsvspstbauantrag_Domain_Model_Antragsanforderung() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getAntragsnummer1()
		);
	}

	/**
	 * @test
	 */
	public function setAntragsnummer1ForTx_Blsvspstbauantrag_Domain_Model_AntragsanforderungSetsAntragsnummer1() { 
		$dummyObject = new Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung();
		$this->fixture->setAntragsnummer1($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getAntragsnummer1()
		);
	}
	
}
?>