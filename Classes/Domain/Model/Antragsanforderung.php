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
define( UPLOAD_PFAD , 'uploads/vereinsakte/');
/**
 *
 *
 * @package blsvspstbauantrag
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * tstamp
	 *
	 * @var integer
	 */
	protected $tstamp=0;
	
	
	
	
	/**
	 * User der Änderungen vornimmt
	 *
	 * @var integer
	 */
	protected $feuser=0;
	
	/**
	 * Status des Antrags
	 *
	 * @var integer
	 */
	protected $status=0;

	/**
	 * Art des Antrags
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $art=1;

	/**
	 * Bestandsicherung
	 *
	 * @var boolean
	 */
	protected $fall1 = FALSE;

	/**
	 * Bestandsentwicklung
	 *
	 * @var boolean
	 */
	protected $fall2 = FALSE;

	/**
	 * Fall 3
	 *
	 * @var boolean
	 */
	protected $fall3 = FALSE;
	
	
	/**
	 * vorzeitiger Baubeginn
	 *
	 * @var boolean
	 */
	protected $vorzeitigerbaubeginn = FALSE;

	/**
	 * Vereinsnummer
	 *
	 * @var integer
	 */
	protected $vereinsnummer=0;
	
	/**
	 * Vereinsname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $vereinsname='';
	
	/**
	 * blsvkreis
	 *
	 * @var integer
	 */
	protected $blsvkreis=0;
	
	/**
	 * stimmkreis
	 *
	 * @var integer
	 */
	protected $stimmkreis=0;
	

	/**
	 * Name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartnername='';

	/**
	 * Vorname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartnervorname;

	/**
	 * Titel des Ansprechpartners
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ansprechpartnertitel=0;

	/**
	 * Telefon tagsüber
	 *
	 * @var string
	 */
	protected $ansprechpartnertelefondienst;

	/**
	 * Tel. privat
	 *
	 * @var string
	 */
	protected $ansprechpartnertelefonprivat;

	/**
	 * mobil
	 *
	 * @var string
	 */
	protected $ansprechpartnermobil;

	/**
	 * Fax
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartnerfax;

	/**
	 * Email
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartneremail;

	/**
	 * baugenehmigungspflichtig
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $baugenehmigungspflichtig = TRUE;

	/**
	 * Bschreibung der Maßnahme 1
	 *
	 * @var string
	 */
	protected $massnahme1='';

	/**
	 * Kosten der Maßnahme 1
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $massnahmekosten1=0;

	/**
	 * M2
	 *
	 * @var string	
	 */
	protected $massnahme2;

	/**
	 * M2
	 *
	 * @var integer
	 */
	protected $massnahmekosten2=0;

	/**
	 * M3
	 *
	 * @var string
	 */
	protected $massnahme3;

	/**
	 * M3 K
	 *
	 * @var integer
	 */
	protected $massnahmekosten3=0;

	/**
	 * M4
	 *
	 * @var string
	 */
	protected $massnahme4;

	/**
	 * M2
	 *
	 * @var integer
	 */
	protected $massnahmekosten4=0;

	/**
	 * M5
	 *
	 * @var string
	 */
	protected $massnahme5;

	/**
	 * M5 K
	 *
	 * @var integer	 */
	protected $massnahmekosten5=0;

	/**
	 * Barmittel
	 *
	 * @var integer
	 */
	protected $barmittel=0;

	/**
	 * eigene Arbeitsleistungen
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $eigeneleistungen=0;
	
	
	/**
	 *unendgeltliche Sachleistungen
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $unendgeltlichesachleistungen=0;
	

	/**
	 * Geldspenden
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $geldspenden=0;

	/**
	 * Zuschüsse  DJK, etc.
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $zuschuesse=0;
	
	
	/**
	 * Zuschüsse Kommune
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $fianzierungkommune=0;
	
	/**
	 * Zuschüsse Landkreis 
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierunglkr=0;
	
	/**
	 * Finanzierungvorsteuer
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierungvorsteuer=0;
	
	
	

	/**
	 * Fremdgelder / Darlehen
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $fremdgelder=0;

	/**
	 * Beantragte Staatsmitelförderung
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $beantragtefoerderung=0;

	/**
	 * Kurze Begründung der geplanten Maßnahme
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $begruendung='';

	/**
	 * Es wird versichert, dass entsprechend der Zifffer 1 Vorbemerkungen mit den ausgeführten Maßnahmen noch nicht begonnen worden ist
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklaerung1 = FALSE;

	/**
	 * Dem Antragsteller ist bekannt, dass eine Zustimmung zum vorzeitigen Baubeginn mit diesem Schreiben nicht erteilt ist
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklaerung2 = FALSE;
	
	/**
	 * Kurze Begründung für die Ablehnung
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $begruendungablehnung='';
	
	
	/**
	 * Kurze Begründung für die Annahme
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $begruendungannahme='';

	/**
	 * Returns the feuser
	 *
	 * @return integer $feuser
	 */
	public function getFeuser() {
		return $this->feuser;
	}

	/**
	 * Sets the feuser
	 *
	 * @param integer $feuser
	 * @return void
	 */
	public function setFeuser($feuser) {
		$this->feuser = $feuser;
	}

	/**
	 * Returns the status
	 *
	 * @return integer $status
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * Sets the status
	 *
	 * @param integer $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 * Returns the art
	 *
	 * @return integer $art
	 */
	public function getArt() {
		return $this->art;
	}

	/**
	 * Sets the art
	 *
	 * @param integer $art
	 * @return void
	 */
	public function setArt($art) {
		$this->art = $art;
	}

	/**
	 * Returns the fall1
	 *
	 * @return boolean $fall1
	 */
	public function getFall1() {
		return $this->fall1;
	}

	/**
	 * Sets the fall1
	 *
	 * @param boolean $fall1
	 * @return void
	 */
	public function setFall1($fall1) {
		$this->fall1 = $fall1;
	}

	/**
	 * Returns the boolean state of fall1
	 *
	 * @return boolean
	 */
	public function isFall1() {
		return $this->getFall1();
	}

	/**
	 * Returns the fall2
	 *
	 * @return boolean $fall2
	 */
	public function getFall2() {
		return $this->fall2;
	}

	/**
	 * Sets the fall2
	 *
	 * @param boolean $fall2
	 * @return void
	 */
	public function setFall2($fall2) {
		$this->fall2 = $fall2;
	}

	/**
	 * Returns the boolean state of fall2
	 *
	 * @return boolean
	 */
	public function isFall2() {
		return $this->getFall2();
	}

	/**
	 * Returns the fall3
	 *
	 * @return boolean $fall3
	 */
	public function getFall3() {
		return $this->fall3;
	}

	/**
	 * Sets the fall3
	 *
	 * @param boolean $fall3
	 * @return void
	 */
	public function setFall3($fall3) {
		$this->fall3 = $fall3;
	}

	/**
	 * Returns the boolean state of fall3
	 *
	 * @return boolean
	 */
	public function isFall3() {
		return $this->getFall3();
	}

	
	
	
	/**
	 * Returns the vorzeitigerbaubeginn
	 *
	 * @return boolean $vorzeitigerbaubeginn
	 */
	public function getVorzeitigerbaubeginn() {
		return $this->vorzeitigerbaubeginn;
	}
	
	/**
	 * Sets the vorzeitigerbaubeginn
	 *
	 * @param boolean $vorzeitigerbaubeginn
	 * @return void
	 */
	public function setVorzeitigerbaubeginn($vorzeitigerbaubeginn) {
		$this->vorzeitigerbaubeginn = $vorzeitigerbaubeginn;
	}
	
	/**
	 * Returns the boolean state of vorzeitigerbaubeginn
	 *
	 * @return boolean
	 */
	public function isVorzeitigerbaubeginn() {
		return $this->getVorzeitigerbaubeginn();
	}
	
	/**
	 * Returns the vereinsnummer
	 *
	 * @return integer $vereinsnummer
	 */
	public function getVereinsnummer() {
		return $this->vereinsnummer;
	}
	
	/**
	 * Sets the vereinsnummer
	 *
	 * @param integer $vereinsnummer
	 * @return void
	 */
	public function setVereinsnummer($vereinsnummer) {
		$this->vereinsnummer = $vereinsnummer;
	}
	
	/**
	 * Returns the vereinsname
	 *
	 * @return string $vereinsname
	 */
	public function getVereinsname() {
		return $this->vereinsname;
	}
	
	/**
	 * Sets the vereinsname
	 *
	 * @param string $vereinsname
	 * @return void
	 */
	public function setVereinsname($vereinsname) {
		$this->vereinsname = $vereinsname;
	}

	/**
	 * Sets the Blsvkreis
	 *
	 * @param integer $blsvkreis
	 * @return void
	 */
	public function setBlsvkreis( $blsvkreis ) {
		$this->blsvkreis = $blsvkreis;
	}
	

	/**
	 * Returns the Blsvkreis
	 *
	 * @return integer $blsvkreis
	 */
	public function getBlsvkreis() {
		return $this->blsvkreis;
	}
	
	
	/**
	 * Returns the stimmkreis
	 *
	 * @return integer $stimmkreis
	 */
	public function getStimmkreis() {
		return $this->stimmkreis;
	}
	
	/**
	 * Sets the stimmkreis
	 *
	 * @param integer $stimmkreis
	 * @return void
	 */
	public function setStimmkreis($stimmkreis) {
		$this->stimmkreis = $stimmkreis;
	}
	
	

	/**
	 * Returns the ansprechpartnername
	 *
	 * @return string $ansprechpartnername
	 */
	public function getAnsprechpartnername() {
		return $this->ansprechpartnername;
	}

	/**
	 * Sets the ansprechpartnername
	 *
	 * @param string $ansprechpartnername
	 * @return void
	 */
	public function setAnsprechpartnername($ansprechpartnername) {
		$this->ansprechpartnername = $ansprechpartnername;
	}

	/**
	 * Returns the ansprechpartnervorname
	 *
	 * @return string $ansprechpartnervorname
	 */
	public function getAnsprechpartnervorname() {
		return $this->ansprechpartnervorname;
	}

	/**
	 * Sets the ansprechpartnervorname
	 *
	 * @param string $ansprechpartnervorname
	 * @return void
	 */
	public function setAnsprechpartnervorname($ansprechpartnervorname) {
		$this->ansprechpartnervorname = $ansprechpartnervorname;
	}

	/**
	 * Returns the ansprechpartnertitel
	 *
	 * @return integer $ansprechpartnertitel
	 */
	public function getAnsprechpartnertitel() {
		return $this->ansprechpartnertitel;
	}

	/**
	 * Sets the ansprechpartnertitel
	 *
	 * @param integer $ansprechpartnertitel
	 * @return void
	 */
	public function setAnsprechpartnertitel($ansprechpartnertitel) {
		$this->ansprechpartnertitel = $ansprechpartnertitel;
	}

	/**
	 * Returns the ansprechpartnertelefondienst
	 *
	 * @return string $ansprechpartnertelefondienst
	 */
	public function getAnsprechpartnertelefondienst() {
		return $this->ansprechpartnertelefondienst;
	}

	/**
	 * Sets the ansprechpartnertelefondienst
	 *
	 * @param string $ansprechpartnertelefondienst
	 * @return void
	 */
	public function setAnsprechpartnertelefondienst($ansprechpartnertelefondienst) {
		$this->ansprechpartnertelefondienst = $ansprechpartnertelefondienst;
	}

	/**
	 * Returns the ansprechpartnertelefonprivat
	 *
	 * @return string $ansprechpartnertelefonprivat
	 */
	public function getAnsprechpartnertelefonprivat() {
		return $this->ansprechpartnertelefonprivat;
	}

	/**
	 * Sets the ansprechpartnertelefonprivat
	 *
	 * @param string $ansprechpartnertelefonprivat
	 * @return void
	 */
	public function setAnsprechpartnertelefonprivat($ansprechpartnertelefonprivat) {
		$this->ansprechpartnertelefonprivat = $ansprechpartnertelefonprivat;
	}

	/**
	 * Returns the ansprechpartnermobil
	 *
	 * @return string $ansprechpartnermobil
	 */
	public function getAnsprechpartnermobil() {
		return $this->ansprechpartnermobil;
	}

	/**
	 * Sets the ansprechpartnermobil
	 *
	 * @param string $ansprechpartnermobil
	 * @return void
	 */
	public function setAnsprechpartnermobil($ansprechpartnermobil) {
		$this->ansprechpartnermobil = $ansprechpartnermobil;
	}

	/**
	 * Returns the ansprechpartnerfax
	 *
	 * @return string $ansprechpartnerfax
	 */
	public function getAnsprechpartnerfax() {
		return $this->ansprechpartnerfax;
	}

	/**
	 * Sets the ansprechpartnerfax
	 *
	 * @param string $ansprechpartnerfax
	 * @return void
	 */
	public function setAnsprechpartnerfax($ansprechpartnerfax) {
		$this->ansprechpartnerfax = $ansprechpartnerfax;
	}

	/**
	 * Returns the ansprechpartneremail
	 *
	 * @return string $ansprechpartneremail
	 */
	public function getAnsprechpartneremail() {
		return $this->ansprechpartneremail;
	}

	/**
	 * Sets the ansprechpartneremail
	 *
	 * @param string $ansprechpartneremail
	 * @return void
	 */
	public function setAnsprechpartneremail($ansprechpartneremail) {
		$this->ansprechpartneremail = $ansprechpartneremail;
	}

	/**
	 * Returns the baugenehmigungspflichtig
	 *
	 * @return boolean $baugenehmigungspflichtig
	 */
	public function getBaugenehmigungspflichtig() {
		return $this->baugenehmigungspflichtig;
	}

	/**
	 * Sets the baugenehmigungspflichtig
	 *
	 * @param boolean $baugenehmigungspflichtig
	 * @return void
	 */
	public function setBaugenehmigungspflichtig($baugenehmigungspflichtig) {
		$this->baugenehmigungspflichtig = $baugenehmigungspflichtig;
	}

	/**
	 * Returns the boolean state of baugenehmigungspflichtig
	 *
	 * @return boolean
	 */
	public function isBaugenehmigungspflichtig() {
		return $this->getBaugenehmigungspflichtig();
	}

	/**
	 * Returns the massnahme1
	 *
	 * @return string $massnahme1
	 */
	public function getMassnahme1() {
		return $this->massnahme1;
	}

	/**
	 * Sets the massnahme1
	 *
	 * @param string $massnahme1
	 * @return void
	 */
	public function setMassnahme1($massnahme1) {
		$this->massnahme1 = $massnahme1;
	}

	/**
	 * Returns the massnahmekosten1
	 *
	 * @return integer $massnahmekosten1
	 */
	public function getMassnahmekosten1() {
		return $this->massnahmekosten1;
	}

	/**
	 * Sets the massnahmekosten1
	 *
	 * @param integer $massnahmekosten1
	 * @return void
	 */
	public function setMassnahmekosten1($massnahmekosten1) {
		$this->massnahmekosten1 = $massnahmekosten1;
	}

	/**
	 * Returns the massnahme2
	 *
	 * @return string $massnahme2
	 */
	public function getMassnahme2() {
		return $this->massnahme2;
	}

	/**
	 * Sets the massnahme2
	 *
	 * @param string $massnahme2
	 * @return void
	 */
	public function setMassnahme2($massnahme2) {
		$this->massnahme2 = $massnahme2;
	}

	/**
	 * Returns the massnahmekosten2
	 *
	 * @return integer $massnahmekosten2
	 */
	public function getMassnahmekosten2() {
		return $this->massnahmekosten2;
	}

	/**
	 * Sets the massnahmekosten2
	 *
	 * @param integer $massnahmekosten2
	 * @return void
	 */
	public function setMassnahmekosten2($massnahmekosten2) {
		$this->massnahmekosten2 = $massnahmekosten2;
	}

	/**
	 * Returns the massnahme3
	 *
	 * @return string $massnahme3
	 */
	public function getMassnahme3() {
		return $this->massnahme3;
	}

	/**
	 * Sets the massnahme3
	 *
	 * @param string $massnahme3
	 * @return void
	 */
	public function setMassnahme3($massnahme3) {
		$this->massnahme3 = $massnahme3;
	}

	/**
	 * Returns the massnahmekosten3
	 *
	 * @return integer $massnahmekosten3
	 */
	public function getMassnahmekosten3() {
		return $this->massnahmekosten3;
	}

	/**
	 * Sets the massnahmekosten3
	 *
	 * @param integer $massnahmekosten3
	 * @return void
	 */
	public function setMassnahmekosten3($massnahmekosten3) {
		$this->massnahmekosten3 = $massnahmekosten3;
	}

	/**
	 * Returns the massnahme4
	 *
	 * @return string $massnahme4
	 */
	public function getMassnahme4() {
		return $this->massnahme4;
	}

	/**
	 * Sets the massnahme4
	 *
	 * @param string $massnahme4
	 * @return void
	 */
	public function setMassnahme4($massnahme4) {
		$this->massnahme4 = $massnahme4;
	}

	/**
	 * Returns the massnahmekosten4
	 *
	 * @return integer $massnahmekosten4
	 */
	public function getMassnahmekosten4() {
		return $this->massnahmekosten4;
	}

	/**
	 * Sets the massnahmekosten4
	 *
	 * @param integer $massnahmekosten4
	 * @return void
	 */
	public function setMassnahmekosten4($massnahmekosten4) {
		$this->massnahmekosten4 = $massnahmekosten4;
	}

	/**
	 * Returns the massnahme5
	 *
	 * @return string $massnahme5
	 */
	public function getMassnahme5() {
		return $this->massnahme5;
	}

	/**
	 * Sets the massnahme5
	 *
	 * @param string $massnahme5
	 * @return void
	 */
	public function setMassnahme5($massnahme5) {
		$this->massnahme5 = $massnahme5;
	}

	/**
	 * Returns the massnahmekosten5
	 *
	 * @return integer $massnahmekosten5
	 */
	public function getMassnahmekosten5() {
		return $this->massnahmekosten5;
	}

	/**
	 * Sets the massnahmekosten5
	 *
	 * @param integer $massnahmekosten5
	 * @return void
	 */
	public function setMassnahmekosten5($massnahmekosten5) {
		$this->massnahmekosten5 = $massnahmekosten5;
	}

	/**
	 * Returns the barmittel
	 *
	 * @return integer $barmittel
	 */
	public function getBarmittel() {
		return $this->barmittel;
	}

	/**
	 * Sets the barmittel
	 *
	 * @param integer $barmittel
	 * @return void
	 */
	public function setBarmittel($barmittel) {
		$this->barmittel = $barmittel;
	}

	/**
	 * Returns the eigeneleistungen
	 *
	 * @return integer $eigeneleistungen
	 */
	public function getEigeneleistungen() {
		return $this->eigeneleistungen;
	}

	/**
	 * Sets the eigeneleistungen
	 *
	 * @param integer $eigeneleistungen
	 * @return void
	 */
	public function setEigeneleistungen($eigeneleistungen) {
		$this->eigeneleistungen = $eigeneleistungen;
	}
	
	/**
	 * Returns the unendgeltlichesachleistungen
	 *
	 * @return integer $unendgeltlichesachleistungen
	 */
	public function getUnendgeltlichesachleistungen() {
		return $this->unendgeltlichesachleistungen;
	}
	
	/**
	 * Sets the unendgeltlichesachleistungen
	 *
	 * @param integer $unendgeltlichesachleistungen
	 * @return void
	 */
	public function setUnendgeltlichesachleistungen($unendgeltlichesachleistungen) {
		$this->unendgeltlichesachleistungen = $unendgeltlichesachleistungen;
	}

	
	/**
	 * Returns the geldspenden
	 *
	 * @return integer $geldspenden
	 */
	public function getGeldspenden() {
		return $this->geldspenden;
	}

	/**
	 * Sets the geldspenden
	 *
	 * @param integer $geldspenden
	 * @return void
	 */
	public function setGeldspenden($geldspenden) {
		$this->geldspenden = $geldspenden;
	}

	/**
	 * Returns the zuschuesse
	 *
	 * @return integer $zuschuesse
	 */
	public function getZuschuesse() {
		return $this->zuschuesse;
	}

	/**
	 * Sets the zuschuesse
	 *
	 * @param integer $zuschuesse
	 * @return void
	 */
	public function setZuschuesse($zuschuesse) {
		$this->zuschuesse = $zuschuesse;
	}
	
	/**
	 * Returns the fianzierungkommune
	 *
	 * @return integer $fianzierungkommune
	 */
	public function getFianzierungkommune() {
		return $this->fianzierungkommune;
	}
	
	/**
	 * Sets the fianzierungkommune
	 *
	 * @param integer $fianzierungkommune
	 * @return void
	 */
	public function setFianzierungkommune($fianzierungkommune) {
		$this->fianzierungkommune = $fianzierungkommune;
	}
	
	/**
	 * Returns the finanzierunglkr
	 *
	 * @return integer $finanzierunglkr
	 */
	public function getFinanzierunglkr() {
		return $this->finanzierunglkr;
	}
	
	/**
	 * Sets the finanzierunglkr
	 *
	 * @param integer $finanzierunglkr
	 * @return void
	 */
	public function setFinanzierunglkr($finanzierunglkr) {
		$this->finanzierunglkr = $finanzierunglkr;
	}
	
	/**
	 * Returns the finanzierungvorsteuer
	 *
	 * @return integer $finanzierungvorsteuer
	 */
	public function getFinanzierungvorsteuer() {
		return $this->finanzierungvorsteuer;
	}
	
	/**
	 * Sets the finanzierungvorsteuer
	 *
	 * @param integer $finanzierungvorsteuer
	 * @return void
	 */
	public function setFinanzierungvorsteuer($finanzierungvorsteuer) {
		$this->finanzierungvorsteuer = $finanzierungvorsteuer;
	}
	
	
	

	/**
	 * Returns the fremdgelder
	 *
	 * @return integer $fremdgelder
	 */
	public function getFremdgelder() {
		return $this->fremdgelder;
	}

	/**
	 * Sets the fremdgelder
	 *
	 * @param integer $fremdgelder
	 * @return void
	 */
	public function setFremdgelder($fremdgelder) {
		$this->fremdgelder = $fremdgelder;
	}

	/**
	 * Returns the beantragtefoerderung
	 *
	 * @return integer $beantragtefoerderung
	 */
	public function getBeantragtefoerderung() {
		return $this->beantragtefoerderung;
	}

	/**
	 * Sets the beantragtefoerderung
	 *
	 * @param integer $beantragtefoerderung
	 * @return void
	 */
	public function setBeantragtefoerderung($beantragtefoerderung) {
		$this->beantragtefoerderung = $beantragtefoerderung;
	}

	/**
	 * Returns the begruendung
	 *
	 * @return string $begruendung
	 */
	public function getBegruendung() {
		return $this->begruendung;
	}

	/**
	 * Sets the begruendung
	 *
	 * @param string $begruendung
	 * @return void
	 */
	public function setBegruendung($begruendung) {
		$this->begruendung = $begruendung;
	}
	
	/**
	 * Returns the begruendungablehnung
	 *
	 * @return string $begruendungablehnung
	 */
	public function getBegruendungablehnung() {
		return $this->begruendungablehnung;
	}
	
	/**
	 * Sets the begruendungablehnung
	 *
	 * @param string $begruendungablehnung
	 * @return void
	 */
	public function setBegruendungablehnung( $begruendungablehnung ) {
		$this->begruendungablehnung = $begruendungablehnung;
	}
	
	
	
	
	/**
	 * Sets the begruendungannahme
	 *
	 * @param string $begruendungannahme
	 * @return void
	 */
	public function setBegruendungannahme( $begruendungannahme ) {
		$this->begruendungannahme = $begruendungannahme;
	}
	
	/**
	 * Returns the begruendungannahme
	 *
	 * @return string $begruendungannahme
	 */
	public function getBegruendungannahme() {
		return $this->begruendungannahme;
	}
	
	
	
	
	/**
	 * Returns the erklaerung1
	 *
	 * @return boolean $erklaerung1
	 */
	public function getErklaerung1() {
		return $this->erklaerung1;
	}

	/**
	 * Sets the erklaerung1
	 *
	 * @param boolean $erklaerung1
	 * @return void
	 */
	public function setErklaerung1($erklaerung1) {
		$this->erklaerung1 = $erklaerung1;
	}

	/**
	 * Returns the boolean state of erklaerung1
	 *
	 * @return boolean
	 */
	public function isErklaerung1() {
		return $this->getErklaerung1();
	}

	/**
	 * Returns the erklaerung2
	 *
	 * @return boolean $erklaerung2
	 */
	public function getErklaerung2() {
		return $this->erklaerung2;
	}

	/**
	 * Sets the erklaerung2
	 *
	 * @param boolean $erklaerung2
	 * @return void
	 */
	public function setErklaerung2($erklaerung2) {
		$this->erklaerung2 = $erklaerung2;
	}

	/**
	 * Returns the boolean state of erklaerung2
	 *
	 * @return boolean
	 */
	public function isErklaerung2() {
		return $this->getErklaerung2();
	}

	
	/**
	 * Returns the Bezirk
	 *
	 * @return integer $bezirk
	 */
	public function getBezirk() {
		
		$bezirk = (int)($this->kreis / 100);
		
		return $bezirk;
	}
	
	
	/**
	 * Returns the tstamp
	 *
	 * @return integer $tstamp
	 */
	public function getTstamp() {
		return $this->tstamp;
	}
	
	/**
	 * Sets the tstamp
	 *
	 * @param integer $tstamp
	 * @return void
	 */
	public function setTstamp( $tstamp ) {
		$this->tstamp = $tstamp;
	}
	
	/**
	 * liefert den Pfad einer Rechnung
	 *
	 * @return void $uploads url der Uploads
	 */
	public function getUploads() {
		$erg=array();
		$files = t3lib_div::getFilesInDir(UPLOAD_PFAD . $this->vereinsnummer . '/tx_blsvspstbauantrag_spstbauantrag' , '', 1);
		
		foreach ($files as $file){
			$pos = strpos( $file, $this->uid . '_d4' );
			
			if ( !( $pos=== FALSE ) ){
				$erg[ substr( $file, $pos + strlen( $this->uid ) + 1 , 3 ) ][] = $file;
			}
		}
		
		
		return $erg;
	}
	
	
}
?>