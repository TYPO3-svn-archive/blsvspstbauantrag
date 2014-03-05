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
 *  This copyright noti ce MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package blsvspstbauantrag
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Blsvspstbauantrag_Domain_Model_Regelantrag extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * BLSV-Mitgliedsnummer
	 * kl + re 
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $vereinsnummer=0;

	/**
	 * Kreis
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $blsvkreis=0;

	/**
	 * User der geändert hat
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $feuser=0;

	/**
	 * politischer Stimmkreis
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stimmkreis=0;

	/**
	 * Name
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartnername;

	
	/**
	 * Vorname
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartnervorname;

	/**
	 * Titel
	 * kl + re
	 *
	 * @var string
	 */
	protected $ansprechpartenertitel;

	/**
	 * Tel. dienstl.:
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartnerteldienst;

	/**
	 * Tel. privat
	 * kl + re
	 *
	 * @var string
	 */
	protected $ansprechpartnertelprivat;

	/**
	 * Handy:
	 * kl + re
	 *
	 * @var string
	 */
	protected $ansprechpartnermobil;

	/**
	 * E-mail:
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $ansprechpartneremail;

	/**
	 * Maßnahme 1
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $verwendungszweck1;

	/**
	 * Anzahl
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $anzahl1=0;

	/**
	 * Ja/nein
	 * re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $vbb1 = FALSE;

	/**
	 * Teilbaukosten 1
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $kostenanteil1=0;

	/**
	 * Maßnahme 2
	 *
	 * @var string
	 */
	protected $verwendungszweck2;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl2=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb2 = FALSE;

	/**
	 * Teilbaukosten 2
	 *
	 * @var integer
	 */
	protected $kostenanteil2=0;

	/**
	 * Maßnahme 3
	 *
	 * @var string
	 */
	protected $verwendungszweck3;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl3=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb3 = FALSE;

	/**
	 * Teilbaukosten 3
	 *
	 * @var integer
	 */
	protected $kostenanteil3=0;

	/**
	 * Maßnahme 4
	 *
	 * @var string
	 */
	protected $verwendungszweck4;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl4=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb4 = FALSE;

	/**
	 * Teilbaukosten 4
	 *
	 * @var integer
	 */
	protected $kostenanteil4=0;

	/**
	 * Maßnahme 5
	 *
	 * @var string
	 */
	protected $verwendungszweck5;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl5=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb5 = FALSE;

	/**
	 * Teilbaukosten 5
	 *
	 * @var integer
	 */
	protected $kostenenteil5=0;

	/**
	 * Maßnahme 6
	 *
	 * @var string
	 */
	protected $verwendungszweck6;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl6=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb6 = FALSE;

	/**
	 * Teilbaukosten 6
	 *
	 * @var integer
	 */
	protected $kostenanteil6=0;

	/**
	 * Maßnahme 7
	 *
	 * @var string
	 */
	protected $verwendungszweck7;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl7=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb7 = FALSE;

	/**
	 * Teilbaukosten 7
	 *
	 * @var integer
	 */
	protected $kostenanteil7=0;

	/**
	 * Maßnahme 8
	 *
	 * @var string
	 */
	protected $verwendungszweck8;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl8=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb8 = FALSE;

	/**
	 * Teilbaukosten 8
	 *
	 * @var integer
	 */
	protected $kostenanteil8=0;

	/**
	 * Maßnahme 9
	 *
	 * @var string
	 */
	protected $verwendungszweck9;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl9=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb9 = FALSE;

	/**
	 * Teilbaukosten 9
	 *
	 * @var integer
	 */
	protected $kostenanteil9=0;

	/**
	 * Maßnahme 10
	 *
	 * @var string
	 */
	protected $verwendungszweck10;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl10=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb10 = FALSE;

	/**
	 * Teilbaukosten 10
	 *
	 * @var integer
	 */
	protected $kostenanteil10=0;

	/**
	 * Maßnahme 11
	 *
	 * @var string
	 */
	protected $verwendungszweck11;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl11=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb11 = FALSE;

	/**
	 * Teilbaukosten 11
	 *
	 * @var integer
	 */
	protected $kostenanteil11=0;

	/**
	 * Maßnahme 12
	 *
	 * @var string
	 */
	protected $verwendungszweck12;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl12=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb12 = FALSE;

	/**
	 * Teilbaukosten 12
	 *
	 * @var integer
	 */
	protected $kostenanteil12=0;

	/**
	 * Maßnahme 13
	 *
	 * @var string
	 */
	protected $verwendungszweck13;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl13=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb13 = FALSE;

	/**
	 * Teilbaukosten 13
	 *
	 * @var integer
	 */
	protected $kostenanteil13=0;

	/**
	 * Maßnahme 14
	 *
	 * @var string
	 */
	protected $verwendungszweck14;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl14=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb14 = FALSE;

	/**
	 * Teilbaukosten 14
	 *
	 * @var integer
	 */
	protected $kostenanteil14=0;

	/**
	 * Maßnahme 15
	 *
	 * @var string
	 */
	protected $verwendungszweck15;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl15=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb15 = FALSE;

	/**
	 * Teilbaukosten 15
	 *
	 * @var integer
	 */
	protected $kostenanteil15=0;

	/**
	 * Maßnahme 16
	 *
	 * @var string
	 */
	protected $verwendungszweck16;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl16=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb16 = FALSE;

	/**
	 * Teilbaukosten 16
	 *
	 * @var integer
	 */
	protected $kostenanteil16=0;

	/**
	 * Maßnahme 17
	 *
	 * @var string
	 */
	protected $verwendungszweck17;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl17=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb17 = FALSE;

	/**
	 * Teilbaukosten 17
	 *
	 * @var integer
	 */
	protected $kostenanteil17=0;

	/**
	 * Maßnahme 18
	 *
	 * @var string
	 */
	protected $verwendungszweck18;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl18=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb18 = FALSE;

	/**
	 * Teilbaukosten 18
	 *
	 * @var integer
	 */
	protected $kostenanteil18=0;

	/**
	 * Maßnahme 19
	 *
	 * @var string
	 */
	protected $verwendungszweck19;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl19=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb19 = FALSE;

	/**
	 * Teilbaukosten 19
	 *
	 * @var integer
	 */
	protected $kostenanteil19=0;

	/**
	 * Maßnahme 20
	 *
	 * @var string
	 */
	protected $verwendungszweck20;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl20=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb20 = FALSE;

	/**
	 * Teilbaukosten 20
	 *
	 * @var integer
	 */
	protected $kostenanteil20=0;

	/**
	 * Maßnahme 21
	 *
	 * @var string
	 */
	protected $verwendungszweck21;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl21=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb21 = FALSE;

	/**
	 * Teilbaukosten 21
	 *
	 * @var integer
	 */
	protected $kostenanteil21=0;

	/**
	 * Maßnahme 22
	 *
	 * @var string
	 */
	protected $verwendungszweck22;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl22=0;

	/**
	 * Teilbaukosten 22
	 *
	 * @var integer
	 */
	protected $kostenanteil22=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb22 = FALSE;

	/**
	 * Maßnahme 23
	 *
	 * @var string
	 */
	protected $verwendungszweck23;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl23=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb23 = FALSE;

	/**
	 * Teilbaukosten
	 *
	 * @var integer
	 */
	protected $kostenanteil23=0;

	/**
	 * Maßnahme 24
	 *
	 * @var string
	 */
	protected $verwendungszweck24;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl24=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb24 = FALSE;

	/**
	 * Teilbaukosten 24
	 *
	 * @var integer
	 */
	protected $kostenanteil24=0;

	/**
	 * Maßnahme 25
	 *
	 * @var string
	 */
	protected $verwendungszweck25;

	/**
	 * Anzahl
	 *
	 * @var integer
	 */
	protected $anzahl25=0;

	/**
	 * ja/nein
	 *
	 * @var boolean
	 */
	protected $vbb25 = FALSE;

	/**
	 * Teilbaukosten 25
	 *
	 * @var integer
	 */
	protected $kostenanteil25=0;

	/**
	 * Barmittel
	 * kl + re
	 *
	 * @var integer
	 */
	protected $finanzierungbarmittel=0;

	/**
	 * Geldspenden
	 * kl + re
	 *
	 * @var integer
	 */
	protected $finanzierunggeldspenden=0;

	/**
	 * Darlehen/Kredite
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fianzierungkredit=0;

	/**
	 * Eigene Arbeitsleistung
	 * kl + re
	 *
	 * @var integer
	 */
	protected $finanzierungaleistung=0;

	/**
	 * Unentgeltliche Sachleistung
	 * kl + re
	 *
	 * @var integer
	 */
	protected $finanzierungsachleistung=0;

	/**
	 * Kommunen
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fianzierungkommune=0;

	/**
	 * Landkreis
	 * kl + re
	 *
	 * @var integer
	 */
	protected $finanzierunglkr=0;

	/**
	 * Sonstige
	 * kl + re
	 *
	 * @var integer
	 */
	protected $finanzierungsonstige=0;

	/**
	 * Vorsteuererstattung
	 * kl + re
	 *
	 * @var integer
	 */
	protected $finanzierungvorsteuer=0;

	/**
	 * Staatszuschuss
	 * re
	 *
	 * @var integer
	 */
	protected $finanzierungzuschuss=0;

	/**
	 * Staatsmitteldarlehen
	 * re
	 *
	 * @var integer
	 */
	protected $finanzierungdarlehen=0;

	/**
	 * Grundschuld
	 * re
	 *
	 * @var boolean
	 */
	protected $sicherunggrundschuld = FALSE;

	/**
	 * Kommunalbürgschaft
	 * re
	 *
	 * @var boolean
	 */
	protected $sicherungkbuergschaft = FALSE;

	/**
	 * Bankbürgschaft
	 * re
	 *
	 * @var boolean
	 */
	protected $sicherungbbuergschaft = FALSE;

	/**
	 * Bank
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfkommune1 = FALSE;

	/**
	 * Betrag Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfkommune2=0;

	/**
	 * jährliche Belastung Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfkommune3=0;

	/**
	 * Privat
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfkommune4 = FALSE;

	/**
	 * Betrag Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfkommune5=0;

	/**
	 * jährliche Belastung Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfkommune6=0;

	/**
	 * Bank
	 * re
	 *
	 * @var boolean
	 */
	protected $zwflandkreis1 = FALSE;

	/**
	 * Betrag Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwflandkreis2=0;

	/**
	 * jährliche Belastung Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwflandkreis3=0;

	/**
	 * Kommune
	 * re
	 *
	 * @var boolean
	 */
	protected $zwflandkreis4 = FALSE;

	/**
	 * Betrag Kommune
	 * re
	 *
	 * @var integer
	 */
	protected $zwflandkreis5=0;

	/**
	 * jährliche Belastung Kommune / re
	 *
	 * @var integer
	 */
	protected $zwflandkreis6=0;

	/**
	 * Privat
	 * re
	 *
	 * @var boolean
	 */
	protected $zwflandkreis7 = FALSE;

	/**
	 * Betrag Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwflandkreis8=0;

	/**
	 * jährliche Belastung Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwflandkreis9=0;

	/**
	 * Bank
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfsonstige1 = FALSE;

	/**
	 * Betrag Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsonstige2=0;

	/**
	 * jährliche Belastung Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsonstige3=0;

	/**
	 * Kommune
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfsonstige4 = FALSE;

	/**
	 * Betrag Kommune
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsonstige5=0;

	/**
	 * jährliche Belastung Kommune / re
	 *
	 * @var integer
	 */
	protected $zwfsonstige6=0;

	/**
	 * Privat
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfsonstige7 = FALSE;

	/**
	 * Betrag Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsonstige8=0;

	/**
	 * jährliche Belastung Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsonstige9=0;

	/**
	 * Bank
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfvorsteuer1 = FALSE;

	/**
	 * Betrag Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfvorsteuer2=0;

	/**
	 * jährliche Belastung Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfvorsteuer3=0;

	/**
	 * Kommune
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfvorsteuer4 = FALSE;

	/**
	 * Betrag Kommune
	 * re
	 *
	 * @var integer
	 */
	protected $zwfvorsteuer5=0;

	/**
	 * jährliche Belastung Kommune / re
	 *
	 * @var integer
	 */
	protected $zwfvorsteuer6=0;

	/**
	 * Privat
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfvorsteuer7 = FALSE;

	/**
	 * Betrag Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfvorsteuer8=0;

	/**
	 * jährliche Belastung Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfvorsteuer9=0;

	/**
	 * Bank
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfsmf1 = FALSE;

	/**
	 * Betrag Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsmf2=0;

	/**
	 * jährliche Belastung Bank
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsmf3=0;

	/**
	 * Kommune
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfsmf4 = FALSE;

	/**
	 * Betrag Kommune
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsmf5=0;

	/**
	 * jährliche Belastung Kommune / re
	 *
	 * @var integer
	 */
	protected $zwfsmf6=0;

	/**
	 * Privat
	 * re
	 *
	 * @var boolean
	 */
	protected $zwfsmf7 = FALSE;

	/**
	 * Betrag Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsmf8=0;

	/**
	 * jährliche Belastung Privat
	 * re
	 *
	 * @var integer
	 */
	protected $zwfsmf9=0;

	/**
	 * 1. Jahr GuV
	 * re
	 *
	 * @var integer
	 */
	protected $jahreszahl1=0;

	/**
	 * 3. Jahr GuV
	 * re
	 *
	 * @var integer
	 */
	protected $jahreszahl2=0;

	/**
	 * 3 Jahresergebnis
	 * re
	 *
	 * @var integer
	 */
	protected $guvdurchschnittsergebnis=0;

	/**
	 * Wegfall Finanzierungsmittel
	 * re
	 *
	 * @var boolean
	 */
	protected $vbbgruende1 = FALSE;

	/**
	 * Fortbestand Sportanlage
	 * re
	 *
	 * @var boolean
	 */
	protected $vbbgruende2 = FALSE;

	/**
	 * Verlust Sportanlage
	 * re
	 *
	 * @var boolean
	 */
	protected $vbbgruende3 = FALSE;

	/**
	 * Katastrophenfall
	 * re
	 *
	 * @var boolean
	 */
	protected $vbbgruende4 = FALSE;

	/**
	 * jSonstige
	 * re
	 *
	 * @var boolean
	 */
	protected $vbbgruende5 = FALSE;

	/**
	 * Sonstige Begründung
	 * re
	 *
	 * @var string
	 */
	protected $begruendungsonstige;

	/**
	 * Erklärung 1
	 * re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $vbberklaerung1 = FALSE;

	/**
	 * Erklärung2
	 * re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $vbberklaerung2 = FALSE;

	/**
	 * Datum
	 * re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $vmlstichtag;

	/**
	 * Anzahl Boote
	 * kl +re
	 *
	 * @var integer
	 */
	protected $anzahlboote=0;

	/**
	 * Anzahl Pferde
	 * kl+re
	 *
	 * @var integer
	 */
	protected $anzahlpferde=0;

	/**
	 * Sportstättenbauberatung
	 * kl+re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $datumbauberatung;

	/**
	 * Erstes Gespräch mit BLSV-Kreis / kl+re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $datumgespraechkv;

	/**
	 * Ortsbesichtung durch BLSV-Kreis / kl+re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ortsbesichtigungkv = 0;

	/**
	 * Sonstige Verbindlichkeiten
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $absendedatum;

	/**
	 * Eigentumsverhältnisse/Eigentum / kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $eigentum = FALSE;

	/**
	 * Eigentumsverhältnisse/Erbbaurecht / kl +re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erbbaurecht = FALSE;

	/**
	 * Eigentumsverhältnisse/Pachtvertrag / kl+re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $pachtvertrag = FALSE;

	/**
	 * Grundbuchamtlicher Eigentümer / kl+re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $eigentuemer;

	/**
	 * Grundstücksgröße
	 * kl+re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $grundstuecksgroesse=0;

	/**
	 * Flurnummer
	 * kl+re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $flurnummer;

	/**
	 * Sonstige Verbindlichkeiten
	 * kl+re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $gemarkung;

	/**
	 * Datum Laufzeitende
	 * kl+re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $laufzeit;

	/**
	 * Kein Rechtsanspruch auf Förderung /kl+re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklrechtsanspruch = FALSE;

	/**
	 * Zweckbindung und Meldepflicht / kl+re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklmeldepflicht = FALSE;

	/**
	 * Kein Baubeginn erfolgt
	 * kl+re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklbaubeginn = FALSE;

	/**
	 * vollständige Angaben
	 * kl+re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklvollstaendigeangaben = FALSE;

	/**
	 * Subvention
	 * kl+re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklsubvention = FALSE;

	/**
	 * gesicherte Finanzierung
	 * kl+re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklfinanzierung = FALSE;

	/**
	 * Maßnahmenart
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $masnahmenart=0;

	/**
	 * FAX
	 * kl + re
	 *
	 * @var string
	 */
	protected $ansprechpartnerfax;

	/**
	 * Beantragter Zuschuss bis max. € 30.000,-- kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierungzuschusskl=0;

	/**
	 * Beginn des Rechnungsjahres / kl
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $guvbeginn;

	/**
	 * Ende des Rechnungsjahres
	 * kl
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $guvende;

	/**
	 * Wahlkästchen A
	 * kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $guvbilanz = 0;

	/**
	 * Wahlkästchen B
	 * kl
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $guveuerechnung = FALSE;

	/**
	 * Gesamteinnahmen
	 * kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $guveinnahmengesamt=0;

	/**
	 * Mitgliedsbeiträge
	 * kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $einnahmenbeitraege=0;

	/**
	 * nichtzweckgebunde Spenden / kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $einnahmenspenden=0;

	/**
	 * Zuschüsse für Investitions-maßnahmen / kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $einnahmenzuschuesse=0;

	/**
	 * Gesamtausgaben
	 * kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $guvausgabengesamt=0;

	/**
	 * Instandhaltung Gebäude
	 * kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ausgabeninstandhaltung=0;

	/**
	 * Betriebsmittel für den Sportbetrieb / kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ausgabensportbetrieb=0;

	/**
	 * Betriebsmitel für die Verwaltung / kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ausgabenverwaltung=0;

	/**
	 * Abschreibungen
	 * kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ausgabenabschreibung=0;

	/**
	 * Überschus/Fehlbetrag des letzten Geschäftsjahres / kl
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ueberschussfehlbetrag=0;

	/**
	 * Immaterielle Vermögens-gegenstände / kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $vermoegensgegenstaende=0;

	/**
	 * Sachanlagen
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sachanlagen=0;

	/**
	 * Finanzanlagen
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzanlagen=0;

	/**
	 * Kassenbestand
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $kassenbestand=0;

	/**
	 * Bankguthaben
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bankguthaben=0;

	/**
	 * Freie Rücklagen
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ruecklagenfrei=0;

	/**
	 * Zweckgebundene Rücklagen / kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ruecklagenzweck=0;

	/**
	 * Betriebsrücklagen
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $ruecklagenbetrieb=0;

	/**
	 * Kreditinstitute
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $verbindlichkeitbank=0;

	/**
	 * BLSV-Staatsmitteldarlehen
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $verbindlichkeitblssmd=0;

	/**
	 * Rückstellungen/sonstige Verbindlichkeiten / kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $verbindlichkeitsonstige=0;

	/**
	 * Jährlicher Kapitaldienst
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $jahreskapitaldienst=0;

	/**
	 * Liste Fachverbände
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $fachverbandmitglied1=0;

	/**
	 * Mitgliederzahl 2010 bis 26
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mitglieder0110bis26=0;

	/**
	 * Mitgliederzahl 2010 ü26
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mitglieder0110ueber26=0;

	/**
	 * Mitgliederzahl 2011 bis 26
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mitglieder0111bis26=0;

	/**
	 * Mitgliederzahl 2011 ü26
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mitglieder0111ueber26=0;

	/**
	 * Mitgliederzahl 2012 bis 26
	 * kl+re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mitglieder0112bis26=0;

	/**
	 * Mitgliederzahl 2012 ü26
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mitglieder0112ueber26=0;

	/**
	 * Liste Fachverbände
	 * kl +re
	 *
	 * @var integer
	 */
	protected $fachverbandsmitglied2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0210bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0210ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0211bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0211ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0212bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0212ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandsmitglied3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0310bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0310ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0311bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0311ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0312bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0312ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandsmitglied4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0410bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0410ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0411bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0411ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0412bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0412ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandsmitglied5=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0510bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0510ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0511bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0511ueber26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0512bis26=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mitglieder0512ueber26=0;

	/**
	 * Gemeldete Mannschaften Fachverband / kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $fachverbandmannschaft1=0;

	/**
	 * Anzahl Mannschaften
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $schuelerjugend0110=0;

	/**
	 * Anzahl Mannschaften
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $erwachsene0110=0;

	/**
	 * Anzahl Mannschaften
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $schuelerjugend0111=0;

	/**
	 * Anzahl Mannschaften
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $erwachsene0111=0;

	/**
	 * Anzahl Mannschaften
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $schuelerjugend0112=0;

	/**
	 * Anzahl Mannschaften
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $erwachsene0112=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandmannschaft2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0210=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0210=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0211=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0211=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0212=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0212=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandmannschaft3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0310=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0310=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0311=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0311=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0312=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0312=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandmannschaft4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0410=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0410=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0411=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0411=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0412=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0412=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandmannschaft5=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0510=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0510=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0511=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0511=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $schuelerjugend0512=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene0512=0;

	/**
	 * Fachverband lizentierte Übungsleiter / kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $fachverbandueleiter1=0;

	/**
	 * Anzahl 2010
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $anzahl0110=0;

	/**
	 * Anzahl 2011
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $anzahl0111=0;

	/**
	 * Anzahl 2012
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $anzahl0112=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandueleiter2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0210=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0211=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0212=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandueleiter3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0310=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0311=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0312=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandueleiter4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0410=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0411=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0412=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandueleiter5=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0510=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0511=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $anzahl0512=0;

	/**
	 * Sparten die Anlage künftig nutzen
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $fachverbandnutzung1=0;

	/**
	 * Anzahl der Nutzter
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $kinderjugendliche1=0;

	/**
	 * Anzahl der Nutzter
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $erwachsene1=0;

	/**
	 * Anzahl Manschaften Schüler / Jugend w /kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mannschaftschuejugw1=0;

	/**
	 * Anzahl Manschaften Schüler / Jugend m /kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mannschaftschuejugm1=0;

	/**
	 * Anzahl Manschaften Erwachsene w / kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mannschafterwachsenw1=0;

	/**
	 * Anzahl Manschaften Erwachsene m / kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $mannschafterwachsenm1=0;

	/**
	 * Anzahl Übungsleiter
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $lizensierteuel1=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandnutzung2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $kinderjugendliche2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschaftschuejugw2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschaftschuejugm2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschafterwachsenw2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschafterwachsenm2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $lizensierteuel2=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandnutzung3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $kinderjugendliche3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschaftschuejugw3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschaftschuejugm3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschafterwachsenw3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschafterwachsenm3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $lizensierteuel3=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $fachverbandnutzung4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $kinderjugendliche4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $erwachsene4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschaftschuejugw4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschaftschuejugm4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschafterwachsenw4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $mannschafterwachsenm4=0;

	/**
	 * kl + re
	 *
	 * @var integer
	 */
	protected $lizensierteuel4=0;

	/**
	 * X-Feld
	 * kl + re
	 *
	 * @var boolean
	 */
	protected $notwendigkeitauslastung = FALSE;

	/**
	 * X-Feld
	 * kl + re
	 *
	 * @var boolean
	 */
	protected $notwendigkeitausrichtung = FALSE;

	/**
	 * X-Feld
	 * kl + re
	 *
	 * @var boolean
	 */
	protected $notwendigkeitbeduerfnis = FALSE;

	/**
	 * x-Feld
	 * kl + re
	 *
	 * @var boolean
	 */
	protected $notwendigkeitunterhalt = FALSE;

	/**
	 * Sportstättenbauberatung ja
	 * kl+re
	 *
	 * @var integer
	 */
	protected $bauberatungja = 0;

	/**
	 * Datum der Berratung
	 * kl + re
	 *
	 * @var string
	 */
	protected $bauberatungdatum;

	/**
	 * Sportstättenbauberatung nein / kl
	 * kl+re
	 *
	 * @var boolean
	 */
	protected $bauberatungnein = FALSE;

	/**
	 * Kenntnisnahme an-Bestp + Hinweisblatt /kl
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $bestkenntnisnahme = FALSE;

	/**
	 * ERklärung Nutzung dritte4r
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklnutzungdritte = FALSE;

	/**
	 * Gaststättenkonzession
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $erklkonzession = FALSE;

	/**
	 * antragsnummer1
	 *
	 * @var Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung
	 */
	protected $antragsnummer1;

	/**
	 * BestehendeSportstätten1
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten1=0;
	
	/**
	 * bestehendesportstaetten11
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten11=0;
	
	/**
	 * bestehendesportstaetten111
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten111=0;
	
	/**
	 * bestehendesportstaetten1111
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten1111=false;
	
	/**
	 * bestehendesportstaetten1112
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten1112=false;
	
	/**
	 * bestehendesportstaetten12
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten12=0;
	
	/**
	 * bestehendesportstaetten21
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten21=0;
	
	/**
	 * bestehendesportstaetten211
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten211=0;
	
	/**
	 * bestehendesportstaetten212
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten212=0;
	
	/**
	 * bestehendesportstaetten22
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten22=0;
	
	/**
	 * bestehendesportstaetten221
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten221=0;
	
	/**
	 * bestehendesportstaetten222
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten222=0;
	
	/**
	 * bestehendesportstaetten3
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten3=0;
	
	/**
	 * bestehendesportstaetten31
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten31=0;
	
	/**
	 * bestehendesportstaetten32
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten32=0;
	
	/**
	 * bestehendesportstaetten4
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten4=0;
	
	/**
	 * bestehendesportstaetten41
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten41=0;
	
	/**
	 * bestehendesportstaetten42
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten42=0;
	
	/**
	 * bestehendesportstaetten51
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten51=0;
	
	/**
	 * bestehendesportstaetten511
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten511=0;
	
	/**
	 * bestehendesportstaetten512
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten512=0;
	
	/**
	 * bestehendesportstaetten521
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten521=0;
	
	/**
	 * bestehendesportstaetten522
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten522=0;
	
	/**
	 * bestehendesportstaetten531
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten531=0;
	
	/**
	 * bestehendesportstaetten532
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $bestehendesportstaetten532=0;
	
	/**
	 * Finanzierung11
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung11=0;
	
	/**
	 * Finanzierung111
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung111=0;
	
	/**
	 * Finanzierung112
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung112=0;
	
	/**
	 * Finanzierung121
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung121=0;
	
	/**
	 * Finanzierung122
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung122=0;
	
	/**
	 * Finanzierung131
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung131=0;
	
	/**
	 * Finanzierung132
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung132=0;
	
	/**
	 * Finanzierung141
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung141=0;
	
	/**
	 * Finanzierung142
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung142=0;
	
	/**
	 * Finanzierung21
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung21=0;
	
	/**
	 * Finanzierung211
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung211=0;
	
	/**
	 * Finanzierung212
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung212=0;
	
	/**
	 * Finanzierung221
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung221=0;
	
	/**
	 * Finanzierung222
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung222=0;
	
	/**
	 * Finanzierung231
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung231=0;
	
	/**
	 * Finanzierung232
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung232=0;
	
	/**
	 * Finanzierung241
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung241=0;
	
	/**
	 * Finanzierung242
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung242=0;
	
	/**
	 * Finanzierung3
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung3=0;
	
	/**
	 * Finanzierung31
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung31=0;
	
	/**
	 * Finanzierung32
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung32=0;
	
	/**
	 * Finanzierung4
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung4=0;
	
	/**
	 * Finanzierung41
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung41=0;
	
	/**
	 * Finanzierung42
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung42=0;
	
	/**
	 * Finanzierung43
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung43=0;
	
	/**
	 * Finanzierung44
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung44=0;
	
	/**
	 * Finanzierung45
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $finanzierung45=0;
	
	/**
	 * Sonstiges1
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sonstiges1=0;
	
	/**
	 * Sonstiges11
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sonstiges11=0;
	
	/**
	 * Sonstiges2
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sonstiges2=0;
	
	/**
	 * Sonstiges21
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sonstiges21=0;
	
	/**
	 * Sonstiges22
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sonstiges22=0;
	
	/**
	 * Sportlicheentwicklung1
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung1=0;
	
	/**
	 * Sportlicheentwicklung11
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung11=0;
	
	/**
	 * Sportlicheentwicklung12
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung12=0;
	
	/**
	 * Sportlicheentwicklung13
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung13=0;
	
	/**
	 * Sportlicheentwicklung2
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2=0;
	
	/**
	 * Sportlicheentwicklung21
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung21=0;
	
	/**
	 * Sportlicheentwicklung211
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung211=0;
	
	/**
	 * Sportlicheentwicklung2111
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2111=0;
	
	/**
	 * Sportlicheentwicklung2112
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2112=0;
	
	/**
	 * Sportlicheentwicklung2113
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2113=0;
	
	/**
	 * Sportlicheentwicklung212
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung212=0;
	
	/**
	 * Sportlicheentwicklung2121
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2121=0;
	
	/**
	 * Sportlicheentwicklung2122
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2122=0;
	
	/**
	 * Sportlicheentwicklung2123
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2123=0;
	
	/**
	 * Sportlicheentwicklung213
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung213=0;
	
	/**
	 * Sportlicheentwicklung2131
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2131=0;
	
	/**
	 * Sportlicheentwicklung2132
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2132=0;
	
	/**
	 * Sportlicheentwicklung2133
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2133=0;
	
	/**
	 * Sportlicheentwicklung22
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung22=0;
	
	/**
	 * Sportlicheentwicklung221
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung221=0;
	
	/**
	 * Sportlicheentwicklung2211
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2211=0;
	
	/**
	 * Sportlicheentwicklung2212
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2212=0;
	
	/**
	 * Sportlicheentwicklung2213
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2213=0;
	
	/**
	 * Sportlicheentwicklung222
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung222=0;
	
	/**
	 * Sportlicheentwicklung2221
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2221=0;
	
	/**
	 * Sportlicheentwicklung2222
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2222=0;
	
	/**
	 * Sportlicheentwicklung2223
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2223=0;
	
	/**
	 * Sportlicheentwicklung223
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung223=0;
	
	/**
	 * Sportlicheentwicklung2231
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2231=0;
	
	/**
	 * Sportlicheentwicklung2232
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2232=0;
	
	/**
	 * Sportlicheentwicklung2233
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2233=0;
	
	/**
	 * Sportlicheentwicklung23
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung23=0;
	
	/**
	 * Sportlicheentwicklung231
	 * kl + re 
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung231=0;
	
	/**
	 * Sportlicheentwicklung2311
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2311=0;
	
	/**
	 * Sportlicheentwicklung2312
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2312=0;
	
	/**
	 * Sportlicheentwicklung2313
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2313=0;
	
	/**
	 * Sportlicheentwicklung232
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung232=0;
	
	/**
	 * Sportlicheentwicklung2321
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2321=0;
	
	/**
	 * Sportlicheentwicklung2322
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2322=0;
	
	/**
	 * Sportlicheentwicklung2323
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2323=0;
	
	/**
	 * Sportlicheentwicklung233
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung233=0;
	
	/**
	 * Sportlicheentwicklung2331
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2331=0;
	
	/**
	 * Sportlicheentwicklung2332
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2332=0;
	
	/**
	 * Sportlicheentwicklung2333
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung2333=0;
	
	/**
	 * Sportlicheentwicklung3
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung3=0;
	
	/**
	 * Sportlicheentwicklung311
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung311=0;
	
	/**
	 * Sportlicheentwicklung312
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung312=0;
	
	/**
	 * Sportlicheentwicklung321
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung321=0;
	
	/**
	 * Sportlicheentwicklung322
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung322=0;
	
	/**
	 * Sportlicheentwicklung331
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung331=0;
	
	/**
	 * Sportlicheentwicklung332
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung332=0;
	
	/**
	 * Sportlicheentwicklung4
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung4=0;
	
	/**
	 * Sportlicheentwicklung41
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung41=0;
	
	/**
	 * Sportlicheentwicklung411
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung411=0;
	
	/**
	 * Sportlicheentwicklung412
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung412=0;
	
	/**
	 * Sportlicheentwicklung413
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung413=0;
	
	/**
	 * Sportlicheentwicklung414
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung414=0;
	
	/**
	 * Sportlicheentwicklung415
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung415=0;
	
	/**
	 * Sportlicheentwicklung42
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung42=0;
	
	/**
	 * Sportlicheentwicklung421
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung421=0;
	
	/**
	 * Sportlicheentwicklung422
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung422=0;
	
	/**
	 * Sportlicheentwicklung423
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung423=0;
	
	/**
	 * Sportlicheentwicklung424
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung424=0;
	
	/**
	 * Sportlicheentwicklung425
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung425=0;
	
	/**
	 * Sportlicheentwicklung43
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung43=0;
	
	/**
	 * Sportlicheentwicklung431
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung431=0;
	
	/**
	 * Sportlicheentwicklung432
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung432=0;
	
	/**
	 * Sportlicheentwicklung433
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung433=0;
	
	/**
	 * Sportlicheentwicklung434
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung434=0;
	
	/**
	 * Sportlicheentwicklung435
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sportlicheentwicklung435=0;
	
	/**
	 * Stellungnahme11
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme11=0;
	
	/**
	 * Stellungnahme111
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme111=0;
	
	/**
	 * Stellungnahme112
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme112=0;
	
	/**
	 * Stellungnahme121
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme121=0;
	
	/**
	 * Stellungnahme122
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme122=0;
	
	/**
	 * Stellungnahme131
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme131=0;
	
	/**
	 * Stellungnahme132
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme132=0;
	
	/**
	 * Stellungnahme2
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme2=0;
	
	/**
	 * Stellungnahme21
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme21=0;
	
	/**
	 * Stellungnahme22
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme22=0;
	
	/**
	 * Stellungnahme22_0
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme22_0=0;
	
	/**
	 * Stellungnahme221
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme221=FALSE;
	
	/**
	 * Stellungnahme222
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme222=FALSE;
	
	/**
	 * Stellungnahme223
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme223=FALSE;
	
	/**
	 * Stellungnahme224
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme224=FALSE;
	
	/**
	 * Stellungnahme3
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme3=0;
	
	/**
	 * Stellungnahme31
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme31=0;
	
	/**
	 * Stellungnahme32
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme32=0;
	
	/**
	 * Stellungnahme31_0
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme31_0=0;
	
	/**
	 * Stellungnahme311
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme311=FALSE;
	
	/**
	 * Stellungnahme312
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme312=FALSE;
	
	/**
	 * Stellungnahme313
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme313=FALSE;
	
	/**
	 * Stellungnahme4
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme4=0;
	
	/**
	 * Stellungnahme41
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme41=0;
	
	/**
	 * Stellungnahme5
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme5=0;
	
	/**
	 * Stellungnahme51
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme51=0;
	
	/**
	 * Stellungnahme52
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme52=0;
	
	/**
	 * Stellungnahme52_0
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme52_0=0;
	
	/**
	 * Stellungnahme521
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme521=FALSE;
	
	/**
	 * Stellungnahme522
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme522=FALSE;
	
	/**
	 * Stellungnahme523
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme523=FALSE;
	
	/**
	 * Stellungnahme6
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme6=0;
	
	/**
	 * Stellungnahme61
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme61=0;
	
	/**
	 * Stellungnahme62
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme62=0;
	
	/**
	 * Stellungnahme61_0
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme61_0=0;
	
	/**
	 * Stellungnahme611
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme611=FALSE;
	
	/**
	 * Stellungnahme612
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme612=FALSE;
	
	/**
	 * Stellungnahme613
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $stellungnahme613=FALSE;
	
	/**
	 * Stellungnahme614
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $stellungnahme614=0;

	/**
	 * art
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $art=0;
	
	/**
	 * fall
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $fall=0;

	/**
	 * hinweistext1
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $hinweistext1=FALSE;

	/**
	 * hinweistext2
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $hinweistext2=FALSE;

	/**
	 * hinweistext3
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $hinweistext3=FALSE;

	/**
	 * hinweistext4
	 * kl + re
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $hinweistext4=FALSE;
	
	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $kommunebank = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $kommuneprivat = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $landkreisbank = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $landkreiskommune = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $landkreisprivat = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $sonstigebank = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $sonstigekommune = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $sonstigeprivat = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $vorsteuererstbank = FALSE;

	/**
	 * Vorsteuererstattung
	 * re
	 *
	 * @var boolean
	 */

	protected $vorsteuererstkommune = FALSE;

	/**
	 * Vorsteuererstattung
	 * re
	 *
	 * @var boolean
	 */

	protected $vorsteuererstprivat = FALSE;

	/**
	 * Vorsteuererstattung
	 * re
	 *
	 * @var boolean
	 */

	protected $smfoerderungbank = FALSE;

	/**
	 * Staatsmittelfoerderung
	 * re
	 *
	 * @var boolean
	 */

	protected $smfoerderungkommune = FALSE;

	/**
	 * Staatsmittelfoerderung
	 * re
	 *
	 * @var boolean
	 */

	protected $smfoerderungprivat = FALSE;

	/**
	 * Staatsmittelfoerderung
	 * re
	 *
	 * @var integer
	 */

	protected $kommunebetragbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $kommunebetragprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $landkreisbetragbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $landkreisbetragkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $landkreisbetragprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $sonstigebetragbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $sonstigebetragkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $sonstigebetragprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $vorsteuererstbetragbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $vorsteuererstbetragkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $vorsteuererstbetragprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $smfoerderungbetragbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $smfoerderungbetragkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $smfoerderungbetragprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $betragsumme=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $kommunejbelastungbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $kommunejbelastungprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $landkreisjbelastungbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $landkreisjbelastungkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $landkreisjbelastungprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $sonstigejbelastungbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $sonstigejbelastungkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $sonstigejbelastungprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $vorsteuererstjbelastungbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $vorsteuererstjbelastungkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $vorsteuererstjbelastungprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $smfoerderungjbelastungbank=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $smfoerderungjbelastungkommune=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $smfoerderungjbelastungprivat=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $jbelastungsumme=0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $EARvon=0;

	/**
	 * Einnahmen-Ausgaben-Rechnung
	 * re
	 *
	 * @var integer
	 */

	protected $EARbis=0;

	/**
	 * Einnahmen-Ausgaben-Rechnung
	 * re
	 *
	 * @var integer
	 */

	protected $durchschnittsergebnis=0;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $wegfalloefffinanzmittel = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $fortbestandgefaehrdung = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $ersatzloserverlust = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $eintrittnachteiligerfolgen = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $notwendigkeitsonstige = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */

	protected $notwendigkeitsonstigetextfeld=0;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */

	protected $vorzbaubeginnerkl1 = FALSE;

	/**
	 * 
	 * re 
	 *
	 * @var boolean
	 */

	protected $vorzbaubeginnerkl2 = FALSE;
	
	/**
	 * 
	 * re 
	 *
	 * @var boolean
	 */

	protected $b2vbb1 = FALSE;
	
	/**
	 * 
	 * re 
	 *
	 * @var boolean
	 */

	protected $b2vbb2 = FALSE;
	
	/**
	 * 
	 * re 
	 *
	 * @var boolean
	 */

	protected $b2vbb3 = FALSE;
	
	/**
	 * 
	 * re 
	 *
	 * @var boolean
	 */
	protected $b2vbb4 = FALSE;
	
	/**
	 * 
	 * re 
	 *
	 * @var boolean
	 */
	protected $b2vbb5 = FALSE;
	
		/**
	 * 
	 * re
	 *
	 * @var integer
	 */
	protected $staatsmittelfoerderung1 = 0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */
	protected $staatsmittelfoerderung2 = 0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */
	protected $staatsmittelfoerderung3 = 0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */
	protected $staatsmittelfoerderung4 = 0;

	/**
	 * 
	 * re
	 *
	 * @var integer
	 */
	protected $smfgs = 0;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */
	protected $smfkbs = FALSE;

	/**
	 * 
	 * re
	 *
	 * @var boolean
	 */
	protected $smfbbs = FALSE;

	
	
	
	
	
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
	 * Returns the blsvkreis
	 *
	 * @return integer $blsvkreis
	 */
	public function getBlsvkreis() {
		return $this->blsvkreis;
	}

	/**
	 * Sets the blsvkreis
	 *
	 * @param integer $blsvkreis
	 * @return void
	 */
	public function setBlsvkreis($blsvkreis) {
		$this->blsvkreis = $blsvkreis;
	}

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
	 * Returns the ansprechpartenertitel
	 *
	 * @return string $ansprechpartenertitel
	 */
	public function getAnsprechpartenertitel() {
		return $this->ansprechpartenertitel;
	}

	/**
	 * Sets the ansprechpartenertitel
	 *
	 * @param string $ansprechpartenertitel
	 * @return void
	 */
	public function setAnsprechpartenertitel($ansprechpartenertitel) {
		$this->ansprechpartenertitel = $ansprechpartenertitel;
	}

	/**
	 * Returns the ansprechpartnerteldienst
	 *
	 * @return string $ansprechpartnerteldienst
	 */
	public function getAnsprechpartnerteldienst() {
		return $this->ansprechpartnerteldienst;
	}

	/**
	 * Sets the ansprechpartnerteldienst
	 *
	 * @param string $ansprechpartnerteldienst
	 * @return void
	 */
	public function setAnsprechpartnerteldienst($ansprechpartnerteldienst) {
		$this->ansprechpartnerteldienst = $ansprechpartnerteldienst;
	}

	/**
	 * Returns the ansprechpartnertelprivat
	 *
	 * @return string $ansprechpartnertelprivat
	 */
	public function getAnsprechpartnertelprivat() {
		return $this->ansprechpartnertelprivat;
	}

	/**
	 * Sets the ansprechpartnertelprivat
	 *
	 * @param string $ansprechpartnertelprivat
	 * @return void
	 */
	public function setAnsprechpartnertelprivat($ansprechpartnertelprivat) {
		$this->ansprechpartnertelprivat = $ansprechpartnertelprivat;
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
	 * Returns the verwendungszweck1
	 *
	 * @return string $verwendungszweck1
	 */
	public function getVerwendungszweck1() {
		return $this->verwendungszweck1;
	}

	/**
	 * Sets the verwendungszweck1
	 *
	 * @param string $verwendungszweck1
	 * @return void
	 */
	public function setVerwendungszweck1($verwendungszweck1) {
		$this->verwendungszweck1 = $verwendungszweck1;
	}

	/**
	 * Returns the anzahl1
	 *
	 * @return integer $anzahl1
	 */
	public function getAnzahl1() {
		return $this->anzahl1;
	}

	/**
	 * Sets the anzahl1
	 *
	 * @param integer $anzahl1
	 * @return void
	 */
	public function setAnzahl1($anzahl1) {
		$this->anzahl1 = $anzahl1;
	}

	/**
	 * Returns the vbb1
	 *
	 * @return boolean $vbb1
	 */
	public function getVbb1() {
		return $this->vbb1;
	}

	/**
	 * Sets the vbb1
	 *
	 * @param boolean $vbb1
	 * @return void
	 */
	public function setVbb1($vbb1) {
		$this->vbb1 = $vbb1;
	}

	/**
	 * Returns the boolean state of vbb1
	 *
	 * @return boolean
	 */
	public function isVbb1() {
		return $this->getVbb1();
	}

	/**
	 * Returns the kostenanteil1
	 *
	 * @return integer $kostenanteil1
	 */
	public function getKostenanteil1() {
		return $this->kostenanteil1;
	}

	/**
	 * Sets the kostenanteil1
	 *
	 * @param integer $kostenanteil1
	 * @return void
	 */
	public function setKostenanteil1($kostenanteil1) {
		$this->kostenanteil1 = $kostenanteil1;
	}

	/**
	 * Returns the verwendungszweck2
	 *
	 * @return string $verwendungszweck2
	 */
	public function getVerwendungszweck2() {
		return $this->verwendungszweck2;
	}

	/**
	 * Sets the verwendungszweck2
	 *
	 * @param string $verwendungszweck2
	 * @return void
	 */
	public function setVerwendungszweck2($verwendungszweck2) {
		$this->verwendungszweck2 = $verwendungszweck2;
	}

	/**
	 * Returns the anzahl2
	 *
	 * @return integer $anzahl2
	 */
	public function getAnzahl2() {
		return $this->anzahl2;
	}

	/**
	 * Sets the anzahl2
	 *
	 * @param integer $anzahl2
	 * @return void
	 */
	public function setAnzahl2($anzahl2) {
		$this->anzahl2 = $anzahl2;
	}

	/**
	 * Returns the vbb2
	 *
	 * @return boolean $vbb2
	 */
	public function getVbb2() {
		return $this->vbb2;
	}

	/**
	 * Sets the vbb2
	 *
	 * @param boolean $vbb2
	 * @return void
	 */
	public function setVbb2($vbb2) {
		$this->vbb2 = $vbb2;
	}

	/**
	 * Returns the boolean state of vbb2
	 *
	 * @return boolean
	 */
	public function isVbb2() {
		return $this->getVbb2();
	}

	/**
	 * Returns the kostenanteil2
	 *
	 * @return integer $kostenanteil2
	 */
	public function getKostenanteil2() {
		return $this->kostenanteil2;
	}

	/**
	 * Sets the kostenanteil2
	 *
	 * @param integer $kostenanteil2
	 * @return void
	 */
	public function setKostenanteil2($kostenanteil2) {
		$this->kostenanteil2 = $kostenanteil2;
	}

	/**
	 * Returns the verwendungszweck3
	 *
	 * @return string $verwendungszweck3
	 */
	public function getVerwendungszweck3() {
		return $this->verwendungszweck3;
	}

	/**
	 * Sets the verwendungszweck3
	 *
	 * @param string $verwendungszweck3
	 * @return void
	 */
	public function setVerwendungszweck3($verwendungszweck3) {
		$this->verwendungszweck3 = $verwendungszweck3;
	}

	/**
	 * Returns the anzahl3
	 *
	 * @return integer $anzahl3
	 */
	public function getAnzahl3() {
		return $this->anzahl3;
	}

	/**
	 * Sets the anzahl3
	 *
	 * @param integer $anzahl3
	 * @return void
	 */
	public function setAnzahl3($anzahl3) {
		$this->anzahl3 = $anzahl3;
	}

	/**
	 * Returns the vbb3
	 *
	 * @return boolean $vbb3
	 */
	public function getVbb3() {
		return $this->vbb3;
	}

	/**
	 * Sets the vbb3
	 *
	 * @param boolean $vbb3
	 * @return void
	 */
	public function setVbb3($vbb3) {
		$this->vbb3 = $vbb3;
	}

	/**
	 * Returns the boolean state of vbb3
	 *
	 * @return boolean
	 */
	public function isVbb3() {
		return $this->getVbb3();
	}

	/**
	 * Returns the kostenanteil3
	 *
	 * @return integer $kostenanteil3
	 */
	public function getKostenanteil3() {
		return $this->kostenanteil3;
	}

	/**
	 * Sets the kostenanteil3
	 *
	 * @param integer $kostenanteil3
	 * @return void
	 */
	public function setKostenanteil3($kostenanteil3) {
		$this->kostenanteil3 = $kostenanteil3;
	}

	/**
	 * Returns the verwendungszweck4
	 *
	 * @return string $verwendungszweck4
	 */
	public function getVerwendungszweck4() {
		return $this->verwendungszweck4;
	}

	/**
	 * Sets the verwendungszweck4
	 *
	 * @param string $verwendungszweck4
	 * @return void
	 */
	public function setVerwendungszweck4($verwendungszweck4) {
		$this->verwendungszweck4 = $verwendungszweck4;
	}

	/**
	 * Returns the anzahl4
	 *
	 * @return integer $anzahl4
	 */
	public function getAnzahl4() {
		return $this->anzahl4;
	}

	/**
	 * Sets the anzahl4
	 *
	 * @param integer $anzahl4
	 * @return void
	 */
	public function setAnzahl4($anzahl4) {
		$this->anzahl4 = $anzahl4;
	}

	/**
	 * Returns the vbb4
	 *
	 * @return boolean $vbb4
	 */
	public function getVbb4() {
		return $this->vbb4;
	}

	/**
	 * Sets the vbb4
	 *
	 * @param boolean $vbb4
	 * @return void
	 */
	public function setVbb4($vbb4) {
		$this->vbb4 = $vbb4;
	}

	/**
	 * Returns the boolean state of vbb4
	 *
	 * @return boolean
	 */
	public function isVbb4() {
		return $this->getVbb4();
	}

	/**
	 * Returns the kostenanteil4
	 *
	 * @return integer $kostenanteil4
	 */
	public function getKostenanteil4() {
		return $this->kostenanteil4;
	}

	/**
	 * Sets the kostenanteil4
	 *
	 * @param integer $kostenanteil4
	 * @return void
	 */
	public function setKostenanteil4($kostenanteil4) {
		$this->kostenanteil4 = $kostenanteil4;
	}

	/**
	 * Returns the verwendungszweck5
	 *
	 * @return string $verwendungszweck5
	 */
	public function getVerwendungszweck5() {
		return $this->verwendungszweck5;
	}

	/**
	 * Sets the verwendungszweck5
	 *
	 * @param string $verwendungszweck5
	 * @return void
	 */
	public function setVerwendungszweck5($verwendungszweck5) {
		$this->verwendungszweck5 = $verwendungszweck5;
	}

	/**
	 * Returns the anzahl5
	 *
	 * @return integer $anzahl5
	 */
	public function getAnzahl5() {
		return $this->anzahl5;
	}

	/**
	 * Sets the anzahl5
	 *
	 * @param integer $anzahl5
	 * @return void
	 */
	public function setAnzahl5($anzahl5) {
		$this->anzahl5 = $anzahl5;
	}

	/**
	 * Returns the vbb5
	 *
	 * @return boolean $vbb5
	 */
	public function getVbb5() {
		return $this->vbb5;
	}

	/**
	 * Sets the vbb5
	 *
	 * @param boolean $vbb5
	 * @return void
	 */
	public function setVbb5($vbb5) {
		$this->vbb5 = $vbb5;
	}

	/**
	 * Returns the boolean state of vbb5
	 *
	 * @return boolean
	 */
	public function isVbb5() {
		return $this->getVbb5();
	}

	/**
	 * Returns the kostenenteil5
	 *
	 * @return integer $kostenenteil5
	 */
	public function getKostenenteil5() {
		return $this->kostenenteil5;
	}

	/**
	 * Sets the kostenenteil5
	 *
	 * @param integer $kostenenteil5
	 * @return void
	 */
	public function setKostenenteil5($kostenenteil5) {
		$this->kostenenteil5 = $kostenenteil5;
	}

	/**
	 * Returns the verwendungszweck6
	 *
	 * @return string $verwendungszweck6
	 */
	public function getVerwendungszweck6() {
		return $this->verwendungszweck6;
	}

	/**
	 * Sets the verwendungszweck6
	 *
	 * @param string $verwendungszweck6
	 * @return void
	 */
	public function setVerwendungszweck6($verwendungszweck6) {
		$this->verwendungszweck6 = $verwendungszweck6;
	}

	/**
	 * Returns the anzahl6
	 *
	 * @return integer $anzahl6
	 */
	public function getAnzahl6() {
		return $this->anzahl6;
	}

	/**
	 * Sets the anzahl6
	 *
	 * @param integer $anzahl6
	 * @return void
	 */
	public function setAnzahl6($anzahl6) {
		$this->anzahl6 = $anzahl6;
	}

	/**
	 * Returns the vbb6
	 *
	 * @return boolean $vbb6
	 */
	public function getVbb6() {
		return $this->vbb6;
	}

	/**
	 * Sets the vbb6
	 *
	 * @param boolean $vbb6
	 * @return void
	 */
	public function setVbb6($vbb6) {
		$this->vbb6 = $vbb6;
	}

	/**
	 * Returns the boolean state of vbb6
	 *
	 * @return boolean
	 */
	public function isVbb6() {
		return $this->getVbb6();
	}

	/**
	 * Returns the kostenanteil6
	 *
	 * @return integer $kostenanteil6
	 */
	public function getKostenanteil6() {
		return $this->kostenanteil6;
	}

	/**
	 * Sets the kostenanteil6
	 *
	 * @param integer $kostenanteil6
	 * @return void
	 */
	public function setKostenanteil6($kostenanteil6) {
		$this->kostenanteil6 = $kostenanteil6;
	}

	/**
	 * Returns the verwendungszweck7
	 *
	 * @return string $verwendungszweck7
	 */
	public function getVerwendungszweck7() {
		return $this->verwendungszweck7;
	}

	/**
	 * Sets the verwendungszweck7
	 *
	 * @param string $verwendungszweck7
	 * @return void
	 */
	public function setVerwendungszweck7($verwendungszweck7) {
		$this->verwendungszweck7 = $verwendungszweck7;
	}

	/**
	 * Returns the anzahl7
	 *
	 * @return integer $anzahl7
	 */
	public function getAnzahl7() {
		return $this->anzahl7;
	}

	/**
	 * Sets the anzahl7
	 *
	 * @param integer $anzahl7
	 * @return void
	 */
	public function setAnzahl7($anzahl7) {
		$this->anzahl7 = $anzahl7;
	}

	/**
	 * Returns the vbb7
	 *
	 * @return boolean $vbb7
	 */
	public function getVbb7() {
		return $this->vbb7;
	}

	/**
	 * Sets the vbb7
	 *
	 * @param boolean $vbb7
	 * @return void
	 */
	public function setVbb7($vbb7) {
		$this->vbb7 = $vbb7;
	}

	/**
	 * Returns the boolean state of vbb7
	 *
	 * @return boolean
	 */
	public function isVbb7() {
		return $this->getVbb7();
	}

	/**
	 * Returns the kostenanteil7
	 *
	 * @return integer $kostenanteil7
	 */
	public function getKostenanteil7() {
		return $this->kostenanteil7;
	}

	/**
	 * Sets the kostenanteil7
	 *
	 * @param integer $kostenanteil7
	 * @return void
	 */
	public function setKostenanteil7($kostenanteil7) {
		$this->kostenanteil7 = $kostenanteil7;
	}

	/**
	 * Returns the verwendungszweck8
	 *
	 * @return string $verwendungszweck8
	 */
	public function getVerwendungszweck8() {
		return $this->verwendungszweck8;
	}

	/**
	 * Sets the verwendungszweck8
	 *
	 * @param string $verwendungszweck8
	 * @return void
	 */
	public function setVerwendungszweck8($verwendungszweck8) {
		$this->verwendungszweck8 = $verwendungszweck8;
	}

	/**
	 * Returns the anzahl8
	 *
	 * @return integer $anzahl8
	 */
	public function getAnzahl8() {
		return $this->anzahl8;
	}

	/**
	 * Sets the anzahl8
	 *
	 * @param integer $anzahl8
	 * @return void
	 */
	public function setAnzahl8($anzahl8) {
		$this->anzahl8 = $anzahl8;
	}

	/**
	 * Returns the vbb8
	 *
	 * @return boolean $vbb8
	 */
	public function getVbb8() {
		return $this->vbb8;
	}

	/**
	 * Sets the vbb8
	 *
	 * @param boolean $vbb8
	 * @return void
	 */
	public function setVbb8($vbb8) {
		$this->vbb8 = $vbb8;
	}

	/**
	 * Returns the boolean state of vbb8
	 *
	 * @return boolean
	 */
	public function isVbb8() {
		return $this->getVbb8();
	}

	/**
	 * Returns the kostenanteil8
	 *
	 * @return integer $kostenanteil8
	 */
	public function getKostenanteil8() {
		return $this->kostenanteil8;
	}

	/**
	 * Sets the kostenanteil8
	 *
	 * @param integer $kostenanteil8
	 * @return void
	 */
	public function setKostenanteil8($kostenanteil8) {
		$this->kostenanteil8 = $kostenanteil8;
	}

	/**
	 * Returns the verwendungszweck9
	 *
	 * @return string $verwendungszweck9
	 */
	public function getVerwendungszweck9() {
		return $this->verwendungszweck9;
	}

	/**
	 * Sets the verwendungszweck9
	 *
	 * @param string $verwendungszweck9
	 * @return void
	 */
	public function setVerwendungszweck9($verwendungszweck9) {
		$this->verwendungszweck9 = $verwendungszweck9;
	}

	/**
	 * Returns the anzahl9
	 *
	 * @return integer $anzahl9
	 */
	public function getAnzahl9() {
		return $this->anzahl9;
	}

	/**
	 * Sets the anzahl9
	 *
	 * @param integer $anzahl9
	 * @return void
	 */
	public function setAnzahl9($anzahl9) {
		$this->anzahl9 = $anzahl9;
	}

	/**
	 * Returns the vbb9
	 *
	 * @return boolean $vbb9
	 */
	public function getVbb9() {
		return $this->vbb9;
	}

	/**
	 * Sets the vbb9
	 *
	 * @param boolean $vbb9
	 * @return void
	 */
	public function setVbb9($vbb9) {
		$this->vbb9 = $vbb9;
	}

	/**
	 * Returns the boolean state of vbb9
	 *
	 * @return boolean
	 */
	public function isVbb9() {
		return $this->getVbb9();
	}

	/**
	 * Returns the kostenanteil9
	 *
	 * @return integer $kostenanteil9
	 */
	public function getKostenanteil9() {
		return $this->kostenanteil9;
	}

	/**
	 * Sets the kostenanteil9
	 *
	 * @param integer $kostenanteil9
	 * @return void
	 */
	public function setKostenanteil9($kostenanteil9) {
		$this->kostenanteil9 = $kostenanteil9;
	}

	/**
	 * Returns the verwendungszweck10
	 *
	 * @return string $verwendungszweck10
	 */
	public function getVerwendungszweck10() {
		return $this->verwendungszweck10;
	}

	/**
	 * Sets the verwendungszweck10
	 *
	 * @param string $verwendungszweck10
	 * @return void
	 */
	public function setVerwendungszweck10($verwendungszweck10) {
		$this->verwendungszweck10 = $verwendungszweck10;
	}

	/**
	 * Returns the anzahl10
	 *
	 * @return integer $anzahl10
	 */
	public function getAnzahl10() {
		return $this->anzahl10;
	}

	/**
	 * Sets the anzahl10
	 *
	 * @param integer $anzahl10
	 * @return void
	 */
	public function setAnzahl10($anzahl10) {
		$this->anzahl10 = $anzahl10;
	}

	/**
	 * Returns the vbb10
	 *
	 * @return boolean $vbb10
	 */
	public function getVbb10() {
		return $this->vbb10;
	}

	/**
	 * Sets the vbb10
	 *
	 * @param boolean $vbb10
	 * @return void
	 */
	public function setVbb10($vbb10) {
		$this->vbb10 = $vbb10;
	}

	/**
	 * Returns the boolean state of vbb10
	 *
	 * @return boolean
	 */
	public function isVbb10() {
		return $this->getVbb10();
	}

	/**
	 * Returns the kostenanteil10
	 *
	 * @return integer $kostenanteil10
	 */
	public function getKostenanteil10() {
		return $this->kostenanteil10;
	}

	/**
	 * Sets the kostenanteil10
	 *
	 * @param integer $kostenanteil10
	 * @return void
	 */
	public function setKostenanteil10($kostenanteil10) {
		$this->kostenanteil10 = $kostenanteil10;
	}

	/**
	 * Returns the verwendungszweck11
	 *
	 * @return string $verwendungszweck11
	 */
	public function getVerwendungszweck11() {
		return $this->verwendungszweck11;
	}

	/**
	 * Sets the verwendungszweck11
	 *
	 * @param string $verwendungszweck11
	 * @return void
	 */
	public function setVerwendungszweck11($verwendungszweck11) {
		$this->verwendungszweck11 = $verwendungszweck11;
	}

	/**
	 * Returns the anzahl11
	 *
	 * @return integer $anzahl11
	 */
	public function getAnzahl11() {
		return $this->anzahl11;
	}

	/**
	 * Sets the anzahl11
	 *
	 * @param integer $anzahl11
	 * @return void
	 */
	public function setAnzahl11($anzahl11) {
		$this->anzahl11 = $anzahl11;
	}

	/**
	 * Returns the vbb11
	 *
	 * @return boolean $vbb11
	 */
	public function getVbb11() {
		return $this->vbb11;
	}

	/**
	 * Sets the vbb11
	 *
	 * @param boolean $vbb11
	 * @return void
	 */
	public function setVbb11($vbb11) {
		$this->vbb11 = $vbb11;
	}

	/**
	 * Returns the boolean state of vbb11
	 *
	 * @return boolean
	 */
	public function isVbb11() {
		return $this->getVbb11();
	}

	/**
	 * Returns the kostenanteil11
	 *
	 * @return integer $kostenanteil11
	 */
	public function getKostenanteil11() {
		return $this->kostenanteil11;
	}

	/**
	 * Sets the kostenanteil11
	 *
	 * @param integer $kostenanteil11
	 * @return void
	 */
	public function setKostenanteil11($kostenanteil11) {
		$this->kostenanteil11 = $kostenanteil11;
	}

	/**
	 * Returns the verwendungszweck12
	 *
	 * @return string $verwendungszweck12
	 */
	public function getVerwendungszweck12() {
		return $this->verwendungszweck12;
	}

	/**
	 * Sets the verwendungszweck12
	 *
	 * @param string $verwendungszweck12
	 * @return void
	 */
	public function setVerwendungszweck12($verwendungszweck12) {
		$this->verwendungszweck12 = $verwendungszweck12;
	}

	/**
	 * Returns the anzahl12
	 *
	 * @return integer $anzahl12
	 */
	public function getAnzahl12() {
		return $this->anzahl12;
	}

	/**
	 * Sets the anzahl12
	 *
	 * @param integer $anzahl12
	 * @return void
	 */
	public function setAnzahl12($anzahl12) {
		$this->anzahl12 = $anzahl12;
	}

	/**
	 * Returns the vbb12
	 *
	 * @return boolean $vbb12
	 */
	public function getVbb12() {
		return $this->vbb12;
	}

	/**
	 * Sets the vbb12
	 *
	 * @param boolean $vbb12
	 * @return void
	 */
	public function setVbb12($vbb12) {
		$this->vbb12 = $vbb12;
	}

	/**
	 * Returns the boolean state of vbb12
	 *
	 * @return boolean
	 */
	public function isVbb12() {
		return $this->getVbb12();
	}

	/**
	 * Returns the kostenanteil12
	 *
	 * @return integer $kostenanteil12
	 */
	public function getKostenanteil12() {
		return $this->kostenanteil12;
	}

	/**
	 * Sets the kostenanteil12
	 *
	 * @param integer $kostenanteil12
	 * @return void
	 */
	public function setKostenanteil12($kostenanteil12) {
		$this->kostenanteil12 = $kostenanteil12;
	}

	/**
	 * Returns the verwendungszweck13
	 *
	 * @return string $verwendungszweck13
	 */
	public function getVerwendungszweck13() {
		return $this->verwendungszweck13;
	}

	/**
	 * Sets the verwendungszweck13
	 *
	 * @param string $verwendungszweck13
	 * @return void
	 */
	public function setVerwendungszweck13($verwendungszweck13) {
		$this->verwendungszweck13 = $verwendungszweck13;
	}

	/**
	 * Returns the anzahl13
	 *
	 * @return integer $anzahl13
	 */
	public function getAnzahl13() {
		return $this->anzahl13;
	}

	/**
	 * Sets the anzahl13
	 *
	 * @param integer $anzahl13
	 * @return void
	 */
	public function setAnzahl13($anzahl13) {
		$this->anzahl13 = $anzahl13;
	}

	/**
	 * Returns the vbb13
	 *
	 * @return boolean $vbb13
	 */
	public function getVbb13() {
		return $this->vbb13;
	}

	/**
	 * Sets the vbb13
	 *
	 * @param boolean $vbb13
	 * @return void
	 */
	public function setVbb13($vbb13) {
		$this->vbb13 = $vbb13;
	}

	/**
	 * Returns the boolean state of vbb13
	 *
	 * @return boolean
	 */
	public function isVbb13() {
		return $this->getVbb13();
	}

	/**
	 * Returns the kostenanteil13
	 *
	 * @return integer $kostenanteil13
	 */
	public function getKostenanteil13() {
		return $this->kostenanteil13;
	}

	/**
	 * Sets the kostenanteil13
	 *
	 * @param integer $kostenanteil13
	 * @return void
	 */
	public function setKostenanteil13($kostenanteil13) {
		$this->kostenanteil13 = $kostenanteil13;
	}

	/**
	 * Returns the verwendungszweck14
	 *
	 * @return string $verwendungszweck14
	 */
	public function getVerwendungszweck14() {
		return $this->verwendungszweck14;
	}

	/**
	 * Sets the verwendungszweck14
	 *
	 * @param string $verwendungszweck14
	 * @return void
	 */
	public function setVerwendungszweck14($verwendungszweck14) {
		$this->verwendungszweck14 = $verwendungszweck14;
	}

	/**
	 * Returns the anzahl14
	 *
	 * @return integer $anzahl14
	 */
	public function getAnzahl14() {
		return $this->anzahl14;
	}

	/**
	 * Sets the anzahl14
	 *
	 * @param integer $anzahl14
	 * @return void
	 */
	public function setAnzahl14($anzahl14) {
		$this->anzahl14 = $anzahl14;
	}

	/**
	 * Returns the vbb14
	 *
	 * @return boolean $vbb14
	 */
	public function getVbb14() {
		return $this->vbb14;
	}

	/**
	 * Sets the vbb14
	 *
	 * @param boolean $vbb14
	 * @return void
	 */
	public function setVbb14($vbb14) {
		$this->vbb14 = $vbb14;
	}

	/**
	 * Returns the boolean state of vbb14
	 *
	 * @return boolean
	 */
	public function isVbb14() {
		return $this->getVbb14();
	}

	/**
	 * Returns the kostenanteil14
	 *
	 * @return integer $kostenanteil14
	 */
	public function getKostenanteil14() {
		return $this->kostenanteil14;
	}

	/**
	 * Sets the kostenanteil14
	 *
	 * @param integer $kostenanteil14
	 * @return void
	 */
	public function setKostenanteil14($kostenanteil14) {
		$this->kostenanteil14 = $kostenanteil14;
	}

	/**
	 * Returns the verwendungszweck15
	 *
	 * @return string $verwendungszweck15
	 */
	public function getVerwendungszweck15() {
		return $this->verwendungszweck15;
	}

	/**
	 * Sets the verwendungszweck15
	 *
	 * @param string $verwendungszweck15
	 * @return void
	 */
	public function setVerwendungszweck15($verwendungszweck15) {
		$this->verwendungszweck15 = $verwendungszweck15;
	}

	/**
	 * Returns the anzahl15
	 *
	 * @return integer $anzahl15
	 */
	public function getAnzahl15() {
		return $this->anzahl15;
	}

	/**
	 * Sets the anzahl15
	 *
	 * @param integer $anzahl15
	 * @return void
	 */
	public function setAnzahl15($anzahl15) {
		$this->anzahl15 = $anzahl15;
	}

	/**
	 * Returns the vbb15
	 *
	 * @return boolean $vbb15
	 */
	public function getVbb15() {
		return $this->vbb15;
	}

	/**
	 * Sets the vbb15
	 *
	 * @param boolean $vbb15
	 * @return void
	 */
	public function setVbb15($vbb15) {
		$this->vbb15 = $vbb15;
	}

	/**
	 * Returns the boolean state of vbb15
	 *
	 * @return boolean
	 */
	public function isVbb15() {
		return $this->getVbb15();
	}

	/**
	 * Returns the kostenanteil15
	 *
	 * @return integer $kostenanteil15
	 */
	public function getKostenanteil15() {
		return $this->kostenanteil15;
	}

	/**
	 * Sets the kostenanteil15
	 *
	 * @param integer $kostenanteil15
	 * @return void
	 */
	public function setKostenanteil15($kostenanteil15) {
		$this->kostenanteil15 = $kostenanteil15;
	}

	/**
	 * Returns the verwendungszweck16
	 *
	 * @return string $verwendungszweck16
	 */
	public function getVerwendungszweck16() {
		return $this->verwendungszweck16;
	}

	/**
	 * Sets the verwendungszweck16
	 *
	 * @param string $verwendungszweck16
	 * @return void
	 */
	public function setVerwendungszweck16($verwendungszweck16) {
		$this->verwendungszweck16 = $verwendungszweck16;
	}

	/**
	 * Returns the anzahl16
	 *
	 * @return integer $anzahl16
	 */
	public function getAnzahl16() {
		return $this->anzahl16;
	}

	/**
	 * Sets the anzahl16
	 *
	 * @param integer $anzahl16
	 * @return void
	 */
	public function setAnzahl16($anzahl16) {
		$this->anzahl16 = $anzahl16;
	}

	/**
	 * Returns the vbb16
	 *
	 * @return boolean $vbb16
	 */
	public function getVbb16() {
		return $this->vbb16;
	}

	/**
	 * Sets the vbb16
	 *
	 * @param boolean $vbb16
	 * @return void
	 */
	public function setVbb16($vbb16) {
		$this->vbb16 = $vbb16;
	}

	/**
	 * Returns the boolean state of vbb16
	 *
	 * @return boolean
	 */
	public function isVbb16() {
		return $this->getVbb16();
	}

	/**
	 * Returns the kostenanteil16
	 *
	 * @return integer $kostenanteil16
	 */
	public function getKostenanteil16() {
		return $this->kostenanteil16;
	}

	/**
	 * Sets the kostenanteil16
	 *
	 * @param integer $kostenanteil16
	 * @return void
	 */
	public function setKostenanteil16($kostenanteil16) {
		$this->kostenanteil16 = $kostenanteil16;
	}

	/**
	 * Returns the verwendungszweck17
	 *
	 * @return string $verwendungszweck17
	 */
	public function getVerwendungszweck17() {
		return $this->verwendungszweck17;
	}

	/**
	 * Sets the verwendungszweck17
	 *
	 * @param string $verwendungszweck17
	 * @return void
	 */
	public function setVerwendungszweck17($verwendungszweck17) {
		$this->verwendungszweck17 = $verwendungszweck17;
	}

	/**
	 * Returns the anzahl17
	 *
	 * @return integer $anzahl17
	 */
	public function getAnzahl17() {
		return $this->anzahl17;
	}

	/**
	 * Sets the anzahl17
	 *
	 * @param integer $anzahl17
	 * @return void
	 */
	public function setAnzahl17($anzahl17) {
		$this->anzahl17 = $anzahl17;
	}

	/**
	 * Returns the vbb17
	 *
	 * @return boolean $vbb17
	 */
	public function getVbb17() {
		return $this->vbb17;
	}

	/**
	 * Sets the vbb17
	 *
	 * @param boolean $vbb17
	 * @return void
	 */
	public function setVbb17($vbb17) {
		$this->vbb17 = $vbb17;
	}

	/**
	 * Returns the boolean state of vbb17
	 *
	 * @return boolean
	 */
	public function isVbb17() {
		return $this->getVbb17();
	}

	/**
	 * Returns the kostenanteil17
	 *
	 * @return integer $kostenanteil17
	 */
	public function getKostenanteil17() {
		return $this->kostenanteil17;
	}

	/**
	 * Sets the kostenanteil17
	 *
	 * @param integer $kostenanteil17
	 * @return void
	 */
	public function setKostenanteil17($kostenanteil17) {
		$this->kostenanteil17 = $kostenanteil17;
	}

	/**
	 * Returns the verwendungszweck18
	 *
	 * @return string $verwendungszweck18
	 */
	public function getVerwendungszweck18() {
		return $this->verwendungszweck18;
	}

	/**
	 * Sets the verwendungszweck18
	 *
	 * @param string $verwendungszweck18
	 * @return void
	 */
	public function setVerwendungszweck18($verwendungszweck18) {
		$this->verwendungszweck18 = $verwendungszweck18;
	}

	/**
	 * Returns the anzahl18
	 *
	 * @return integer $anzahl18
	 */
	public function getAnzahl18() {
		return $this->anzahl18;
	}

	/**
	 * Sets the anzahl18
	 *
	 * @param integer $anzahl18
	 * @return void
	 */
	public function setAnzahl18($anzahl18) {
		$this->anzahl18 = $anzahl18;
	}

	/**
	 * Returns the vbb18
	 *
	 * @return boolean $vbb18
	 */
	public function getVbb18() {
		return $this->vbb18;
	}

	/**
	 * Sets the vbb18
	 *
	 * @param boolean $vbb18
	 * @return void
	 */
	public function setVbb18($vbb18) {
		$this->vbb18 = $vbb18;
	}

	/**
	 * Returns the boolean state of vbb18
	 *
	 * @return boolean
	 */
	public function isVbb18() {
		return $this->getVbb18();
	}

	/**
	 * Returns the kostenanteil18
	 *
	 * @return integer $kostenanteil18
	 */
	public function getKostenanteil18() {
		return $this->kostenanteil18;
	}

	/**
	 * Sets the kostenanteil18
	 *
	 * @param integer $kostenanteil18
	 * @return void
	 */
	public function setKostenanteil18($kostenanteil18) {
		$this->kostenanteil18 = $kostenanteil18;
	}

	/**
	 * Returns the verwendungszweck19
	 *
	 * @return string $verwendungszweck19
	 */
	public function getVerwendungszweck19() {
		return $this->verwendungszweck19;
	}

	/**
	 * Sets the verwendungszweck19
	 *
	 * @param string $verwendungszweck19
	 * @return void
	 */
	public function setVerwendungszweck19($verwendungszweck19) {
		$this->verwendungszweck19 = $verwendungszweck19;
	}

	/**
	 * Returns the anzahl19
	 *
	 * @return integer $anzahl19
	 */
	public function getAnzahl19() {
		return $this->anzahl19;
	}

	/**
	 * Sets the anzahl19
	 *
	 * @param integer $anzahl19
	 * @return void
	 */
	public function setAnzahl19($anzahl19) {
		$this->anzahl19 = $anzahl19;
	}

	/**
	 * Returns the vbb19
	 *
	 * @return boolean $vbb19
	 */
	public function getVbb19() {
		return $this->vbb19;
	}

	/**
	 * Sets the vbb19
	 *
	 * @param boolean $vbb19
	 * @return void
	 */
	public function setVbb19($vbb19) {
		$this->vbb19 = $vbb19;
	}

	/**
	 * Returns the boolean state of vbb19
	 *
	 * @return boolean
	 */
	public function isVbb19() {
		return $this->getVbb19();
	}

	/**
	 * Returns the kostenanteil19
	 *
	 * @return integer $kostenanteil19
	 */
	public function getKostenanteil19() {
		return $this->kostenanteil19;
	}

	/**
	 * Sets the kostenanteil19
	 *
	 * @param integer $kostenanteil19
	 * @return void
	 */
	public function setKostenanteil19($kostenanteil19) {
		$this->kostenanteil19 = $kostenanteil19;
	}

	/**
	 * Returns the verwendungszweck20
	 *
	 * @return string $verwendungszweck20
	 */
	public function getVerwendungszweck20() {
		return $this->verwendungszweck20;
	}

	/**
	 * Sets the verwendungszweck20
	 *
	 * @param string $verwendungszweck20
	 * @return void
	 */
	public function setVerwendungszweck20($verwendungszweck20) {
		$this->verwendungszweck20 = $verwendungszweck20;
	}

	/**
	 * Returns the anzahl20
	 *
	 * @return integer $anzahl20
	 */
	public function getAnzahl20() {
		return $this->anzahl20;
	}

	/**
	 * Sets the anzahl20
	 *
	 * @param integer $anzahl20
	 * @return void
	 */
	public function setAnzahl20($anzahl20) {
		$this->anzahl20 = $anzahl20;
	}

	/**
	 * Returns the vbb20
	 *
	 * @return boolean $vbb20
	 */
	public function getVbb20() {
		return $this->vbb20;
	}

	/**
	 * Sets the vbb20
	 *
	 * @param boolean $vbb20
	 * @return void
	 */
	public function setVbb20($vbb20) {
		$this->vbb20 = $vbb20;
	}

	/**
	 * Returns the boolean state of vbb20
	 *
	 * @return boolean
	 */
	public function isVbb20() {
		return $this->getVbb20();
	}

	/**
	 * Returns the kostenanteil20
	 *
	 * @return integer $kostenanteil20
	 */
	public function getKostenanteil20() {
		return $this->kostenanteil20;
	}

	/**
	 * Sets the kostenanteil20
	 *
	 * @param integer $kostenanteil20
	 * @return void
	 */
	public function setKostenanteil20($kostenanteil20) {
		$this->kostenanteil20 = $kostenanteil20;
	}

	/**
	 * Returns the verwendungszweck21
	 *
	 * @return string $verwendungszweck21
	 */
	public function getVerwendungszweck21() {
		return $this->verwendungszweck21;
	}

	/**
	 * Sets the verwendungszweck21
	 *
	 * @param string $verwendungszweck21
	 * @return void
	 */
	public function setVerwendungszweck21($verwendungszweck21) {
		$this->verwendungszweck21 = $verwendungszweck21;
	}

	/**
	 * Returns the anzahl21
	 *
	 * @return integer $anzahl21
	 */
	public function getAnzahl21() {
		return $this->anzahl21;
	}

	/**
	 * Sets the anzahl21
	 *
	 * @param integer $anzahl21
	 * @return void
	 */
	public function setAnzahl21($anzahl21) {
		$this->anzahl21 = $anzahl21;
	}

	/**
	 * Returns the vbb21
	 *
	 * @return boolean $vbb21
	 */
	public function getVbb21() {
		return $this->vbb21;
	}

	/**
	 * Sets the vbb21
	 *
	 * @param boolean $vbb21
	 * @return void
	 */
	public function setVbb21($vbb21) {
		$this->vbb21 = $vbb21;
	}

	/**
	 * Returns the boolean state of vbb21
	 *
	 * @return boolean
	 */
	public function isVbb21() {
		return $this->getVbb21();
	}

	/**
	 * Returns the kostenanteil21
	 *
	 * @return integer $kostenanteil21
	 */
	public function getKostenanteil21() {
		return $this->kostenanteil21;
	}

	/**
	 * Sets the kostenanteil21
	 *
	 * @param integer $kostenanteil21
	 * @return void
	 */
	public function setKostenanteil21($kostenanteil21) {
		$this->kostenanteil21 = $kostenanteil21;
	}

	/**
	 * Returns the verwendungszweck22
	 *
	 * @return string $verwendungszweck22
	 */
	public function getVerwendungszweck22() {
		return $this->verwendungszweck22;
	}

	/**
	 * Sets the verwendungszweck22
	 *
	 * @param string $verwendungszweck22
	 * @return void
	 */
	public function setVerwendungszweck22($verwendungszweck22) {
		$this->verwendungszweck22 = $verwendungszweck22;
	}

	/**
	 * Returns the anzahl22
	 *
	 * @return integer $anzahl22
	 */
	public function getAnzahl22() {
		return $this->anzahl22;
	}

	/**
	 * Sets the anzahl22
	 *
	 * @param integer $anzahl22
	 * @return void
	 */
	public function setAnzahl22($anzahl22) {
		$this->anzahl22 = $anzahl22;
	}

	/**
	 * Returns the kostenanteil22
	 *
	 * @return integer $kostenanteil22
	 */
	public function getKostenanteil22() {
		return $this->kostenanteil22;
	}

	/**
	 * Sets the kostenanteil22
	 *
	 * @param integer $kostenanteil22
	 * @return void
	 */
	public function setKostenanteil22($kostenanteil22) {
		$this->kostenanteil22 = $kostenanteil22;
	}

	/**
	 * Returns the vbb22
	 *
	 * @return boolean $vbb22
	 */
	public function getVbb22() {
		return $this->vbb22;
	}

	/**
	 * Sets the vbb22
	 *
	 * @param boolean $vbb22
	 * @return void
	 */
	public function setVbb22($vbb22) {
		$this->vbb22 = $vbb22;
	}

	/**
	 * Returns the boolean state of vbb22
	 *
	 * @return boolean
	 */
	public function isVbb22() {
		return $this->getVbb22();
	}

	/**
	 * Returns the verwendungszweck23
	 *
	 * @return string $verwendungszweck23
	 */
	public function getVerwendungszweck23() {
		return $this->verwendungszweck23;
	}

	/**
	 * Sets the verwendungszweck23
	 *
	 * @param string $verwendungszweck23
	 * @return void
	 */
	public function setVerwendungszweck23($verwendungszweck23) {
		$this->verwendungszweck23 = $verwendungszweck23;
	}

	/**
	 * Returns the anzahl23
	 *
	 * @return integer $anzahl23
	 */
	public function getAnzahl23() {
		return $this->anzahl23;
	}

	/**
	 * Sets the anzahl23
	 *
	 * @param integer $anzahl23
	 * @return void
	 */
	public function setAnzahl23($anzahl23) {
		$this->anzahl23 = $anzahl23;
	}

	/**
	 * Returns the vbb23
	 *
	 * @return boolean $vbb23
	 */
	public function getVbb23() {
		return $this->vbb23;
	}

	/**
	 * Sets the vbb23
	 *
	 * @param boolean $vbb23
	 * @return void
	 */
	public function setVbb23($vbb23) {
		$this->vbb23 = $vbb23;
	}

	/**
	 * Returns the boolean state of vbb23
	 *
	 * @return boolean
	 */
	public function isVbb23() {
		return $this->getVbb23();
	}

	/**
	 * Returns the kostenanteil23
	 *
	 * @return integer $kostenanteil23
	 */
	public function getKostenanteil23() {
		return $this->kostenanteil23;
	}

	/**
	 * Sets the kostenanteil23
	 *
	 * @param integer $kostenanteil23
	 * @return void
	 */
	public function setKostenanteil23($kostenanteil23) {
		$this->kostenanteil23 = $kostenanteil23;
	}

	/**
	 * Returns the verwendungszweck24
	 *
	 * @return string $verwendungszweck24
	 */
	public function getVerwendungszweck24() {
		return $this->verwendungszweck24;
	}

	/**
	 * Sets the verwendungszweck24
	 *
	 * @param string $verwendungszweck24
	 * @return void
	 */
	public function setVerwendungszweck24($verwendungszweck24) {
		$this->verwendungszweck24 = $verwendungszweck24;
	}

	/**
	 * Returns the anzahl24
	 *
	 * @return integer $anzahl24
	 */
	public function getAnzahl24() {
		return $this->anzahl24;
	}

	/**
	 * Sets the anzahl24
	 *
	 * @param integer $anzahl24
	 * @return void
	 */
	public function setAnzahl24($anzahl24) {
		$this->anzahl24 = $anzahl24;
	}

	/**
	 * Returns the vbb24
	 *
	 * @return boolean $vbb24
	 */
	public function getVbb24() {
		return $this->vbb24;
	}

	/**
	 * Sets the vbb24
	 *
	 * @param boolean $vbb24
	 * @return void
	 */
	public function setVbb24($vbb24) {
		$this->vbb24 = $vbb24;
	}

	/**
	 * Returns the boolean state of vbb24
	 *
	 * @return boolean
	 */
	public function isVbb24() {
		return $this->getVbb24();
	}

	/**
	 * Returns the kostenanteil24
	 *
	 * @return integer $kostenanteil24
	 */
	public function getKostenanteil24() {
		return $this->kostenanteil24;
	}

	/**
	 * Sets the kostenanteil24
	 *
	 * @param integer $kostenanteil24
	 * @return void
	 */
	public function setKostenanteil24($kostenanteil24) {
		$this->kostenanteil24 = $kostenanteil24;
	}

	/**
	 * Returns the verwendungszweck25
	 *
	 * @return string $verwendungszweck25
	 */
	public function getVerwendungszweck25() {
		return $this->verwendungszweck25;
	}

	/**
	 * Sets the verwendungszweck25
	 *
	 * @param string $verwendungszweck25
	 * @return void
	 */
	public function setVerwendungszweck25($verwendungszweck25) {
		$this->verwendungszweck25 = $verwendungszweck25;
	}

	/**
	 * Returns the anzahl25
	 *
	 * @return integer $anzahl25
	 */
	public function getAnzahl25() {
		return $this->anzahl25;
	}

	/**
	 * Sets the anzahl25
	 *
	 * @param integer $anzahl25
	 * @return void
	 */
	public function setAnzahl25($anzahl25) {
		$this->anzahl25 = $anzahl25;
	}

	/**
	 * Returns the vbb25
	 *
	 * @return boolean $vbb25
	 */
	public function getVbb25() {
		return $this->vbb25;
	}

	/**
	 * Sets the vbb25
	 *
	 * @param boolean $vbb25
	 * @return void
	 */
	public function setVbb25($vbb25) {
		$this->vbb25 = $vbb25;
	}

	/**
	 * Returns the boolean state of vbb25
	 *
	 * @return boolean
	 */
	public function isVbb25() {
		return $this->getVbb25();
	}

	/**
	 * Returns the kostenanteil25
	 *
	 * @return integer $kostenanteil25
	 */
	public function getKostenanteil25() {
		return $this->kostenanteil25;
	}

	/**
	 * Sets the kostenanteil25
	 *
	 * @param integer $kostenanteil25
	 * @return void
	 */
	public function setKostenanteil25($kostenanteil25) {
		$this->kostenanteil25 = $kostenanteil25;
	}

	/**
	 * Returns the finanzierungbarmittel
	 *
	 * @return integer $finanzierungbarmittel
	 */
	public function getFinanzierungbarmittel() {
		return $this->finanzierungbarmittel;
	}

	/**
	 * Sets the finanzierungbarmittel
	 *
	 * @param integer $finanzierungbarmittel
	 * @return void
	 */
	public function setFinanzierungbarmittel($finanzierungbarmittel) {
		$this->finanzierungbarmittel = $finanzierungbarmittel;
	}

	/**
	 * Returns the finanzierunggeldspenden
	 *
	 * @return integer $finanzierunggeldspenden
	 */
	public function getFinanzierunggeldspenden() {
		return $this->finanzierunggeldspenden;
	}

	/**
	 * Sets the finanzierunggeldspenden
	 *
	 * @param integer $finanzierunggeldspenden
	 * @return void
	 */
	public function setFinanzierunggeldspenden($finanzierunggeldspenden) {
		$this->finanzierunggeldspenden = $finanzierunggeldspenden;
	}

	/**
	 * Returns the fianzierungkredit
	 *
	 * @return integer $fianzierungkredit
	 */
	public function getFianzierungkredit() {
		return $this->fianzierungkredit;
	}

	/**
	 * Sets the fianzierungkredit
	 *
	 * @param integer $fianzierungkredit
	 * @return void
	 */
	public function setFianzierungkredit($fianzierungkredit) {
		$this->fianzierungkredit = $fianzierungkredit;
	}

	/**
	 * Returns the finanzierungaleistung
	 *
	 * @return integer $finanzierungaleistung
	 */
	public function getFinanzierungaleistung() {
		return $this->finanzierungaleistung;
	}

	/**
	 * Sets the finanzierungaleistung
	 *
	 * @param integer $finanzierungaleistung
	 * @return void
	 */
	public function setFinanzierungaleistung($finanzierungaleistung) {
		$this->finanzierungaleistung = $finanzierungaleistung;
	}

	/**
	 * Returns the finanzierungsachleistung
	 *
	 * @return integer $finanzierungsachleistung
	 */
	public function getFinanzierungsachleistung() {
		return $this->finanzierungsachleistung;
	}

	/**
	 * Sets the finanzierungsachleistung
	 *
	 * @param integer $finanzierungsachleistung
	 * @return void
	 */
	public function setFinanzierungsachleistung($finanzierungsachleistung) {
		$this->finanzierungsachleistung = $finanzierungsachleistung;
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
	 * Returns the finanzierungsonstige
	 *
	 * @return integer $finanzierungsonstige
	 */
	public function getFinanzierungsonstige() {
		return $this->finanzierungsonstige;
	}

	/**
	 * Sets the finanzierungsonstige
	 *
	 * @param integer $finanzierungsonstige
	 * @return void
	 */
	public function setFinanzierungsonstige($finanzierungsonstige) {
		$this->finanzierungsonstige = $finanzierungsonstige;
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
	 * Returns the finanzierungzuschuss
	 *
	 * @return integer $finanzierungzuschuss
	 */
	public function getFinanzierungzuschuss() {
		return $this->finanzierungzuschuss;
	}

	/**
	 * Sets the finanzierungzuschuss
	 *
	 * @param integer $finanzierungzuschuss
	 * @return void
	 */
	public function setFinanzierungzuschuss($finanzierungzuschuss) {
		$this->finanzierungzuschuss = $finanzierungzuschuss;
	}

	/**
	 * Returns the finanzierungdarlehen
	 *
	 * @return integer $finanzierungdarlehen
	 */
	public function getFinanzierungdarlehen() {
		return $this->finanzierungdarlehen;
	}

	/**
	 * Sets the finanzierungdarlehen
	 *
	 * @param integer $finanzierungdarlehen
	 * @return void
	 */
	public function setFinanzierungdarlehen($finanzierungdarlehen) {
		$this->finanzierungdarlehen = $finanzierungdarlehen;
	}

	/**
	 * Returns the sicherunggrundschuld
	 *
	 * @return boolean $sicherunggrundschuld
	 */
	public function getSicherunggrundschuld() {
		return $this->sicherunggrundschuld;
	}

	/**
	 * Sets the sicherunggrundschuld
	 *
	 * @param boolean $sicherunggrundschuld
	 * @return void
	 */
	public function setSicherunggrundschuld($sicherunggrundschuld) {
		$this->sicherunggrundschuld = $sicherunggrundschuld;
	}

	/**
	 * Returns the boolean state of sicherunggrundschuld
	 *
	 * @return boolean
	 */
	public function isSicherunggrundschuld() {
		return $this->getSicherunggrundschuld();
	}

	/**
	 * Returns the sicherungkbuergschaft
	 *
	 * @return boolean $sicherungkbuergschaft
	 */
	public function getSicherungkbuergschaft() {
		return $this->sicherungkbuergschaft;
	}

	/**
	 * Sets the sicherungkbuergschaft
	 *
	 * @param boolean $sicherungkbuergschaft
	 * @return void
	 */
	public function setSicherungkbuergschaft($sicherungkbuergschaft) {
		$this->sicherungkbuergschaft = $sicherungkbuergschaft;
	}

	/**
	 * Returns the boolean state of sicherungkbuergschaft
	 *
	 * @return boolean
	 */
	public function isSicherungkbuergschaft() {
		return $this->getSicherungkbuergschaft();
	}

	/**
	 * Returns the sicherungbbuergschaft
	 *
	 * @return boolean $sicherungbbuergschaft
	 */
	public function getSicherungbbuergschaft() {
		return $this->sicherungbbuergschaft;
	}

	/**
	 * Sets the sicherungbbuergschaft
	 *
	 * @param boolean $sicherungbbuergschaft
	 * @return void
	 */
	public function setSicherungbbuergschaft($sicherungbbuergschaft) {
		$this->sicherungbbuergschaft = $sicherungbbuergschaft;
	}

	/**
	 * Returns the boolean state of sicherungbbuergschaft
	 *
	 * @return boolean
	 */
	public function isSicherungbbuergschaft() {
		return $this->getSicherungbbuergschaft();
	}

	/**
	 * Returns the zwfkommune1
	 *
	 * @return boolean $zwfkommune1
	 */
	public function getZwfkommune1() {
		return $this->zwfkommune1;
	}

	/**
	 * Sets the zwfkommune1
	 *
	 * @param boolean $zwfkommune1
	 * @return void
	 */
	public function setZwfkommune1($zwfkommune1) {
		$this->zwfkommune1 = $zwfkommune1;
	}

	/**
	 * Returns the boolean state of zwfkommune1
	 *
	 * @return boolean
	 */
	public function isZwfkommune1() {
		return $this->getZwfkommune1();
	}

	/**
	 * Returns the zwfkommune2
	 *
	 * @return integer $zwfkommune2
	 */
	public function getZwfkommune2() {
		return $this->zwfkommune2;
	}

	/**
	 * Sets the zwfkommune2
	 *
	 * @param integer $zwfkommune2
	 * @return void
	 */
	public function setZwfkommune2($zwfkommune2) {
		$this->zwfkommune2 = $zwfkommune2;
	}

	/**
	 * Returns the zwfkommune3
	 *
	 * @return integer $zwfkommune3
	 */
	public function getZwfkommune3() {
		return $this->zwfkommune3;
	}

	/**
	 * Sets the zwfkommune3
	 *
	 * @param integer $zwfkommune3
	 * @return void
	 */
	public function setZwfkommune3($zwfkommune3) {
		$this->zwfkommune3 = $zwfkommune3;
	}

	/**
	 * Returns the zwfkommune4
	 *
	 * @return boolean $zwfkommune4
	 */
	public function getZwfkommune4() {
		return $this->zwfkommune4;
	}

	/**
	 * Sets the zwfkommune4
	 *
	 * @param boolean $zwfkommune4
	 * @return void
	 */
	public function setZwfkommune4($zwfkommune4) {
		$this->zwfkommune4 = $zwfkommune4;
	}

	/**
	 * Returns the boolean state of zwfkommune4
	 *
	 * @return boolean
	 */
	public function isZwfkommune4() {
		return $this->getZwfkommune4();
	}

	/**
	 * Returns the zwfkommune5
	 *
	 * @return integer $zwfkommune5
	 */
	public function getZwfkommune5() {
		return $this->zwfkommune5;
	}

	/**
	 * Sets the zwfkommune5
	 *
	 * @param integer $zwfkommune5
	 * @return void
	 */
	public function setZwfkommune5($zwfkommune5) {
		$this->zwfkommune5 = $zwfkommune5;
	}

	/**
	 * Returns the zwfkommune6
	 *
	 * @return integer $zwfkommune6
	 */
	public function getZwfkommune6() {
		return $this->zwfkommune6;
	}

	/**
	 * Sets the zwfkommune6
	 *
	 * @param integer $zwfkommune6
	 * @return void
	 */
	public function setZwfkommune6($zwfkommune6) {
		$this->zwfkommune6 = $zwfkommune6;
	}

	/**
	 * Returns the zwflandkreis1
	 *
	 * @return boolean $zwflandkreis1
	 */
	public function getZwflandkreis1() {
		return $this->zwflandkreis1;
	}

	/**
	 * Sets the zwflandkreis1
	 *
	 * @param boolean $zwflandkreis1
	 * @return void
	 */
	public function setZwflandkreis1($zwflandkreis1) {
		$this->zwflandkreis1 = $zwflandkreis1;
	}

	/**
	 * Returns the boolean state of zwflandkreis1
	 *
	 * @return boolean
	 */
	public function isZwflandkreis1() {
		return $this->getZwflandkreis1();
	}

	/**
	 * Returns the zwflandkreis2
	 *
	 * @return integer $zwflandkreis2
	 */
	public function getZwflandkreis2() {
		return $this->zwflandkreis2;
	}

	/**
	 * Sets the zwflandkreis2
	 *
	 * @param integer $zwflandkreis2
	 * @return void
	 */
	public function setZwflandkreis2($zwflandkreis2) {
		$this->zwflandkreis2 = $zwflandkreis2;
	}

	/**
	 * Returns the zwflandkreis3
	 *
	 * @return integer $zwflandkreis3
	 */
	public function getZwflandkreis3() {
		return $this->zwflandkreis3;
	}

	/**
	 * Sets the zwflandkreis3
	 *
	 * @param integer $zwflandkreis3
	 * @return void
	 */
	public function setZwflandkreis3($zwflandkreis3) {
		$this->zwflandkreis3 = $zwflandkreis3;
	}

	/**
	 * Returns the zwflandkreis4
	 *
	 * @return boolean $zwflandkreis4
	 */
	public function getZwflandkreis4() {
		return $this->zwflandkreis4;
	}

	/**
	 * Sets the zwflandkreis4
	 *
	 * @param boolean $zwflandkreis4
	 * @return void
	 */
	public function setZwflandkreis4($zwflandkreis4) {
		$this->zwflandkreis4 = $zwflandkreis4;
	}

	/**
	 * Returns the boolean state of zwflandkreis4
	 *
	 * @return boolean
	 */
	public function isZwflandkreis4() {
		return $this->getZwflandkreis4();
	}

	/**
	 * Returns the zwflandkreis5
	 *
	 * @return integer $zwflandkreis5
	 */
	public function getZwflandkreis5() {
		return $this->zwflandkreis5;
	}

	/**
	 * Sets the zwflandkreis5
	 *
	 * @param integer $zwflandkreis5
	 * @return void
	 */
	public function setZwflandkreis5($zwflandkreis5) {
		$this->zwflandkreis5 = $zwflandkreis5;
	}

	/**
	 * Returns the zwflandkreis6
	 *
	 * @return integer $zwflandkreis6
	 */
	public function getZwflandkreis6() {
		return $this->zwflandkreis6;
	}

	/**
	 * Sets the zwflandkreis6
	 *
	 * @param integer $zwflandkreis6
	 * @return void
	 */
	public function setZwflandkreis6($zwflandkreis6) {
		$this->zwflandkreis6 = $zwflandkreis6;
	}

	/**
	 * Returns the zwflandkreis7
	 *
	 * @return boolean $zwflandkreis7
	 */
	public function getZwflandkreis7() {
		return $this->zwflandkreis7;
	}

	/**
	 * Sets the zwflandkreis7
	 *
	 * @param boolean $zwflandkreis7
	 * @return void
	 */
	public function setZwflandkreis7($zwflandkreis7) {
		$this->zwflandkreis7 = $zwflandkreis7;
	}

	/**
	 * Returns the boolean state of zwflandkreis7
	 *
	 * @return boolean
	 */
	public function isZwflandkreis7() {
		return $this->getZwflandkreis7();
	}

	/**
	 * Returns the zwflandkreis8
	 *
	 * @return integer $zwflandkreis8
	 */
	public function getZwflandkreis8() {
		return $this->zwflandkreis8;
	}

	/**
	 * Sets the zwflandkreis8
	 *
	 * @param integer $zwflandkreis8
	 * @return void
	 */
	public function setZwflandkreis8($zwflandkreis8) {
		$this->zwflandkreis8 = $zwflandkreis8;
	}

	/**
	 * Returns the zwflandkreis9
	 *
	 * @return integer $zwflandkreis9
	 */
	public function getZwflandkreis9() {
		return $this->zwflandkreis9;
	}

	/**
	 * Sets the zwflandkreis9
	 *
	 * @param integer $zwflandkreis9
	 * @return void
	 */
	public function setZwflandkreis9($zwflandkreis9) {
		$this->zwflandkreis9 = $zwflandkreis9;
	}

	/**
	 * Returns the zwfsonstige1
	 *
	 * @return boolean $zwfsonstige1
	 */
	public function getZwfsonstige1() {
		return $this->zwfsonstige1;
	}

	/**
	 * Sets the zwfsonstige1
	 *
	 * @param boolean $zwfsonstige1
	 * @return void
	 */
	public function setZwfsonstige1($zwfsonstige1) {
		$this->zwfsonstige1 = $zwfsonstige1;
	}

	/**
	 * Returns the boolean state of zwfsonstige1
	 *
	 * @return boolean
	 */
	public function isZwfsonstige1() {
		return $this->getZwfsonstige1();
	}

	/**
	 * Returns the zwfsonstige2
	 *
	 * @return integer $zwfsonstige2
	 */
	public function getZwfsonstige2() {
		return $this->zwfsonstige2;
	}

	/**
	 * Sets the zwfsonstige2
	 *
	 * @param integer $zwfsonstige2
	 * @return void
	 */
	public function setZwfsonstige2($zwfsonstige2) {
		$this->zwfsonstige2 = $zwfsonstige2;
	}

	/**
	 * Returns the zwfsonstige3
	 *
	 * @return integer $zwfsonstige3
	 */
	public function getZwfsonstige3() {
		return $this->zwfsonstige3;
	}

	/**
	 * Sets the zwfsonstige3
	 *
	 * @param integer $zwfsonstige3
	 * @return void
	 */
	public function setZwfsonstige3($zwfsonstige3) {
		$this->zwfsonstige3 = $zwfsonstige3;
	}

	/**
	 * Returns the zwfsonstige4
	 *
	 * @return boolean $zwfsonstige4
	 */
	public function getZwfsonstige4() {
		return $this->zwfsonstige4;
	}

	/**
	 * Sets the zwfsonstige4
	 *
	 * @param boolean $zwfsonstige4
	 * @return void
	 */
	public function setZwfsonstige4($zwfsonstige4) {
		$this->zwfsonstige4 = $zwfsonstige4;
	}

	/**
	 * Returns the boolean state of zwfsonstige4
	 *
	 * @return boolean
	 */
	public function isZwfsonstige4() {
		return $this->getZwfsonstige4();
	}

	/**
	 * Returns the zwfsonstige5
	 *
	 * @return integer $zwfsonstige5
	 */
	public function getZwfsonstige5() {
		return $this->zwfsonstige5;
	}

	/**
	 * Sets the zwfsonstige5
	 *
	 * @param integer $zwfsonstige5
	 * @return void
	 */
	public function setZwfsonstige5($zwfsonstige5) {
		$this->zwfsonstige5 = $zwfsonstige5;
	}

	/**
	 * Returns the zwfsonstige6
	 *
	 * @return integer $zwfsonstige6
	 */
	public function getZwfsonstige6() {
		return $this->zwfsonstige6;
	}

	/**
	 * Sets the zwfsonstige6
	 *
	 * @param integer $zwfsonstige6
	 * @return void
	 */
	public function setZwfsonstige6($zwfsonstige6) {
		$this->zwfsonstige6 = $zwfsonstige6;
	}

	/**
	 * Returns the zwfsonstige7
	 *
	 * @return boolean $zwfsonstige7
	 */
	public function getZwfsonstige7() {
		return $this->zwfsonstige7;
	}

	/**
	 * Sets the zwfsonstige7
	 *
	 * @param boolean $zwfsonstige7
	 * @return void
	 */
	public function setZwfsonstige7($zwfsonstige7) {
		$this->zwfsonstige7 = $zwfsonstige7;
	}

	/**
	 * Returns the boolean state of zwfsonstige7
	 *
	 * @return boolean
	 */
	public function isZwfsonstige7() {
		return $this->getZwfsonstige7();
	}

	/**
	 * Returns the zwfsonstige8
	 *
	 * @return integer $zwfsonstige8
	 */
	public function getZwfsonstige8() {
		return $this->zwfsonstige8;
	}

	/**
	 * Sets the zwfsonstige8
	 *
	 * @param integer $zwfsonstige8
	 * @return void
	 */
	public function setZwfsonstige8($zwfsonstige8) {
		$this->zwfsonstige8 = $zwfsonstige8;
	}

	/**
	 * Returns the zwfsonstige9
	 *
	 * @return integer $zwfsonstige9
	 */
	public function getZwfsonstige9() {
		return $this->zwfsonstige9;
	}

	/**
	 * Sets the zwfsonstige9
	 *
	 * @param integer $zwfsonstige9
	 * @return void
	 */
	public function setZwfsonstige9($zwfsonstige9) {
		$this->zwfsonstige9 = $zwfsonstige9;
	}

	/**
	 * Returns the zwfvorsteuer1
	 *
	 * @return boolean $zwfvorsteuer1
	 */
	public function getZwfvorsteuer1() {
		return $this->zwfvorsteuer1;
	}

	/**
	 * Sets the zwfvorsteuer1
	 *
	 * @param boolean $zwfvorsteuer1
	 * @return void
	 */
	public function setZwfvorsteuer1($zwfvorsteuer1) {
		$this->zwfvorsteuer1 = $zwfvorsteuer1;
	}

	/**
	 * Returns the boolean state of zwfvorsteuer1
	 *
	 * @return boolean
	 */
	public function isZwfvorsteuer1() {
		return $this->getZwfvorsteuer1();
	}

	/**
	 * Returns the zwfvorsteuer2
	 *
	 * @return integer $zwfvorsteuer2
	 */
	public function getZwfvorsteuer2() {
		return $this->zwfvorsteuer2;
	}

	/**
	 * Sets the zwfvorsteuer2
	 *
	 * @param integer $zwfvorsteuer2
	 * @return void
	 */
	public function setZwfvorsteuer2($zwfvorsteuer2) {
		$this->zwfvorsteuer2 = $zwfvorsteuer2;
	}

	/**
	 * Returns the zwfvorsteuer3
	 *
	 * @return integer $zwfvorsteuer3
	 */
	public function getZwfvorsteuer3() {
		return $this->zwfvorsteuer3;
	}

	/**
	 * Sets the zwfvorsteuer3
	 *
	 * @param integer $zwfvorsteuer3
	 * @return void
	 */
	public function setZwfvorsteuer3($zwfvorsteuer3) {
		$this->zwfvorsteuer3 = $zwfvorsteuer3;
	}

	/**
	 * Returns the zwfvorsteuer4
	 *
	 * @return boolean $zwfvorsteuer4
	 */
	public function getZwfvorsteuer4() {
		return $this->zwfvorsteuer4;
	}

	/**
	 * Sets the zwfvorsteuer4
	 *
	 * @param boolean $zwfvorsteuer4
	 * @return void
	 */
	public function setZwfvorsteuer4($zwfvorsteuer4) {
		$this->zwfvorsteuer4 = $zwfvorsteuer4;
	}

	/**
	 * Returns the boolean state of zwfvorsteuer4
	 *
	 * @return boolean
	 */
	public function isZwfvorsteuer4() {
		return $this->getZwfvorsteuer4();
	}

	/**
	 * Returns the zwfvorsteuer5
	 *
	 * @return integer $zwfvorsteuer5
	 */
	public function getZwfvorsteuer5() {
		return $this->zwfvorsteuer5;
	}

	/**
	 * Sets the zwfvorsteuer5
	 *
	 * @param integer $zwfvorsteuer5
	 * @return void
	 */
	public function setZwfvorsteuer5($zwfvorsteuer5) {
		$this->zwfvorsteuer5 = $zwfvorsteuer5;
	}

	/**
	 * Returns the zwfvorsteuer6
	 *
	 * @return integer $zwfvorsteuer6
	 */
	public function getZwfvorsteuer6() {
		return $this->zwfvorsteuer6;
	}

	/**
	 * Sets the zwfvorsteuer6
	 *
	 * @param integer $zwfvorsteuer6
	 * @return void
	 */
	public function setZwfvorsteuer6($zwfvorsteuer6) {
		$this->zwfvorsteuer6 = $zwfvorsteuer6;
	}

	/**
	 * Returns the zwfvorsteuer7
	 *
	 * @return boolean $zwfvorsteuer7
	 */
	public function getZwfvorsteuer7() {
		return $this->zwfvorsteuer7;
	}

	/**
	 * Sets the zwfvorsteuer7
	 *
	 * @param boolean $zwfvorsteuer7
	 * @return void
	 */
	public function setZwfvorsteuer7($zwfvorsteuer7) {
		$this->zwfvorsteuer7 = $zwfvorsteuer7;
	}

	/**
	 * Returns the boolean state of zwfvorsteuer7
	 *
	 * @return boolean
	 */
	public function isZwfvorsteuer7() {
		return $this->getZwfvorsteuer7();
	}

	/**
	 * Returns the zwfvorsteuer8
	 *
	 * @return integer $zwfvorsteuer8
	 */
	public function getZwfvorsteuer8() {
		return $this->zwfvorsteuer8;
	}

	/**
	 * Sets the zwfvorsteuer8
	 *
	 * @param integer $zwfvorsteuer8
	 * @return void
	 */
	public function setZwfvorsteuer8($zwfvorsteuer8) {
		$this->zwfvorsteuer8 = $zwfvorsteuer8;
	}

	/**
	 * Returns the zwfvorsteuer9
	 *
	 * @return integer $zwfvorsteuer9
	 */
	public function getZwfvorsteuer9() {
		return $this->zwfvorsteuer9;
	}

	/**
	 * Sets the zwfvorsteuer9
	 *
	 * @param integer $zwfvorsteuer9
	 * @return void
	 */
	public function setZwfvorsteuer9($zwfvorsteuer9) {
		$this->zwfvorsteuer9 = $zwfvorsteuer9;
	}

	/**
	 * Returns the zwfsmf1
	 *
	 * @return boolean $zwfsmf1
	 */
	public function getZwfsmf1() {
		return $this->zwfsmf1;
	}

	/**
	 * Sets the zwfsmf1
	 *
	 * @param boolean $zwfsmf1
	 * @return void
	 */
	public function setZwfsmf1($zwfsmf1) {
		$this->zwfsmf1 = $zwfsmf1;
	}

	/**
	 * Returns the boolean state of zwfsmf1
	 *
	 * @return boolean
	 */
	public function isZwfsmf1() {
		return $this->getZwfsmf1();
	}

	/**
	 * Returns the zwfsmf2
	 *
	 * @return integer $zwfsmf2
	 */
	public function getZwfsmf2() {
		return $this->zwfsmf2;
	}

	/**
	 * Sets the zwfsmf2
	 *
	 * @param integer $zwfsmf2
	 * @return void
	 */
	public function setZwfsmf2($zwfsmf2) {
		$this->zwfsmf2 = $zwfsmf2;
	}

	/**
	 * Returns the zwfsmf3
	 *
	 * @return integer $zwfsmf3
	 */
	public function getZwfsmf3() {
		return $this->zwfsmf3;
	}

	/**
	 * Sets the zwfsmf3
	 *
	 * @param integer $zwfsmf3
	 * @return void
	 */
	public function setZwfsmf3($zwfsmf3) {
		$this->zwfsmf3 = $zwfsmf3;
	}

	/**
	 * Returns the zwfsmf4
	 *
	 * @return boolean $zwfsmf4
	 */
	public function getZwfsmf4() {
		return $this->zwfsmf4;
	}

	/**
	 * Sets the zwfsmf4
	 *
	 * @param boolean $zwfsmf4
	 * @return void
	 */
	public function setZwfsmf4($zwfsmf4) {
		$this->zwfsmf4 = $zwfsmf4;
	}

	/**
	 * Returns the boolean state of zwfsmf4
	 *
	 * @return boolean
	 */
	public function isZwfsmf4() {
		return $this->getZwfsmf4();
	}

	/**
	 * Returns the zwfsmf5
	 *
	 * @return integer $zwfsmf5
	 */
	public function getZwfsmf5() {
		return $this->zwfsmf5;
	}

	/**
	 * Sets the zwfsmf5
	 *
	 * @param integer $zwfsmf5
	 * @return void
	 */
	public function setZwfsmf5($zwfsmf5) {
		$this->zwfsmf5 = $zwfsmf5;
	}

	/**
	 * Returns the zwfsmf6
	 *
	 * @return integer $zwfsmf6
	 */
	public function getZwfsmf6() {
		return $this->zwfsmf6;
	}

	/**
	 * Sets the zwfsmf6
	 *
	 * @param integer $zwfsmf6
	 * @return void
	 */
	public function setZwfsmf6($zwfsmf6) {
		$this->zwfsmf6 = $zwfsmf6;
	}

	/**
	 * Returns the zwfsmf7
	 *
	 * @return boolean $zwfsmf7
	 */
	public function getZwfsmf7() {
		return $this->zwfsmf7;
	}

	/**
	 * Sets the zwfsmf7
	 *
	 * @param boolean $zwfsmf7
	 * @return void
	 */
	public function setZwfsmf7($zwfsmf7) {
		$this->zwfsmf7 = $zwfsmf7;
	}

	/**
	 * Returns the boolean state of zwfsmf7
	 *
	 * @return boolean
	 */
	public function isZwfsmf7() {
		return $this->getZwfsmf7();
	}

	/**
	 * Returns the zwfsmf8
	 *
	 * @return integer $zwfsmf8
	 */
	public function getZwfsmf8() {
		return $this->zwfsmf8;
	}

	/**
	 * Sets the zwfsmf8
	 *
	 * @param integer $zwfsmf8
	 * @return void
	 */
	public function setZwfsmf8($zwfsmf8) {
		$this->zwfsmf8 = $zwfsmf8;
	}

	/**
	 * Returns the zwfsmf9
	 *
	 * @return integer $zwfsmf9
	 */
	public function getZwfsmf9() {
		return $this->zwfsmf9;
	}

	/**
	 * Sets the zwfsmf9
	 *
	 * @param integer $zwfsmf9
	 * @return void
	 */
	public function setZwfsmf9($zwfsmf9) {
		$this->zwfsmf9 = $zwfsmf9;
	}

	/**
	 * Returns the jahreszahl1
	 *
	 * @return integer $jahreszahl1
	 */
	public function getJahreszahl1() {
		return $this->jahreszahl1;
	}

	/**
	 * Sets the jahreszahl1
	 *
	 * @param integer $jahreszahl1
	 * @return void
	 */
	public function setJahreszahl1($jahreszahl1) {
		$this->jahreszahl1 = $jahreszahl1;
	}

	/**
	 * Returns the jahreszahl2
	 *
	 * @return integer $jahreszahl2
	 */
	public function getJahreszahl2() {
		return $this->jahreszahl2;
	}

	/**
	 * Sets the jahreszahl2
	 *
	 * @param integer $jahreszahl2
	 * @return void
	 */
	public function setJahreszahl2($jahreszahl2) {
		$this->jahreszahl2 = $jahreszahl2;
	}

	/**
	 * Returns the guvdurchschnittsergebnis
	 *
	 * @return integer $guvdurchschnittsergebnis
	 */
	public function getGuvdurchschnittsergebnis() {
		return $this->guvdurchschnittsergebnis;
	}

	/**
	 * Sets the guvdurchschnittsergebnis
	 *
	 * @param integer $guvdurchschnittsergebnis
	 * @return void
	 */
	public function setGuvdurchschnittsergebnis($guvdurchschnittsergebnis) {
		$this->guvdurchschnittsergebnis = $guvdurchschnittsergebnis;
	}

	/**
	 * Returns the vbbgruende1
	 *
	 * @return boolean $vbbgruende1
	 */
	public function getVbbgruende1() {
		return $this->vbbgruende1;
	}

	/**
	 * Sets the vbbgruende1
	 *
	 * @param boolean $vbbgruende1
	 * @return void
	 */
	public function setVbbgruende1($vbbgruende1) {
		$this->vbbgruende1 = $vbbgruende1;
	}

	/**
	 * Returns the boolean state of vbbgruende1
	 *
	 * @return boolean
	 */
	public function isVbbgruende1() {
		return $this->getVbbgruende1();
	}

	/**
	 * Returns the vbbgruende2
	 *
	 * @return boolean $vbbgruende2
	 */
	public function getVbbgruende2() {
		return $this->vbbgruende2;
	}

	/**
	 * Sets the vbbgruende2
	 *
	 * @param boolean $vbbgruende2
	 * @return void
	 */
	public function setVbbgruende2($vbbgruende2) {
		$this->vbbgruende2 = $vbbgruende2;
	}

	/**
	 * Returns the boolean state of vbbgruende2
	 *
	 * @return boolean
	 */
	public function isVbbgruende2() {
		return $this->getVbbgruende2();
	}

	/**
	 * Returns the vbbgruende3
	 *
	 * @return boolean $vbbgruende3
	 */
	public function getVbbgruende3() {
		return $this->vbbgruende3;
	}

	/**
	 * Sets the vbbgruende3
	 *
	 * @param boolean $vbbgruende3
	 * @return void
	 */
	public function setVbbgruende3($vbbgruende3) {
		$this->vbbgruende3 = $vbbgruende3;
	}

	/**
	 * Returns the boolean state of vbbgruende3
	 *
	 * @return boolean
	 */
	public function isVbbgruende3() {
		return $this->getVbbgruende3();
	}

	/**
	 * Returns the vbbgruende4
	 *
	 * @return boolean $vbbgruende4
	 */
	public function getVbbgruende4() {
		return $this->vbbgruende4;
	}

	/**
	 * Sets the vbbgruende4
	 *
	 * @param boolean $vbbgruende4
	 * @return void
	 */
	public function setVbbgruende4($vbbgruende4) {
		$this->vbbgruende4 = $vbbgruende4;
	}

	/**
	 * Returns the boolean state of vbbgruende4
	 *
	 * @return boolean
	 */
	public function isVbbgruende4() {
		return $this->getVbbgruende4();
	}

	/**
	 * Returns the vbbgruende5
	 *
	 * @return boolean $vbbgruende5
	 */
	public function getVbbgruende5() {
		return $this->vbbgruende5;
	}

	/**
	 * Sets the vbbgruende5
	 *
	 * @param boolean $vbbgruende5
	 * @return void
	 */
	public function setVbbgruende5($vbbgruende5) {
		$this->vbbgruende5 = $vbbgruende5;
	}

	/**
	 * Returns the boolean state of vbbgruende5
	 *
	 * @return boolean
	 */
	public function isVbbgruende5() {
		return $this->getVbbgruende5();
	}

	/**
	 * Returns the begruendungsonstige
	 *
	 * @return string $begruendungsonstige
	 */
	public function getBegruendungsonstige() {
		return $this->begruendungsonstige;
	}

	/**
	 * Sets the begruendungsonstige
	 *
	 * @param string $begruendungsonstige
	 * @return void
	 */
	public function setBegruendungsonstige($begruendungsonstige) {
		$this->begruendungsonstige = $begruendungsonstige;
	}

	/**
	 * Returns the vbberklaerung1
	 *
	 * @return boolean $vbberklaerung1
	 */
	public function getVbberklaerung1() {
		return $this->vbberklaerung1;
	}

	/**
	 * Sets the vbberklaerung1
	 *
	 * @param boolean $vbberklaerung1
	 * @return void
	 */
	public function setVbberklaerung1($vbberklaerung1) {
		$this->vbberklaerung1 = $vbberklaerung1;
	}

	/**
	 * Returns the boolean state of vbberklaerung1
	 *
	 * @return boolean
	 */
	public function isVbberklaerung1() {
		return $this->getVbberklaerung1();
	}

	/**
	 * Returns the vbberklaerung2
	 *
	 * @return boolean $vbberklaerung2
	 */
	public function getVbberklaerung2() {
		return $this->vbberklaerung2;
	}

	/**
	 * Sets the vbberklaerung2
	 *
	 * @param boolean $vbberklaerung2
	 * @return void
	 */
	public function setVbberklaerung2($vbberklaerung2) {
		$this->vbberklaerung2 = $vbberklaerung2;
	}

	/**
	 * Returns the boolean state of vbberklaerung2
	 *
	 * @return boolean
	 */
	public function isVbberklaerung2() {
		return $this->getVbberklaerung2();
	}

	/**
	 * Returns the vmlstichtag
	 *
	 * @return string $vmlstichtag
	 */
	public function getVmlstichtag() {
		return $this->vmlstichtag;
	}

	/**
	 * Sets the vmlstichtag
	 *
	 * @param string $vmlstichtag
	 * @return void
	 */
	public function setVmlstichtag($vmlstichtag) {
		$this->vmlstichtag = $vmlstichtag;
	}

	/**
	 * Returns the anzahlboote
	 *
	 * @return integer $anzahlboote
	 */
	public function getAnzahlboote() {
		return $this->anzahlboote;
	}

	/**
	 * Sets the anzahlboote
	 *
	 * @param integer $anzahlboote
	 * @return void
	 */
	public function setAnzahlboote($anzahlboote) {
		$this->anzahlboote = $anzahlboote;
	}

	/**
	 * Returns the anzahlpferde
	 *
	 * @return integer $anzahlpferde
	 */
	public function getAnzahlpferde() {
		return $this->anzahlpferde;
	}

	/**
	 * Sets the anzahlpferde
	 *
	 * @param integer $anzahlpferde
	 * @return void
	 */
	public function setAnzahlpferde($anzahlpferde) {
		$this->anzahlpferde = $anzahlpferde;
	}

	/**
	 * Returns the datumbauberatung
	 *
	 * @return string $datumbauberatung
	 */
	public function getDatumbauberatung() {
		return $this->datumbauberatung;
	}

	/**
	 * Sets the datumbauberatung
	 *
	 * @param string $datumbauberatung
	 * @return void
	 */
	public function setDatumbauberatung($datumbauberatung) {
		$this->datumbauberatung = $datumbauberatung;
	}

	/**
	 * Returns the datumgespraechkv
	 *
	 * @return string $datumgespraechkv
	 */
	public function getDatumgespraechkv() {
		return $this->datumgespraechkv;
	}

	/**
	 * Sets the datumgespraechkv
	 *
	 * @param string $datumgespraechkv
	 * @return void
	 */
	public function setDatumgespraechkv($datumgespraechkv) {
		$this->datumgespraechkv = $datumgespraechkv;
	}

	/**
	 * Returns the ortsbesichtigungkv
	 *
	 * @return integer $ortsbesichtigungkv
	 */
	public function getOrtsbesichtigungkv() {
		return $this->ortsbesichtigungkv;
	}

	/**
	 * Sets the ortsbesichtigungkv
	 *
	 * @param integer $ortsbesichtigungkv
	 * @return void
	 */
	public function setOrtsbesichtigungkv($ortsbesichtigungkv) {
		$this->ortsbesichtigungkv = $ortsbesichtigungkv;
	}

	

	/**
	 * Returns the absendedatum
	 *
	 * @return string $absendedatum
	 */
	public function getAbsendedatum() {
		return $this->absendedatum;
	}

	/**
	 * Sets the absendedatum
	 *
	 * @param string $absendedatum
	 * @return void
	 */
	public function setAbsendedatum($absendedatum) {
		$this->absendedatum = $absendedatum;
	}

	/**
	 * Returns the eigentum
	 *
	 * @return boolean $eigentum
	 */
	public function getEigentum() {
		return $this->eigentum;
	}

	/**
	 * Sets the eigentum
	 *
	 * @param boolean $eigentum
	 * @return void
	 */
	public function setEigentum($eigentum) {
		$this->eigentum = $eigentum;
	}

	/**
	 * Returns the boolean state of eigentum
	 *
	 * @return boolean
	 */
	public function isEigentum() {
		return $this->getEigentum();
	}

	/**
	 * Returns the erbbaurecht
	 *
	 * @return boolean $erbbaurecht
	 */
	public function getErbbaurecht() {
		return $this->erbbaurecht;
	}

	/**
	 * Sets the erbbaurecht
	 *
	 * @param boolean $erbbaurecht
	 * @return void
	 */
	public function setErbbaurecht($erbbaurecht) {
		$this->erbbaurecht = $erbbaurecht;
	}

	/**
	 * Returns the boolean state of erbbaurecht
	 *
	 * @return boolean
	 */
	public function isErbbaurecht() {
		return $this->getErbbaurecht();
	}

	/**
	 * Returns the pachtvertrag
	 *
	 * @return boolean $pachtvertrag
	 */
	public function getPachtvertrag() {
		return $this->pachtvertrag;
	}

	/**
	 * Sets the pachtvertrag
	 *
	 * @param boolean $pachtvertrag
	 * @return void
	 */
	public function setPachtvertrag($pachtvertrag) {
		$this->pachtvertrag = $pachtvertrag;
	}

	/**
	 * Returns the boolean state of pachtvertrag
	 *
	 * @return boolean
	 */
	public function isPachtvertrag() {
		return $this->getPachtvertrag();
	}

	/**
	 * Returns the eigentuemer
	 *
	 * @return string $eigentuemer
	 */
	public function getEigentuemer() {
		return $this->eigentuemer;
	}

	/**
	 * Sets the eigentuemer
	 *
	 * @param string $eigentuemer
	 * @return void
	 */
	public function setEigentuemer($eigentuemer) {
		$this->eigentuemer = $eigentuemer;
	}

	/**
	 * Returns the grundstuecksgroesse
	 *
	 * @return integer $grundstuecksgroesse
	 */
	public function getGrundstuecksgroesse() {
		return $this->grundstuecksgroesse;
	}

	/**
	 * Sets the grundstuecksgroesse
	 *
	 * @param integer $grundstuecksgroesse
	 * @return void
	 */
	public function setGrundstuecksgroesse($grundstuecksgroesse) {
		$this->grundstuecksgroesse = $grundstuecksgroesse;
	}

	/**
	 * Returns the flurnummer
	 *
	 * @return string $flurnummer
	 */
	public function getFlurnummer() {
		return $this->flurnummer;
	}

	/**
	 * Sets the flurnummer
	 *
	 * @param string $flurnummer
	 * @return void
	 */
	public function setFlurnummer($flurnummer) {
		$this->flurnummer = $flurnummer;
	}

	/**
	 * Returns the gemarkung
	 *
	 * @return string $gemarkung
	 */
	public function getGemarkung() {
		return $this->gemarkung;
	}

	/**
	 * Sets the gemarkung
	 *
	 * @param string $gemarkung
	 * @return void
	 */
	public function setGemarkung($gemarkung) {
		$this->gemarkung = $gemarkung;
	}

	/**
	 * Returns the laufzeit
	 *
	 * @return string $laufzeit
	 */
	public function getLaufzeit() {
		return $this->laufzeit;
	}

	/**
	 * Sets the laufzeit
	 *
	 * @param string $laufzeit
	 * @return void
	 */
	public function setLaufzeit($laufzeit) {
		$this->laufzeit = $laufzeit;
	}

	/**
	 * Returns the erklrechtsanspruch
	 *
	 * @return boolean $erklrechtsanspruch
	 */
	public function getErklrechtsanspruch() {
		return $this->erklrechtsanspruch;
	}

	/**
	 * Sets the erklrechtsanspruch
	 *
	 * @param boolean $erklrechtsanspruch
	 * @return void
	 */
	public function setErklrechtsanspruch($erklrechtsanspruch) {
		$this->erklrechtsanspruch = $erklrechtsanspruch;
	}

	/**
	 * Returns the boolean state of erklrechtsanspruch
	 *
	 * @return boolean
	 */
	public function isErklrechtsanspruch() {
		return $this->getErklrechtsanspruch();
	}

	/**
	 * Returns the erklmeldepflicht
	 *
	 * @return boolean $erklmeldepflicht
	 */
	public function getErklmeldepflicht() {
		return $this->erklmeldepflicht;
	}

	/**
	 * Sets the erklmeldepflicht
	 *
	 * @param boolean $erklmeldepflicht
	 * @return void
	 */
	public function setErklmeldepflicht($erklmeldepflicht) {
		$this->erklmeldepflicht = $erklmeldepflicht;
	}

	/**
	 * Returns the boolean state of erklmeldepflicht
	 *
	 * @return boolean
	 */
	public function isErklmeldepflicht() {
		return $this->getErklmeldepflicht();
	}

	/**
	 * Returns the erklbaubeginn
	 *
	 * @return boolean $erklbaubeginn
	 */
	public function getErklbaubeginn() {
		return $this->erklbaubeginn;
	}

	/**
	 * Sets the erklbaubeginn
	 *
	 * @param boolean $erklbaubeginn
	 * @return void
	 */
	public function setErklbaubeginn($erklbaubeginn) {
		$this->erklbaubeginn = $erklbaubeginn;
	}

	/**
	 * Returns the boolean state of erklbaubeginn
	 *
	 * @return boolean
	 */
	public function isErklbaubeginn() {
		return $this->getErklbaubeginn();
	}

	/**
	 * Returns the erklvollstaendigeangaben
	 *
	 * @return boolean $erklvollstaendigeangaben
	 */
	public function getErklvollstaendigeangaben() {
		return $this->erklvollstaendigeangaben;
	}

	/**
	 * Sets the erklvollstaendigeangaben
	 *
	 * @param boolean $erklvollstaendigeangaben
	 * @return void
	 */
	public function setErklvollstaendigeangaben($erklvollstaendigeangaben) {
		$this->erklvollstaendigeangaben = $erklvollstaendigeangaben;
	}

	/**
	 * Returns the boolean state of erklvollstaendigeangaben
	 *
	 * @return boolean
	 */
	public function isErklvollstaendigeangaben() {
		return $this->getErklvollstaendigeangaben();
	}

	/**
	 * Returns the erklsubvention
	 *
	 * @return boolean $erklsubvention
	 */
	public function getErklsubvention() {
		return $this->erklsubvention;
	}

	/**
	 * Sets the erklsubvention
	 *
	 * @param boolean $erklsubvention
	 * @return void
	 */
	public function setErklsubvention($erklsubvention) {
		$this->erklsubvention = $erklsubvention;
	}

	/**
	 * Returns the boolean state of erklsubvention
	 *
	 * @return boolean
	 */
	public function isErklsubvention() {
		return $this->getErklsubvention();
	}

	/**
	 * Returns the erklfinanzierung
	 *
	 * @return boolean $erklfinanzierung
	 */
	public function getErklfinanzierung() {
		return $this->erklfinanzierung;
	}

	/**
	 * Sets the erklfinanzierung
	 *
	 * @param boolean $erklfinanzierung
	 * @return void
	 */
	public function setErklfinanzierung($erklfinanzierung) {
		$this->erklfinanzierung = $erklfinanzierung;
	}

	/**
	 * Returns the boolean state of erklfinanzierung
	 *
	 * @return boolean
	 */
	public function isErklfinanzierung() {
		return $this->getErklfinanzierung();
	}

	/**
	 * Returns the masnahmenart
	 *
	 * @return integer $masnahmenart
	 */
	public function getMasnahmenart() {
		return $this->masnahmenart;
	}

	/**
	 * Sets the masnahmenart
	 *
	 * @param integer $masnahmenart
	 * @return void
	 */
	public function setMasnahmenart($masnahmenart) {
		$this->masnahmenart = $masnahmenart;
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
	 * Returns the finanzierungzuschusskl
	 *
	 * @return integer $finanzierungzuschusskl
	 */
	public function getFinanzierungzuschusskl() {
		return $this->finanzierungzuschusskl;
	}

	/**
	 * Sets the finanzierungzuschusskl
	 *
	 * @param integer $finanzierungzuschusskl
	 * @return void
	 */
	public function setFinanzierungzuschusskl($finanzierungzuschusskl) {
		$this->finanzierungzuschusskl = $finanzierungzuschusskl;
	}

	/**
	 * Returns the guvbeginn
	 *
	 * @return string $guvbeginn
	 */
	public function getGuvbeginn() {
		return $this->guvbeginn;
	}

	/**
	 * Sets the guvbeginn
	 *
	 * @param string $guvbeginn
	 * @return void
	 */
	public function setGuvbeginn($guvbeginn) {
		$this->guvbeginn = $guvbeginn;
	}

	/**
	 * Returns the guvende
	 *
	 * @return string $guvende
	 */
	public function getGuvende() {
		return $this->guvende;
	}

	/**
	 * Sets the guvende
	 *
	 * @param string $guvende
	 * @return void
	 */
	public function setGuvende($guvende) {
		$this->guvende = $guvende;
	}

	/**
	 * Returns the guvbilanz
	 *
	 * @return integer $guvbilanz
	 */
	public function getGuvbilanz() {
		return $this->guvbilanz;
	}

	/**
	 * Sets the guvbilanz
	 *
	 * @param integer $guvbilanz
	 * @return void
	 */
	public function setGuvbilanz($guvbilanz) {
		$this->guvbilanz = $guvbilanz;
	}

	/**
	 * Returns the boolean state of guvbilanz
	 *
	 * @return integer
	 */
	public function isGuvbilanz() {
		return $this->getGuvbilanz();
	}

	/**
	 * Returns the guveuerechnung
	 *
	 * @return boolean $guveuerechnung
	 */
	public function getGuveuerechnung() {
		return $this->guveuerechnung;
	}

	/**
	 * Sets the guveuerechnung
	 *
	 * @param boolean $guveuerechnung
	 * @return void
	 */
	public function setGuveuerechnung($guveuerechnung) {
		$this->guveuerechnung = $guveuerechnung;
	}

	/**
	 * Returns the boolean state of guveuerechnung
	 *
	 * @return boolean
	 */
	public function isGuveuerechnung() {
		return $this->getGuveuerechnung();
	}

	/**
	 * Returns the guveinnahmengesamt
	 *
	 * @return integer $guveinnahmengesamt
	 */
	public function getGuveinnahmengesamt() {
		return $this->guveinnahmengesamt;
	}

	/**
	 * Sets the guveinnahmengesamt
	 *
	 * @param integer $guveinnahmengesamt
	 * @return void
	 */
	public function setGuveinnahmengesamt($guveinnahmengesamt) {
		$this->guveinnahmengesamt = $guveinnahmengesamt;
	}

	/**
	 * Returns the einnahmenbeitraege
	 *
	 * @return integer $einnahmenbeitraege
	 */
	public function getEinnahmenbeitraege() {
		return $this->einnahmenbeitraege;
	}

	/**
	 * Sets the einnahmenbeitraege
	 *
	 * @param integer $einnahmenbeitraege
	 * @return void
	 */
	public function setEinnahmenbeitraege($einnahmenbeitraege) {
		$this->einnahmenbeitraege = $einnahmenbeitraege;
	}

	/**
	 * Returns the einnahmenspenden
	 *
	 * @return integer $einnahmenspenden
	 */
	public function getEinnahmenspenden() {
		return $this->einnahmenspenden;
	}

	/**
	 * Sets the einnahmenspenden
	 *
	 * @param integer $einnahmenspenden
	 * @return void
	 */
	public function setEinnahmenspenden($einnahmenspenden) {
		$this->einnahmenspenden = $einnahmenspenden;
	}

	/**
	 * Returns the einnahmenzuschuesse
	 *
	 * @return integer $einnahmenzuschuesse
	 */
	public function getEinnahmenzuschuesse() {
		return $this->einnahmenzuschuesse;
	}

	/**
	 * Sets the einnahmenzuschuesse
	 *
	 * @param integer $einnahmenzuschuesse
	 * @return void
	 */
	public function setEinnahmenzuschuesse($einnahmenzuschuesse) {
		$this->einnahmenzuschuesse = $einnahmenzuschuesse;
	}

	/**
	 * Returns the guvausgabengesamt
	 *
	 * @return integer $guvausgabengesamt
	 */
	public function getGuvausgabengesamt() {
		return $this->guvausgabengesamt;
	}

	/**
	 * Sets the guvausgabengesamt
	 *
	 * @param integer $guvausgabengesamt
	 * @return void
	 */
	public function setGuvausgabengesamt($guvausgabengesamt) {
		$this->guvausgabengesamt = $guvausgabengesamt;
	}

	/**
	 * Returns the ausgabeninstandhaltung
	 *
	 * @return integer $ausgabeninstandhaltung
	 */
	public function getAusgabeninstandhaltung() {
		return $this->ausgabeninstandhaltung;
	}

	/**
	 * Sets the ausgabeninstandhaltung
	 *
	 * @param integer $ausgabeninstandhaltung
	 * @return void
	 */
	public function setAusgabeninstandhaltung($ausgabeninstandhaltung) {
		$this->ausgabeninstandhaltung = $ausgabeninstandhaltung;
	}

	/**
	 * Returns the ausgabensportbetrieb
	 *
	 * @return integer $ausgabensportbetrieb
	 */
	public function getAusgabensportbetrieb() {
		return $this->ausgabensportbetrieb;
	}

	/**
	 * Sets the ausgabensportbetrieb
	 *
	 * @param integer $ausgabensportbetrieb
	 * @return void
	 */
	public function setAusgabensportbetrieb($ausgabensportbetrieb) {
		$this->ausgabensportbetrieb = $ausgabensportbetrieb;
	}

	/**
	 * Returns the ausgabenverwaltung
	 *
	 * @return integer $ausgabenverwaltung
	 */
	public function getAusgabenverwaltung() {
		return $this->ausgabenverwaltung;
	}

	/**
	 * Sets the ausgabenverwaltung
	 *
	 * @param integer $ausgabenverwaltung
	 * @return void
	 */
	public function setAusgabenverwaltung($ausgabenverwaltung) {
		$this->ausgabenverwaltung = $ausgabenverwaltung;
	}

	/**
	 * Returns the ausgabenabschreibung
	 *
	 * @return integer $ausgabenabschreibung
	 */
	public function getAusgabenabschreibung() {
		return $this->ausgabenabschreibung;
	}

	/**
	 * Sets the ausgabenabschreibung
	 *
	 * @param integer $ausgabenabschreibung
	 * @return void
	 */
	public function setAusgabenabschreibung($ausgabenabschreibung) {
		$this->ausgabenabschreibung = $ausgabenabschreibung;
	}

	/**
	 * Returns the ueberschussfehlbetrag
	 *
	 * @return integer $ueberschussfehlbetrag
	 */
	public function getUeberschussfehlbetrag() {
		return $this->ueberschussfehlbetrag;
	}

	/**
	 * Sets the ueberschussfehlbetrag
	 *
	 * @param integer $ueberschussfehlbetrag
	 * @return void
	 */
	public function setUeberschussfehlbetrag($ueberschussfehlbetrag) {
		$this->ueberschussfehlbetrag = $ueberschussfehlbetrag;
	}

	/**
	 * Returns the vermoegensgegenstaende
	 *
	 * @return integer $vermoegensgegenstaende
	 */
	public function getVermoegensgegenstaende() {
		return $this->vermoegensgegenstaende;
	}

	/**
	 * Sets the vermoegensgegenstaende
	 *
	 * @param integer $vermoegensgegenstaende
	 * @return void
	 */
	public function setVermoegensgegenstaende($vermoegensgegenstaende) {
		$this->vermoegensgegenstaende = $vermoegensgegenstaende;
	}

	/**
	 * Returns the sachanlagen
	 *
	 * @return integer $sachanlagen
	 */
	public function getSachanlagen() {
		return $this->sachanlagen;
	}

	/**
	 * Sets the sachanlagen
	 *
	 * @param integer $sachanlagen
	 * @return void
	 */
	public function setSachanlagen($sachanlagen) {
		$this->sachanlagen = $sachanlagen;
	}

	/**
	 * Returns the finanzanlagen
	 *
	 * @return integer $finanzanlagen
	 */
	public function getFinanzanlagen() {
		return $this->finanzanlagen;
	}

	/**
	 * Sets the finanzanlagen
	 *
	 * @param integer $finanzanlagen
	 * @return void
	 */
	public function setFinanzanlagen($finanzanlagen) {
		$this->finanzanlagen = $finanzanlagen;
	}

	/**
	 * Returns the kassenbestand
	 *
	 * @return integer $kassenbestand
	 */
	public function getKassenbestand() {
		return $this->kassenbestand;
	}

	/**
	 * Sets the kassenbestand
	 *
	 * @param integer $kassenbestand
	 * @return void
	 */
	public function setKassenbestand($kassenbestand) {
		$this->kassenbestand = $kassenbestand;
	}

	/**
	 * Returns the bankguthaben
	 *
	 * @return integer $bankguthaben
	 */
	public function getBankguthaben() {
		return $this->bankguthaben;
	}

	/**
	 * Sets the bankguthaben
	 *
	 * @param integer $bankguthaben
	 * @return void
	 */
	public function setBankguthaben($bankguthaben) {
		$this->bankguthaben = $bankguthaben;
	}

	/**
	 * Returns the ruecklagenfrei
	 *
	 * @return integer $ruecklagenfrei
	 */
	public function getRuecklagenfrei() {
		return $this->ruecklagenfrei;
	}

	/**
	 * Sets the ruecklagenfrei
	 *
	 * @param integer $ruecklagenfrei
	 * @return void
	 */
	public function setRuecklagenfrei($ruecklagenfrei) {
		$this->ruecklagenfrei = $ruecklagenfrei;
	}

	/**
	 * Returns the ruecklagenzweck
	 *
	 * @return integer $ruecklagenzweck
	 */
	public function getRuecklagenzweck() {
		return $this->ruecklagenzweck;
	}

	/**
	 * Sets the ruecklagenzweck
	 *
	 * @param integer $ruecklagenzweck
	 * @return void
	 */
	public function setRuecklagenzweck($ruecklagenzweck) {
		$this->ruecklagenzweck = $ruecklagenzweck;
	}

	/**
	 * Returns the ruecklagenbetrieb
	 *
	 * @return integer $ruecklagenbetrieb
	 */
	public function getRuecklagenbetrieb() {
		return $this->ruecklagenbetrieb;
	}

	/**
	 * Sets the ruecklagenbetrieb
	 *
	 * @param integer $ruecklagenbetrieb
	 * @return void
	 */
	public function setRuecklagenbetrieb($ruecklagenbetrieb) {
		$this->ruecklagenbetrieb = $ruecklagenbetrieb;
	}

	/**
	 * Returns the verbindlichkeitbank
	 *
	 * @return integer $verbindlichkeitbank
	 */
	public function getVerbindlichkeitbank() {
		return $this->verbindlichkeitbank;
	}

	/**
	 * Sets the verbindlichkeitbank
	 *
	 * @param integer $verbindlichkeitbank
	 * @return void
	 */
	public function setVerbindlichkeitbank($verbindlichkeitbank) {
		$this->verbindlichkeitbank = $verbindlichkeitbank;
	}

	/**
	 * Returns the verbindlichkeitblssmd
	 *
	 * @return integer $verbindlichkeitblssmd
	 */
	public function getVerbindlichkeitblssmd() {
		return $this->verbindlichkeitblssmd;
	}

	/**
	 * Sets the verbindlichkeitblssmd
	 *
	 * @param integer $verbindlichkeitblssmd
	 * @return void
	 */
	public function setVerbindlichkeitblssmd($verbindlichkeitblssmd) {
		$this->verbindlichkeitblssmd = $verbindlichkeitblssmd;
	}

	/**
	 * Returns the verbindlichkeitsonstige
	 *
	 * @return integer $verbindlichkeitsonstige
	 */
	public function getVerbindlichkeitsonstige() {
		return $this->verbindlichkeitsonstige;
	}

	/**
	 * Sets the verbindlichkeitsonstige
	 *
	 * @param integer $verbindlichkeitsonstige
	 * @return void
	 */
	public function setVerbindlichkeitsonstige($verbindlichkeitsonstige) {
		$this->verbindlichkeitsonstige = $verbindlichkeitsonstige;
	}

	/**
	 * Returns the jahreskapitaldienst
	 *
	 * @return integer $jahreskapitaldienst
	 */
	public function getJahreskapitaldienst() {
		return $this->jahreskapitaldienst;
	}

	/**
	 * Sets the jahreskapitaldienst
	 *
	 * @param integer $jahreskapitaldienst
	 * @return void
	 */
	public function setJahreskapitaldienst($jahreskapitaldienst) {
		$this->jahreskapitaldienst = $jahreskapitaldienst;
	}

	/**
	 * Returns the fachverbandmitglied1
	 *
	 * @return integer $fachverbandmitglied1
	 */
	public function getFachverbandmitglied1() {
		return $this->fachverbandmitglied1;
	}

	/**
	 * Sets the fachverbandmitglied1
	 *
	 * @param integer $fachverbandmitglied1
	 * @return void
	 */
	public function setFachverbandmitglied1($fachverbandmitglied1) {
		$this->fachverbandmitglied1 = $fachverbandmitglied1;
	}

	/**
	 * Returns the mitglieder0110bis26
	 *
	 * @return integer $mitglieder0110bis26
	 */
	public function getMitglieder0110bis26() {
		return $this->mitglieder0110bis26;
	}

	/**
	 * Sets the mitglieder0110bis26
	 *
	 * @param integer $mitglieder0110bis26
	 * @return void
	 */
	public function setMitglieder0110bis26($mitglieder0110bis26) {
		$this->mitglieder0110bis26 = $mitglieder0110bis26;
	}

	/**
	 * Returns the mitglieder0110ueber26
	 *
	 * @return integer $mitglieder0110ueber26
	 */
	public function getMitglieder0110ueber26() {
			return $this->mitglieder0110ueber26;
	}

	/**
	 * Sets the mitglieder0110ueber26
	 *
	 * @param integer $mitglieder0110ueber26
	 * @return void
	 */
	public function setMitglieder0110ueber26($mitglieder0110ueber26) {
		$this->mitglieder0110ueber26 = $mitglieder0110ueber26;
	}

	/**
	 * Returns the mitglieder0111bis26
	 *
	 * @return integer $mitglieder0111bis26
	 */
	public function getMitglieder0111bis26() {
		return $this->mitglieder0111bis26;
	}

	/**
	 * Sets the mitglieder0111bis26
	 *
	 * @param integer $mitglieder0111bis26
	 * @return void
	 */
	public function setMitglieder0111bis26($mitglieder0111bis26) {
		$this->mitglieder0111bis26 = $mitglieder0111bis26;
	}

	/**
	 * Returns the mitglieder0111ueber26
	 *
	 * @return integer $mitglieder0111ueber26
	 */
	public function getMitglieder0111ueber26() {
		return $this->mitglieder0111ueber26;
	}

	/**
	 * Sets the mitglieder0111ueber26
	 *
	 * @param integer $mitglieder0111ueber26
	 * @return void
	 */
	public function setMitglieder0111ueber26($mitglieder0111ueber26) {
		$this->mitglieder0111ueber26 = $mitglieder0111ueber26;
	}

	/**
	 * Returns the mitglieder0112bis26
	 *
	 * @return integer $mitglieder0112bis26
	 */
	public function getMitglieder0112bis26() {
		return $this->mitglieder0112bis26;
	}

	/**
	 * Sets the mitglieder0112bis26
	 *
	 * @param integer $mitglieder0112bis26
	 * @return void
	 */
	public function setMitglieder0112bis26($mitglieder0112bis26) {
		$this->mitglieder0112bis26 = $mitglieder0112bis26;
	}

	/**
	 * Returns the mitglieder0112ueber26
	 *
	 * @return integer $mitglieder0112ueber26
	 */
	public function getMitglieder0112ueber26() {
		return $this->mitglieder0112ueber26;
	}

	/**
	 * Sets the mitglieder0112ueber26
	 *
	 * @param integer $mitglieder0112ueber26
	 * @return void
	 */
	public function setMitglieder0112ueber26($mitglieder0112ueber26) {
		$this->mitglieder0112ueber26 = $mitglieder0112ueber26;
	}

	/**
	 * Returns the fachverbandsmitglied2
	 *
	 * @return integer $fachverbandsmitglied2
	 */
	public function getFachverbandsmitglied2() {
		return $this->fachverbandsmitglied2;
	}

	/**
	 * Sets the fachverbandsmitglied2
	 *
	 * @param integer $fachverbandsmitglied2
	 * @return void
	 */
	public function setFachverbandsmitglied2($fachverbandsmitglied2) {
		$this->fachverbandsmitglied2 = $fachverbandsmitglied2;
	}

	/**
	 * Returns the mitglieder0210bis26
	 *
	 * @return integer $mitglieder0210bis26
	 */
	public function getMitglieder0210bis26() {
		return $this->mitglieder0210bis26;
	}

	/**
	 * Sets the mitglieder0210bis26
	 *
	 * @param integer $mitglieder0210bis26
	 * @return void
	 */
	public function setMitglieder0210bis26($mitglieder0210bis26) {
		$this->mitglieder0210bis26 = $mitglieder0210bis26;
	}

	/**
	 * Returns the mitglieder0210ueber26
	 *
	 * @return integer $mitglieder0210ueber26
	 */
	public function getMitglieder0210ueber26() {
		return $this->mitglieder0210ueber26;
	}

	/**
	 * Sets the mitglieder0210ueber26
	 *
	 * @param integer $mitglieder0210ueber26
	 * @return void
	 */
	public function setMitglieder0210ueber26($mitglieder0210ueber26) {
		$this->mitglieder0210ueber26 = $mitglieder0210ueber26;
	}

	/**
	 * Returns the mitglieder0211bis26
	 *
	 * @return integer $mitglieder0211bis26
	 */
	public function getMitglieder0211bis26() {
		return $this->mitglieder0211bis26;
	}

	/**
	 * Sets the mitglieder0211bis26
	 *
	 * @param integer $mitglieder0211bis26
	 * @return void
	 */
	public function setMitglieder0211bis26($mitglieder0211bis26) {
		$this->mitglieder0211bis26 = $mitglieder0211bis26;
	}

	/**
	 * Returns the mitglieder0211ueber26
	 *
	 * @return integer $mitglieder0211ueber26
	 */
	public function getMitglieder0211ueber26() {
		return $this->mitglieder0211ueber26;
	}

	/**
	 * Sets the mitglieder0211ueber26
	 *
	 * @param integer $mitglieder0211ueber26
	 * @return void
	 */
	public function setMitglieder0211ueber26($mitglieder0211ueber26) {
		$this->mitglieder0211ueber26 = $mitglieder0211ueber26;
	}

	/**
	 * Returns the mitglieder0212bis26
	 *
	 * @return integer $mitglieder0212bis26
	 */
	public function getMitglieder0212bis26() {
		return $this->mitglieder0212bis26;
	}

	/**
	 * Sets the mitglieder0212bis26
	 *
	 * @param integer $mitglieder0212bis26
	 * @return void
	 */
	public function setMitglieder0212bis26($mitglieder0212bis26) {
		$this->mitglieder0212bis26 = $mitglieder0212bis26;
	}

	/**
	 * Returns the mitglieder0212ueber26
	 *
	 * @return integer $mitglieder0212ueber26
	 */
	public function getMitglieder0212ueber26() {
		return $this->mitglieder0212ueber26;
	}

	/**
	 * Sets the mitglieder0212ueber26
	 *
	 * @param integer $mitglieder0212ueber26
	 * @return void
	 */
	public function setMitglieder0212ueber26($mitglieder0212ueber26) {
		$this->mitglieder0212ueber26 = $mitglieder0212ueber26;
	}

	/**
	 * Returns the fachverbandsmitglied3
	 *
	 * @return integer $fachverbandsmitglied3
	 */
	public function getFachverbandsmitglied3() {
		return $this->fachverbandsmitglied3;
	}

	/**
	 * Sets the fachverbandsmitglied3
	 *
	 * @param integer $fachverbandsmitglied3
	 * @return void
	 */
	public function setFachverbandsmitglied3($fachverbandsmitglied3) {
		$this->fachverbandsmitglied3 = $fachverbandsmitglied3;
	}

	/**
	 * Returns the mitglieder0310bis26
	 *
	 * @return integer $mitglieder0310bis26
	 */
	public function getMitglieder0310bis26() {
		return $this->mitglieder0310bis26;
	}

	/**
	 * Sets the mitglieder0310bis26
	 *
	 * @param integer $mitglieder0310bis26
	 * @return void
	 */
	public function setMitglieder0310bis26($mitglieder0310bis26) {
		$this->mitglieder0310bis26 = $mitglieder0310bis26;
	}

	/**
	 * Returns the mitglieder0310ueber26
	 *
	 * @return integer $mitglieder0310ueber26
	 */
	public function getMitglieder0310ueber26() {
		return $this->mitglieder0310ueber26;
	}

	/**
	 * Sets the mitglieder0310ueber26
	 *
	 * @param integer $mitglieder0310ueber26
	 * @return void
	 */
	public function setMitglieder0310ueber26($mitglieder0310ueber26) {
		$this->mitglieder0310ueber26 = $mitglieder0310ueber26;
	}

	/**
	 * Returns the mitglieder0311bis26
	 *
	 * @return integer $mitglieder0311bis26
	 */
	public function getMitglieder0311bis26() {
		return $this->mitglieder0311bis26;
	}

	/**
	 * Sets the mitglieder0311bis26
	 *
	 * @param integer $mitglieder0311bis26
	 * @return void
	 */
	public function setMitglieder0311bis26($mitglieder0311bis26) {
		$this->mitglieder0311bis26 = $mitglieder0311bis26;
	}

	/**
	 * Returns the mitglieder0311ueber26
	 *
	 * @return integer $mitglieder0311ueber26
	 */
	public function getMitglieder0311ueber26() {
		return $this->mitglieder0311ueber26;
	}

	/**
	 * Sets the mitglieder0311ueber26
	 *
	 * @param integer $mitglieder0311ueber26
	 * @return void
	 */
	public function setMitglieder0311ueber26($mitglieder0311ueber26) {
		$this->mitglieder0311ueber26 = $mitglieder0311ueber26;
	}

	/**
	 * Returns the mitglieder0312bis26
	 *
	 * @return integer $mitglieder0312bis26
	 */
	public function getMitglieder0312bis26() {
		return $this->mitglieder0312bis26;
	}

	/**
	 * Sets the mitglieder0312bis26
	 *
	 * @param integer $mitglieder0312bis26
	 * @return void
	 */
	public function setMitglieder0312bis26($mitglieder0312bis26) {
		$this->mitglieder0312bis26 = $mitglieder0312bis26;
	}

	/**
	 * Returns the mitglieder0312ueber26
	 *
	 * @return integer $mitglieder0312ueber26
	 */
	public function getMitglieder0312ueber26() {
		return $this->mitglieder0312ueber26;
	}

	/**
	 * Sets the mitglieder0312ueber26
	 *
	 * @param integer $mitglieder0312ueber26
	 * @return void
	 */
	public function setMitglieder0312ueber26($mitglieder0312ueber26) {
		$this->mitglieder0312ueber26 = $mitglieder0312ueber26;
	}

	/**
	 * Returns the fachverbandsmitglied4
	 *
	 * @return integer $fachverbandsmitglied4
	 */
	public function getFachverbandsmitglied4() {
		return $this->fachverbandsmitglied4;
	}

	/**
	 * Sets the fachverbandsmitglied4
	 *
	 * @param integer $fachverbandsmitglied4
	 * @return void
	 */
	public function setFachverbandsmitglied4($fachverbandsmitglied4) {
		$this->fachverbandsmitglied4 = $fachverbandsmitglied4;
	}

	/**
	 * Returns the mitglieder0410bis26
	 *
	 * @return integer $mitglieder0410bis26
	 */
	public function getMitglieder0410bis26() {
		return $this->mitglieder0410bis26;
	}

	/**
	 * Sets the mitglieder0410bis26
	 *
	 * @param integer $mitglieder0410bis26
	 * @return void
	 */
	public function setMitglieder0410bis26($mitglieder0410bis26) {
		$this->mitglieder0410bis26 = $mitglieder0410bis26;
	}

	/**
	 * Returns the mitglieder0410ueber26
	 *
	 * @return integer $mitglieder0410ueber26
	 */
	public function getMitglieder0410ueber26() {
		return $this->mitglieder0410ueber26;
	}

	/**
	 * Sets the mitglieder0410ueber26
	 *
	 * @param integer $mitglieder0410ueber26
	 * @return void
	 */
	public function setMitglieder0410ueber26($mitglieder0410ueber26) {
		$this->mitglieder0410ueber26 = $mitglieder0410ueber26;
	}

	/**
	 * Returns the mitglieder0411bis26
	 *
	 * @return integer $mitglieder0411bis26
	 */
	public function getMitglieder0411bis26() {
		return $this->mitglieder0411bis26;
	}

	/**
	 * Sets the mitglieder0411bis26
	 *
	 * @param integer $mitglieder0411bis26
	 * @return void
	 */
	public function setMitglieder0411bis26($mitglieder0411bis26) {
		$this->mitglieder0411bis26 = $mitglieder0411bis26;
	}

	/**
	 * Returns the mitglieder0411ueber26
	 *
	 * @return integer $mitglieder0411ueber26
	 */
	public function getMitglieder0411ueber26() {
		return $this->mitglieder0411ueber26;
	}

	/**
	 * Sets the mitglieder0411ueber26
	 *
	 * @param integer $mitglieder0411ueber26
	 * @return void
	 */
	public function setMitglieder0411ueber26($mitglieder0411ueber26) {
		$this->mitglieder0411ueber26 = $mitglieder0411ueber26;
	}

	/**
	 * Returns the mitglieder0412bis26
	 *
	 * @return integer $mitglieder0412bis26
	 */
	public function getMitglieder0412bis26() {
		return $this->mitglieder0412bis26;
	}

	/**
	 * Sets the mitglieder0412bis26
	 *
	 * @param integer $mitglieder0412bis26
	 * @return void
	 */
	public function setMitglieder0412bis26($mitglieder0412bis26) {
		$this->mitglieder0412bis26 = $mitglieder0412bis26;
	}

	/**
	 * Returns the mitglieder0412ueber26
	 *
	 * @return integer $mitglieder0412ueber26
	 */
	public function getMitglieder0412ueber26() {
		return $this->mitglieder0412ueber26;
	}

	/**
	 * Sets the mitglieder0412ueber26
	 *
	 * @param integer $mitglieder0412ueber26
	 * @return void
	 */
	public function setMitglieder0412ueber26($mitglieder0412ueber26) {
		$this->mitglieder0412ueber26 = $mitglieder0412ueber26;
	}

	/**
	 * Returns the fachverbandsmitglied5
	 *
	 * @return integer $fachverbandsmitglied5
	 */
	public function getFachverbandsmitglied5() {
		return $this->fachverbandsmitglied5;
	}

	/**
	 * Sets the fachverbandsmitglied5
	 *
	 * @param integer $fachverbandsmitglied5
	 * @return void
	 */
	public function setFachverbandsmitglied5($fachverbandsmitglied5) {
		$this->fachverbandsmitglied5 = $fachverbandsmitglied5;
	}

	/**
	 * Returns the mitglieder0510bis26
	 *
	 * @return integer $mitglieder0510bis26
	 */
	public function getMitglieder0510bis26() {
		return $this->mitglieder0510bis26;
	}

	/**
	 * Sets the mitglieder0510bis26
	 *
	 * @param integer $mitglieder0510bis26
	 * @return void
	 */
	public function setMitglieder0510bis26($mitglieder0510bis26) {
		$this->mitglieder0510bis26 = $mitglieder0510bis26;
	}

	/**
	 * Returns the mitglieder0510ueber26
	 *
	 * @return integer $mitglieder0510ueber26
	 */
	public function getMitglieder0510ueber26() {
		return $this->mitglieder0510ueber26;
	}

	/**
	 * Sets the mitglieder0510ueber26
	 *
	 * @param integer $mitglieder0510ueber26
	 * @return void
	 */
	public function setMitglieder0510ueber26($mitglieder0510ueber26) {
		$this->mitglieder0510ueber26 = $mitglieder0510ueber26;
	}

	/**
	 * Returns the mitglieder0511bis26
	 *
	 * @return integer $mitglieder0511bis26
	 */
	public function getMitglieder0511bis26() {
		return $this->mitglieder0511bis26;
	}

	/**
	 * Sets the mitglieder0511bis26
	 *
	 * @param integer $mitglieder0511bis26
	 * @return void
	 */
	public function setMitglieder0511bis26($mitglieder0511bis26) {
		$this->mitglieder0511bis26 = $mitglieder0511bis26;
	}

	/**
	 * Returns the mitglieder0511ueber26
	 *
	 * @return integer $mitglieder0511ueber26
	 */
	public function getMitglieder0511ueber26() {
		return $this->mitglieder0511ueber26;
	}

	/**
	 * Sets the mitglieder0511ueber26
	 *
	 * @param integer $mitglieder0511ueber26
	 * @return void
	 */
	public function setMitglieder0511ueber26($mitglieder0511ueber26) {
		$this->mitglieder0511ueber26 = $mitglieder0511ueber26;
	}

	/**
	 * Returns the mitglieder0512bis26
	 *
	 * @return integer $mitglieder0512bis26
	 */
	public function getMitglieder0512bis26() {
		return $this->mitglieder0512bis26;
	}

	/**
	 * Sets the mitglieder0512bis26
	 *
	 * @param integer $mitglieder0512bis26
	 * @return void
	 */
	public function setMitglieder0512bis26($mitglieder0512bis26) {
		$this->mitglieder0512bis26 = $mitglieder0512bis26;
	}

	/**
	 * Returns the mitglieder0512ueber26
	 *
	 * @return integer $mitglieder0512ueber26
	 */
	public function getMitglieder0512ueber26() {
		return $this->mitglieder0512ueber26;
	}

	/**
	 * Sets the mitglieder0512ueber26
	 *
	 * @param integer $mitglieder0512ueber26
	 * @return void
	 */
	public function setMitglieder0512ueber26($mitglieder0512ueber26) {
		$this->mitglieder0512ueber26 = $mitglieder0512ueber26;
	}

	/**
	 * Returns the fachverbandmannschaft1
	 *
	 * @return integer $fachverbandmannschaft1
	 */
	public function getFachverbandmannschaft1() {
		return $this->fachverbandmannschaft1;
	}

	/**
	 * Sets the fachverbandmannschaft1
	 *
	 * @param integer $fachverbandmannschaft1
	 * @return void
	 */
	public function setFachverbandmannschaft1($fachverbandmannschaft1) {
		$this->fachverbandmannschaft1 = $fachverbandmannschaft1;
	}

	/**
	 * Returns the schuelerjugend0110
	 *
	 * @return integer $schuelerjugend0110
	 */
	public function getSchuelerjugend0110() {
		return $this->schuelerjugend0110;
	}

	/**
	 * Sets the schuelerjugend0110
	 *
	 * @param integer $schuelerjugend0110
	 * @return void
	 */
	public function setSchuelerjugend0110($schuelerjugend0110) {
		$this->schuelerjugend0110 = $schuelerjugend0110;
	}

	/**
	 * Returns the erwachsene0110
	 *
	 * @return integer $erwachsene0110
	 */
	public function getErwachsene0110() {
		return $this->erwachsene0110;
	}

	/**
	 * Sets the erwachsene0110
	 *
	 * @param integer $erwachsene0110
	 * @return void
	 */
	public function setErwachsene0110($erwachsene0110) {
		$this->erwachsene0110 = $erwachsene0110;
	}

	/**
	 * Returns the schuelerjugend0111
	 *
	 * @return integer $schuelerjugend0111
	 */
	public function getSchuelerjugend0111() {
		return $this->schuelerjugend0111;
	}

	/**
	 * Sets the schuelerjugend0111
	 *
	 * @param integer $schuelerjugend0111
	 * @return void
	 */
	public function setSchuelerjugend0111($schuelerjugend0111) {
		$this->schuelerjugend0111 = $schuelerjugend0111;
	}

	/**
	 * Returns the erwachsene0111
	 *
	 * @return integer $erwachsene0111
	 */
	public function getErwachsene0111() {
		return $this->erwachsene0111;
	}

	/**
	 * Sets the erwachsene0111
	 *
	 * @param integer $erwachsene0111
	 * @return void
	 */
	public function setErwachsene0111($erwachsene0111) {
		$this->erwachsene0111 = $erwachsene0111;
	}

	/**
	 * Returns the schuelerjugend0112
	 *
	 * @return integer $schuelerjugend0112
	 */
	public function getSchuelerjugend0112() {
		return $this->schuelerjugend0112;
	}

	/**
	 * Sets the schuelerjugend0112
	 *
	 * @param integer $schuelerjugend0112
	 * @return void
	 */
	public function setSchuelerjugend0112($schuelerjugend0112) {
		$this->schuelerjugend0112 = $schuelerjugend0112;
	}

	/**
	 * Returns the erwachsene0112
	 *
	 * @return integer $erwachsene0112
	 */
	public function getErwachsene0112() {
		return $this->erwachsene0112;
	}

	/**
	 * Sets the erwachsene0112
	 *
	 * @param integer $erwachsene0112
	 * @return void
	 */
	public function setErwachsene0112($erwachsene0112) {
		$this->erwachsene0112 = $erwachsene0112;
	}

	/**
	 * Returns the fachverbandmannschaft2
	 *
	 * @return integer $fachverbandmannschaft2
	 */
	public function getFachverbandmannschaft2() {
		return $this->fachverbandmannschaft2;
	}

	/**
	 * Sets the fachverbandmannschaft2
	 *
	 * @param integer $fachverbandmannschaft2
	 * @return void
	 */
	public function setFachverbandmannschaft2($fachverbandmannschaft2) {
		$this->fachverbandmannschaft2 = $fachverbandmannschaft2;
	}

	/**
	 * Returns the schuelerjugend0210
	 *
	 * @return integer $schuelerjugend0210
	 */
	public function getSchuelerjugend0210() {
		return $this->schuelerjugend0210;
	}

	/**
	 * Sets the schuelerjugend0210
	 *
	 * @param integer $schuelerjugend0210
	 * @return void
	 */
	public function setSchuelerjugend0210($schuelerjugend0210) {
		$this->schuelerjugend0210 = $schuelerjugend0210;
	}

	/**
	 * Returns the erwachsene0210
	 *
	 * @return integer $erwachsene0210
	 */
	public function getErwachsene0210() {
		return $this->erwachsene0210;
	}

	/**
	 * Sets the erwachsene0210
	 *
	 * @param integer $erwachsene0210
	 * @return void
	 */
	public function setErwachsene0210($erwachsene0210) {
		$this->erwachsene0210 = $erwachsene0210;
	}

	/**
	 * Returns the schuelerjugend0211
	 *
	 * @return integer $schuelerjugend0211
	 */
	public function getSchuelerjugend0211() {
		return $this->schuelerjugend0211;
	}

	/**
	 * Sets the schuelerjugend0211
	 *
	 * @param integer $schuelerjugend0211
	 * @return void
	 */
	public function setSchuelerjugend0211($schuelerjugend0211) {
		$this->schuelerjugend0211 = $schuelerjugend0211;
	}

	/**
	 * Returns the erwachsene0211
	 *
	 * @return integer $erwachsene0211
	 */
	public function getErwachsene0211() {
		return $this->erwachsene0211;
	}

	/**
	 * Sets the erwachsene0211
	 *
	 * @param integer $erwachsene0211
	 * @return void
	 */
	public function setErwachsene0211($erwachsene0211) {
		$this->erwachsene0211 = $erwachsene0211;
	}

	/**
	 * Returns the schuelerjugend0212
	 *
	 * @return integer $schuelerjugend0212
	 */
	public function getSchuelerjugend0212() {
		return $this->schuelerjugend0212;
	}

	/**
	 * Sets the schuelerjugend0212
	 *
	 * @param integer $schuelerjugend0212
	 * @return void
	 */
	public function setSchuelerjugend0212($schuelerjugend0212) {
		$this->schuelerjugend0212 = $schuelerjugend0212;
	}

	/**
	 * Returns the erwachsene0212
	 *
	 * @return integer $erwachsene0212
	 */
	public function getErwachsene0212() {
		return $this->erwachsene0212;
	}

	/**
	 * Sets the erwachsene0212
	 *
	 * @param integer $erwachsene0212
	 * @return void
	 */
	public function setErwachsene0212($erwachsene0212) {
		$this->erwachsene0212 = $erwachsene0212;
	}

	/**
	 * Returns the fachverbandmannschaft3
	 *
	 * @return integer $fachverbandmannschaft3
	 */
	public function getFachverbandmannschaft3() {
		return $this->fachverbandmannschaft3;
	}

	/**
	 * Sets the fachverbandmannschaft3
	 *
	 * @param integer $fachverbandmannschaft3
	 * @return void
	 */
	public function setFachverbandmannschaft3($fachverbandmannschaft3) {
		$this->fachverbandmannschaft3 = $fachverbandmannschaft3;
	}

	/**
	 * Returns the schuelerjugend0310
	 *
	 * @return integer $schuelerjugend0310
	 */
	public function getSchuelerjugend0310() {
		return $this->schuelerjugend0310;
	}

	/**
	 * Sets the schuelerjugend0310
	 *
	 * @param integer $schuelerjugend0310
	 * @return void
	 */
	public function setSchuelerjugend0310($schuelerjugend0310) {
		$this->schuelerjugend0310 = $schuelerjugend0310;
	}

	/**
	 * Returns the erwachsene0310
	 *
	 * @return integer $erwachsene0310
	 */
	public function getErwachsene0310() {
		return $this->erwachsene0310;
	}

	/**
	 * Sets the erwachsene0310
	 *
	 * @param integer $erwachsene0310
	 * @return void
	 */
	public function setErwachsene0310($erwachsene0310) {
		$this->erwachsene0310 = $erwachsene0310;
	}

	/**
	 * Returns the schuelerjugend0311
	 *
	 * @return integer $schuelerjugend0311
	 */
	public function getSchuelerjugend0311() {
		return $this->schuelerjugend0311;
	}

	/**
	 * Sets the schuelerjugend0311
	 *
	 * @param integer $schuelerjugend0311
	 * @return void
	 */
	public function setSchuelerjugend0311($schuelerjugend0311) {
		$this->schuelerjugend0311 = $schuelerjugend0311;
	}

	/**
	 * Returns the erwachsene0311
	 *
	 * @return integer $erwachsene0311
	 */
	public function getErwachsene0311() {
		return $this->erwachsene0311;
	}

	/**
	 * Sets the erwachsene0311
	 *
	 * @param integer $erwachsene0311
	 * @return void
	 */
	public function setErwachsene0311($erwachsene0311) {
		$this->erwachsene0311 = $erwachsene0311;
	}

	/**
	 * Returns the schuelerjugend0312
	 *
	 * @return integer $schuelerjugend0312
	 */
	public function getSchuelerjugend0312() {
		return $this->schuelerjugend0312;
	}

	/**
	 * Sets the schuelerjugend0312
	 *
	 * @param integer $schuelerjugend0312
	 * @return void
	 */
	public function setSchuelerjugend0312($schuelerjugend0312) {
		$this->schuelerjugend0312 = $schuelerjugend0312;
	}

	/**
	 * Returns the erwachsene0312
	 *
	 * @return integer $erwachsene0312
	 */
	public function getErwachsene0312() {
		return $this->erwachsene0312;
	}

	/**
	 * Sets the erwachsene0312
	 *
	 * @param integer $erwachsene0312
	 * @return void
	 */
	public function setErwachsene0312($erwachsene0312) {
		$this->erwachsene0312 = $erwachsene0312;
	}

	/**
	 * Returns the fachverbandmannschaft4
	 *
	 * @return integer $fachverbandmannschaft4
	 */
	public function getFachverbandmannschaft4() {
		return $this->fachverbandmannschaft4;
	}

	/**
	 * Sets the fachverbandmannschaft4
	 *
	 * @param integer $fachverbandmannschaft4
	 * @return void
	 */
	public function setFachverbandmannschaft4($fachverbandmannschaft4) {
		$this->fachverbandmannschaft4 = $fachverbandmannschaft4;
	}

	/**
	 * Returns the schuelerjugend0410
	 *
	 * @return integer $schuelerjugend0410
	 */
	public function getSchuelerjugend0410() {
		return $this->schuelerjugend0410;
	}

	/**
	 * Sets the schuelerjugend0410
	 *
	 * @param integer $schuelerjugend0410
	 * @return void
	 */
	public function setSchuelerjugend0410($schuelerjugend0410) {
		$this->schuelerjugend0410 = $schuelerjugend0410;
	}

	/**
	 * Returns the erwachsene0410
	 *
	 * @return integer $erwachsene0410
	 */
	public function getErwachsene0410() {
		return $this->erwachsene0410;
	}

	/**
	 * Sets the erwachsene0410
	 *
	 * @param integer $erwachsene0410
	 * @return void
	 */
	public function setErwachsene0410($erwachsene0410) {
		$this->erwachsene0410 = $erwachsene0410;
	}

	/**
	 * Returns the schuelerjugend0411
	 *
	 * @return integer $schuelerjugend0411
	 */
	public function getSchuelerjugend0411() {
		return $this->schuelerjugend0411;
	}

	/**
	 * Sets the schuelerjugend0411
	 *
	 * @param integer $schuelerjugend0411
	 * @return void
	 */
	public function setSchuelerjugend0411($schuelerjugend0411) {
		$this->schuelerjugend0411 = $schuelerjugend0411;
	}

	/**
	 * Returns the erwachsene0411
	 *
	 * @return integer $erwachsene0411
	 */
	public function getErwachsene0411() {
		return $this->erwachsene0411;
	}

	/**
	 * Sets the erwachsene0411
	 *
	 * @param integer $erwachsene0411
	 * @return void
	 */
	public function setErwachsene0411($erwachsene0411) {
		$this->erwachsene0411 = $erwachsene0411;
	}

	/**
	 * Returns the schuelerjugend0412
	 *
	 * @return integer $schuelerjugend0412
	 */
	public function getSchuelerjugend0412() {
		return $this->schuelerjugend0412;
	}

	/**
	 * Sets the schuelerjugend0412
	 *
	 * @param integer $schuelerjugend0412
	 * @return void
	 */
	public function setSchuelerjugend0412($schuelerjugend0412) {
		$this->schuelerjugend0412 = $schuelerjugend0412;
	}

	/**
	 * Returns the erwachsene0412
	 *
	 * @return integer $erwachsene0412
	 */
	public function getErwachsene0412() {
		return $this->erwachsene0412;
	}

	/**
	 * Sets the erwachsene0412
	 *
	 * @param integer $erwachsene0412
	 * @return void
	 */
	public function setErwachsene0412($erwachsene0412) {
		$this->erwachsene0412 = $erwachsene0412;
	}

	/**
	 * Returns the fachverbandmannschaft5
	 *
	 * @return integer $fachverbandmannschaft5
	 */
	public function getFachverbandmannschaft5() {
		return $this->fachverbandmannschaft5;
	}

	/**
	 * Sets the fachverbandmannschaft5
	 *
	 * @param integer $fachverbandmannschaft5
	 * @return void
	 */
	public function setFachverbandmannschaft5($fachverbandmannschaft5) {
		$this->fachverbandmannschaft5 = $fachverbandmannschaft5;
	}

	/**
	 * Returns the schuelerjugend0510
	 *
	 * @return integer $schuelerjugend0510
	 */
	public function getSchuelerjugend0510() {
		return $this->schuelerjugend0510;
	}

	/**
	 * Sets the schuelerjugend0510
	 *
	 * @param integer $schuelerjugend0510
	 * @return void
	 */
	public function setSchuelerjugend0510($schuelerjugend0510) {
		$this->schuelerjugend0510 = $schuelerjugend0510;
	}

	/**
	 * Returns the erwachsene0510
	 *
	 * @return integer $erwachsene0510
	 */
	public function getErwachsene0510() {
		return $this->erwachsene0510;
	}

	/**
	 * Sets the erwachsene0510
	 *
	 * @param integer $erwachsene0510
	 * @return void
	 */
	public function setErwachsene0510($erwachsene0510) {
		$this->erwachsene0510 = $erwachsene0510;
	}

	/**
	 * Returns the schuelerjugend0511
	 *
	 * @return integer $schuelerjugend0511
	 */
	public function getSchuelerjugend0511() {
		return $this->schuelerjugend0511;
	}

	/**
	 * Sets the schuelerjugend0511
	 *
	 * @param integer $schuelerjugend0511
	 * @return void
	 */
	public function setSchuelerjugend0511($schuelerjugend0511) {
		$this->schuelerjugend0511 = $schuelerjugend0511;
	}

	/**
	 * Returns the erwachsene0511
	 *
	 * @return integer $erwachsene0511
	 */
	public function getErwachsene0511() {
		return $this->erwachsene0511;
	}

	/**
	 * Sets the erwachsene0511
	 *
	 * @param integer $erwachsene0511
	 * @return void
	 */
	public function setErwachsene0511($erwachsene0511) {
		$this->erwachsene0511 = $erwachsene0511;
	}

	/**
	 * Returns the schuelerjugend0512
	 *
	 * @return integer $schuelerjugend0512
	 */
	public function getSchuelerjugend0512() {
		return $this->schuelerjugend0512;
	}

	/**
	 * Sets the schuelerjugend0512
	 *
	 * @param integer $schuelerjugend0512
	 * @return void
	 */
	public function setSchuelerjugend0512($schuelerjugend0512) {
		$this->schuelerjugend0512 = $schuelerjugend0512;
	}

	/**
	 * Returns the erwachsene0512
	 *
	 * @return integer $erwachsene0512
	 */
	public function getErwachsene0512() {
		return $this->erwachsene0512;
	}

	/**
	 * Sets the erwachsene0512
	 *
	 * @param integer $erwachsene0512
	 * @return void
	 */
	public function setErwachsene0512($erwachsene0512) {
		$this->erwachsene0512 = $erwachsene0512;
	}

	/**
	 * Returns the fachverbandueleiter1
	 *
	 * @return integer $fachverbandueleiter1
	 */
	public function getFachverbandueleiter1() {
		return $this->fachverbandueleiter1;
	}

	/**
	 * Sets the fachverbandueleiter1
	 *
	 * @param integer $fachverbandueleiter1
	 * @return void
	 */
	public function setFachverbandueleiter1($fachverbandueleiter1) {
		$this->fachverbandueleiter1 = $fachverbandueleiter1;
	}

	/**
	 * Returns the anzahl0110
	 *
	 * @return integer $anzahl0110
	 */
	public function getAnzahl0110() {
		return $this->anzahl0110;
	}

	/**
	 * Sets the anzahl0110
	 *
	 * @param integer $anzahl0110
	 * @return void
	 */
	public function setAnzahl0110($anzahl0110) {
		$this->anzahl0110 = $anzahl0110;
	}

	/**
	 * Returns the anzahl0111
	 *
	 * @return integer $anzahl0111
	 */
	public function getAnzahl0111() {
		return $this->anzahl0111;
	}

	/**
	 * Sets the anzahl0111
	 *
	 * @param integer $anzahl0111
	 * @return void
	 */
	public function setAnzahl0111($anzahl0111) {
		$this->anzahl0111 = $anzahl0111;
	}

	/**
	 * Returns the anzahl0112
	 *
	 * @return integer $anzahl0112
	 */
	public function getAnzahl0112() {
		return $this->anzahl0112;
	}

	/**
	 * Sets the anzahl0112
	 *
	 * @param integer $anzahl0112
	 * @return void
	 */
	public function setAnzahl0112($anzahl0112) {
		$this->anzahl0112 = $anzahl0112;
	}

	/**
	 * Returns the fachverbandueleiter2
	 *
	 * @return integer $fachverbandueleiter2
	 */
	public function getFachverbandueleiter2() {
		return $this->fachverbandueleiter2;
	}

	/**
	 * Sets the fachverbandueleiter2
	 *
	 * @param integer $fachverbandueleiter2
	 * @return void
	 */
	public function setFachverbandueleiter2($fachverbandueleiter2) {
		$this->fachverbandueleiter2 = $fachverbandueleiter2;
	}

	/**
	 * Returns the anzahl0210
	 *
	 * @return integer $anzahl0210
	 */
	public function getAnzahl0210() {
		return $this->anzahl0210;
	}

	/**
	 * Sets the anzahl0210
	 *
	 * @param integer $anzahl0210
	 * @return void
	 */
	public function setAnzahl0210($anzahl0210) {
		$this->anzahl0210 = $anzahl0210;
	}

	/**
	 * Returns the anzahl0211
	 *
	 * @return integer $anzahl0211
	 */
	public function getAnzahl0211() {
		return $this->anzahl0211;
	}

	/**
	 * Sets the anzahl0211
	 *
	 * @param integer $anzahl0211
	 * @return void
	 */
	public function setAnzahl0211($anzahl0211) {
		$this->anzahl0211 = $anzahl0211;
	}

	/**
	 * Returns the anzahl0212
	 *
	 * @return integer $anzahl0212
	 */
	public function getAnzahl0212() {
		return $this->anzahl0212;
	}

	/**
	 * Sets the anzahl0212
	 *
	 * @param integer $anzahl0212
	 * @return void
	 */
	public function setAnzahl0212($anzahl0212) {
		$this->anzahl0212 = $anzahl0212;
	}

	/**
	 * Returns the fachverbandueleiter3
	 *
	 * @return integer $fachverbandueleiter3
	 */
	public function getFachverbandueleiter3() {
		return $this->fachverbandueleiter3;
	}

	/**
	 * Sets the fachverbandueleiter3
	 *
	 * @param integer $fachverbandueleiter3
	 * @return void
	 */
	public function setFachverbandueleiter3($fachverbandueleiter3) {
		$this->fachverbandueleiter3 = $fachverbandueleiter3;
	}

	/**
	 * Returns the anzahl0310
	 *
	 * @return integer $anzahl0310
	 */
	public function getAnzahl0310() {
		return $this->anzahl0310;
	}

	/**
	 * Sets the anzahl0310
	 *
	 * @param integer $anzahl0310
	 * @return void
	 */
	public function setAnzahl0310($anzahl0310) {
		$this->anzahl0310 = $anzahl0310;
	}

	/**
	 * Returns the anzahl0311
	 *
	 * @return integer $anzahl0311
	 */
	public function getAnzahl0311() {
		return $this->anzahl0311;
	}

	/**
	 * Sets the anzahl0311
	 *
	 * @param integer $anzahl0311
	 * @return void
	 */
	public function setAnzahl0311($anzahl0311) {
		$this->anzahl0311 = $anzahl0311;
	}

	/**
	 * Returns the anzahl0312
	 *
	 * @return integer $anzahl0312
	 */
	public function getAnzahl0312() {
		return $this->anzahl0312;
	}

	/**
	 * Sets the anzahl0312
	 *
	 * @param integer $anzahl0312
	 * @return void
	 */
	public function setAnzahl0312($anzahl0312) {
		$this->anzahl0312 = $anzahl0312;
	}

	/**
	 * Returns the fachverbandueleiter4
	 *
	 * @return integer $fachverbandueleiter4
	 */
	public function getFachverbandueleiter4() {
		return $this->fachverbandueleiter4;
	}

	/**
	 * Sets the fachverbandueleiter4
	 *
	 * @param integer $fachverbandueleiter4
	 * @return void
	 */
	public function setFachverbandueleiter4($fachverbandueleiter4) {
		$this->fachverbandueleiter4 = $fachverbandueleiter4;
	}

	/**
	 * Returns the anzahl0410
	 *
	 * @return integer $anzahl0410
	 */
	public function getAnzahl0410() {
		return $this->anzahl0410;
	}

	/**
	 * Sets the anzahl0410
	 *
	 * @param integer $anzahl0410
	 * @return void
	 */
	public function setAnzahl0410($anzahl0410) {
		$this->anzahl0410 = $anzahl0410;
	}

	/**
	 * Returns the anzahl0411
	 *
	 * @return integer $anzahl0411
	 */
	public function getAnzahl0411() {
		return $this->anzahl0411;
	}

	/**
	 * Sets the anzahl0411
	 *
	 * @param integer $anzahl0411
	 * @return void
	 */
	public function setAnzahl0411($anzahl0411) {
		$this->anzahl0411 = $anzahl0411;
	}

	/**
	 * Returns the anzahl0412
	 *
	 * @return integer $anzahl0412
	 */
	public function getAnzahl0412() {
		return $this->anzahl0412;
	}

	/**
	 * Sets the anzahl0412
	 *
	 * @param integer $anzahl0412
	 * @return void
	 */
	public function setAnzahl0412($anzahl0412) {
		$this->anzahl0412 = $anzahl0412;
	}

	/**
	 * Returns the fachverbandueleiter5
	 *
	 * @return integer $fachverbandueleiter5
	 */
	public function getFachverbandueleiter5() {
		return $this->fachverbandueleiter5;
	}

	/**
	 * Sets the fachverbandueleiter5
	 *
	 * @param integer $fachverbandueleiter5
	 * @return void
	 */
	public function setFachverbandueleiter5($fachverbandueleiter5) {
		$this->fachverbandueleiter5 = $fachverbandueleiter5;
	}

	/**
	 * Returns the anzahl0510
	 *
	 * @return integer $anzahl0510
	 */
	public function getAnzahl0510() {
		return $this->anzahl0510;
	}

	/**
	 * Sets the anzahl0510
	 *
	 * @param integer $anzahl0510
	 * @return void
	 */
	public function setAnzahl0510($anzahl0510) {
		$this->anzahl0510 = $anzahl0510;
	}

	/**
	 * Returns the anzahl0511
	 *
	 * @return integer $anzahl0511
	 */
	public function getAnzahl0511() {
		return $this->anzahl0511;
	}

	/**
	 * Sets the anzahl0511
	 *
	 * @param integer $anzahl0511
	 * @return void
	 */
	public function setAnzahl0511($anzahl0511) {
		$this->anzahl0511 = $anzahl0511;
	}

	/**
	 * Returns the anzahl0512
	 *
	 * @return integer $anzahl0512
	 */
	public function getAnzahl0512() {
		return $this->anzahl0512;
	}

	/**
	 * Sets the anzahl0512
	 *
	 * @param integer $anzahl0512
	 * @return void
	 */
	public function setAnzahl0512($anzahl0512) {
		$this->anzahl0512 = $anzahl0512;
	}

	/**
	 * Returns the fachverbandnutzung1
	 *
	 * @return integer $fachverbandnutzung1
	 */
	public function getFachverbandnutzung1() {
		return $this->fachverbandnutzung1;
	}

	/**
	 * Sets the fachverbandnutzung1
	 *
	 * @param integer $fachverbandnutzung1
	 * @return void
	 */
	public function setFachverbandnutzung1($fachverbandnutzung1) {
		$this->fachverbandnutzung1 = $fachverbandnutzung1;
	}

	/**
	 * Returns the kinderjugendliche1
	 *
	 * @return integer $kinderjugendliche1
	 */
	public function getKinderjugendliche1() {
		return $this->kinderjugendliche1;
	}

	/**
	 * Sets the kinderjugendliche1
	 *
	 * @param integer $kinderjugendliche1
	 * @return void
	 */
	public function setKinderjugendliche1($kinderjugendliche1) {
		$this->kinderjugendliche1 = $kinderjugendliche1;
	}

	/**
	 * Returns the erwachsene1
	 *
	 * @return integer $erwachsene1
	 */
	public function getErwachsene1() {
		return $this->erwachsene1;
	}

	/**
	 * Sets the erwachsene1
	 *
	 * @param integer $erwachsene1
	 * @return void
	 */
	public function setErwachsene1($erwachsene1) {
		$this->erwachsene1 = $erwachsene1;
	}

	/**
	 * Returns the mannschaftschuejugw1
	 *
	 * @return integer $mannschaftschuejugw1
	 */
	public function getMannschaftschuejugw1() {
		return $this->mannschaftschuejugw1;
	}

	/**
	 * Sets the mannschaftschuejugw1
	 *
	 * @param integer $mannschaftschuejugw1
	 * @return void
	 */
	public function setMannschaftschuejugw1($mannschaftschuejugw1) {
		$this->mannschaftschuejugw1 = $mannschaftschuejugw1;
	}

	/**
	 * Returns the mannschaftschuejugm1
	 *
	 * @return integer $mannschaftschuejugm1
	 */
	public function getMannschaftschuejugm1() {
		return $this->mannschaftschuejugm1;
	}

	/**
	 * Sets the mannschaftschuejugm1
	 *
	 * @param integer $mannschaftschuejugm1
	 * @return void
	 */
	public function setMannschaftschuejugm1($mannschaftschuejugm1) {
		$this->mannschaftschuejugm1 = $mannschaftschuejugm1;
	}

	/**
	 * Returns the mannschafterwachsenw1
	 *
	 * @return integer $mannschafterwachsenw1
	 */
	public function getMannschafterwachsenw1() {
		return $this->mannschafterwachsenw1;
	}

	/**
	 * Sets the mannschafterwachsenw1
	 *
	 * @param integer $mannschafterwachsenw1
	 * @return void
	 */
	public function setMannschafterwachsenw1($mannschafterwachsenw1) {
		$this->mannschafterwachsenw1 = $mannschafterwachsenw1;
	}

	/**
	 * Returns the mannschafterwachsenm1
	 *
	 * @return integer $mannschafterwachsenm1
	 */
	public function getMannschafterwachsenm1() {
		return $this->mannschafterwachsenm1;
	}

	/**
	 * Sets the mannschafterwachsenm1
	 *
	 * @param integer $mannschafterwachsenm1
	 * @return void
	 */
	public function setMannschafterwachsenm1($mannschafterwachsenm1) {
		$this->mannschafterwachsenm1 = $mannschafterwachsenm1;
	}

	/**
	 * Returns the lizensierteuel1
	 *
	 * @return integer $lizensierteuel1
	 */
	public function getLizensierteuel1() {
		return $this->lizensierteuel1;
	}

	/**
	 * Sets the lizensierteuel1
	 *
	 * @param integer $lizensierteuel1
	 * @return void
	 */
	public function setLizensierteuel1($lizensierteuel1) {
		$this->lizensierteuel1 = $lizensierteuel1;
	}

	/**
	 * Returns the fachverbandnutzung2
	 *
	 * @return integer $fachverbandnutzung2
	 */
	public function getFachverbandnutzung2() {
		return $this->fachverbandnutzung2;
	}

	/**
	 * Sets the fachverbandnutzung2
	 *
	 * @param integer $fachverbandnutzung2
	 * @return void
	 */
	public function setFachverbandnutzung2($fachverbandnutzung2) {
		$this->fachverbandnutzung2 = $fachverbandnutzung2;
	}

	/**
	 * Returns the kinderjugendliche2
	 *
	 * @return integer $kinderjugendliche2
	 */
	public function getKinderjugendliche2() {
		return $this->kinderjugendliche2;
	}

	/**
	 * Sets the kinderjugendliche2
	 *
	 * @param integer $kinderjugendliche2
	 * @return void
	 */
	public function setKinderjugendliche2($kinderjugendliche2) {
		$this->kinderjugendliche2 = $kinderjugendliche2;
	}

	/**
	 * Returns the erwachsene2
	 *
	 * @return integer $erwachsene2
	 */
	public function getErwachsene2() {
		return $this->erwachsene2;
	}

	/**
	 * Sets the erwachsene2
	 *
	 * @param integer $erwachsene2
	 * @return void
	 */
	public function setErwachsene2($erwachsene2) {
		$this->erwachsene2 = $erwachsene2;
	}

	/**
	 * Returns the mannschaftschuejugw2
	 *
	 * @return integer $mannschaftschuejugw2
	 */
	public function getMannschaftschuejugw2() {
		return $this->mannschaftschuejugw2;
	}

	/**
	 * Sets the mannschaftschuejugw2
	 *
	 * @param integer $mannschaftschuejugw2
	 * @return void
	 */
	public function setMannschaftschuejugw2($mannschaftschuejugw2) {
		$this->mannschaftschuejugw2 = $mannschaftschuejugw2;
	}

	/**
	 * Returns the mannschaftschuejugm2
	 *
	 * @return integer $mannschaftschuejugm2
	 */
	public function getMannschaftschuejugm2() {
		return $this->mannschaftschuejugm2;
	}

	/**
	 * Sets the mannschaftschuejugm2
	 *
	 * @param integer $mannschaftschuejugm2
	 * @return void
	 */
	public function setMannschaftschuejugm2($mannschaftschuejugm2) {
		$this->mannschaftschuejugm2 = $mannschaftschuejugm2;
	}

	/**
	 * Returns the mannschafterwachsenw2
	 *
	 * @return integer $mannschafterwachsenw2
	 */
	public function getMannschafterwachsenw2() {
		return $this->mannschafterwachsenw2;
	}

	/**
	 * Sets the mannschafterwachsenw2
	 *
	 * @param integer $mannschafterwachsenw2
	 * @return void
	 */
	public function setMannschafterwachsenw2($mannschafterwachsenw2) {
		$this->mannschafterwachsenw2 = $mannschafterwachsenw2;
	}

	/**
	 * Returns the mannschafterwachsenm2
	 *
	 * @return integer $mannschafterwachsenm2
	 */
	public function getMannschafterwachsenm2() {
		return $this->mannschafterwachsenm2;
	}

	/**
	 * Sets the mannschafterwachsenm2
	 *
	 * @param integer $mannschafterwachsenm2
	 * @return void
	 */
	public function setMannschafterwachsenm2($mannschafterwachsenm2) {
		$this->mannschafterwachsenm2 = $mannschafterwachsenm2;
	}

	/**
	 * Returns the lizensierteuel2
	 *
	 * @return integer $lizensierteuel2
	 */
	public function getLizensierteuel2() {
		return $this->lizensierteuel2;
	}

	/**
	 * Sets the lizensierteuel2
	 *
	 * @param integer $lizensierteuel2
	 * @return void
	 */
	public function setLizensierteuel2($lizensierteuel2) {
		$this->lizensierteuel2 = $lizensierteuel2;
	}

	/**
	 * Returns the fachverbandnutzung3
	 *
	 * @return integer $fachverbandnutzung3
	 */
	public function getFachverbandnutzung3() {
		return $this->fachverbandnutzung3;
	}

	/**
	 * Sets the fachverbandnutzung3
	 *
	 * @param integer $fachverbandnutzung3
	 * @return void
	 */
	public function setFachverbandnutzung3($fachverbandnutzung3) {
		$this->fachverbandnutzung3 = $fachverbandnutzung3;
	}

	/**
	 * Returns the kinderjugendliche3
	 *
	 * @return integer $kinderjugendliche3
	 */
	public function getKinderjugendliche3() {
		return $this->kinderjugendliche3;
	}

	/**
	 * Sets the kinderjugendliche3
	 *
	 * @param integer $kinderjugendliche3
	 * @return void
	 */
	public function setKinderjugendliche3($kinderjugendliche3) {
		$this->kinderjugendliche3 = $kinderjugendliche3;
	}

	/**
	 * Returns the erwachsene3
	 *
	 * @return integer $erwachsene3
	 */
	public function getErwachsene3() {
		return $this->erwachsene3;
	}

	/**
	 * Sets the erwachsene3
	 *
	 * @param integer $erwachsene3
	 * @return void
	 */
	public function setErwachsene3($erwachsene3) {
		$this->erwachsene3 = $erwachsene3;
	}

	/**
	 * Returns the mannschaftschuejugw3
	 *
	 * @return integer $mannschaftschuejugw3
	 */
	public function getMannschaftschuejugw3() {
		return $this->mannschaftschuejugw3;
	}

	/**
	 * Sets the mannschaftschuejugw3
	 *
	 * @param integer $mannschaftschuejugw3
	 * @return void
	 */
	public function setMannschaftschuejugw3($mannschaftschuejugw3) {
		$this->mannschaftschuejugw3 = $mannschaftschuejugw3;
	}

	/**
	 * Returns the mannschaftschuejugm3
	 *
	 * @return integer $mannschaftschuejugm3
	 */
	public function getMannschaftschuejugm3() {
		return $this->mannschaftschuejugm3;
	}

	/**
	 * Sets the mannschaftschuejugm3
	 *
	 * @param integer $mannschaftschuejugm3
	 * @return void
	 */
	public function setMannschaftschuejugm3($mannschaftschuejugm3) {
		$this->mannschaftschuejugm3 = $mannschaftschuejugm3;
	}

	/**
	 * Returns the mannschafterwachsenw3
	 *
	 * @return integer $mannschafterwachsenw3
	 */
	public function getMannschafterwachsenw3() {
		return $this->mannschafterwachsenw3;
	}

	/**
	 * Sets the mannschafterwachsenw3
	 *
	 * @param integer $mannschafterwachsenw3
	 * @return void
	 */
	public function setMannschafterwachsenw3($mannschafterwachsenw3) {
		$this->mannschafterwachsenw3 = $mannschafterwachsenw3;
	}

	/**
	 * Returns the mannschafterwachsenm3
	 *
	 * @return integer $mannschafterwachsenm3
	 */
	public function getMannschafterwachsenm3() {
		return $this->mannschafterwachsenm3;
	}

	/**
	 * Sets the mannschafterwachsenm3
	 *
	 * @param integer $mannschafterwachsenm3
	 * @return void
	 */
	public function setMannschafterwachsenm3($mannschafterwachsenm3) {
		$this->mannschafterwachsenm3 = $mannschafterwachsenm3;
	}

	/**
	 * Returns the lizensierteuel3
	 *
	 * @return integer $lizensierteuel3
	 */
	public function getLizensierteuel3() {
		return $this->lizensierteuel3;
	}

	/**
	 * Sets the lizensierteuel3
	 *
	 * @param integer $lizensierteuel3
	 * @return void
	 */
	public function setLizensierteuel3($lizensierteuel3) {
		$this->lizensierteuel3 = $lizensierteuel3;
	}

	/**
	 * Returns the fachverbandnutzung4
	 *
	 * @return integer $fachverbandnutzung4
	 */
	public function getFachverbandnutzung4() {
		return $this->fachverbandnutzung4;
	}

	/**
	 * Sets the fachverbandnutzung4
	 *
	 * @param integer $fachverbandnutzung4
	 * @return void
	 */
	public function setFachverbandnutzung4($fachverbandnutzung4) {
		$this->fachverbandnutzung4 = $fachverbandnutzung4;
	}

	/**
	 * Returns the kinderjugendliche4
	 *
	 * @return integer $kinderjugendliche4
	 */
	public function getKinderjugendliche4() {
		return $this->kinderjugendliche4;
	}

	/**
	 * Sets the kinderjugendliche4
	 *
	 * @param integer $kinderjugendliche4
	 * @return void
	 */
	public function setKinderjugendliche4($kinderjugendliche4) {
		$this->kinderjugendliche4 = $kinderjugendliche4;
	}

	/**
	 * Returns the erwachsene4
	 *
	 * @return integer $erwachsene4
	 */
	public function getErwachsene4() {
		return $this->erwachsene4;
	}

	/**
	 * Sets the erwachsene4
	 *
	 * @param integer $erwachsene4
	 * @return void
	 */
	public function setErwachsene4($erwachsene4) {
		$this->erwachsene4 = $erwachsene4;
	}

	/**
	 * Returns the mannschaftschuejugw4
	 *
	 * @return integer $mannschaftschuejugw4
	 */
	public function getMannschaftschuejugw4() {
		return $this->mannschaftschuejugw4;
	}

	/**
	 * Sets the mannschaftschuejugw4
	 *
	 * @param integer $mannschaftschuejugw4
	 * @return void
	 */
	public function setMannschaftschuejugw4($mannschaftschuejugw4) {
		$this->mannschaftschuejugw4 = $mannschaftschuejugw4;
	}

	/**
	 * Returns the mannschaftschuejugm4
	 *
	 * @return integer $mannschaftschuejugm4
	 */
	public function getMannschaftschuejugm4() {
		return $this->mannschaftschuejugm4;
	}

	/**
	 * Sets the mannschaftschuejugm4
	 *
	 * @param integer $mannschaftschuejugm4
	 * @return void
	 */
	public function setMannschaftschuejugm4($mannschaftschuejugm4) {
		$this->mannschaftschuejugm4 = $mannschaftschuejugm4;
	}

	/**
	 * Returns the mannschafterwachsenw4
	 *
	 * @return integer $mannschafterwachsenw4
	 */
	public function getMannschafterwachsenw4() {
		return $this->mannschafterwachsenw4;
	}

	/**
	 * Sets the mannschafterwachsenw4
	 *
	 * @param integer $mannschafterwachsenw4
	 * @return void
	 */
	public function setMannschafterwachsenw4($mannschafterwachsenw4) {
		$this->mannschafterwachsenw4 = $mannschafterwachsenw4;
	}

	/**
	 * Returns the mannschafterwachsenm4
	 *
	 * @return integer $mannschafterwachsenm4
	 */
	public function getMannschafterwachsenm4() {
		return $this->mannschafterwachsenm4;
	}

	/**
	 * Sets the mannschafterwachsenm4
	 *
	 * @param integer $mannschafterwachsenm4
	 * @return void
	 */
	public function setMannschafterwachsenm4($mannschafterwachsenm4) {
		$this->mannschafterwachsenm4 = $mannschafterwachsenm4;
	}

	/**
	 * Returns the lizensierteuel4
	 *
	 * @return integer $lizensierteuel4
	 */
	public function getLizensierteuel4() {
		return $this->lizensierteuel4;
	}

	/**
	 * Sets the lizensierteuel4
	 *
	 * @param integer $lizensierteuel4
	 * @return void
	 */
	public function setLizensierteuel4($lizensierteuel4) {
		$this->lizensierteuel4 = $lizensierteuel4;
	}

	/**
	 * Returns the notwendigkeitauslastung
	 *
	 * @return boolean $notwendigkeitauslastung
	 */
	public function getNotwendigkeitauslastung() {
		return $this->notwendigkeitauslastung;
	}

	/**
	 * Sets the notwendigkeitauslastung
	 *
	 * @param boolean $notwendigkeitauslastung
	 * @return void
	 */
	public function setNotwendigkeitauslastung($notwendigkeitauslastung) {
		$this->notwendigkeitauslastung = $notwendigkeitauslastung;
	}

	/**
	 * Returns the boolean state of notwendigkeitauslastung
	 *
	 * @return boolean
	 */
	public function isNotwendigkeitauslastung() {
		return $this->getNotwendigkeitauslastung();
	}

	/**
	 * Returns the notwendigkeitausrichtung
	 *
	 * @return boolean $notwendigkeitausrichtung
	 */
	public function getNotwendigkeitausrichtung() {
		return $this->notwendigkeitausrichtung;
	}

	/**
	 * Sets the notwendigkeitausrichtung
	 *
	 * @param boolean $notwendigkeitausrichtung
	 * @return void
	 */
	public function setNotwendigkeitausrichtung($notwendigkeitausrichtung) {
		$this->notwendigkeitausrichtung = $notwendigkeitausrichtung;
	}

	/**
	 * Returns the boolean state of notwendigkeitausrichtung
	 *
	 * @return boolean
	 */
	public function isNotwendigkeitausrichtung() {
		return $this->getNotwendigkeitausrichtung();
	}

	/**
	 * Returns the notwendigkeitbeduerfnis
	 *
	 * @return boolean $notwendigkeitbeduerfnis
	 */
	public function getNotwendigkeitbeduerfnis() {
		return $this->notwendigkeitbeduerfnis;
	}

	/**
	 * Sets the notwendigkeitbeduerfnis
	 *
	 * @param boolean $notwendigkeitbeduerfnis
	 * @return void
	 */
	public function setNotwendigkeitbeduerfnis($notwendigkeitbeduerfnis) {
		$this->notwendigkeitbeduerfnis = $notwendigkeitbeduerfnis;
	}

	/**
	 * Returns the boolean state of notwendigkeitbeduerfnis
	 *
	 * @return boolean
	 */
	public function isNotwendigkeitbeduerfnis() {
		return $this->getNotwendigkeitbeduerfnis();
	}

	/**
	 * Returns the notwendigkeitunterhalt
	 *
	 * @return boolean $notwendigkeitunterhalt
	 */
	public function getNotwendigkeitunterhalt() {
		return $this->notwendigkeitunterhalt;
	}

	/**
	 * Sets the notwendigkeitunterhalt
	 *
	 * @param boolean $notwendigkeitunterhalt
	 * @return void
	 */
	public function setNotwendigkeitunterhalt($notwendigkeitunterhalt) {
		$this->notwendigkeitunterhalt = $notwendigkeitunterhalt;
	}

	/**
	 * Returns the boolean state of notwendigkeitunterhalt
	 *
	 * @return boolean
	 */
	public function isNotwendigkeitunterhalt() {
		return $this->getNotwendigkeitunterhalt();
	}

	/**
	 * Returns the bauberatungja
	 *
	 * @return integer $bauberatungja
	 */
	public function getBauberatungja() {
		return $this->bauberatungja;
	}

	/**
	 * Sets the bauberatungja
	 *
	 * @param integer $bauberatungja
	 * @return void
	 */
	public function setBauberatungja($bauberatungja) {
		$this->bauberatungja = $bauberatungja;
	}

	/**
	 * Returns the boolean state of bauberatungja
	 *
	 * @return boolean
	 */
	public function isBauberatungja() {
		return $this->getBauberatungja();
	}

	/**
	 * Returns the bauberatungdatum
	 *
	 * @return string $bauberatungdatum
	 */
	public function getBauberatungdatum() {
		return $this->bauberatungdatum;
	}

	/**
	 * Sets the bauberatungdatum
	 *
	 * @param string $bauberatungdatum
	 * @return void
	 */
	public function setBauberatungdatum($bauberatungdatum) {
		$this->bauberatungdatum = $bauberatungdatum;
	}

	/**
	 * Returns the bauberatungnein
	 *
	 * @return boolean $bauberatungnein
	 */
	public function getBauberatungnein() {
		return $this->bauberatungnein;
	}

	/**
	 * Sets the bauberatungnein
	 *
	 * @param boolean $bauberatungnein
	 * @return void
	 */
	public function setBauberatungnein($bauberatungnein) {
		$this->bauberatungnein = $bauberatungnein;
	}

	/**
	 * Returns the boolean state of bauberatungnein
	 *
	 * @return boolean
	 */
	public function isBauberatungnein() {
		return $this->getBauberatungnein();
	}

	/**
	 * Returns the bestkenntnisnahme
	 *
	 * @return boolean $bestkenntnisnahme
	 */
	public function getBestkenntnisnahme() {
		return $this->bestkenntnisnahme;
	}

	/**
	 * Sets the bestkenntnisnahme
	 *
	 * @param boolean $bestkenntnisnahme
	 * @return void
	 */
	public function setBestkenntnisnahme($bestkenntnisnahme) {
		$this->bestkenntnisnahme = $bestkenntnisnahme;
	}

	/**
	 * Returns the boolean state of bestkenntnisnahme
	 *
	 * @return boolean
	 */
	public function isBestkenntnisnahme() {
		return $this->getBestkenntnisnahme();
	}

	/**
	 * Returns the erklnutzungdritte
	 *
	 * @return boolean $erklnutzungdritte
	 */
	public function getErklnutzungdritte() {
		return $this->erklnutzungdritte;
	}

	/**
	 * Sets the erklnutzungdritte
	 *
	 * @param boolean $erklnutzungdritte
	 * @return void
	 */
	public function setErklnutzungdritte($erklnutzungdritte) {
		$this->erklnutzungdritte = $erklnutzungdritte;
	}

	/**
	 * Returns the boolean state of erklnutzungdritte
	 *
	 * @return boolean
	 */
	public function isErklnutzungdritte() {
		return $this->getErklnutzungdritte();
	}

	/**
	 * Returns the erklkonzession
	 *
	 * @return boolean $erklkonzession
	 */
	public function getErklkonzession() {
		return $this->erklkonzession;
	}

	/**
	 * Sets the erklkonzession
	 *
	 * @param boolean $erklkonzession
	 * @return void
	 */
	public function setErklkonzession($erklkonzession) {
		$this->erklkonzession = $erklkonzession;
	}

	/**
	 * Returns the boolean state of erklkonzession
	 *
	 * @return boolean
	 */
	public function isErklkonzession() {
		return $this->getErklkonzession();
	}

	/**
	 * Returns the antragsnummer1
	 *
	 * @return Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsnummer
	 */
	public function getAntragsnummer1() {
		return $this->antragsnummer1;
	}

	/**
	 * Sets the antragsnummer1
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsnummer
	 * @return void
	 */
	public function setAntragsnummer1(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsnummer1) {
		$this->antragsnummer1 = $antragsnummer1;
	}

	
	
	
// MJ: neue Felder
	/**
	 * Vereinsname
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $vereinsname;
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
	 * Gesamtkosten_Brutto
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $gesamtkosten_brutto=0;
	/**
	 * Returns the gesamtkosten_brutto
	 *
	 * @return Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $gesamtkosten_brutto
	 */
	public function getGesamtkosten_brutto() {
		return $this->gesamtkosten_brutto;
	}
	/**
	 * Sets the gesamtkosten_brutto
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $gesamtkosten_brutto
	 * @return void
	 */
	public function setGesamtkosten_brutto($gesamtkosten_brutto) {
		$this->gesamtkosten_brutto = $gesamtkosten_brutto;
	}
	
	/**
	 * eigenbeteiligung_gesamt
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $eigenbeteiligung_gesamt=0;
	/**
	 * Returns the eigenbeteiligung_gesamt
	 *
	 * @return Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $eigenbeteiligung_gesamt
	 */
	public function getEigenbeteiligung_gesamt() {
		return $this->eigenbeteiligung_gesamt;
	}
	/**
	 * Sets the eigenbeteiligung_gesamt
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $eigenbeteiligung_gesamt
	 * @return void
	 */
	public function setEigenbeteiligung_gesamt($eigenbeteiligung_gesamt) {
		$this->eigenbeteiligung_gesamt = $eigenbeteiligung_gesamt;
	}
		
	/**
	 * leistungen_dritter_gesamt
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $leistungen_dritter_gesamt=0;
	/**
	 * Returns the leistungen_dritter_gesamt
	 *
	 * @return Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $leistungen_dritter_gesamt
	 */
	public function getLeistungen_dritter_gesamt() {
		return $this->leistungen_dritter_gesamt;
	}
	/**
	 * Sets the leistungen_dritter_gesamt
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $leistungen_dritter_gesamt
	 * @return void
	 */
	public function setLeistungen_dritter_gesamt($leistungen_dritter_gesamt) {
		$this->leistungen_dritter_gesamt = $leistungen_dritter_gesamt;
	}
		
	/**
	 * sonstiges_vermoegen
	 * kl + re
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $sonstiges_vermoegen=0;
	/**
	 * Returns the sonstiges_vermoegen
	 *
	 * @return Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $sonstiges_vermoegen
	 */
	public function getSonstiges_vermoegen() {
		return $this->sonstiges_vermoegen;
	}
	/**
	 * Sets the sonstiges_vermoegen
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $sonstiges_vermoegen
	 * @return void
	 */
	public function setSonstiges_vermoegen($sonstiges_vermoegen) {
		$this->sonstiges_vermoegen = $sonstiges_vermoegen;
	}
	
	/**
	 * egtveigentuemer
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $egtveigentuemer;
	/**
	 * Returns the egtveigentuemer
	 *
	 * @return string $egtveigentuemer
	 */
	public function getEgtveigentuemer() {
		return $this->egtveigentuemer;
	}
	/**
	 * Sets the egtveigentuemer
	 *
	 * @param string $egtveigentuemer
	 * @return void
	 */
	public function setEgtveigentuemer($egtveigentuemer) {
		$this->egtveigentuemer = $egtveigentuemer;
	}
	
	/**
	 * egtvgrundstuecksgroesse
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $egtvgrundstuecksgroesse;
	/**
	 * Returns the egtvgrundstuecksgroesse
	 *
	 * @return string $egtvgrundstuecksgroesse
	 */
	public function getEgtvgrundstuecksgroesse() {
		return $this->egtvgrundstuecksgroesse;
	}
	/**
	 * Sets the egtvgrundstuecksgroesse
	 *
	 * @param string $egtvgrundstuecksgroesse
	 * @return void
	 */
	public function setEgtvgrundstuecksgroesse($egtvgrundstuecksgroesse) {
		$this->egtvgrundstuecksgroesse = $egtvgrundstuecksgroesse;
	}
	
	/**
	 * egtvflurnummer
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $egtvflurnummer;
	/**
	 * Returns the egtvflurnummer
	 *
	 * @return string $egtvflurnummer
	 */
	public function getEgtvflurnummer() {
		return $this->egtvflurnummer;
	}
	/**
	 * Sets the egtvflurnummer
	 *
	 * @param string $egtvflurnummer
	 * @return void
	 */
	public function setEgtvflurnummer($egtvflurnummer) {
		$this->egtvflurnummer = $egtvvflurnummer;
	}
	
	/**
	 * egtvgemarkung
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $egtvgemarkung;
	/**
	 * Returns the egtvgemarkung
	 *
	 * @return string $egtvgemarkung
	 */
	public function getEgtvgemarkung() {
		return $this->egtvgemarkung;
	}
	/**
	 * Sets the egtvgemarkung
	 *
	 * @param string $egtvgemarkung
	 * @return void
	 */
	public function setEgtvgemarkung($egtvgemarkung) {
		$this->egtvgemarkung = $egtvgemarkung;
	}
	
	/**
	 * egtvlaufzeit
	 * kl + re
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $egtvlaufzeit;
	/**
	 * Returns the egtvlaufzeit
	 *
	 * @return string $egtvlaufzeit
	 */
	public function getEgtvlaufzeit() {
		return $this->egtvlaufzeit;
	}
	/**
	 * Sets the egtvlaufzeit
	 *
	 * @param string $egtvlaufzeit
	 * @return void
	 */
	public function setEgtvlaufzeit($egtvlaufzeit) {
		$this->egtvlaufzeit = $egtvlaufzeit;
	}
	
	/**
	 * Returns the bestehendesportstaetten1
	 *
	 * @return integer $bestehendesportstaetten1
	 */
	public function getBestehendesportstaetten1() {
		return $this->bestehendesportstaetten1;
	}
	
	/**
	 * Returns the bestehendesportstaetten11
	 *
	 * @return integer $bestehendesportstaetten11
	 */
	public function getBestehendesportstaetten11() {
		return $this->bestehendesportstaetten11;
	}
	
	/**
	 * Returns the bestehendesportstaetten111
	 *
	 * @return integer $bestehendesportstaetten111
	 */
	public function getBestehendesportstaetten111() {
		return $this->bestehendesportstaetten111;
	}
	
	/**
	 * Returns the bestehendesportstaetten1111
	 *
	 * @return boolean $bestehendesportstaetten1111
	 */
	public function getBestehendesportstaetten1111() {
		return $this->bestehendesportstaetten1111;
	}
	
	/**
	 * Returns the bestehendesportstaetten1112
	 *
	 * @return boolean $bestehendesportstaetten1112
	 */
	public function getBestehendesportstaetten1112() {
		return $this->bestehendesportstaetten1112;
	}
	
	/**
	 * Returns the bestehendesportstaetten12
	 *
	 * @return integer $bestehendesportstaetten12
	 */
	public function getBestehendesportstaetten12() {
		return $this->bestehendesportstaetten12;
	}
	
	/**
	 * Returns the bestehendesportstaetten21
	 *
	 * @return integer $bestehendesportstaetten21
	 */
	public function getBestehendesportstaetten21() {
		return $this->bestehendesportstaetten21;
	}
	
	/**
	 * Returns the bestehendesportstaetten211
	 *
	 * @return integer $bestehendesportstaetten211
	 */
	public function getBestehendesportstaetten211() {
		return $this->bestehendesportstaetten211;
	}
	
	/**
	 * Returns the bestehendesportstaetten212
	 *
	 * @return integer $bestehendesportstaetten212
	 */
	public function getBestehendesportstaetten212() {
		return $this->bestehendesportstaetten212;
	}
	
	/**
	 * Returns the bestehendesportstaetten22
	 *
	 * @return integer $bestehendesportstaetten22
	 */
	public function getBestehendesportstaetten22() {
		return $this->bestehendesportstaetten22;
	}
	
	/**
	 * Returns the bestehendesportstaetten221
	 *
	 * @return integer $bestehendesportstaetten221
	 */
	public function getBestehendesportstaetten221() {
		return $this->bestehendesportstaetten221;
	}
	
	/**
	 * Returns the bestehendesportstaetten222
	 *
	 * @return integer $bestehendesportstaetten222
	 */
	public function getBestehendesportstaetten222() {
		return $this->bestehendesportstaetten222;
	}
	
	/**
	 * Returns the bestehendesportstaetten3
	 *
	 * @return integer $bestehendesportstaetten3
	 */
	public function getBestehendesportstaetten3() {
		return $this->bestehendesportstaetten3;
	}
	
	/**
	 * Returns the bestehendesportstaetten31
	 *
	 * @return integer $bestehendesportstaetten31
	 */
	public function getBestehendesportstaetten31() {
		return $this->bestehendesportstaetten31;
	}
	
	/**
	 * Returns the bestehendesportstaetten32
	 *
	 * @return integer $bestehendesportstaetten32
	 */
	public function getBestehendesportstaetten32() {
		return $this->bestehendesportstaetten32;
	}
	
	/**
	 * Returns the bestehendesportstaetten4
	 *
	 * @return integer $bestehendesportstaetten4
	 */
	public function getBestehendesportstaetten4() {
		return $this->bestehendesportstaetten4;
	}
	
	/**
	 * Returns the bestehendesportstaetten41
	 *
	 * @return integer $bestehendesportstaetten41
	 */
	public function getBestehendesportstaetten41() {
		return $this->bestehendesportstaetten41;
	}
	
	/**
	 * Returns the bestehendesportstaetten42
	 *
	 * @return integer $bestehendesportstaetten42
	 */
	public function getBestehendesportstaetten42() {
		return $this->bestehendesportstaetten42;
	}
	
	/**
	 * Returns the bestehendesportstaetten51
	 *
	 * @return integer $bestehendesportstaetten51
	 */
	public function getBestehendesportstaetten51() {
		return $this->bestehendesportstaetten51;
	}
	
	/**
	 * Returns the bestehendesportstaetten511
	 *
	 * @return integer $bestehendesportstaetten511
	 */
	public function getBestehendesportstaetten511() {
		return $this->bestehendesportstaetten511;
	}
	
	/**
	 * Returns the bestehendesportstaetten512
	 *
	 * @return integer $bestehendesportstaetten512
	 */
	public function getBestehendesportstaetten512() {
		return $this->bestehendesportstaetten512;
	}
	
	/**
	 * Returns the bestehendesportstaetten521
	 *
	 * @return integer $bestehendesportstaetten521
	 */
	public function getBestehendesportstaetten521() {
		return $this->bestehendesportstaetten521;
	}
	
	/**
	 * Returns the bestehendesportstaetten522
	 *
	 * @return integer $bestehendesportstaetten522
	 */
	public function getBestehendesportstaetten522() {
		return $this->bestehendesportstaetten522;
	}
	
	/**
	 * Returns the bestehendesportstaetten531
	 *
	 * @return integer $bestehendesportstaetten531
	 */
	public function getBestehendesportstaetten531() {
		return $this->bestehendesportstaetten531;
	}
	
	/**
	 * Returns the bestehendesportstaetten532
	 *
	 * @return integer $bestehendesportstaetten532
	 */
	public function getBestehendesportstaetten532() {
		return $this->bestehendesportstaetten532;
	}
	
	/**
	 * Returns the Finanzierung11
	 *
	 * @return integer $finanzierung11
	 */
	public function getFinanzierung11() {
		return $this->finanzierung11;
	}
	
	/**
	 * Returns the Finanzierung111
	 *
	 * @return integer $finanzierung111
	 */
	public function getFinanzierung111() {
		return $this->finanzierung111;
	}
	
	/**
	 * Returns the Finanzierung112
	 *
	 * @return integer $finanzierung112
	 */
	public function getFinanzierung112() {
		return $this->finanzierung112;
	}
	
	/**
	 * Returns the Finanzierung121
	 *
	 * @return integer $finanzierung121
	 */
	public function getFinanzierung121() {
		return $this->finanzierung121;
	}
	
	/**
	 * Returns the Finanzierung122
	 *
	 * @return integer $finanzierung122
	 */
	public function getFinanzierung122() {
		return $this->finanzierung122;
	}
	
	/**
	 * Returns the Finanzierung131
	 *
	 * @return integer $finanzierung131
	 */
	public function getFinanzierung131() {
		return $this->finanzierung131;
	}
	
	/**
	 * Returns the Finanzierung132
	 *
	 * @return integer $finanzierung132
	 */
	public function getFinanzierung132() {
		return $this->finanzierung132;
	}
	
	/**
	 * Returns the Finanzierung141
	 *
	 * @return integer $finanzierung141
	 */
	public function getFinanzierung141() {
		return $this->finanzierung141;
	}
	
	/**
	 * Returns the Finanzierung142
	 *
	 * @return integer $finanzierung142
	 */
	public function getFinanzierung142() {
		return $this->finanzierung142;
	}
	
	/**
	 * Returns the Finanzierung21
	 *
	 * @return integer $finanzierung21
	 */
	public function getFinanzierung21() {
		return $this->finanzierung21;
	}
	
	/**
	 * Returns the Finanzierung211
	 *
	 * @return integer $finanzierung211
	 */
	public function getFinanzierung211() {
		return $this->finanzierung211;
	}
	
	/**
	 * Returns the Finanzierung212
	 *
	 * @return integer $finanzierung212
	 */
	public function getFinanzierung212() {
		return $this->finanzierung212;
	}
	
	/**
	 * Returns the Finanzierung221
	 *
	 * @return integer $finanzierung221
	 */
	public function getFinanzierung221() {
		return $this->finanzierung221;
	}
	
	/**
	 * Returns the Finanzierung222
	 *
	 * @return integer $finanzierung222
	 */
	public function getFinanzierung222() {
		return $this->finanzierung222;
	}
	
	/**
	 * Returns the Finanzierung231
	 *
	 * @return integer $finanzierung231
	 */
	public function getFinanzierung231() {
		return $this->finanzierung231;
	}
	
	/**
	 * Returns the Finanzierung232
	 *
	 * @return integer $finanzierung232
	 */
	public function getFinanzierung232() {
		return $this->finanzierung232;
	}
	
	/**
	 * Returns the Finanzierung241
	 *
	 * @return integer $finanzierung241
	 */
	public function getFinanzierung241() {
		return $this->finanzierung241;
	}
	
	/**
	 * Returns the Finanzierung242
	 *
	 * @return integer $finanzierung242
	 */
	public function getFinanzierung242() {
		return $this->finanzierung242;
	}
	
	/**
	 * Returns the Finanzierung3
	 *
	 * @return integer $finanzierung3
	 */
	public function getFinanzierung3() {
		return $this->finanzierung3;
	}
	
	/**
	 * Returns the Finanzierung31
	 *
	 * @return integer $finanzierung31
	 */
	public function getFinanzierung31() {
		return $this->finanzierung31;
	}
	
	/**
	 * Returns the Finanzierung32
	 *
	 * @return integer $finanzierung32
	 */
	public function getFinanzierung32() {
		return $this->finanzierung32;
	}
	
	/**
	 * Returns the Finanzierung4
	 *
	 * @return integer $finanzierung4
	 */
	public function getFinanzierung4() {
		return $this->finanzierung4;
	}
	
	/**
	 * Returns the Finanzierung41
	 *
	 * @return integer $finanzierung41
	 */
	public function getFinanzierung41() {
		return $this->finanzierung41;
	}
	
	/**
	 * Returns the Finanzierung42
	 *
	 * @return integer $finanzierung42
	 */
	public function getFinanzierung42() {
		return $this->finanzierung42;
	}
	
	/**
	 * Returns the Finanzierung43
	 *
	 * @return integer $finanzierung43
	 */
	public function getFinanzierung43() {
		return $this->finanzierung43;
	}
	
	/**
	 * Returns the Finanzierung44
	 *
	 * @return integer $finanzierung44
	 */
	public function getFinanzierung44() {
		return $this->finanzierung44;
	}
	
	/**
	 * Returns the Finanzierung45
	 *
	 * @return integer $finanzierung45
	 */
	public function getFinanzierung45() {
		return $this->finanzierung45;
	}
	
	/**
	 * Returns the Sonstiges1
	 *
	 * @return integer $sonstiges1
	 */
	public function getSonstiges1() {
		return $this->sonstiges1;
	}
	
	/**
	 * Returns the Sonstiges11
	 *
	 * @return integer $sonstiges11
	 */
	public function getSonstiges11() {
		return $this->sonstiges11;
	}
	
	/**
	 * Returns the Sonstiges2
	 *
	 * @return integer $sonstiges2
	 */
	public function getSonstiges2() {
		return $this->sonstiges2;
	}
	
	/**
	 * Returns the Sonstiges21
	 *
	 * @return integer $sonstiges21
	 */
	public function getSonstiges21() {
		return $this->sonstiges21;
	}
	
	/**
	 * Returns the Sonstiges22
	 *
	 * @return integer $sonstiges22
	 */
	public function getSonstiges22() {
		return $this->sonstiges22;
	}
	
	/**
	 * Returns the Sportlicheentwicklung1
	 *
	 * @return integer $sportlicheentwicklung1
	 */
	public function getSportlicheentwicklung1() {
		return $this->sportlicheentwicklung1;
	}
	
	/**
	 * Returns the Sportlicheentwicklung11
	 *
	 * @return integer $sportlicheentwicklung11
	 */
	public function getSportlicheentwicklung11() {
		return $this->sportlicheentwicklung11;
	}
	
	/**
	 * Returns the Sportlicheentwicklung12
	 *
	 * @return integer $sportlicheentwicklung12
	 */
	public function getSportlicheentwicklung12() {
		return $this->sportlicheentwicklung12;
	}
	
	/**
	 * Returns the Sportlicheentwicklung13
	 *
	 * @return integer $sportlicheentwicklung13
	 */
	public function getSportlicheentwicklung13() {
		return $this->sportlicheentwicklung13;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2
	 *
	 * @return integer $sportlicheentwicklung2
	 */
	public function getSportlicheentwicklung2() {
		return $this->sportlicheentwicklung2;
	}
	
	/**
	 * Returns the Sportlicheentwicklung21
	 *
	 * @return integer $sportlicheentwicklung21
	 */
	public function getSportlicheentwicklung21() {
		return $this->sportlicheentwicklung21;
	}
	
	/**
	 * Returns the Sportlicheentwicklung211
	 *
	 * @return integer $sportlicheentwicklung211
	 */
	public function getSportlicheentwicklung211() {
		return $this->sportlicheentwicklung211;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2111
	 *
	 * @return integer $sportlicheentwicklung2111
	 */
	public function getSportlicheentwicklung2111() {
		return $this->sportlicheentwicklung2111;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2112
	 *
	 * @return integer $sportlicheentwicklung2112
	 */
	public function getSportlicheentwicklung2112() {
		return $this->sportlicheentwicklung2112;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2113
	 *
	 * @return integer $sportlicheentwicklung2113
	 */
	public function getSportlicheentwicklung2113() {
		return $this->sportlicheentwicklung2113;
	}
	
	/**
	 * Returns the Sportlicheentwicklung212
	 *
	 * @return integer $sportlicheentwicklung212
	 */
	public function getSportlicheentwicklung212() {
		return $this->sportlicheentwicklung212;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2121
	 *
	 * @return integer $sportlicheentwicklung2121
	 */
	public function getSportlicheentwicklung2121() {
		return $this->sportlicheentwicklung2121;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2122
	 *
	 * @return integer $sportlicheentwicklung2122
	 */
	public function getSportlicheentwicklung2122() {
		return $this->sportlicheentwicklung2122;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2123
	 *
	 * @return integer $sportlicheentwicklung2123
	 */
	public function getSportlicheentwicklung2123() {
		return $this->sportlicheentwicklung2123;
	}
	
	/**
	 * Returns the Sportlicheentwicklung213
	 *
	 * @return integer $sportlicheentwicklung213
	 */
	public function getSportlicheentwicklung213() {
		return $this->sportlicheentwicklung213;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2131
	 *
	 * @return integer $sportlicheentwicklung2131
	 */
	public function getSportlicheentwicklung2131() {
		return $this->sportlicheentwicklung2131;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2132
	 *
	 * @return integer $sportlicheentwicklung2132
	 */
	public function getSportlicheentwicklung2132() {
		return $this->sportlicheentwicklung2132;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2133
	 *
	 * @return integer $sportlicheentwicklung2133
	 */
	public function getSportlicheentwicklung2133() {
		return $this->sportlicheentwicklung2133;
	}
	
	/**
	 * Returns the Sportlicheentwicklung22
	 *
	 * @return integer $sportlicheentwicklung22
	 */
	public function getSportlicheentwicklung22() {
		return $this->sportlicheentwicklung22;
	}
	
	/**
	 * Returns the Sportlicheentwicklung221
	 *
	 * @return integer $sportlicheentwicklung221
	 */
	public function getSportlicheentwicklung221() {
		return $this->sportlicheentwicklung221;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2211
	 *
	 * @return integer $sportlicheentwicklung2211
	 */
	public function getSportlicheentwicklung2211() {
		return $this->sportlicheentwicklung2211;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2212
	 *
	 * @return integer $sportlicheentwicklung2212
	 */
	public function getSportlicheentwicklung2212() {
		return $this->sportlicheentwicklung2212;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2213
	 *
	 * @return integer $sportlicheentwicklung2213
	 */
	public function getSportlicheentwicklung2213() {
		return $this->sportlicheentwicklung2213;
	}
	
	/**
	 * Returns the Sportlicheentwicklung222
	 *
	 * @return integer $sportlicheentwicklung222
	 */
	public function getSportlicheentwicklung222() {
		return $this->sportlicheentwicklung222;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2221
	 *
	 * @return integer $sportlicheentwicklung2221
	 */
	public function getSportlicheentwicklung2221() {
		return $this->sportlicheentwicklung2221;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2222
	 *
	 * @return integer $sportlicheentwicklung2222
	 */
	public function getSportlicheentwicklung2222() {
		return $this->sportlicheentwicklung2222;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2223
	 *
	 * @return integer $sportlicheentwicklung2223
	 */
	public function getSportlicheentwicklung2223() {
		return $this->sportlicheentwicklung2223;
	}
	
	/**
	 * Returns the Sportlicheentwicklung223
	 *
	 * @return integer $sportlicheentwicklung223
	 */
	public function getSportlicheentwicklung223() {
		return $this->sportlicheentwicklung223;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2231
	 *
	 * @return integer $sportlicheentwicklung2231
	 */
	public function getSportlicheentwicklung2231() {
		return $this->sportlicheentwicklung2231;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2232
	 *
	 * @return integer $sportlicheentwicklung2232
	 */
	public function getSportlicheentwicklung2232() {
		return $this->sportlicheentwicklung2232;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2233
	 *
	 * @return integer $sportlicheentwicklung2233
	 */
	public function getSportlicheentwicklung2233() {
		return $this->sportlicheentwicklung2233;
	}
	
	/**
	 * Returns the Sportlicheentwicklung23
	 *
	 * @return integer $sportlicheentwicklung23
	 */
	public function getSportlicheentwicklung23() {
		return $this->sportlicheentwicklung23;
	}
	
	/**
	 * Returns the Sportlicheentwicklung231
	 *
	 * @return integer $sportlicheentwicklung231
	 */
	public function getSportlicheentwicklung231() {
		return $this->sportlicheentwicklung231;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2311
	 *
	 * @return integer $sportlicheentwicklung2311
	 */
	public function getSportlicheentwicklung2311() {
		return $this->sportlicheentwicklung2311;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2312
	 *
	 * @return integer $sportlicheentwicklung2312
	 */
	public function getSportlicheentwicklung2312() {
		return $this->sportlicheentwicklung2312;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2313
	 *
	 * @return integer $sportlicheentwicklung2313
	 */
	public function getSportlicheentwicklung2313() {
		return $this->sportlicheentwicklung2313;
	}
	
	/**
	 * Returns the Sportlicheentwicklung232
	 *
	 * @return integer $sportlicheentwicklung232
	 */
	public function getSportlicheentwicklung232() {
		return $this->sportlicheentwicklung232;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2321
	 *
	 * @return integer $sportlicheentwicklung2321
	 */
	public function getSportlicheentwicklung2321() {
		return $this->sportlicheentwicklung2321;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2322
	 *
	 * @return integer $sportlicheentwicklung2322
	 */
	public function getSportlicheentwicklung2322() {
		return $this->sportlicheentwicklung2322;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2323
	 *
	 * @return integer $sportlicheentwicklung2323
	 */
	public function getSportlicheentwicklung2323() {
		return $this->sportlicheentwicklung2323;
	}
	
	/**
	 * Returns the Sportlicheentwicklung233
	 *
	 * @return integer $sportlicheentwicklung233
	 */
	public function getSportlicheentwicklung233() {
		return $this->sportlicheentwicklung233;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2331
	 *
	 * @return integer $sportlicheentwicklung2331
	 */
	public function getSportlicheentwicklung2331() {
		return $this->sportlicheentwicklung2331;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2332
	 *
	 * @return integer $sportlicheentwicklung2332
	 */
	public function getSportlicheentwicklung2332() {
		return $this->sportlicheentwicklung2332;
	}
	
	/**
	 * Returns the Sportlicheentwicklung2333
	 *
	 * @return integer $sportlicheentwicklung2333
	 */
	public function getSportlicheentwicklung2333() {
		return $this->sportlicheentwicklung2333;
	}
	
	/**
	 * Returns the Sportlicheentwicklung3
	 *
	 * @return integer $sportlicheentwicklung3
	 */
	public function getSportlicheentwicklung3() {
		return $this->sportlicheentwicklung3;
	}
	
	/**
	 * Returns the Sportlicheentwicklung311
	 *
	 * @return integer $sportlicheentwicklung311
	 */
	public function getSportlicheentwicklung311() {
		return $this->sportlicheentwicklung311;
	}
	
	/**
	 * Returns the Sportlicheentwicklung312
	 *
	 * @return integer $sportlicheentwicklung312
	 */
	public function getSportlicheentwicklung312() {
		return $this->sportlicheentwicklung312;
	}
	
	/**
	 * Returns the Sportlicheentwicklung321
	 *
	 * @return integer $sportlicheentwicklung321
	 */
	public function getSportlicheentwicklung321() {
		return $this->sportlicheentwicklung321;
	}
	
	/**
	 * Returns the Sportlicheentwicklung322
	 *
	 * @return integer $sportlicheentwicklung322
	 */
	public function getSportlicheentwicklung322() {
		return $this->sportlicheentwicklung322;
	}
	
	/**
	 * Returns the Sportlicheentwicklung331
	 *
	 * @return integer $sportlicheentwicklung331
	 */
	public function getSportlicheentwicklung331() {
		return $this->sportlicheentwicklung331;
	}
	
	/**
	 * Returns the Sportlicheentwicklung332
	 *
	 * @return integer $sportlicheentwicklung332
	 */
	public function getSportlicheentwicklung332() {
		return $this->sportlicheentwicklung332;
	}
	
	/**
	 * Returns the Sportlicheentwicklung4
	 *
	 * @return integer $sportlicheentwicklung4
	 */
	public function getSportlicheentwicklung4() {
		return $this->sportlicheentwicklung4;
	}
	
	/**
	 * Returns the Sportlicheentwicklung41
	 *
	 * @return integer $sportlicheentwicklung41
	 */
	public function getSportlicheentwicklung41() {
		return $this->sportlicheentwicklung41;
	}
	
	/**
	 * Returns the Sportlicheentwicklung411
	 *
	 * @return integer $sportlicheentwicklung411
	 */
	public function getSportlicheentwicklung411() {
		return $this->sportlicheentwicklung411;
	}
	
	/**
	 * Returns the Sportlicheentwicklung412
	 *
	 * @return integer $sportlicheentwicklung412
	 */
	public function getSportlicheentwicklung412() {
		return $this->sportlicheentwicklung412;
	}
	
	/**
	 * Returns the Sportlicheentwicklung413
	 *
	 * @return integer $sportlicheentwicklung413
	 */
	public function getSportlicheentwicklung413() {
		return $this->sportlicheentwicklung413;
	}
	
	/**
	 * Returns the Sportlicheentwicklung414
	 *
	 * @return integer $sportlicheentwicklung414
	 */
	public function getSportlicheentwicklung414() {
		return $this->sportlicheentwicklung414;
	}
	
	/**
	 * Returns the Sportlicheentwicklung415
	 *
	 * @return integer $sportlicheentwicklung415
	 */
	public function getSportlicheentwicklung415() {
		return $this->sportlicheentwicklung415;
	}
	
	/**
	 * Returns the Sportlicheentwicklung42
	 *
	 * @return integer $sportlicheentwicklung42
	 */
	public function getSportlicheentwicklung42() {
		return $this->sportlicheentwicklung42;
	}
	
	/**
	 * Returns the Sportlicheentwicklung421
	 *
	 * @return integer $sportlicheentwicklung421
	 */
	public function getSportlicheentwicklung421() {
		return $this->sportlicheentwicklung421;
	}
	
	/**
	 * Returns the Sportlicheentwicklung422
	 *
	 * @return integer $sportlicheentwicklung422
	 */
	public function getSportlicheentwicklung422() {
		return $this->sportlicheentwicklung422;
	}
	
	/**
	 * Returns the Sportlicheentwicklung423
	 *
	 * @return integer $sportlicheentwicklung423
	 */
	public function getSportlicheentwicklung423() {
		return $this->sportlicheentwicklung423;
	}
	
	/**
	 * Returns the Sportlicheentwicklung424
	 *
	 * @return integer $sportlicheentwicklung424
	 */
	public function getSportlicheentwicklung424() {
		return $this->sportlicheentwicklung424;
	}
	
	/**
	 * Returns the Sportlicheentwicklung425
	 *
	 * @return integer $sportlicheentwicklung425
	 */
	public function getSportlicheentwicklung425() {
		return $this->sportlicheentwicklung425;
	}
	
	/**
	 * Returns the Sportlicheentwicklung43
	 *
	 * @return integer $sportlicheentwicklung43
	 */
	public function getSportlicheentwicklung43() {
		return $this->sportlicheentwicklung43;
	}
	
	/**
	 * Returns the Sportlicheentwicklung431
	 *
	 * @return integer $sportlicheentwicklung431
	 */
	public function getSportlicheentwicklung431() {
		return $this->sportlicheentwicklung431;
	}
	
	/**
	 * Returns the Sportlicheentwicklung432
	 *
	 * @return integer $sportlicheentwicklung432
	 */
	public function getSportlicheentwicklung432() {
		return $this->sportlicheentwicklung432;
	}
	
	/**
	 * Returns the Sportlicheentwicklung433
	 *
	 * @return integer $sportlicheentwicklung433
	 */
	public function getSportlicheentwicklung433() {
		return $this->sportlicheentwicklung433;
	}
	
	/**
	 * Returns the Sportlicheentwicklung434
	 *
	 * @return integer $sportlicheentwicklung434
	 */
	public function getSportlicheentwicklung434() {
		return $this->sportlicheentwicklung434;
	}
	
	/**
	 * Returns the Sportlicheentwicklung435
	 *
	 * @return integer $sportlicheentwicklung435
	 */
	public function getSportlicheentwicklung435() {
		return $this->sportlicheentwicklung435;
	}
	
	/**
	 * Returns the Stellungnahme11
	 *
	 * @return integer $stellungnahme11
	 */
	public function getStellungnahme11() {
		return $this->stellungnahme11;
	}
	
	/**
	 * Returns the Stellungnahme111
	 *
	 * @return integer $stellungnahme111
	 */
	public function getStellungnahme111() {
		return $this->stellungnahme111;
	}
	
	/**
	 * Returns the Stellungnahme112
	 *
	 * @return integer $stellungnahme112
	 */
	public function getStellungnahme112() {
		return $this->stellungnahme112;
	}
	
	/**
	 * Returns the Stellungnahme121
	 *
	 * @return integer $stellungnahme121
	 */
	public function getStellungnahme121() {
		return $this->stellungnahme121;
	}
	
	/**
	 * Returns the Stellungnahme122
	 *
	 * @return integer $stellungnahme122
	 */
	public function getStellungnahme122() {
		return $this->stellungnahme122;
	}
	
	/**
	 * Returns the Stellungnahme131
	 *
	 * @return integer $stellungnahme131
	 */
	public function getStellungnahme131() {
		return $this->stellungnahme131;
	}
	
	/**
	 * Returns the Stellungnahme132
	 *
	 * @return integer $stellungnahme132
	 */
	public function getStellungnahme132() {
		return $this->stellungnahme132;
	}
	
	/**
	 * Returns the Stellungnahme2
	 *
	 * @return integer $stellungnahme2
	 */
	public function getStellungnahme2() {
		return $this->stellungnahme2;
	}
	
	/**
	 * Returns the Stellungnahme21
	 *
	 * @return integer $stellungnahme21
	 */
	public function getStellungnahme21() {
		return $this->stellungnahme21;
	}
	
	/**
	 * Returns the Stellungnahme22
	 *
	 * @return integer $stellungnahme22
	 */
	public function getStellungnahme22() {
		return $this->stellungnahme22;
	}
	
	/**
	 * Returns the Stellungnahme22_0
	 *
	 * @return integer $stellungnahme22_0
	 */
	public function getStellungnahme22_0() {
		return $this->stellungnahme22_0;
	}
	
	/**
	 * Returns the Stellungnahme221
	 *
	 * @return integer $stellungnahme221
	 */
	public function getStellungnahme221() {
		return $this->stellungnahme221;
	}
	
	/**
	 * Returns the Stellungnahme222
	 *
	 * @return integer $stellungnahme222
	 */
	public function getStellungnahme222() {
		return $this->stellungnahme222;
	}
	
	/**
	 * Returns the Stellungnahme223
	 *
	 * @return integer $stellungnahme223
	 */
	public function getStellungnahme223() {
		return $this->stellungnahme223;
	}
	
	/**
	 * Returns the Stellungnahme224
	 *
	 * @return integer $stellungnahme224
	 */
	public function getStellungnahme224() {
		return $this->stellungnahme224;
	}
	
	/**
	 * Returns the Stellungnahme3
	 *
	 * @return integer $stellungnahme3
	 */
	public function getStellungnahme3() {
		return $this->stellungnahme3;
	}
	
	/**
	 * Returns the Stellungnahme31
	 *
	 * @return integer $stellungnahme31
	 */
	public function getStellungnahme31() {
		return $this->stellungnahme31;
	}
	
	/**
	 * Returns the Stellungnahme32
	 *
	 * @return integer $stellungnahme32
	 */
	public function getStellungnahme32() {
		return $this->stellungnahme32;
	}
	
	/**
	 * Returns the Stellungnahme31_0
	 *
	 * @return integer $stellungnahme31_0
	 */
	public function getStellungnahme31_0() {
		return $this->stellungnahme31_0;
	}
	
	/**
	 * Returns the Stellungnahme311
	 *
	 * @return integer $stellungnahme311
	 */
	public function getStellungnahme311() {
		return $this->stellungnahme311;
	}
	
	/**
	 * Returns the Stellungnahme312
	 *
	 * @return integer $stellungnahme312
	 */
	public function getStellungnahme312() {
		return $this->stellungnahme312;
	}
	
	/**
	 * Returns the Stellungnahme313
	 *
	 * @return integer $stellungnahme313
	 */
	public function getStellungnahme313() {
		return $this->stellungnahme313;
	}
	
	/**
	 * Returns the Stellungnahme4
	 *
	 * @return integer $stellungnahme4
	 */
	public function getStellungnahme4() {
		return $this->stellungnahme4;
	}
	
	/**
	 * Returns the Stellungnahme41
	 *
	 * @return integer $stellungnahme41
	 */
	public function getStellungnahme41() {
		return $this->stellungnahme41;
	}
	
	/**
	 * Returns the Stellungnahme5
	 *
	 * @return integer $stellungnahme5
	 */
	public function getStellungnahme5() {
		return $this->stellungnahme5;
	}
	
	/**
	 * Returns the Stellungnahme51
	 *
	 * @return integer $stellungnahme51
	 */
	public function getStellungnahme51() {
		return $this->stellungnahme51;
	}
	
	/**
	 * Returns the Stellungnahme52
	 *
	 * @return integer $stellungnahme52
	 */
	public function getStellungnahme52() {
		return $this->stellungnahme52;
	}
	
	/**
	 * Returns the Stellungnahme52_0
	 *
	 * @return integer $stellungnahme52_0
	 */
	public function getStellungnahme52_0() {
		return $this->stellungnahme52_0;
	}
	
	/**
	 * Returns the Stellungnahme521
	 *
	 * @return integer $stellungnahme521
	 */
	public function getStellungnahme521() {
		return $this->stellungnahme521;
	}
	
	/**
	 * Returns the Stellungnahme522
	 *
	 * @return integer $stellungnahme522
	 */
	public function getStellungnahme522() {
		return $this->stellungnahme522;
	}
	
	/**
	 * Returns the Stellungnahme523
	 *
	 * @return integer $stellungnahme523
	 */
	public function getStellungnahme523() {
		return $this->stellungnahme523;
	}
	
	/**
	 * Returns the Stellungnahme6
	 *
	 * @return integer $stellungnahme6
	 */
	public function getStellungnahme6() {
		return $this->stellungnahme6;
	}
	
	/**
	 * Returns the Stellungnahme61
	 *
	 * @return integer $stellungnahme61
	 */
	public function getStellungnahme61() {
		return $this->stellungnahme61;
	}
	
	/**
	 * Returns the Stellungnahme62
	 *
	 * @return integer $stellungnahme62
	 */
	public function getStellungnahme62() {
		return $this->stellungnahme62;
	}
	
	/**
	 * Returns the Stellungnahme61_0
	 *
	 * @return integer $stellungnahme61_0
	 */
	public function getStellungnahme61_0() {
		return $this->stellungnahme61_0;
	}
	
	/**
	 * Returns the Stellungnahme611
	 *
	 * @return integer $stellungnahme611
	 */
	public function getStellungnahme611() {
		return $this->stellungnahme611;
	}
	
	/**
	 * Returns the Stellungnahme612
	 *
	 * @return integer $stellungnahme612
	 */
	public function getStellungnahme612() {
		return $this->stellungnahme612;
	}
	
	/**
	 * Returns the Stellungnahme613
	 *
	 * @return integer $stellungnahme613
	 */
	public function getStellungnahme613() {
		return $this->stellungnahme613;
	}
	
	/**
	 * Returns the Stellungnahme614
	 *
	
	 * @return integer $stellungnahme614
	 */
	public function getStellungnahme614() {
		return $this->stellungnahme614;
	}
	
	/**
	 * Sets the bestehendesportstaetten1
	 *
	 * @param integer $bestehendesportstaetten1
	 * @return void
	 */
	public function setBestehendesportstaetten1($bestehendesportstaetten1) {
		$this->bestehendesportstaetten1 = $bestehendesportstaetten1;
	}
	
	/**
	 * Sets the bestehendesportstaetten11
	 *
	 * @param integer $bestehendesportstaetten11
	 * @return void
	 */
	public function setBestehendesportstaetten11($bestehendesportstaetten11) {
		$this->bestehendesportstaetten11 = $bestehendesportstaetten11;
	}
	
	/**
	 * Sets the bestehendesportstaetten111
	 *
	 * @param integer $bestehendesportstaetten111
	 * @return void
	 */
	public function setBestehendesportstaetten111($bestehendesportstaetten111) {
		$this->bestehendesportstaetten111 = $bestehendesportstaetten111;
	}
	
	/**
	 * Sets the bestehendesportstaetten1111
	 *
	 * @param boolean $bestehendesportstaetten1111
	 * @return void
	 */
	public function setBestehendesportstaetten1111($bestehendesportstaetten1111) {
		$this->bestehendesportstaetten1111 = $bestehendesportstaetten1111;
	}
	
	/**
	 * Sets the bestehendesportstaetten1112
	 *
	 * @param boolean $bestehendesportstaetten1112
	 * @return void
	 */
	public function setBestehendesportstaetten1112($bestehendesportstaetten1112) {
		$this->bestehendesportstaetten1112 = $bestehendesportstaetten1112;
	}
	
	/**
	 * Sets the bestehendesportstaetten12
	 *
	 * @param integer $bestehendesportstaetten12
	 * @return void
	 */
	public function setBestehendesportstaetten12($bestehendesportstaetten12) {
		$this->bestehendesportstaetten12 = $bestehendesportstaetten12;
	}
	
	/**
	 * Sets the bestehendesportstaetten21
	 *
	 * @param integer $bestehendesportstaetten21
	 * @return void
	 */
	public function setBestehendesportstaetten21($bestehendesportstaetten21) {
		$this->bestehendesportstaetten21 = $bestehendesportstaetten21;
	}
	
	/**
	 * Sets the bestehendesportstaetten211
	 *
	 * @param integer $bestehendesportstaetten211
	 * @return void
	 */
	public function setBestehendesportstaetten211($bestehendesportstaetten211) {
		$this->bestehendesportstaetten211 = $bestehendesportstaetten211;
	}
	
	/**
	 * Sets the bestehendesportstaetten212
	 *
	 * @param integer $bestehendesportstaetten212
	 * @return void
	 */
	public function setBestehendesportstaetten212($bestehendesportstaetten212) {
		$this->bestehendesportstaetten212 = $bestehendesportstaetten212;
	}
	
	/**
	 * Sets the bestehendesportstaetten22
	 *
	 * @param integer $bestehendesportstaetten22
	 * @return void
	 */
	public function setBestehendesportstaetten22($bestehendesportstaetten22) {
		$this->bestehendesportstaetten22 = $bestehendesportstaetten22;
	}
	
	/**
	 * Sets the bestehendesportstaetten221
	 *
	 * @param integer $bestehendesportstaetten221
	 * @return void
	 */
	public function setBestehendesportstaetten221($bestehendesportstaetten221) {
		$this->bestehendesportstaetten221 = $bestehendesportstaetten221;
	}
	
	/**
	 * Sets the bestehendesportstaetten222
	 *
	 * @param integer $bestehendesportstaetten222
	 * @return void
	 */
	public function setBestehendesportstaetten222($bestehendesportstaetten222) {
		$this->bestehendesportstaetten222 = $bestehendesportstaetten222;
	}
	
	/**
	 * Sets the bestehendesportstaetten3
	 *
	 * @param integer $bestehendesportstaetten3
	 * @return void
	 */
	public function setBestehendesportstaetten3($bestehendesportstaetten3) {
		$this->bestehendesportstaetten3 = $bestehendesportstaetten3;
	}
	
	/**
	 * Sets the bestehendesportstaetten31
	 *
	 * @param integer $bestehendesportstaetten31
	 * @return void
	 */
	public function setBestehendesportstaetten31($bestehendesportstaetten31) {
		$this->bestehendesportstaetten31 = $bestehendesportstaetten31;
	}
	
	/**
	 * Sets the bestehendesportstaetten32
	 *
	 * @param integer $bestehendesportstaetten32
	 * @return void
	 */
	public function setBestehendesportstaetten32($bestehendesportstaetten32) {
		$this->bestehendesportstaetten32 = $bestehendesportstaetten32;
	}
	
	/**
	 * Sets the bestehendesportstaetten4
	 *
	 * @param integer $bestehendesportstaetten4
	 * @return void
	 */
	public function setBestehendesportstaetten4($bestehendesportstaetten4) {
		$this->bestehendesportstaetten4 = $bestehendesportstaetten4;
	}
	
	/**
	 * Sets the bestehendesportstaetten41
	 *
	 * @param integer $bestehendesportstaetten41
	 * @return void
	 */
	public function setBestehendesportstaetten41($bestehendesportstaetten41) {
		$this->bestehendesportstaetten41 = $bestehendesportstaetten41;
	}
	
	/**
	 * Sets the bestehendesportstaetten42
	 *
	 * @param integer $bestehendesportstaetten42
	 * @return void
	 */
	public function setBestehendesportstaetten42($bestehendesportstaetten42) {
		$this->bestehendesportstaetten42 = $bestehendesportstaetten42;
	}
	
	/**
	 * Sets the bestehendesportstaetten51
	 *
	 * @param integer $bestehendesportstaetten51
	 * @return void
	 */
	public function setBestehendesportstaetten51($bestehendesportstaetten51) {
		$this->bestehendesportstaetten51 = $bestehendesportstaetten51;
	}
	
	/**
	 * Sets the bestehendesportstaetten511
	 *
	 * @param integer $bestehendesportstaetten511
	 * @return void
	 */
	public function setBestehendesportstaetten511($bestehendesportstaetten511) {
		$this->bestehendesportstaetten511 = $bestehendesportstaetten511;
	}
	
	/**
	 * Sets the bestehendesportstaetten512
	 *
	 * @param integer $bestehendesportstaetten512
	 * @return void
	 */
	public function setBestehendesportstaetten512($bestehendesportstaetten512) {
		$this->bestehendesportstaetten512 = $bestehendesportstaetten512;
	}
	
	/**
	 * Sets the bestehendesportstaetten521
	 *
	 * @param integer $bestehendesportstaetten521
	 * @return void
	 */
	public function setBestehendesportstaetten521($bestehendesportstaetten521) {
		$this->bestehendesportstaetten521 = $bestehendesportstaetten521;
	}
	
	/**
	 * Sets the bestehendesportstaetten522
	 *
	 * @param integer $bestehendesportstaetten522
	 * @return void
	 */
	public function setBestehendesportstaetten522($bestehendesportstaetten522) {
		$this->bestehendesportstaetten522 = $bestehendesportstaetten522;
	}
	
	/**
	 * Sets the bestehendesportstaetten531
	 *
	 * @param integer $bestehendesportstaetten531
	 * @return void
	 */
	public function setBestehendesportstaetten531($bestehendesportstaetten531) {
		$this->bestehendesportstaetten531 = $bestehendesportstaetten531;
	}
	
	/**
	 * Sets the bestehendesportstaetten532
	 *
	 * @param integer $bestehendesportstaetten532
	 * @return void
	 */
	public function setBestehendesportstaetten532($bestehendesportstaetten532) {
		$this->bestehendesportstaetten532 = $bestehendesportstaetten532;
	}
	
	/**
	 * Sets the Finanzierung11
	 *
	 * @param integer $finanzierung11
	 * @return void
	 */
	public function setFinanzierung11($finanzierung11) {
		$this->finanzierung11 = $finanzierung11;
	}
	
	/**
	 * Sets the Finanzierung111
	 *
	 * @param integer $finanzierung111
	 * @return void
	 */
	public function setFinanzierung111($finanzierung111) {
		$this->finanzierung111 = $finanzierung111;
	}
	
	/**
	 * Sets the Finanzierung112
	 *
	 * @param integer $finanzierung112
	 * @return void
	 */
	public function setFinanzierung112($finanzierung112) {
		$this->finanzierung112 = $finanzierung112;
	}
	
	/**
	 * Sets the Finanzierung121
	 *
	 * @param integer $finanzierung121
	 * @return void
	 */
	public function setFinanzierung121($finanzierung121) {
		$this->finanzierung121 = $finanzierung121;
	}
	
	/**
	 * Sets the Finanzierung122
	 *
	 * @param integer $finanzierung122
	 * @return void
	 */
	public function setFinanzierung122($finanzierung122) {
		$this->finanzierung122 = $finanzierung122;
	}
	
	/**
	 * Sets the Finanzierung131
	 *
	 * @param integer $finanzierung131
	 * @return void
	 */
	public function setFinanzierung131($finanzierung131) {
		$this->finanzierung131 = $finanzierung131;
	}
	
	/**
	 * Sets the Finanzierung132
	 *
	 * @param integer $finanzierung132
	 * @return void
	 */
	public function setFinanzierung132($finanzierung132) {
		$this->finanzierung132 = $finanzierung132;
	}
	
	/**
	 * Sets the Finanzierung141
	 *
	 * @param integer $finanzierung141
	 * @return void
	 */
	public function setFinanzierung141($finanzierung141) {
		$this->finanzierung141 = $finanzierung141;
	}
	
	/**
	 * Sets the Finanzierung142
	 *
	 * @param integer $finanzierung142
	 * @return void
	 */
	public function setFinanzierung142($finanzierung142) {
		$this->finanzierung142 = $finanzierung142;
	}
	
	/**
	 * Sets the Finanzierung21
	 *
	 * @param integer $finanzierung21
	 * @return void
	 */
	public function setFinanzierung21($finanzierung21) {
		$this->finanzierung21 = $finanzierung21;
	}
	
	/**
	 * Sets the Finanzierung211
	 *
	 * @param integer $finanzierung211
	 * @return void
	 */
	public function setFinanzierung211($finanzierung211) {
		$this->finanzierung211 = $finanzierung211;
	}
	
	/**
	 * Sets the Finanzierung212
	 *
	 * @param integer $finanzierung212
	 * @return void
	 */
	public function setFinanzierung212($finanzierung212) {
		$this->finanzierung212 = $finanzierung212;
	}
	
	/**
	 * Sets the Finanzierung221
	 *
	 * @param integer $finanzierung221
	 * @return void
	 */
	public function setFinanzierung221($finanzierung221) {
		$this->finanzierung221 = $finanzierung221;
	}
	
	/**
	 * Sets the Finanzierung222
	 *
	 * @param integer $finanzierung222
	 * @return void
	 */
	public function setFinanzierung222($finanzierung222) {
		$this->finanzierung222 = $finanzierung222;
	}
	
	/**
	 * Sets the Finanzierung231
	 *
	 * @param integer $finanzierung231
	 * @return void
	 */
	public function setFinanzierung231($finanzierung231) {
		$this->finanzierung231 = $finanzierung231;
	}
	
	/**
	 * Sets the Finanzierung232
	 *
	 * @param integer $finanzierung232
	 * @return void
	 */
	public function setFinanzierung232($finanzierung232) {
		$this->finanzierung232 = $finanzierung232;
	}
	
	/**
	 * Sets the Finanzierung241
	 *
	 * @param integer $finanzierung241
	 * @return void
	 */
	public function setFinanzierung241($finanzierung241) {
		$this->finanzierung241 = $finanzierung241;
	}
	
	/**
	 * Sets the Finanzierung242
	 *
	 * @param integer $finanzierung242
	 * @return void
	 */
	public function setFinanzierung242($finanzierung242) {
		$this->finanzierung242 = $finanzierung242;
	}
	
	/**
	 * Sets the Finanzierung3
	 *
	 * @param integer $finanzierung3
	 * @return void
	 */
	public function setFinanzierung3($finanzierung3) {
		$this->finanzierung3 = $finanzierung3;
	}
	
	/**
	 * Sets the Finanzierung31
	 *
	 * @param integer $finanzierung31
	 * @return void
	 */
	public function setFinanzierung31($finanzierung31) {
		$this->finanzierung31 = $finanzierung31;
	}
	
	/**
	 * Sets the Finanzierung32
	 *
	 * @param integer $finanzierung32
	 * @return void
	 */
	public function setFinanzierung32($finanzierung32) {
		$this->finanzierung32 = $finanzierung32;
	}
	
	/**
	 * Sets the Finanzierung4
	 *
	 * @param integer $finanzierung4
	 * @return void
	 */
	public function setFinanzierung4($finanzierung4) {
		$this->finanzierung4 = $finanzierung4;
	}
	
	/**
	 * Sets the Finanzierung41
	 *
	 * @param integer $finanzierung41
	 * @return void
	 */
	public function setFinanzierung41($finanzierung41) {
		$this->finanzierung41 = $finanzierung41;
	}
	
	/**
	 * Sets the Finanzierung42
	 *
	 * @param integer $finanzierung42
	 * @return void
	 */
	public function setFinanzierung42($finanzierung42) {
		$this->finanzierung42 = $finanzierung42;
	}
	
	/**
	 * Sets the Finanzierung43
	 *
	 * @param integer $finanzierung43
	 * @return void
	 */
	public function setFinanzierung43($finanzierung43) {
		$this->finanzierung43 = $finanzierung43;
	}
	
	/**
	 * Sets the Finanzierung44
	 *
	 * @param integer $finanzierung44
	 * @return void
	 */
	public function setFinanzierung44($finanzierung44) {
		$this->finanzierung44 = $finanzierung44;
	}
	
	/**
	 * Sets the Finanzierung45
	 *
	 * @param integer $finanzierung45
	 * @return void
	 */
	public function setFinanzierung45($finanzierung45) {
		$this->finanzierung45 = $finanzierung45;
	}
	
	/**
	 * Sets the Sonstiges1
	 *
	 * @param integer $sonstiges1
	 * @return void
	 */
	public function setSonstiges1($sonstiges1) {
		$this->sonstiges1 = $sonstiges1;
	}
	
	/**
	 * Sets the Sonstiges11
	 *
	 * @param integer $sonstiges11
	 * @return void
	 */
	public function setSonstiges11($sonstiges11) {
		$this->sonstiges11 = $sonstiges11;
	}
	
	/**
	 * Sets the Sonstiges2
	 *
	 * @param integer $sonstiges2
	 * @return void
	 */
	public function setSonstiges2($sonstiges2) {
		$this->sonstiges2 = $sonstiges2;
	}
	
	/**
	 * Sets the Sonstiges21
	 *
	 * @param integer $sonstiges21
	 * @return void
	 */
	public function setSonstiges21($sonstiges21) {
		$this->sonstiges21 = $sonstiges21;
	}
	
	/**
	 * Sets the Sonstiges22
	 *
	 * @param integer $sonstiges22
	 * @return void
	 */
	public function setSonstiges22($sonstiges22) {
		$this->sonstiges22 = $sonstiges22;
	}
	
	/**
	 * Sets the Sportlicheentwicklung1
	 *
	 * @param integer $sportlicheentwicklung1
	 * @return void
	 */
	public function setSportlicheentwicklung1($sportlicheentwicklung1) {
		$this->sportlicheentwicklung1 = $sportlicheentwicklung1;
	}
	
	/**
	 * Sets the Sportlicheentwicklung11
	 *
	 * @param integer $sportlicheentwicklung11
	 * @return void
	 */
	public function setSportlicheentwicklung11($sportlicheentwicklung11) {
		$this->sportlicheentwicklung11 = $sportlicheentwicklung11;
	}
	
	/**
	 * Sets the Sportlicheentwicklung12
	 *
	 * @param integer $sportlicheentwicklung12
	 * @return void
	 */
	public function setSportlicheentwicklung12($sportlicheentwicklung12) {
		$this->sportlicheentwicklung12 = $sportlicheentwicklung12;
	}
	
	/**
	 * Sets the Sportlicheentwicklung13
	 *
	 * @param integer $sportlicheentwicklung13
	 * @return void
	 */
	public function setSportlicheentwicklung13($sportlicheentwicklung13) {
		$this->sportlicheentwicklung13 = $sportlicheentwicklung13;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2
	 *
	 * @param integer $sportlicheentwicklung2
	 * @return void
	 */
	public function setSportlicheentwicklung2($sportlicheentwicklung2) {
		$this->sportlicheentwicklung2 = $sportlicheentwicklung2;
	}
	
	/**
	 * Sets the Sportlicheentwicklung21
	 *
	 * @param integer $sportlicheentwicklung21
	 * @return void
	 */
	public function setSportlicheentwicklung21($sportlicheentwicklung21) {
		$this->sportlicheentwicklung21 = $sportlicheentwicklung21;
	}
	
	/**
	 * Sets the Sportlicheentwicklung211
	 *
	 * @param integer $sportlicheentwicklung211
	 * @return void
	 */
	public function setSportlicheentwicklung211($sportlicheentwicklung211) {
		$this->sportlicheentwicklung211 = $sportlicheentwicklung211;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2111
	 *
	 * @param integer $sportlicheentwicklung2111
	 * @return void
	 */
	public function setSportlicheentwicklung2111($sportlicheentwicklung2111) {
		$this->sportlicheentwicklung2111 = $sportlicheentwicklung2111;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2112
	 *
	 * @param integer $sportlicheentwicklung2112
	 * @return void
	 */
	public function setSportlicheentwicklung2112($sportlicheentwicklung2112) {
		$this->sportlicheentwicklung2112 = $sportlicheentwicklung2112;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2113
	 *
	 * @param integer $sportlicheentwicklung2113
	 * @return void
	 */
	public function setSportlicheentwicklung2113($sportlicheentwicklung2113) {
		$this->sportlicheentwicklung2113 = $sportlicheentwicklung2113;
	}
	
	/**
	 * Sets the Sportlicheentwicklung212
	 *
	 * @param integer $sportlicheentwicklung212
	 * @return void
	 */
	public function setSportlicheentwicklung212($sportlicheentwicklung212) {
		$this->sportlicheentwicklung212 = $sportlicheentwicklung212;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2121
	 *
	 * @param integer $sportlicheentwicklung2121
	 * @return void
	 */
	public function setSportlicheentwicklung2121($sportlicheentwicklung2121) {
		$this->sportlicheentwicklung2121 = $sportlicheentwicklung2121;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2122
	 *
	 * @param integer $sportlicheentwicklung2122
	 * @return void
	 */
	public function setSportlicheentwicklung2122($sportlicheentwicklung2122) {
		$this->sportlicheentwicklung2122 = $sportlicheentwicklung2122;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2123
	 *
	 * @param integer $sportlicheentwicklung2123
	 * @return void
	 */
	public function setSportlicheentwicklung2123($sportlicheentwicklung2123) {
		$this->sportlicheentwicklung2123 = $sportlicheentwicklung2123;
	}
	
	/**
	 * Sets the Sportlicheentwicklung213
	 *
	 * @param integer $sportlicheentwicklung213
	 * @return void
	 */
	public function setSportlicheentwicklung213($sportlicheentwicklung213) {
		$this->sportlicheentwicklung213 = $sportlicheentwicklung213;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2131
	 *
	 * @param integer $sportlicheentwicklung2131
	 * @return void
	 */
	public function setSportlicheentwicklung2131($sportlicheentwicklung2131) {
		$this->sportlicheentwicklung2131 = $sportlicheentwicklung2131;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2132
	 *
	 * @param integer $sportlicheentwicklung2132
	 * @return void
	 */
	public function setSportlicheentwicklung2132($sportlicheentwicklung2132) {
		$this->sportlicheentwicklung2132 = $sportlicheentwicklung2132;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2133
	 *
	 * @param integer $sportlicheentwicklung2133
	 * @return void
	 */
	public function setSportlicheentwicklung2133($sportlicheentwicklung2133) {
		$this->sportlicheentwicklung2133 = $sportlicheentwicklung2133;
	}
	
	/**
	 * Sets the Sportlicheentwicklung22
	 *
	 * @param integer $sportlicheentwicklung22
	 * @return void
	 */
	public function setSportlicheentwicklung22($sportlicheentwicklung22) {
		$this->sportlicheentwicklung22 = $sportlicheentwicklung22;
	}
	
	/**
	 * Sets the Sportlicheentwicklung221
	 *
	 * @param integer $sportlicheentwicklung221
	 * @return void
	 */
	public function setSportlicheentwicklung221($sportlicheentwicklung221) {
		$this->sportlicheentwicklung221 = $sportlicheentwicklung221;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2211
	 *
	 * @param integer $sportlicheentwicklung2211
	 * @return void
	 */
	public function setSportlicheentwicklung2211($sportlicheentwicklung2211) {
		$this->sportlicheentwicklung2211 = $sportlicheentwicklung2211;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2212
	 *
	 * @param integer $sportlicheentwicklung2212
	 * @return void
	 */
	public function setSportlicheentwicklung2212($sportlicheentwicklung2212) {
		$this->sportlicheentwicklung2212 = $sportlicheentwicklung2212;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2213
	 *
	 * @param integer $sportlicheentwicklung2213
	 * @return void
	 */
	public function setSportlicheentwicklung2213($sportlicheentwicklung2213) {
		$this->sportlicheentwicklung2213 = $sportlicheentwicklung2213;
	}
	
	/**
	 * Sets the Sportlicheentwicklung222
	 *
	 * @param integer $sportlicheentwicklung222
	 * @return void
	 */
	public function setSportlicheentwicklung222($sportlicheentwicklung222) {
		$this->sportlicheentwicklung222 = $sportlicheentwicklung222;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2221
	 *
	 * @param integer $sportlicheentwicklung2221
	 * @return void
	 */
	public function setSportlicheentwicklung2221($sportlicheentwicklung2221) {
		$this->sportlicheentwicklung2221 = $sportlicheentwicklung2221;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2222
	 *
	 * @param integer $sportlicheentwicklung2222
	 * @return void
	 */
	public function setSportlicheentwicklung2222($sportlicheentwicklung2222) {
		$this->sportlicheentwicklung2222 = $sportlicheentwicklung2222;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2223
	 *
	 * @param integer $sportlicheentwicklung2223
	 * @return void
	 */
	public function setSportlicheentwicklung2223($sportlicheentwicklung2223) {
		$this->sportlicheentwicklung2223 = $sportlicheentwicklung2223;
	}
	
	/**
	 * Sets the Sportlicheentwicklung223
	 *
	 * @param integer $sportlicheentwicklung223
	 * @return void
	 */
	public function setSportlicheentwicklung223($sportlicheentwicklung223) {
		$this->sportlicheentwicklung223 = $sportlicheentwicklung223;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2231
	 *
	 * @param integer $sportlicheentwicklung2231
	 * @return void
	 */
	public function setSportlicheentwicklung2231($sportlicheentwicklung2231) {
		$this->sportlicheentwicklung2231 = $sportlicheentwicklung2231;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2232
	 *
	 * @param integer $sportlicheentwicklung2232
	 * @return void
	 */
	public function setSportlicheentwicklung2232($sportlicheentwicklung2232) {
		$this->sportlicheentwicklung2232 = $sportlicheentwicklung2232;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2233
	 *
	 * @param integer $sportlicheentwicklung2233
	 * @return void
	 */
	public function setSportlicheentwicklung2233($sportlicheentwicklung2233) {
		$this->sportlicheentwicklung2233 = $sportlicheentwicklung2233;
	}
	
	/**
	 * Sets the Sportlicheentwicklung23
	 *
	 * @param integer $sportlicheentwicklung23
	 * @return void
	 */
	public function setSportlicheentwicklung23($sportlicheentwicklung23) {
		$this->sportlicheentwicklung23 = $sportlicheentwicklung23;
	}
	
	/**
	 * Sets the Sportlicheentwicklung231
	 *
	 * @param integer $sportlicheentwicklung231
	 * @return void
	 */
	public function setSportlicheentwicklung231($sportlicheentwicklung231) {
		$this->sportlicheentwicklung231 = $sportlicheentwicklung231;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2311
	 *
	 * @param integer $sportlicheentwicklung2311
	 * @return void
	 */
	public function setSportlicheentwicklung2311($sportlicheentwicklung2311) {
		$this->sportlicheentwicklung2311 = $sportlicheentwicklung2311;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2312
	 *
	 * @param integer $sportlicheentwicklung2312
	 * @return void
	 */
	public function setSportlicheentwicklung2312($sportlicheentwicklung2312) {
		$this->sportlicheentwicklung2312 = $sportlicheentwicklung2312;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2313
	 *
	 * @param integer $sportlicheentwicklung2313
	 * @return void
	 */
	public function setSportlicheentwicklung2313($sportlicheentwicklung2313) {
		$this->sportlicheentwicklung2313 = $sportlicheentwicklung2313;
	}
	
	/**
	 * Sets the Sportlicheentwicklung232
	 *
	 * @param integer $sportlicheentwicklung232
	 * @return void
	 */
	public function setSportlicheentwicklung232($sportlicheentwicklung232) {
		$this->sportlicheentwicklung232 = $sportlicheentwicklung232;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2321
	 *
	 * @param integer $sportlicheentwicklung2321
	 * @return void
	 */
	public function setSportlicheentwicklung2321($sportlicheentwicklung2321) {
		$this->sportlicheentwicklung2321 = $sportlicheentwicklung2321;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2322
	 *
	 * @param integer $sportlicheentwicklung2322
	 * @return void
	 */
	public function setSportlicheentwicklung2322($sportlicheentwicklung2322) {
		$this->sportlicheentwicklung2322 = $sportlicheentwicklung2322;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2323
	 *
	 * @param integer $sportlicheentwicklung2323
	 * @return void
	 */
	public function setSportlicheentwicklung2323($sportlicheentwicklung2323) {
		$this->sportlicheentwicklung2323 = $sportlicheentwicklung2323;
	}
	
	/**
	 * Sets the Sportlicheentwicklung233
	 *
	 * @param integer $sportlicheentwicklung233
	 * @return void
	 */
	public function setSportlicheentwicklung233($sportlicheentwicklung233) {
		$this->sportlicheentwicklung233 = $sportlicheentwicklung233;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2331
	 *
	 * @param integer $sportlicheentwicklung2331
	 * @return void
	 */
	public function setSportlicheentwicklung2331($sportlicheentwicklung2331) {
		$this->sportlicheentwicklung2331 = $sportlicheentwicklung2331;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2332
	 *
	 * @param integer $sportlicheentwicklung2332
	 * @return void
	 */
	public function setSportlicheentwicklung2332($sportlicheentwicklung2332) {
		$this->sportlicheentwicklung2332 = $sportlicheentwicklung2332;
	}
	
	/**
	 * Sets the Sportlicheentwicklung2333
	 *
	 * @param integer $sportlicheentwicklung2333
	 * @return void
	 */
	public function setSportlicheentwicklung2333($sportlicheentwicklung2333) {
		$this->sportlicheentwicklung2333 = $sportlicheentwicklung2333;
	}
	
	/**
	 * Sets the Sportlicheentwicklung3
	 *
	 * @param integer $sportlicheentwicklung3
	 * @return void
	 */
	public function setSportlicheentwicklung3($sportlicheentwicklung3) {
		$this->sportlicheentwicklung3 = $sportlicheentwicklung3;
	}
	
	/**
	 * Sets the Sportlicheentwicklung311
	 *
	 * @param integer $sportlicheentwicklung311
	 * @return void
	 */
	public function setSportlicheentwicklung311($sportlicheentwicklung311) {
		$this->sportlicheentwicklung311 = $sportlicheentwicklung311;
	}
	
	/**
	 * Sets the Sportlicheentwicklung312
	 *
	 * @param integer $sportlicheentwicklung312
	 * @return void
	 */
	public function setSportlicheentwicklung312($sportlicheentwicklung312) {
		$this->sportlicheentwicklung312 = $sportlicheentwicklung312;
	}
	
	/**
	 * Sets the Sportlicheentwicklung321
	 *
	 * @param integer $sportlicheentwicklung321
	 * @return void
	 */
	public function setSportlicheentwicklung321($sportlicheentwicklung321) {
		$this->sportlicheentwicklung321 = $sportlicheentwicklung321;
	}
	
	/**
	 * Sets the Sportlicheentwicklung322
	 *
	 * @param integer $sportlicheentwicklung322
	 * @return void
	 */
	public function setSportlicheentwicklung322($sportlicheentwicklung322) {
		$this->sportlicheentwicklung322 = $sportlicheentwicklung322;
	}
	
	/**
	 * Sets the Sportlicheentwicklung331
	 *
	 * @param integer $sportlicheentwicklung331
	 * @return void
	 */
	public function setSportlicheentwicklung331($sportlicheentwicklung331) {
		$this->sportlicheentwicklung331 = $sportlicheentwicklung331;
	}
	
	/**
	 * Sets the Sportlicheentwicklung332
	 *
	 * @param integer $sportlicheentwicklung332
	 * @return void
	 */
	public function setSportlicheentwicklung332($sportlicheentwicklung332) {
		$this->sportlicheentwicklung332 = $sportlicheentwicklung332;
	}
	
	/**
	 * Sets the Sportlicheentwicklung4
	 *
	 * @param integer $sportlicheentwicklung4
	 * @return void
	 */
	public function setSportlicheentwicklung4($sportlicheentwicklung4) {
		$this->sportlicheentwicklung4 = $sportlicheentwicklung4;
	}
	
	/**
	 * Sets the Sportlicheentwicklung41
	 *
	 * @param integer $sportlicheentwicklung41
	 * @return void
	 */
	public function setSportlicheentwicklung41($sportlicheentwicklung41) {
		$this->sportlicheentwicklung41 = $sportlicheentwicklung41;
	}
	
	/**
	 * Sets the Sportlicheentwicklung411
	 *
	 * @param integer $sportlicheentwicklung411
	 * @return void
	 */
	public function setSportlicheentwicklung411($sportlicheentwicklung411) {
		$this->sportlicheentwicklung411 = $sportlicheentwicklung411;
	}
	
	/**
	 * Sets the Sportlicheentwicklung412
	 *
	 * @param integer $sportlicheentwicklung412
	 * @return void
	 */
	public function setSportlicheentwicklung412($sportlicheentwicklung412) {
		$this->sportlicheentwicklung412 = $sportlicheentwicklung412;
	}
	
	/**
	 * Sets the Sportlicheentwicklung413
	 *
	 * @param integer $sportlicheentwicklung413
	 * @return void
	 */
	public function setSportlicheentwicklung413($sportlicheentwicklung413) {
		$this->sportlicheentwicklung413 = $sportlicheentwicklung413;
	}
	
	/**
	 * Sets the Sportlicheentwicklung414
	 *
	 * @param integer $sportlicheentwicklung414
	 * @return void
	 */
	public function setSportlicheentwicklung414($sportlicheentwicklung414) {
		$this->sportlicheentwicklung414 = $sportlicheentwicklung414;
	}
	
	/**
	 * Sets the Sportlicheentwicklung415
	 *
	 * @param integer $sportlicheentwicklung415
	 * @return void
	 */
	public function setSportlicheentwicklung415($sportlicheentwicklung415) {
		$this->sportlicheentwicklung415 = $sportlicheentwicklung415;
	}
	
	/**
	 * Sets the Sportlicheentwicklung42
	 *
	 * @param integer $sportlicheentwicklung42
	 * @return void
	 */
	public function setSportlicheentwicklung42($sportlicheentwicklung42) {
		$this->sportlicheentwicklung42 = $sportlicheentwicklung42;
	}
	
	/**
	 * Sets the Sportlicheentwicklung421
	 *
	 * @param integer $sportlicheentwicklung421
	 * @return void
	 */
	public function setSportlicheentwicklung421($sportlicheentwicklung421) {
		$this->sportlicheentwicklung421 = $sportlicheentwicklung421;
	}
	
	/**
	 * Sets the Sportlicheentwicklung422
	 *
	 * @param integer $sportlicheentwicklung422
	 * @return void
	 */
	public function setSportlicheentwicklung422($sportlicheentwicklung422) {
		$this->sportlicheentwicklung422 = $sportlicheentwicklung422;
	}
	
	/**
	 * Sets the Sportlicheentwicklung423
	 *
	 * @param integer $sportlicheentwicklung423
	 * @return void
	 */
	public function setSportlicheentwicklung423($sportlicheentwicklung423) {
		$this->sportlicheentwicklung423 = $sportlicheentwicklung423;
	}
	
	/**
	 * Sets the Sportlicheentwicklung424
	 *
	 * @param integer $sportlicheentwicklung424
	 * @return void
	 */
	public function setSportlicheentwicklung424($sportlicheentwicklung424) {
		$this->sportlicheentwicklung424 = $sportlicheentwicklung424;
	}
	
	/**
	 * Sets the Sportlicheentwicklung425
	 *
	 * @param integer $sportlicheentwicklung425
	 * @return void
	 */
	public function setSportlicheentwicklung425($sportlicheentwicklung425) {
		$this->sportlicheentwicklung425 = $sportlicheentwicklung425;
	}
	
	/**
	 * Sets the Sportlicheentwicklung43
	 *
	 * @param integer $sportlicheentwicklung43
	 * @return void
	 */
	public function setSportlicheentwicklung43($sportlicheentwicklung43) {
		$this->sportlicheentwicklung43 = $sportlicheentwicklung43;
	}
	
	/**
	 * Sets the Sportlicheentwicklung431
	 *
	 * @param integer $sportlicheentwicklung431
	 * @return void
	 */
	public function setSportlicheentwicklung431($sportlicheentwicklung431) {
		$this->sportlicheentwicklung431 = $sportlicheentwicklung431;
	}
	
	/**
	 * Sets the Sportlicheentwicklung432
	 *
	 * @param integer $sportlicheentwicklung432
	 * @return void
	 */
	public function setSportlicheentwicklung432($sportlicheentwicklung432) {
		$this->sportlicheentwicklung432 = $sportlicheentwicklung432;
	}
	
	/**
	 * Sets the Sportlicheentwicklung433
	 *
	 * @param integer $sportlicheentwicklung433
	 * @return void
	 */
	public function setSportlicheentwicklung433($sportlicheentwicklung433) {
		$this->sportlicheentwicklung433 = $sportlicheentwicklung433;
	}
	
	/**
	 * Sets the Sportlicheentwicklung434
	 *
	 * @param integer $sportlicheentwicklung434
	 * @return void
	 */
	public function setSportlicheentwicklung434($sportlicheentwicklung434) {
		$this->sportlicheentwicklung434 = $sportlicheentwicklung434;
	}
	
	/**
	 * Sets the Sportlicheentwicklung435
	 *
	 * @param integer $sportlicheentwicklung435
	 * @return void
	 */
	public function setSportlicheentwicklung435($sportlicheentwicklung435) {
		$this->sportlicheentwicklung435 = $sportlicheentwicklung435;
	}
	
	/**
	 * Sets the Stellungnahme11
	 *
	 * @param integer $stellungnahme11
	 * @return void
	 */
	public function setStellungnahme11($stellungnahme11) {
		$this->stellungnahme11 = $stellungnahme11;
	}
	
	/**
	 * Sets the Stellungnahme111
	 *
	 * @param integer $stellungnahme111
	 * @return void
	 */
	public function setStellungnahme111($stellungnahme111) {
		$this->stellungnahme111 = $stellungnahme111;
	}
	
	/**
	 * Sets the Stellungnahme112
	 *
	 * @param integer $stellungnahme112
	 * @return void
	 */
	public function setStellungnahme112($stellungnahme112) {
		$this->stellungnahme112 = $stellungnahme112;
	}
	
	/**
	 * Sets the Stellungnahme121
	 *
	 * @param integer $stellungnahme121
	 * @return void
	 */
	public function setStellungnahme121($stellungnahme121) {
		$this->stellungnahme121 = $stellungnahme121;
	}
	
	/**
	 * Sets the Stellungnahme122
	 *
	 * @param integer $stellungnahme122
	 * @return void
	 */
	public function setStellungnahme122($stellungnahme122) {
		$this->stellungnahme122 = $stellungnahme122;
	}
	
	/**
	 * Sets the Stellungnahme131
	 *
	 * @param integer $stellungnahme131
	 * @return void
	 */
	public function setStellungnahme131($stellungnahme131) {
		$this->stellungnahme131 = $stellungnahme131;
	}
	
	/**
	 * Sets the Stellungnahme132
	 *
	 * @param integer $stellungnahme132
	 * @return void
	 */
	public function setStellungnahme132($stellungnahme132) {
		$this->stellungnahme132 = $stellungnahme132;
	}
	
	/**
	 * Sets the Stellungnahme2
	 *
	 * @param integer $stellungnahme2
	 * @return void
	 */
	public function setStellungnahme2($stellungnahme2) {
		$this->stellungnahme2 = $stellungnahme2;
	}
	
	/**
	 * Sets the Stellungnahme21
	 *
	 * @param integer $stellungnahme21
	 * @return void
	 */
	public function setStellungnahme21($stellungnahme21) {
		$this->stellungnahme21 = $stellungnahme21;
	}
	
	/**
	 * Sets the Stellungnahme22
	 *
	 * @param integer $stellungnahme22
	 * @return void
	 */
	public function setStellungnahme22($stellungnahme22) {
		$this->stellungnahme22 = $stellungnahme22;
	}
	
	/**
	 * Sets the Stellungnahme22_0
	 *
	 * @param integer $stellungnahme22_0
	 * @return void
	 */
	public function setStellungnahme22_0($stellungnahme22_0) {
		$this->stellungnahme22_0 = $stellungnahme22_0;
	}
	
	/**
	 * Sets the Stellungnahme221
	 *
	 * @param integer $stellungnahme221
	 * @return void
	 */
	public function setStellungnahme221($stellungnahme221) {
		$this->stellungnahme221 = $stellungnahme221;
	}
	
	/**
	 * Sets the Stellungnahme222
	 *
	 * @param integer $stellungnahme222
	 * @return void
	 */
	public function setStellungnahme222($stellungnahme222) {
		$this->stellungnahme222 = $stellungnahme222;
	}
	
	/**
	 * Sets the Stellungnahme223
	 *
	 * @param integer $stellungnahme223
	 * @return void
	 */
	public function setStellungnahme223($stellungnahme223) {
		$this->stellungnahme223 = $stellungnahme223;
	}
	
	/**
	 * Sets the Stellungnahme224
	 *
	 * @param integer $stellungnahme224
	 * @return void
	 */
	public function setStellungnahme224($stellungnahme224) {
		$this->stellungnahme224 = $stellungnahme224;
	}
	
	/**
	 * Sets the Stellungnahme3
	 *
	 * @param integer $stellungnahme3
	 * @return void
	 */
	public function setStellungnahme3($stellungnahme3) {
		$this->stellungnahme3 = $stellungnahme3;
	}
	
	/**
	 * Sets the Stellungnahme31
	 *
	 * @param integer $stellungnahme31
	 * @return void
	 */
	public function setStellungnahme31($stellungnahme31) {
		$this->stellungnahme31 = $stellungnahme31;
	}
	
	/**
	 * Sets the Stellungnahme32
	 *
	 * @param integer $stellungnahme32
	 * @return void
	 */
	public function setStellungnahme32($stellungnahme32) {
		$this->stellungnahme32 = $stellungnahme32;
	}
	
	/**
	 * Sets the Stellungnahme31_0
	 *
	 * @param integer $stellungnahme31_0
	 * @return void
	 */
	public function setStellungnahme31_0($stellungnahme31_0) {
		$this->stellungnahme31_0 = $stellungnahme31_0;
	}
	
	/**
	 * Sets the Stellungnahme311
	 *
	 * @param integer $stellungnahme311
	 * @return void
	 */
	public function setStellungnahme311($stellungnahme311) {
		$this->stellungnahme311 = $stellungnahme311;
	}
	
	/**
	 * Sets the Stellungnahme312
	 *
	 * @param integer $stellungnahme312
	 * @return void
	 */
	public function setStellungnahme312($stellungnahme312) {
		$this->stellungnahme312 = $stellungnahme312;
	}
	
	/**
	 * Sets the Stellungnahme313
	 *
	 * @param integer $stellungnahme313
	 * @return void
	 */
	public function setStellungnahme313($stellungnahme313) {
		$this->stellungnahme313 = $stellungnahme313;
	}
	
	/**
	 * Sets the Stellungnahme4
	 *
	 * @param integer $stellungnahme4
	 * @return void
	 */
	public function setStellungnahme4($stellungnahme4) {
		$this->stellungnahme4 = $stellungnahme4;
	}
	
	/**
	 * Sets the Stellungnahme41
	 *
	 * @param integer $stellungnahme41
	 * @return void
	 */
	public function setStellungnahme41($stellungnahme41) {
		$this->stellungnahme41 = $stellungnahme41;
	}
	
	/**
	 * Sets the Stellungnahme5
	 *
	 * @param integer $stellungnahme5
	 * @return void
	 */
	public function setStellungnahme5($stellungnahme5) {
		$this->stellungnahme5 = $stellungnahme5;
	}
	
	/**
	 * Sets the Stellungnahme51
	 *
	 * @param integer $stellungnahme51
	 * @return void
	 */
	public function setStellungnahme51($stellungnahme51) {
		$this->stellungnahme51 = $stellungnahme51;
	}
	
	/**
	 * Sets the Stellungnahme52
	 *
	 * @param integer $stellungnahme52
	 * @return void
	 */
	public function setStellungnahme52($stellungnahme52) {
		$this->stellungnahme52 = $stellungnahme52;
	}
	
	/**
	 * Sets the Stellungnahme52_0
	 *
	 * @param integer $stellungnahme52_0
	 * @return void
	 */
	public function setStellungnahme52_0($stellungnahme52_0) {
		$this->stellungnahme52_0 = $stellungnahme52_0;
	}
	
	/**
	 * Sets the Stellungnahme521
	 *
	 * @param integer $stellungnahme521
	 * @return void
	 */
	public function setStellungnahme521($stellungnahme521) {
		$this->stellungnahme521 = $stellungnahme521;
	}
	
	/**
	 * Sets the Stellungnahme522
	 *
	 * @param integer $stellungnahme522
	 * @return void
	 */
	public function setStellungnahme522($stellungnahme522) {
		$this->stellungnahme522 = $stellungnahme522;
	}
	
	/**
	 * Sets the Stellungnahme523
	 *
	 * @param integer $stellungnahme523
	 * @return void
	 */
	public function setStellungnahme523($stellungnahme523) {
		$this->stellungnahme523 = $stellungnahme523;
	}
	
	/**
	 * Sets the Stellungnahme6
	 *
	 * @param integer $stellungnahme6
	 * @return void
	 */
	public function setStellungnahme6($stellungnahme6) {
		$this->stellungnahme6 = $stellungnahme6;
	}
	
	/**
	 * Sets the Stellungnahme61
	 *
	 * @param integer $stellungnahme61
	 * @return void
	 */
	public function setStellungnahme61($stellungnahme61) {
		$this->stellungnahme61 = $stellungnahme61;
	}
	
	/**
	 * Sets the Stellungnahme62
	 *
	 * @param integer $stellungnahme62
	 * @return void
	 */
	public function setStellungnahme62($stellungnahme62) {
		$this->stellungnahme62 = $stellungnahme62;
	}
	
	/**
	 * Sets the Stellungnahme61_0
	 *
	 * @param integer $stellungnahme61_0
	 * @return void
	 */
	public function setStellungnahme61_0($stellungnahme61_0) {
		$this->stellungnahme61_0 = $stellungnahme61_0;
	}
	
	/**
	 * Sets the Stellungnahme611
	 *
	 * @param integer $stellungnahme611
	 * @return void
	 */
	public function setStellungnahme611($stellungnahme611) {
		$this->stellungnahme611 = $stellungnahme611;
	}
	
	/**
	 * Sets the Stellungnahme612
	 *
	 * @param integer $stellungnahme612
	 * @return void
	 */
	public function setStellungnahme612($stellungnahme612) {
		$this->stellungnahme612 = $stellungnahme612;
	}
	
	/**
	 * Sets the Stellungnahme613
	 *
	 * @param integer $stellungnahme613
	 * @return void
	 */
	public function setStellungnahme613($stellungnahme613) {
		$this->stellungnahme613 = $stellungnahme613;
	}
	
	/**
	 * Sets the Stellungnahme614
	 *
	 * @param integer $stellungnahme614
	 * @return void
	 */
	public function setStellungnahme614($stellungnahme614) {
		$this->stellungnahme614 = $stellungnahme614;
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
	 * Returns the fall
	 *
	 * @return integer $fall
	 */
	public function getFall() {
		return $this->fall;
	}
	
	/**
	 * Sets the fall
	 *
	 * @param integer $fall
	 * @return void
	 */
	public function setFall($fall) {
		$this->fall = $fall;
	}

	/**
	 * Returns the hinweistext1
	 *
	 * @return integer $hinweistext1
	 */
	public function getHinweistext1() {
		return $this->hinweistext1;
	}
	
	/**
	 * Sets the hinweistext1
	 *
	 * @param integer $hinweistext1
	 * @return void
	 */
	public function setHinweistext1($hinweistext1) {
		$this->hinweistext1 = $hinweistext1;
	}
	

	/**
	 * Returns the hinweistext2
	 *
	 * @return integer $hinweistext2
	 */
	public function getHinweistext2() {
		return $this->hinweistext2;
	}
	
	/**
	 * Sets the hinweistext2
	 *
	 * @param integer $hinweistext2
	 * @return void
	 */
	public function setHinweistext2($hinweistext2) {
		$this->hinweistext2 = $hinweistext2;
	}

	/**
	 * Returns the hinweistext3
	 *
	 * @return integer $hinweistext3
	 */
	public function getHinweistext3() {
		return $this->hinweistext3;
	}
	
	/**
	 * Sets the hinweistext3
	 *
	 * @param integer $hinweistext3
	 * @return void
	 */
	public function setHinweistext3($hinweistext3) {
		$this->hinweistext3 = $hinweistext3;
	} 

	/**
	 * Returns the hinweistext4
	 *
	 * @return integer $hinweistext4
	 */
	public function getHinweistext4() {
		return $this->hinweistext4;
	}
	
	/**
	 * Sets the hinweistext4
	 *
	 * @param integer $hinweistext4
	 * @return void
	 */
	public function setHinweistext4($hinweistext4) {
		$this->hinweistext4 = $hinweistext4;
	}
	
/**
	 * Returns the kommunebank
	 *
	 * @return boolean $kommunebank
	 */
	public function getkommunebank() {
		return $this->kommunebank;
	}

	/**
	 * Sets the kommunebank
	 *
	 * @param boolean $kommunebank
	 * @return void
	 */
	public function setkommunebank($kommunebank) {
		$this->kommunebank = $kommunebank;
	}


/**
	 * Returns the kommuneprivat
	 *
	 * @return boolean $kommuneprivat
	 */
	public function getkommuneprivat() {
		return $this->kommuneprivat;
	}

	/**
	 * Sets the kommuneprivat
	 *
	 * @param boolean $kommuneprivat
	 * @return void
	 */
	public function setkommuneprivat($kommuneprivat) {
		$this->kommuneprivat = $kommuneprivat;
	}


/**
	 * Returns the landkreisbank
	 *
	 * @return integer $landkreisbank
	 */
	public function getlandkreisbank() {
		return $this->landkreisbank;
	}

	/**
	 * Sets the landkreisbank
	 *
	 * @param integer $landkreisbank
	 * @return void
	 */
	public function setlandkreisbank($landkreisbank) {
		$this->landkreisbank = $landkreisbank;
	}


/**
	 * Returns the landkreiskommune
	 *
	 * @return integer $landkreiskommune
	 */
	public function getlandkreiskommune() {
		return $this->landkreiskommune;
	}

	/**
	 * Sets the landkreiskommune
	 *
	 * @param integer $landkreiskommune
	 * @return void
	 */
	public function setlandkreiskommune($landkreiskommune) {
		$this->landkreiskommune = $landkreiskommune;
	}


/**
	 * Returns the landkreisprivat
	 *
	 * @return integer $landkreisprivat
	 */
	public function getlandkreisprivat() {
		return $this->landkreisprivat;
	}

	/**
	 * Sets the landkreisprivat
	 *
	 * @param integer $landkreisprivat
	 * @return void
	 */
	public function setlandkreisprivat($landkreisprivat) {
		$this->landkreisprivat = $landkreisprivat;
	}


/**
	 * Returns the sonstigebank
	 *
	 * @return integer $sonstigebank
	 */
	public function getsonstigebank() {
		return $this->sonstigebank;
	}

	/**
	 * Sets the sonstigebank
	 *
	 * @param integer $sonstigebank
	 * @return void
	 */
	public function setsonstigebank($sonstigebank) {
		$this->sonstigebank = $sonstigebank;
	}


/**
	 * Returns the sonstigekommune
	 *
	 * @return integer $sonstigekommune
	 */
	public function getsonstigekommune() {
		return $this->sonstigekommune;
	}

	/**
	 * Sets the sonstigekommune
	 *
	 * @param integer $sonstigekommune
	 * @return void
	 */
	public function setsonstigekommune($sonstigekommune) {
		$this->sonstigekommune = $sonstigekommune;
	}


/**
	 * Returns the sonstigeprivat
	 *
	 * @return integer $sonstigeprivat
	 */
	public function getsonstigeprivat() {
		return $this->sonstigeprivat;
	}

	/**
	 * Sets the sonstigeprivat
	 *
	 * @param integer $sonstigeprivat
	 * @return void
	 */
	public function setsonstigeprivat($sonstigeprivat) {
		$this->sonstigeprivat = $sonstigeprivat;
	}


/**
	 * Returns the vorsteuererstbank
	 *
	 * @return integer $vorsteuererstbank
	 */
	public function getvorsteuererstbank() {
		return $this->vorsteuererstbank;
	}

	/**
	 * Sets the vorsteuererstbank
	 *
	 * @param integer $vorsteuererstbank
	 * @return void
	 */
	public function setvorsteuererstbank($vorsteuererstbank) {
		$this->vorsteuererstbank = $vorsteuererstbank;
	}


/**
	 * Returns the vorsteuererstkommune
	 *
	 * @return integer $vorsteuererstkommune
	 */
	public function getvorsteuererstkommune() {
		return $this->vorsteuererstkommune;
	}

	/**
	 * Sets the vorsteuererstkommune
	 *
	 * @param integer $vorsteuererstkommune
	 * @return void
	 */
	public function setvorsteuererstkommune($vorsteuererstkommune) {
		$this->vorsteuererstkommune = $vorsteuererstkommune;
	}


/**
	 * Returns the vorsteuererstprivat
	 *
	 * @return integer $vorsteuererstprivat
	 */
	public function getvorsteuererstprivat() {
		return $this->vorsteuererstprivat;
	}

	/**
	 * Sets the vorsteuererstprivat
	 *
	 * @param integer $vorsteuererstprivat
	 * @return void
	 */
	public function setvorsteuererstprivat($vorsteuererstprivat) {
		$this->vorsteuererstprivat = $vorsteuererstprivat;
	}


/**
	 * Returns the smfoerderungbank
	 *
	 * @return integer $smfoerderungbank
	 */
	public function getsmfoerderungbank() {
		return $this->smfoerderungbank;
	}

	/**
	 * Sets the smfoerderungbank
	 *
	 * @param integer $smfoerderungbank
	 * @return void
	 */
	public function setsmfoerderungbank($smfoerderungbank) {
		$this->smfoerderungbank = $smfoerderungbank;
	}


/**
	 * Returns the smfoerderungkommune
	 *
	 * @return integer $smfoerderungkommune
	 */
	public function getsmfoerderungkommune() {
		return $this->smfoerderungkommune;
	}

	/**
	 * Sets the smfoerderungkommune
	 *
	 * @param integer $smfoerderungkommune
	 * @return void
	 */
	public function setsmfoerderungkommune($smfoerderungkommune) {
		$this->smfoerderungkommune = $smfoerderungkommune;
	}


/**
	 * Returns the smfoerderungprivat
	 *
	 * @return integer $smfoerderungprivat
	 */
	public function getsmfoerderungprivat() {
		return $this->smfoerderungprivat;
	}

	/**
	 * Sets the smfoerderungprivat
	 *
	 * @param integer $smfoerderungprivat
	 * @return void
	 */
	public function setsmfoerderungprivat($smfoerderungprivat) {
		$this->smfoerderungprivat = $smfoerderungprivat;
	}


/**
	 * Returns the kommunebetragbank
	 *
	 * @return integer $kommunebetragbank
	 */
	public function getkommunebetragbank() {
		return $this->kommunebetragbank;
	}

	/**
	 * Sets the kommunebetragbank
	 *
	 * @param integer $kommunebetragbank
	 * @return void
	 */
	public function setkommunebetragbank($kommunebetragbank) {
		$this->kommunebetragbank = $kommunebetragbank;
	}


/**
	 * Returns the kommunebetragprivat
	 *
	 * @return integer $kommunebetragprivat
	 */
	public function getkommunebetragprivat() {
		return $this->kommunebetragprivat;
	}

	/**
	 * Sets the kommunebetragprivat
	 *
	 * @param integer $kommunebetragprivat
	 * @return void
	 */
	public function setkommunebetragprivat($kommunebetragprivat) {
		$this->kommunebetragprivat = $kommunebetragprivat;
	}


/**
	 * Returns the landkreisbetragbank
	 *
	 * @return integer $landkreisbetragbank
	 */
	public function getlandkreisbetragbank() {
		return $this->landkreisbetragbank;
	}

	/**
	 * Sets the landkreisbetragbank
	 *
	 * @param integer $landkreisbetragbank
	 * @return void
	 */
	public function setlandkreisbetragbank($landkreisbetragbank) {
		$this->landkreisbetragbank = $landkreisbetragbank;
	}


/**
	 * Returns the landkreisbetragkommune
	 *
	 * @return integer $landkreisbetragkommune
	 */
	public function getlandkreisbetragkommune() {
		return $this->landkreisbetragkommune;
	}

	/**
	 * Sets the landkreisbetragkommune
	 *
	 * @param integer $landkreisbetragkommune
	 * @return void
	 */
	public function setlandkreisbetragkommune($landkreisbetragkommune) {
		$this->landkreisbetragkommune = $landkreisbetragkommune;
	}


/**
	 * Returns the landkreisbetragprivat
	 *
	 * @return integer $landkreisbetragprivat
	 */
	public function getlandkreisbetragprivat() {
		return $this->landkreisbetragprivat;
	}

	/**
	 * Sets the landkreisbetragprivat
	 *
	 * @param integer $landkreisbetragprivat
	 * @return void
	 */
	public function setlandkreisbetragprivat($landkreisbetragprivat) {
		$this->landkreisbetragprivat = $landkreisbetragprivat;
	}


/**
	 * Returns the sonstigebetragbank
	 *
	 * @return integer $sonstigebetragbank
	 */
	public function getsonstigebetragbank() {
		return $this->sonstigebetragbank;
	}

	/**
	 * Sets the sonstigebetragbank
	 *
	 * @param integer $sonstigebetragbank
	 * @return void
	 */
	public function setsonstigebetragbank($sonstigebetragbank) {
		$this->sonstigebetragbank = $sonstigebetragbank;
	}


/**
	 * Returns the sonstigebetragkommune
	 *
	 * @return integer $sonstigebetragkommune
	 */
	public function getsonstigebetragkommune() {
		return $this->sonstigebetragkommune;
	}

	/**
	 * Sets the sonstigebetragkommune
	 *
	 * @param integer $sonstigebetragkommune
	 * @return void
	 */
	public function setsonstigebetragkommune($sonstigebetragkommune) {
		$this->sonstigebetragkommune = $sonstigebetragkommune;
	}


/**
	 * Returns the sonstigebetragprivat
	 *
	 * @return integer $sonstigebetragprivat
	 */
	public function getsonstigebetragprivat() {
		return $this->sonstigebetragprivat;
	}

	/**
	 * Sets the sonstigebetragprivat
	 *
	 * @param integer $sonstigebetragprivat
	 * @return void
	 */
	public function setsonstigebetragprivat($sonstigebetragprivat) {
		$this->sonstigebetragprivat = $sonstigebetragprivat;
	}


/**
	 * Returns the betragsumme
	 *
	 * @return integer $betragsumme
	 */
	public function getbetragsumme() {
		return $this->betragsumme;
	}

	/**
	 * Sets the betragsumme
	 *
	 * @param integer $betragsumme
	 * @return void
	 */
	public function setbetragsumme($betragsumme) {
		$this->betragsumme = $betragsumme;
	}


/**
	 * Returns the kommunejbelastungbank
	 *
	 * @return integer $kommunejbelastungbank
	 */
	public function getkommunejbelastungbank() {
		return $this->kommunejbelastungbank;
	}

	/**
	 * Sets the kommunejbelastungbank
	 *
	 * @param integer $kommunejbelastungbank
	 * @return void
	 */
	public function setkommunejbelastungbank($kommunejbelastungbank) {
		$this->kommunejbelastungbank = $kommunejbelastungbank;
	}


/**
	 * Returns the kommunejbelastungprivat
	 *
	 * @return integer $kommunejbelastungprivat
	 */
	public function getkommunejbelastungprivat() {
		return $this->kommunejbelastungprivat;
	}

	/**
	 * Sets the kommunejbelastungprivat
	 *
	 * @param integer $kommunejbelastungprivat
	 * @return void
	 */
	public function setkommunejbelastungprivat($kommunejbelastungprivat) {
		$this->kommunejbelastungprivat = $kommunejbelastungprivat;
	}


/**
	 * Returns the landkreisjbelastungbank
	 *
	 * @return integer $landkreisjbelastungbank
	 */
	public function getlandkreisjbelastungbank() {
		return $this->landkreisjbelastungbank;
	}

	/**
	 * Sets the landkreisjbelastungbank
	 *
	 * @param integer $landkreisjbelastungbank
	 * @return void
	 */
	public function setlandkreisjbelastungbank($landkreisjbelastungbank) {
		$this->landkreisjbelastungbank = $landkreisjbelastungbank;
	}


/**
	 * Returns the landkreisjbelastungkommune
	 *
	 * @return integer $landkreisjbelastungkommune
	 */
	public function getlandkreisjbelastungkommune() {
		return $this->landkreisjbelastungkommune;
	}

	/**
	 * Sets the landkreisjbelastungkommune
	 *
	 * @param integer $landkreisjbelastungkommune
	 * @return void
	 */
	public function setlandkreisjbelastungkommune($landkreisjbelastungkommune) {
		$this->landkreisjbelastungkommune = $landkreisjbelastungkommune;
	}


/**
	 * Returns the landkreisjbelastungprivat
	 *
	 * @return integer $landkreisjbelastungprivat
	 */
	public function getlandkreisjbelastungprivat() {
		return $this->landkreisjbelastungprivat;
	}

	/**
	 * Sets the landkreisjbelastungprivat
	 *
	 * @param integer $landkreisjbelastungprivat
	 * @return void
	 */
	public function setlandkreisjbelastungprivat($landkreisjbelastungprivat) {
		$this->landkreisjbelastungprivat = $landkreisjbelastungprivat;
	}


/**
	 * Returns the sonstigejbelastungbank
	 *
	 * @return integer $sonstigejbelastungbank
	 */
	public function getsonstigejbelastungbank() {
		return $this->sonstigejbelastungbank;
	}

	/**
	 * Sets the sonstigejbelastungbank
	 *
	 * @param integer $sonstigejbelastungbank
	 * @return void
	 */
	public function setsonstigejbelastungbank($sonstigejbelastungbank) {
		$this->sonstigejbelastungbank = $sonstigejbelastungbank;
	}


/**
	 * Returns the sonstigejbelastungkommune
	 *
	 * @return integer $sonstigejbelastungkommune
	 */
	public function getsonstigejbelastungkommune() {
		return $this->sonstigejbelastungkommune;
	}

	/**
	 * Sets the sonstigejbelastungkommune
	 *
	 * @param integer $sonstigejbelastungkommune
	 * @return void
	 */
	public function setsonstigejbelastungkommune($sonstigejbelastungkommune) {
		$this->sonstigejbelastungkommune = $sonstigejbelastungkommune;
	}


/**
	 * Returns the sonstigejbelastungprivat
	 *
	 * @return integer $sonstigejbelastungprivat
	 */
	public function getsonstigejbelastungprivat() {
		return $this->sonstigejbelastungprivat;
	}

	/**
	 * Sets the sonstigejbelastungprivat
	 *
	 * @param integer $sonstigejbelastungprivat
	 * @return void
	 */
	public function setsonstigejbelastungprivat($sonstigejbelastungprivat) {
		$this->sonstigejbelastungprivat = $sonstigejbelastungprivat;
	}


/**
	 * Returns the vorsteuererstjbelastungbank
	 *
	 * @return integer $vorsteuererstjbelastungbank
	 */
	public function getvorsteuererstjbelastungbank() {
		return $this->vorsteuererstjbelastungbank;
	}

	/**
	 * Sets the vorsteuererstjbelastungbank
	 *
	 * @param integer $vorsteuererstjbelastungbank
	 * @return void
	 */
	public function setvorsteuererstjbelastungbank($vorsteuererstjbelastungbank) {
		$this->vorsteuererstjbelastungbank = $vorsteuererstjbelastungbank;
	}


/**
	 * Returns the vorsteuererstjbelastungkommune
	 *
	 * @return integer $vorsteuererstjbelastungkommune
	 */
	public function getvorsteuererstjbelastungkommune() {
		return $this->vorsteuererstjbelastungkommune;
	}

	/**
	 * Sets the vorsteuererstjbelastungkommune
	 *
	 * @param integer $vorsteuererstjbelastungkommune
	 * @return void
	 */
	public function setvorsteuererstjbelastungkommune($vorsteuererstjbelastungkommune) {
		$this->vorsteuererstjbelastungkommune = $vorsteuererstjbelastungkommune;
	}


/**
	 * Returns the vorsteuererstjbelastungprivat
	 *
	 * @return integer $vorsteuererstjbelastungprivat
	 */
	public function getvorsteuererstjbelastungprivat() {
		return $this->vorsteuererstjbelastungprivat;
	}

	/**
	 * Sets the vorsteuererstjbelastungprivat
	 *
	 * @param integer $vorsteuererstjbelastungprivat
	 * @return void
	 */
	public function setvorsteuererstjbelastungprivat($vorsteuererstjbelastungprivat) {
		$this->vorsteuererstjbelastungprivat = $vorsteuererstjbelastungprivat;
	}


/**
	 * Returns the smfoerderungjbelastungbank
	 *
	 * @return integer $smfoerderungjbelastungbank
	 */
	public function getsmfoerderungjbelastungbank() {
		return $this->smfoerderungjbelastungbank;
	}

	/**
	 * Sets the smfoerderungjbelastungbank
	 *
	 * @param integer $smfoerderungjbelastungbank
	 * @return void
	 */
	public function setsmfoerderungjbelastungbank($smfoerderungjbelastungbank) {
		$this->smfoerderungjbelastungbank = $smfoerderungjbelastungbank;
	}


/**
	 * Returns the smfoerderungjbelastungkommune
	 *
	 * @return integer $smfoerderungjbelastungkommune
	 */
	public function getsmfoerderungjbelastungkommune() {
		return $this->smfoerderungjbelastungkommune;
	}

	/**
	 * Sets the smfoerderungjbelastungkommune
	 *
	 * @param integer $smfoerderungjbelastungkommune
	 * @return void
	 */
	public function setsmfoerderungjbelastungkommune($smfoerderungjbelastungkommune) {
		$this->smfoerderungjbelastungkommune = $smfoerderungjbelastungkommune;
	}


/**
	 * Returns the smfoerderungjbelastungprivat
	 *
	 * @return integer $smfoerderungjbelastungprivat
	 */
	public function getsmfoerderungjbelastungprivat() {
		return $this->smfoerderungjbelastungprivat;
	}

	/**
	 * Sets the smfoerderungjbelastungprivat
	 *
	 * @param integer $smfoerderungjbelastungprivat
	 * @return void
	 */
	public function setsmfoerderungjbelastungprivat($smfoerderungjbelastungprivat) {
		$this->smfoerderungjbelastungprivat = $smfoerderungjbelastungprivat;
	}


/**
	 * Returns the jbelastungsumme
	 *
	 * @return integer $jbelastungsumme
	 */
	public function getjbelastungsumme() {
		return $this->jbelastungsumme;
	}

	/**
	 * Sets the jbelastungsumme
	 *
	 * @param integer $jbelastungsumme
	 * @return void
	 */
	public function setjbelastungsumme($jbelastungsumme) {
		$this->jbelastungsumme = $jbelastungsumme;
	}


/**
	 * Returns the EARvon
	 *
	 * @return integer $EARvon
	 */
	public function getEARvon() {
		return $this->EARvon;
	}

	/**
	 * Sets the EARvon
	 *
	 * @param integer $EARvon
	 * @return void
	 */
	public function setEARvon($EARvon) {
		$this->EARvon = $EARvon;
	}


/**
	 * Returns the EARbis
	 *
	 * @return integer $EARbis
	 */
	public function getEARbis() {
		return $this->EARbis;
	}

	/**
	 * Sets the EARbis
	 *
	 * @param integer $EARbis
	 * @return void
	 */
	public function setEARbis($EARbis) {
		$this->EARbis = $EARbis;
	}


/**
	 * Returns the durchschnittsergebnis
	 *
	 * @return integer $durchschnittsergebnis
	 */
	public function getdurchschnittsergebnis() {
		return $this->durchschnittsergebnis;
	}

	/**
	 * Sets the durchschnittsergebnis
	 *
	 * @param integer $durchschnittsergebnis
	 * @return void
	 */
	public function setdurchschnittsergebnis($durchschnittsergebnis) {
		$this->durchschnittsergebnis = $durchschnittsergebnis;
	}


/**
	 * Returns the wegfalloefffinanzmittel
	 *
	 * @return integer $wegfalloefffinanzmittel
	 */
	public function getwegfalloefffinanzmittel() {
		return $this->wegfalloefffinanzmittel;
	}

	/**
	 * Sets the wegfalloefffinanzmittel
	 *
	 * @param integer $wegfalloefffinanzmittel
	 * @return void
	 */
	public function setwegfalloefffinanzmittel($wegfalloefffinanzmittel) {
		$this->wegfalloefffinanzmittel = $wegfalloefffinanzmittel;
	}


/**
	 * Returns the fortbestandgefaehrdung
	 *
	 * @return integer $fortbestandgefaehrdung
	 */
	public function getfortbestandgefaehrdung() {
		return $this->fortbestandgefaehrdung;
	}

	/**
	 * Sets the fortbestandgefaehrdung
	 *
	 * @param integer $fortbestandgefaehrdung
	 * @return void
	 */
	public function setfortbestandgefaehrdung($fortbestandgefaehrdung) {
		$this->fortbestandgefaehrdung = $fortbestandgefaehrdung;
	}


/**
	 * Returns the ersatzloserverlust
	 *
	 * @return integer $ersatzloserverlust
	 */
	public function getersatzloserverlust() {
		return $this->ersatzloserverlust;
	}

	/**
	 * Sets the ersatzloserverlust
	 *
	 * @param integer $ersatzloserverlust
	 * @return void
	 */
	public function setersatzloserverlust($ersatzloserverlust) {
		$this->ersatzloserverlust = $ersatzloserverlust;
	}


/**
	 * Returns the eintrittnachteiligerfolgen
	 *
	 * @return integer $eintrittnachteiligerfolgen
	 */
	public function geteintrittnachteiligerfolgen() {
		return $this->eintrittnachteiligerfolgen;
	}

	/**
	 * Sets the eintrittnachteiligerfolgen
	 *
	 * @param integer $eintrittnachteiligerfolgen
	 * @return void
	 */
	public function seteintrittnachteiligerfolgen($eintrittnachteiligerfolgen) {
		$this->eintrittnachteiligerfolgen = $eintrittnachteiligerfolgen;
	}


/**
	 * Returns the notwendigkeitsonstige
	 *
	 * @return integer $notwendigkeitsonstige
	 */
	public function getnotwendigkeitsonstige() {
		return $this->notwendigkeitsonstige;
	}

	/**
	 * Sets the notwendigkeitsonstige
	 *
	 * @param integer $notwendigkeitsonstige
	 * @return void
	 */
	public function setnotwendigkeitsonstige($notwendigkeitsonstige) {
		$this->notwendigkeitsonstige = $notwendigkeitsonstige;
	}


/**
	 * Returns the notwendigkeitsonstigetextfeld
	 *
	 * @return integer $notwendigkeitsonstigetextfeld
	 */
	public function getnotwendigkeitsonstigetextfeld() {
		return $this->notwendigkeitsonstigetextfeld;
	}

	/**
	 * Sets the notwendigkeitsonstigetextfeld
	 *
	 * @param integer $notwendigkeitsonstigetextfeld
	 * @return void
	 */
	public function setnotwendigkeitsonstigetextfeld($notwendigkeitsonstigetextfeld) {
		$this->notwendigkeitsonstigetextfeld = $notwendigkeitsonstigetextfeld;
	}


/**
	 * Returns the vorzbaubeginnerkl1
	 *
	 * @return integer $vorzbaubeginnerkl1
	 */
	public function getvorzbaubeginnerkl1() {
		return $this->vorzbaubeginnerkl1;
	}

	/**
	 * Sets the vorzbaubeginnerkl1
	 *
	 * @param integer $vorzbaubeginnerkl1
	 * @return void
	 */
	public function setvorzbaubeginnerkl1($vorzbaubeginnerkl1) {
		$this->vorzbaubeginnerkl1 = $vorzbaubeginnerkl1;
	}


/**
	 * Returns the vorzbaubeginnerkl2
	 *
	 * @return integer $vorzbaubeginnerkl2
	 */
	public function getvorzbaubeginnerkl2() {
		return $this->vorzbaubeginnerkl2; 
	}

	/**
	 * Sets the vorzbaubeginnerkl2
	 *
	 * @param integer $vorzbaubeginnerkl2
	 * @return void
	 */
	public function setvorzbaubeginnerkl2($vorzbaubeginnerkl2) {
		$this->vorzbaubeginnerkl2 = $vorzbaubeginnerkl2;
	}
	
/**
	 * Returns the b2vbb1
	 *
	 * @return integer $b2vbb1
	 */
	public function getb2vbb1() {
		return $this->b2vbb1;
	}

	/**
	 * Sets the b2vbb1
	 *
	 * @param integer $b2vbb1
	 * @return void
	 */
	public function setb2vbb1($b2vbb1) {
		$this->b2vbb1 = $b2vbb1;
	}

/**
	 * Returns the b2vbb2
	 *
	 * @return integer $b2vbb2
	 */
	public function getb2vbb2() {
		return $this->b2vbb2;
	}

	/**
	 * Sets the b2vbb2
	 *
	 * @param integer $b2vbb2
	 * @return void
	 */
	public function setb2vbb2($b2vbb2) {
		$this->b2vbb2 = $b2vbb2;
	}
		
/**
	 * Returns the b2vbb3
	 *
	 * @return integer $b2vbb3
	 */
	public function getb2vbb3() {
		return $this->b2vbb3;
	}

	/**
	 * Sets the b2vbb3
	 *
	 * @param integer $b2vbb3
	 * @return void
	 */  function setb2vbb3($b2vbb3) {
		$this->b2vbb3 = $b2vbb3;
	}


/**
	 * Returns the b2vbb4
	 *
	 * @return integer $b2vbb4
	 */
	public function getb2vbb4() {
		return $this->b2vbb4;
	}

	/**
	 * Sets the b2vbb4
	 *
	 * @param integer $b2vbb4
	 * @return void
	 */
	public function setb2vbb4($b2vbb4) {
		$this->b2vbb4 = $b2vbb4;
	}

/**
	 * Returns the b2vbb5
	 *
	 * @return integer $b2vbb5
	 */
	public function getb2vbb5() {
		return $this->b2vbb5;
	}

	/**
	 * Sets the b2vbb5
	 *
	 * @param integer $b2vbb5
	 * @return void
	 */
	public function setb2vbb5($b2vbb5) {
		$this->b2vbb5 = $b2vbb5;
	}
	












/**
	 * Returns the staatsmittelfoerderung1
	 *
	 * @return integer $staatsmittelfoerderung1
	 */
	public function getstaatsmittelfoerderung1() {
		return $this->staatsmittelfoerderung1;
	}

	/**
	 * Sets the staatsmittelfoerderung1
	 *
	 * @param integer $staatsmittelfoerderung1
	 * @return void
	 */  function setstaatsmittelfoerderung1($staatsmittelfoerderung1) {
		$this->staatsmittelfoerderung1 = $staatsmittelfoerderung1;
	}

/**
	 * Returns the staatsmittelfoerderung2
	 *
	 * @return integer $staatsmittelfoerderung2
	 */
	public function getstaatsmittelfoerderung2() {
		return $this->staatsmittelfoerderung2;
	}

	/**
	 * Sets the staatsmittelfoerderung2
	 *
	 * @param integer $staatsmittelfoerderung2
	 * @return void
	 */  function setstaatsmittelfoerderung2($staatsmittelfoerderung2) {
		$this->staatsmittelfoerderung2 = $staatsmittelfoerderung2;
	}

/**
	 * Returns the staatsmittelfoerderung3
	 *
	 * @return integer $staatsmittelfoerderung3
	 */
	public function getstaatsmittelfoerderung3() {
		return $this->staatsmittelfoerderung3;
	}

	/**
	 * Sets the staatsmittelfoerderung3
	 *
	 * @param integer $staatsmittelfoerderung3
	 * @return void
	 */  function setstaatsmittelfoerderung3($staatsmittelfoerderung3) {
		$this->staatsmittelfoerderung3 = $staatsmittelfoerderung3;
	}


/**
	 * Returns the staatsmittelfoerderung4
	 *
	 * @return integer $staatsmittelfoerderung4
	 */
	public function getstaatsmittelfoerderung4() {
		return $this->staatsmittelfoerderung4;
	}

	/**
	 * Sets the staatsmittelfoerderung4
	 *
	 * @param integer $staatsmittelfoerderung4
	 * @return void
	 */  function setstaatsmittelfoerderung4($staatsmittelfoerderung4) {
		$this->staatsmittelfoerderung4 = $staatsmittelfoerderung4;
	}

	


/**
	 * Returns the smfkbs
	 *
	 * @return integer $smfkbs
	 */
	public function getsmfkbs() {
		return $this->smfkbs;
	}

	/**
	 * Sets the smfkbs
	 *
	 * @param integer $smfkbs
	 * @return void
	 */  function setsmfkbs($smfkbs) {
		$this->smfkbs = $smfkbs;
	}

/**
	 * Returns the smfbbs
	 *
	 * @return integer $smfbbs
	 */
	public function getsmfbbs() {
		return $this->smfbbs;
	}

	/**
	 * Sets the smfbbs
	 *
	 * @param integer $smfbbs
	 * @return void
	 */  function setsmfbbs($smfbbs) {
		$this->smfbbs = $smfbbs;
	}

/**
	 * Returns the smfgs
	 *
	 * @return integer $smfgs
	 */
	public function getsmfgs() {
		return $this->smfgs;
	}

	/**
	 * Sets the smfgs
	 *
	 * @param integer $smfgs
	 * @return void
	 */  function setsmfgs($smfgs) {
		$this->smfgs = $smfgs;
	}
	

/**
	 * Returns the vorsteuererstbetragbank
	 *
	 * @return integer $vorsteuererstbetragbank
	 */
	public function getvorsteuererstbetragbank() {
		return $this->vorsteuererstbetragbank;
	}

	/**
	 * Sets the vorsteuererstbetragbank
	 *
	 * @param integer $vorsteuererstbetragbank
	 * @return void
	 */
	public function setvorsteuererstbetragbank($vorsteuererstbetragbank) {
		$this->vorsteuererstbetragbank = $vorsteuererstbetragbank;
	}


/**
	 * Returns the vorsteuererstbetragkommune
	 *
	 * @return integer $vorsteuererstbetragkommune
	 */
	public function getvorsteuererstbetragkommune() {
		return $this->vorsteuererstbetragkommune;
	}

	/**
	 * Sets the vorsteuererstbetragkommune
	 *
	 * @param integer $vorsteuererstbetragkommune
	 * @return void
	 */
	public function setvorsteuererstbetragkommune($vorsteuererstbetragkommune) {
		$this->vorsteuererstbetragkommune = $vorsteuererstbetragkommune;
	}


/**
	 * Returns the vorsteuererstbetragprivat
	 *
	 * @return integer $vorsteuererstbetragprivat
	 */
	public function getvorsteuererstbetragprivat() {
		return $this->vorsteuererstbetragprivat;
	}

	/**
	 * Sets the vorsteuererstbetragprivat
	 *
	 * @param integer $vorsteuererstbetragprivat
	 * @return void
	 */
	public function setvorsteuererstbetragprivat($vorsteuererstbetragprivat) {
		$this->vorsteuererstbetragprivat = $vorsteuererstbetragprivat;
	}


/**
	 * Returns the smfoerderungbetragbank
	 *
	 * @return integer $smfoerderungbetragbank
	 */
	public function getsmfoerderungbetragbank() {
		return $this->smfoerderungbetragbank;
	}

	/**
	 * Sets the smfoerderungbetragbank
	 *
	 * @param integer $smfoerderungbetragbank
	 * @return void
	 */
	public function setsmfoerderungbetragbank($smfoerderungbetragbank) {
		$this->smfoerderungbetragbank = $smfoerderungbetragbank;
	}


/**
	 * Returns the smfoerderungbetragkommune
	 *
	 * @return integer $smfoerderungbetragkommune
	 */
	public function getsmfoerderungbetragkommune() {
		return $this->smfoerderungbetragkommune;
	}

	/**
	 * Sets the smfoerderungbetragkommune
	 *
	 * @param integer $smfoerderungbetragkommune
	 * @return void
	 */
	public function setsmfoerderungbetragkommune($smfoerderungbetragkommune) {
		$this->smfoerderungbetragkommune = $smfoerderungbetragkommune;
	}


/**
	 * Returns the smfoerderungbetragprivat
	 *
	 * @return integer $smfoerderungbetragprivat
	 */
	public function getsmfoerderungbetragprivat() {
		return $this->smfoerderungbetragprivat;
	}

	/**
	 * Sets the smfoerderungbetragprivat
	 *
	 * @param integer $smfoerderungbetragprivat
	 * @return void
	 */
	public function setsmfoerderungbetragprivat($smfoerderungbetragprivat) {
		$this->smfoerderungbetragprivat = $smfoerderungbetragprivat;
	}
	
/**
	 * Returns the summegesamtkosten
	 *
	 * @return integer $summegesamtkosten
	 */
	public function getSummegesamtkosten() { 
		$summe = $this->kostenanteil1 + $this->kostenanteil2 + $this->kostenanteil3 + $this->kostenanteil4 + $this->kostenenteil5;
		return $summe;
	}
	
	
}
?>