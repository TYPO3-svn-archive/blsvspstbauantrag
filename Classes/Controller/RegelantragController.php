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
 * @package blsvsportstaettenbauantrag
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Blsvspstbauantrag_Controller_RegelantragController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * regelantragRepository
	 *
	 * @var Tx_Blsvspstbauantrag_Domain_Repository_RegelantragRepository
	 */
	protected $regelantragRepository;

	
	/**
	 * vereinsinfoRepository
	 *
	 * @var Tx_Blsvvereinsinfo_Domain_Repository_VereinsinfoRepository
	 */
	protected $vereinsinfoRepository;
	
	/**
	 * kv
	 *
	 * @var array
	 */
	protected $kv = NULL;
	
	/**
	 * ssbadmin
	 *
	 * @var boolean
	 */
	protected $ssbadmin = FALSE;
		
	
	/**
	 * Initializes the current action
	 * @return void
	 */
	protected function initializeAction() {
	
		$this->hilfetexteRepository = &t3lib_div::makeInstance ("Tx_Blsvspstbauantrag_Domain_Repository_HilfetexteRepository");
	
		$userTSConfig_all = $GLOBALS["TSFE"]->fe_user->getUserTSconf();
			
		if ( $userTSConfig_all['tx_blsvspstbauantrag.']['gesperrt'] == 1) {
			$this->gesperrt = TRUE;
		}
	
		if ( $GLOBALS['TSFE']->fe_user->user['tx_blsvanwendung_vid'] < 80000) {
			$this->vereinsnummer = $GLOBALS['TSFE']->fe_user->user['tx_blsvanwendung_vid'];
		}
	
		if ( $userTSConfig_all[ 'tx_blsvspstbauantrag.' ][ 'admin' ] == 1) {
			$this->ssbadmin = TRUE;
			$this->vereinsnummer = 0;
		}
	
		if ( $userTSConfig_all[ 'tx_blsvspstbauantrag.' ][ 'kreis.' ] ) {
			$this->kv = $userTSConfig_all[ 'tx_blsvspstbauantrag.' ][ 'kreis.' ];
			$this->vereinsnummer =0;
			
			
		}
		$this->feuser = $GLOBALS['TSFE']->fe_user->user['uid'];
		//echo '<br /><br /><br /><br /><br />VID: ' . $this->vereinsnummer;
		//print_r( $GLOBALS['TSFE']->fe_user );
	
	}
	
	/**
	 * injectVereinsinfoRepository
	 *
	 * @param Tx_Blsvvereinsinfo_Domain_Repository_VereinsinfoRepository $vereinsinfoRepository
	 * @return void
	 */
	public function injectVereinsinfoRepository(Tx_Blsvvereinsinfo_Domain_Repository_VereinsinfoRepository $vereinsinfoRepository) {
		$this->vereinsinfoRepository = $vereinsinfoRepository;
	}
	
	/**
	 * injectHilfetexteRepository
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Repository_HilfetexteRepository $hilfetexteRepository
	 * @return void
	 */
	public function injectHilfetexteRepository(Tx_Blsvspstbauantrag_Domain_Repository_HilfetexteRepository $hilfetexteRepository) {
		$this->hilfetexteRepository = $hilfetexteRepository;
	}

	
	
	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		// $regelantrags = $this->regelantragRepository->findAll();
		
		
		$this->view->assign('regelantrags', $regelantrags);
	}

	/**
	 * action show
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * 
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function showAction( Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {
		$vereinsinfos = $this->vereinsinfoRepository->findByVereinsid($antragsanforderung->getVereinsnummer());
		$regelantrag = $this->regelantragRepository->findOneByAntragsnummer1( $antragsanforderung );
		$sparten[0]='Bitte wählen . . .';
		foreach ($vereinsinfos as $vereinsinfo) {
			if ($vereinsinfo->getSpartenid() > 0 ) {
				$sparten[$vereinsinfo->getSpartenid()]=$vereinsinfo->getSpartenname();
			}
		}
		$kv=0;
		if(	$this->kv) {
			$kv=1;
		}
		
		$admin = 0;
		if ( $this->ssbadmin){
			$admin = 1;
		}
		
		$this->view->assign('admin', $admin);
		$this->view->assign('kv', $kv);		
		$this->view->assign('vereinsinfos', $sparten);
		$this->view->assign('regelantrag', $regelantrag);		

		ini_set('pcre.backtrack_limit', '2M');
		// ini_set( 'memory_limit', '20M' );
	}
	
	
	/**
	 * action showPDF
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 *
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function showPdfAction( Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {
				
		$vereinsinfos = $this->vereinsinfoRepository->findByVereinsid($antragsanforderung->getVereinsnummer());
		$regelantrag = $this->regelantragRepository->findOneByAntragsnummer1( $antragsanforderung );
		$sparten[0]='Bitte wählen . . .';
		foreach ($vereinsinfos as $vereinsinfo) {
			if ($vereinsinfo->getSpartenid() > 0 ) {
				$sparten[$vereinsinfo->getSpartenid()]=$vereinsinfo->getSpartenname();
			}
		}
		$kv=0;
		if(	$this->kv) {
			$kv=1;
		}
	
		$admin = 0;
		if ( $this->ssbadmin){
			$admin = 1;
		}
	
		$this->view->assign('admin', $admin);
		$this->view->assign('kv', $kv);
		$this->view->assign('vereinsinfos', $sparten);
		$this->view->assign('regelantrag', $regelantrag);
	
		ini_set('pcre.backtrack_limit', '2M');
		// ini_set( 'memory_limit', '20M' );
	}

	/**
	 * action new
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $newRegelantrag
	 * @dontvalidate $newRegelantrag
	 * @return void
	 */
	public function newAction(Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $newRegelantrag = NULL) {
		/*
		if ( $newRegelantrag == NULL ) { // workaround for fluid bug ##5636
			$newRegelantrag = t3lib_div::makeInstance( 'Tx_Blsvspstbauantrag_Domain_Model_Regelantrag' );
		}

		$kreisvorsitzender = 1;
		$this->view->assign('kreisvorsitzender', $kreisvorsitzender);

		$vereinsinfos = $this->vereinsinfoRepository->findByVereinsid(10006);
		$sparten[0]='Bitte wählen . . .';
		foreach ($vereinsinfos as $vereinsinfo) {
			if ($vereinsinfo->getSpartenid() > 0 ) {
				//$sparten[] = array('spartenid' => $vereinsinfo->getSpartenid(), 'spartenname' => $vereinsinfo->getSpartenname());
				$sparten[$vereinsinfo->getSpartenid()]=$vereinsinfo->getSpartenname();
			}
		}
		*/
		$this->view->assign('vereinsinfos', $sparten);
		$this->view->assign('newRegelantrag', $newRegelantrag);
	}

	/**
	 * action create
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $newRegelantrag
	 * @dontvalidate $newRegelantrag
	 * 
	 * @return void
	 */
	public function createAction( Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $newRegelantrag) {
		//print_r($newRegelantrag);die();
		$this->regelantragRepository->add($newRegelantrag);
		$this->validiereRegelantrag($regelantrag);
		$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( tx_blsvspstbauantrag_domain_model_antragsanforderung.Vorantraggespeichert, 'blsvspstbauantrag' ) );
		$this->redirect('list');
	}

	/** 
	 * action edit
	 *
	 * @param 			Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate 	$antragsanforderung
	 * 
	 * @return void
	 */
	public function editAction(  Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {

		$vereinsinfos = $this->vereinsinfoRepository->findByVereinsid($antragsanforderung->getVereinsnummer());
		$regelantrag = $this->regelantragRepository->findOneByAntragsnummer1( $antragsanforderung );
		$sparten[0]='Bitte wählen . . .';
		foreach ($vereinsinfos as $vereinsinfo) {
			if ($vereinsinfo->getSpartenid() > 0 ) {
				$sparten[$vereinsinfo->getSpartenid()]=$vereinsinfo->getSpartenname();
			}
		}
		$kv=0;
		if(	$this->kv) {
			$kv=1;
		}
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll() );
		$this->view->assign('kv', $kv);		
		$this->view->assign('vereinsinfos', $sparten);
		$this->view->assign('regelantrag', $regelantrag);
	}
	
	/**
	 * action entscheiden
	 *
	 * @param 			Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate 	$antragsanforderung
	 *
	 * @return void
	 */
	public function entscheidenAction(  Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {
	
		$vereinsinfos = $this->vereinsinfoRepository->findByVereinsid($antragsanforderung->getVereinsnummer());
		$regelantrag = $this->regelantragRepository->findOneByAntragsnummer1( $antragsanforderung );
	
		$sparten[0]='Bitte wählen . . .';
		foreach ($vereinsinfos as $vereinsinfo) {
			if ($vereinsinfo->getSpartenid() > 0 ) {
				$sparten[$vereinsinfo->getSpartenid()]=$vereinsinfo->getSpartenname();
			}
		}
		$kv=1;
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll() );
		$this->view->assign('kv', $kv);
		$this->view->assign('vereinsinfos', $sparten);
		$this->view->assign('regelantrag', $regelantrag);
		$this->view->assign('antragsanforderung', $antragsanforderung);
	}
	
	
	/**
	 * action abgeben
	 *
	 * @param 			Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate 	$antragsanforderung
	 *
	 * @return void
	 */
	public function abgebenAction(  Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {
		$abgeben=1;
		$vereinsinfos = $this->vereinsinfoRepository->findByVereinsid($antragsanforderung->getVereinsnummer());
		$regelantrag = $this->regelantragRepository->findOneByAntragsnummer1( $antragsanforderung );
		
		$sparten[0]='Bitte wählen . . .';
		foreach ($vereinsinfos as $vereinsinfo) {
			if ($vereinsinfo->getSpartenid() > 0 ) {
				$sparten[$vereinsinfo->getSpartenid()]=$vereinsinfo->getSpartenname();
			}
		}
		
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll() );
		$valErrors = $this->validiereRegelantrag( $regelantrag );
		if ( $valErrors  ){
			$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Validierungsfehler', 'blsvspstbauantrag' ));
			foreach ( $valErrors as $error ){
				$this->flashMessageContainer->add($error);
			}
			
			$abgeben=0;
		}
		
		$kv=0;
		if(	$this->kv) {
			$kv=1;
		}
		$this->view->assign( 'kv', $kv );
		$this->view->assign( 'kreisvorsitzender', $this->kreis[0] );
		$this->view->assign( 'vereinsinfos', $sparten );
		$this->view->assign( 'regelantrag', $regelantrag );
		$this->view->assign( 'abgeben', $abgeben );
	}

	/**
	 * action update
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag
	 * @dontvalidate $regelantrag
	 * 
	 * @return void
	 */
	public function updateAction(Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag) {
		//print_r( $_FILES );die();
	
		
		
// upload der dateien im kleinantrag
		if ( $_FILES ) {
			$basicFileFunctions = t3lib_div::makeInstance('t3lib_basicFileFunctions' );
			$vereinsnummer = $regelantrag->getVereinsnummer();
			
			if ( !is_dir( UPLOAD_PFAD . $vereinsnummer ) ) {
				mkdir( UPLOAD_PFAD .$vereinsnummer );
				
			}
			if ( !is_dir( UPLOAD_PFAD . $vereinsnummer . '/tx_blsvspstbauantrag_spstbauantrag'  ) ) {
				mkdir( UPLOAD_PFAD . $vereinsnummer . '/tx_blsvspstbauantrag_spstbauantrag' );
			}
			
			for($i=1; $i<5; $i++) {
				if( $_FILES['text_d4'.$i]['name'] ){
					$uploadName = $basicFileFunctions->getUniqueName(
							$regelantrag->getAntragsnummer1()->getUid() . '_'. 'd4' . $i . '_' . date('Ymd_His_') . $_FILES[ 'text_d4'.$i ] ['name' ], t3lib_div::getFileAbsFileName( UPLOAD_PFAD  . $vereinsnummer.'/tx_blsvspstbauantrag_spstbauantrag')
					);
					if (!t3lib_div::upload_copy_move($_FILES['text_d4'.$i]['tmp_name'], $uploadName) )
						$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.FehlerUpload', 'blsvspstbauantrag' ) . $_FILES['text_d4'.$i]['name'] );
				}
			}
		}		

		// -- Datum in timestamp umwandeln		

		$regelantrag->setGuvbeginn( 12 * 3600 + strtotime( substr( $regelantrag->getGuvbeginn() , -4, 4).'-'. substr( $regelantrag->getGuvbeginn() , 3, 2 ) .'-'.   substr( $regelantrag->getGuvbeginn() , 0, 2 ) ) );
		$regelantrag->setGuvende( 12 * 3600 + strtotime( substr( $regelantrag->getGuvende() , -4, 4).'-'. substr( $regelantrag->getGuvende() , 3, 2 ) .'-'.   substr( $regelantrag->getGuvende() , 0, 2 ) ) );
		$regelantrag->setVmlstichtag( 12 * 3600 + strtotime( substr( $regelantrag->getVmlstichtag() , -4, 4).'-'. substr( $regelantrag->getVmlstichtag() , 3, 2 ) .'-'.   substr( $regelantrag->getVmlstichtag() , 0, 2 ) ) );
		$regelantrag->setBauberatungdatum( 12 * 3600 + strtotime( substr( $regelantrag->getBauberatungdatum() , -4, 4).'-'. substr( $regelantrag->getBauberatungdatum() , 3, 2 ) .'-'.   substr( $regelantrag->getBauberatungdatum() , 0, 2 ) ) );
		$regelantrag->setDatumgespraechkv( 12 * 3600 + strtotime( substr( $regelantrag->getDatumgespraechkv() , -4, 4).'-'. substr( $regelantrag->getDatumgespraechkv() , 3, 2 ) .'-'.   substr( $regelantrag->getDatumgespraechkv() , 0, 2 ) ) );
		$regelantrag->setAbsendedatum( 12 * 3600 + strtotime( substr( $regelantrag->getAbsendedatum() , -4, 4).'-'. substr( $regelantrag->getAbsendedatum() , 3, 2 ) .'-'.   substr( $regelantrag->getAbsendedatum() , 0, 2 ) ) );
		$regelantrag->setStellungnahme41( 12 * 3600 + strtotime( substr( $regelantrag->getStellungnahme41() , -4, 4).'-'. substr( $regelantrag->getStellungnahme41() , 3, 2 ) .'-'.   substr( $regelantrag->getStellungnahme41() , 0, 2 ) ) );
		$regelantrag->setSonstiges11( 12 * 3600 + strtotime( substr( $regelantrag->getSonstiges11() , -4, 4).'-'. substr( $regelantrag->getSonstiges11() , 3, 2 ) .'-'.   substr( $regelantrag->getSonstiges11() , 0, 2 ) ) );
		
		$regelantrag->setFinanzierungzuschuss ( $regelantrag->getStaatsmittelfoerderung2() + $regelantrag->getStaatsmittelfoerderung3() );
		
		$this->regelantragRepository->update( $regelantrag );
		
		
		
		if ( $this->kv ){		
			$valErrors = $this->validiereRegelantragKV( $regelantrag );
		}
		else{		
			$valErrors = $this->validiereRegelantrag( $regelantrag );
			
		}
		
		
		$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Vorantraggespeichert', 'blsvspstbauantrag' ) );
		
		if ( $valErrors  ){
			$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Validierungsfehler', 'blsvspstbauantrag' ));
				
			foreach ( $valErrors as $error ){
				If($error) 	$this->flashMessageContainer->add($error);
			}
				
		}
		else{
			$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.keineValidierungsfehler', 'blsvspstbauantrag' ));
				
		}
		
		//print_r( $regelantrag );die();
		$this->redirect('list','antragsanforderung');
		
	}

	/**
	 * action delete
	 * 
	 * @dontvalidate $regelantrag
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag
	 * @return void
	 */
	public function deleteAction(Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag) {
		$this->regelantragRepository->remove($regelantrag);
		$this->flashMessageContainer->add('Your Regelantrag was removed.');
		$this->redirect('list');
	}

	/**
	 * injectRegelantragRepository
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Repository_RegelantragRepository $regelantragRepository
	 * @return void
	 */
	public function injectRegelantragRepository(Tx_Blsvspstbauantrag_Domain_Repository_RegelantragRepository $regelantragRepository) {
		$this->regelantragRepository = $regelantragRepository;
	}
	
	/**
	 * validiereRegelantrag
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag
	 * @return void
	 */
	public function validiereRegelantrag(Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag) {
		$erg = Null;
		
		
		// Vermögenslage
		
		if ( $regelantrag->getGuvbeginn()<50000 ){
			
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValGuvbeginn', 'blsvspstbauantrag' );
		}
		if ( $regelantrag->getGuvende()<50000 ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValGuvende', 'blsvspstbauantrag' );
		}
		
		// Wenn kein Fall angekreuzt
		
		if ( !$regelantrag->getAnsprechpartnername() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinName', 'blsvspstbauantrag' );
		}
		if ( !$regelantrag->getAnsprechpartnervorname() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinVorname', 'blsvspstbauantrag' );
		}
		if ( !$regelantrag->getAnsprechpartneremail() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinEmail', 'blsvspstbauantrag' );
		}
		elseif ( !preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-.]+\.([a-zA-Z]{2,4})$/", $regelantrag->getAnsprechpartneremail() ) ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinEmail', 'blsvspstbauantrag' );
		}
	
	
		if ( !$regelantrag->getAnsprechpartnerteldienst() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinTelefon', 'blsvspstbauantrag' );
		}
	
		if ( ! ( $regelantrag->getVerwendungszweck1() or $regelantrag->getVerwendungszweck2() or $regelantrag->getVerwendungszweck3() or $regelantrag->getVerwendungszweck4() or $regelantrag->getVerwendungszweck5() ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMassnahme', 'blsvspstbauantrag' );
		}
		
		if ( !( ( !$regelantrag->getVerwendungszweck1() and !$regelantrag->getAnzahl1() and !$regelantrag->getKostenanteil1() ) or ( $regelantrag->getVerwendungszweck1() and $regelantrag->getAnzahl1() and $regelantrag->getKostenanteil1() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMassnahmenkosten', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getVerwendungszweck2() and !$regelantrag->getAnzahl2() and !$regelantrag->getKostenanteil2() ) or ( $regelantrag->getVerwendungszweck2() and $regelantrag->getAnzahl2() and $regelantrag->getKostenanteil2() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMassnahmenkosten', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getVerwendungszweck3() and !$regelantrag->getAnzahl3() and !$regelantrag->getKostenanteil3() ) or ( $regelantrag->getVerwendungszweck3() and $regelantrag->getAnzahl3() and $regelantrag->getKostenanteil3() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMassnahmenkosten', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getVerwendungszweck4() and !$regelantrag->getAnzahl4() and !$regelantrag->getKostenanteil4() ) or ( $regelantrag->getVerwendungszweck4() and $regelantrag->getAnzahl4() and $regelantrag->getKostenanteil4() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMassnahmenkosten', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getVerwendungszweck5() and !$regelantrag->getAnzahl5() and !$regelantrag->getKostenenteil5() ) or ( $regelantrag->getVerwendungszweck5() and $regelantrag->getAnzahl5() and $regelantrag->getKostenenteil5() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMassnahmenkosten', 'blsvspstbauantrag' );
		}
		
		if ( !$regelantrag->getHinweistext1() or !$regelantrag->getHinweistext2() or !$regelantrag->getHinweistext3() or !$regelantrag->getHinweistext4()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineHinweis', 'blsvspstbauantrag' );
		} 
		
		if ( !$regelantrag->getErklrechtsanspruch() or !$regelantrag->getErklmeldepflicht() or !$regelantrag->getBestkenntnisnahme() or !$regelantrag->getErklbaubeginn() or !$regelantrag->getErklkonzession() or !$regelantrag->getErklvollstaendigeangaben() or !$regelantrag->getErklsubvention() or !$regelantrag->getErklfinanzierung()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineErklaerung', 'blsvspstbauantrag' );
		}

		
		if ( !$regelantrag->getGuveinnahmengesamt()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValGuveinnahmengesamt', 'blsvspstbauantrag' );
		}
		
		if ( !$regelantrag->getGuvausgabengesamt()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValGuvausgabengesamt', 'blsvspstbauantrag' );
		}
		
		if ( !$regelantrag->getEinnahmenbeitraege()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValEinnahmenbeitraege', 'blsvspstbauantrag' );
		}
		
		/*if ( !$regelantrag->getKassenbestand()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKassenbestand', 'blsvspstbauantrag' );
		}*/
		
		if ( !$regelantrag->getBankguthaben()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValBankguthaben', 'blsvspstbauantrag' );
		}

	/*	if ( !$regelantrag->getEgtvlaufzeit()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValEgtvlaufzeit', 'blsvspstbauantrag' );
		}
		*/
		
		
		/* Neuer Regelantrag Punkt D Mitgliederzahlen Controller*/
		
		if ( !$regelantrag->getDatumgespraechkv()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValDatumgespraechkv', 'blsvspstbauantrag' );
		}		    
		if ( ! ( $regelantrag->getFachverbandmitglied1() or $regelantrag->getFachverbandsmitglied2() or $regelantrag->getFachverbandsmitglied3() or $regelantrag->getFachverbandsmitglied4() or $regelantrag->getFachverbandsmitglied5() ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinFachverbandMitglieder', 'blsvspstbauantrag' );
		}
	
		if  (  
			!($regelantrag->getFachverbandmitglied1() 
			and (!strcmp($regelantrag->getMitglieder0110bis26(), (int)$regelantrag->getMitglieder0110bis26()))
			and (!strcmp($regelantrag->getMitglieder0110ueber26(), (int)$regelantrag->getMitglieder0110ueber26())) 
			and (!strcmp($regelantrag->getMitglieder0111bis26(), (int)$regelantrag->getMitglieder0111bis26()))
			and (!strcmp($regelantrag->getMitglieder0111ueber26(), (int)$regelantrag->getMitglieder0111ueber26()))
			and (!strcmp($regelantrag->getMitglieder0112bis26(), (int)$regelantrag->getMitglieder0112bis26()))
			and (!strcmp($regelantrag->getMitglieder0112ueber26(), (int)$regelantrag->getMitglieder0112ueber26())
		
		) or 
			( !$regelantrag->getFachverbandmitglied1() 
			and !$regelantrag->getMitglieder0110bis26() 
			and !$regelantrag->getMitglieder0110ueber26() 
			and !$regelantrag->getMitglieder0111bis26() 
			and !$regelantrag->getMitglieder0111ueber26() 
			and !$regelantrag->getMitglieder0112bis26() 
			and !$regelantrag->getMitglieder0112ueber26())
		)) {
		$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
	
	if  (  
			!($regelantrag->getFachverbandsmitglied2() 
			and (!strcmp($regelantrag->getMitglieder0210bis26(), (int)$regelantrag->getMitglieder0210bis26()))
			and (!strcmp($regelantrag->getMitglieder0210ueber26(), (int)$regelantrag->getMitglieder0210ueber26())) 
			and (!strcmp($regelantrag->getMitglieder0211bis26(), (int)$regelantrag->getMitglieder0211bis26()))
			and (!strcmp($regelantrag->getMitglieder0211ueber26(), (int)$regelantrag->getMitglieder0211ueber26()))
			and (!strcmp($regelantrag->getMitglieder0212bis26(), (int)$regelantrag->getMitglieder0212bis26()))
			and (!strcmp($regelantrag->getMitglieder0212ueber26(), (int)$regelantrag->getMitglieder0212ueber26())
		
		) or 
			( !$regelantrag->getFachverbandsmitglied2() 
			and !$regelantrag->getMitglieder0210bis26() 
			and !$regelantrag->getMitglieder0210ueber26() 
			and !$regelantrag->getMitglieder0211bis26() 
			and !$regelantrag->getMitglieder0211ueber26() 
			and !$regelantrag->getMitglieder0212bis26() 
			and !$regelantrag->getMitglieder0212ueber26())
		)) {
		$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
		
	if  (  
			!($regelantrag->getFachverbandsmitglied3() 
			and (!strcmp($regelantrag->getMitglieder0310bis26(), (int)$regelantrag->getMitglieder0310bis26()))
			and (!strcmp($regelantrag->getMitglieder0310ueber26(), (int)$regelantrag->getMitglieder0310ueber26())) 
			and (!strcmp($regelantrag->getMitglieder0311bis26(), (int)$regelantrag->getMitglieder0311bis26()))
			and (!strcmp($regelantrag->getMitglieder0311ueber26(), (int)$regelantrag->getMitglieder0311ueber26()))
			and (!strcmp($regelantrag->getMitglieder0312bis26(), (int)$regelantrag->getMitglieder0312bis26()))
			and (!strcmp($regelantrag->getMitglieder0312ueber26(), (int)$regelantrag->getMitglieder0312ueber26())
		
		) or 
			( !$regelantrag->getFachverbandsmitglied3() 
			and !$regelantrag->getMitglieder0310bis26() 
			and !$regelantrag->getMitglieder0310ueber26() 
			and !$regelantrag->getMitglieder0311bis26() 
			and !$regelantrag->getMitglieder0311ueber26() 
			and !$regelantrag->getMitglieder0312bis26() 
			and !$regelantrag->getMitglieder0312ueber26())
		)) {
		$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
		
		if  (  
			!($regelantrag->getFachverbandsmitglied4() 
			and (!strcmp($regelantrag->getMitglieder0410bis26(), (int)$regelantrag->getMitglieder0410bis26()))
			and (!strcmp($regelantrag->getMitglieder0410ueber26(), (int)$regelantrag->getMitglieder0410ueber26())) 
			and (!strcmp($regelantrag->getMitglieder0411bis26(), (int)$regelantrag->getMitglieder0411bis26()))
			and (!strcmp($regelantrag->getMitglieder0411ueber26(), (int)$regelantrag->getMitglieder0411ueber26()))
			and (!strcmp($regelantrag->getMitglieder0412bis26(), (int)$regelantrag->getMitglieder0412bis26()))
			and (!strcmp($regelantrag->getMitglieder0412ueber26(), (int)$regelantrag->getMitglieder0412ueber26())
		
		) or 
			( !$regelantrag->getFachverbandsmitglied4() 
			and !$regelantrag->getMitglieder0410bis26() 
			and !$regelantrag->getMitglieder0410ueber26() 
			and !$regelantrag->getMitglieder0411bis26() 
			and !$regelantrag->getMitglieder0411ueber26() 
			and !$regelantrag->getMitglieder0412bis26() 
			and !$regelantrag->getMitglieder0412ueber26())
		)) {
		$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
		
		if  (
			!($regelantrag->getFachverbandsmitglied5() 
			and (!strcmp($regelantrag->getMitglieder0510bis26(), (int)$regelantrag->getMitglieder0510bis26()))
			and (!strcmp($regelantrag->getMitglieder0510ueber26(), (int)$regelantrag->getMitglieder0510ueber26())) 
			and (!strcmp($regelantrag->getMitglieder0511bis26(), (int)$regelantrag->getMitglieder0511bis26())) 
			and (!strcmp($regelantrag->getMitglieder0511ueber26(), (int)$regelantrag->getMitglieder0511ueber26())) 
			and (!strcmp($regelantrag->getMitglieder0512bis26(), (int)$regelantrag->getMitglieder0512bis26()))
			and (!strcmp($regelantrag->getMitglieder0512ueber26(), (int)$regelantrag->getMitglieder0512ueber26())
	   ) or
		 	( !$regelantrag->getFachverbandsmitglied5() 
			and !$regelantrag->getMitglieder0510bis26() 
			and !$regelantrag->getMitglieder0510ueber26() 
			and !$regelantrag->getMitglieder0511bis26() 
			and !$regelantrag->getMitglieder0511ueber26() 
			and !$regelantrag->getMitglieder0512bis26() 
			and !$regelantrag->getMitglieder0512ueber26())
		)) {
		$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
		
		
		
		
		
		/*  Alter Regelantrag Punkt D Mitgliederzahlen Controller 
		
		
		if ( !$regelantrag->getDatumgespraechkv()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValDatumgespraechkv', 'blsvspstbauantrag' );
		}		    
		if ( ! ( $regelantrag->getFachverbandmitglied1() or $regelantrag->getFachverbandsmitglied2() or $regelantrag->getFachverbandsmitglied3() or $regelantrag->getFachverbandsmitglied4() or $regelantrag->getFachverbandsmitglied5() ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinFachverbandMitglieder', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandmitglied1() and !$regelantrag->getMitglieder0110bis26() and !$regelantrag->getMitglieder0110ueber26() and !$regelantrag->getMitglieder0111bis26()  and !$regelantrag->getMitglieder0111ueber26() and !$regelantrag->getMitglieder0112bis26() and !$regelantrag->getMitglieder0112ueber26() ) or ( $regelantrag->getFachverbandmitglied1() and $regelantrag->getMitglieder0110bis26() and $regelantrag->getMitglieder0110ueber26() and $regelantrag->getMitglieder0111bis26() and $regelantrag->getMitglieder0111ueber26() and $regelantrag->getMitglieder0112bis26() and $regelantrag->getMitglieder0112ueber26() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );		
		}
		if ( !( ( !$regelantrag->getFachverbandsmitglied2() and !$regelantrag->getMitglieder0210bis26() and !$regelantrag->getMitglieder0210ueber26() and !$regelantrag->getMitglieder0211bis26() and !$regelantrag->getMitglieder0211ueber26() and !$regelantrag->getMitglieder0212bis26() and !$regelantrag->getMitglieder0212ueber26() ) or ( $regelantrag->getFachverbandsmitglied2() and $regelantrag->getMitglieder0210bis26() and $regelantrag->getMitglieder0210ueber26() and $regelantrag->getMitglieder0211bis26() and $regelantrag->getMitglieder0211ueber26() and $regelantrag->getMitglieder0212bis26() and $regelantrag->getMitglieder0212ueber26() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandsmitglied3() and !$regelantrag->getMitglieder0310bis26() and !$regelantrag->getMitglieder0310ueber26() and !$regelantrag->getMitglieder0311bis26() and !$regelantrag->getMitglieder0311ueber26() and !$regelantrag->getMitglieder0312bis26() and !$regelantrag->getMitglieder0312ueber26() ) or ( $regelantrag->getFachverbandsmitglied3() and $regelantrag->getMitglieder0310bis26() and $regelantrag->getMitglieder0310ueber26() and $regelantrag->getMitglieder0311bis26() and $regelantrag->getMitglieder0311ueber26() and $regelantrag->getMitglieder0312bis26() and $regelantrag->getMitglieder0312ueber26() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandsmitglied4() and !$regelantrag->getMitglieder0410bis26() and !$regelantrag->getMitglieder0410ueber26() and !$regelantrag->getMitglieder0411bis26() and !$regelantrag->getMitglieder0411ueber26() and !$regelantrag->getMitglieder0412bis26() and !$regelantrag->getMitglieder0412ueber26() ) or ( $regelantrag->getFachverbandsmitglied4() and $regelantrag->getMitglieder0410bis26() and $regelantrag->getMitglieder0410ueber26() and $regelantrag->getMitglieder0411bis26() and $regelantrag->getMitglieder0411ueber26() and $regelantrag->getMitglieder0412bis26() and $regelantrag->getMitglieder0412ueber26() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandsmitglied5() and !$regelantrag->getMitglieder0510bis26() and !$regelantrag->getMitglieder0510ueber26() and !$regelantrag->getMitglieder0511bis26() and !$regelantrag->getMitglieder0511ueber26() and !$regelantrag->getMitglieder0512bis26() and !$regelantrag->getMitglieder0512ueber26() ) or ( $regelantrag->getFachverbandsmitglied5() and $regelantrag->getMitglieder0510bis26() and $regelantrag->getMitglieder0510ueber26() and $regelantrag->getMitglieder0511bis26() and $regelantrag->getMitglieder0511ueber26() and $regelantrag->getMitglieder0512bis26() and $regelantrag->getMitglieder0512ueber26() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMitglieder', 'blsvspstbauantrag' );
		} */

		/* Muss keine Mannschaften haben
		if ( ! ( $regelantrag->getFachverbandmannschaft1() or $regelantrag->getFachverbandmannschaft2() or $regelantrag->getFachverbandmannschaft3() or $regelantrag->getFachverbandmannschaft4() or $regelantrag->getFachverbandmannschaft5() ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinFachverbandMannschaft', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandmannschaft1() and !$regelantrag->getSchuelerjugend0110() and !$regelantrag->getErwachsene0110() and !$regelantrag->getSchuelerjugend0111() and !$regelantrag->getErwachsene0111() and !$regelantrag->getSchuelerjugend0112() and !$regelantrag->getErwachsene0112() ) or ( $regelantrag->getFachverbandmannschaft1() and $regelantrag->getSchuelerjugend0110() and $regelantrag->getErwachsene0110() and $regelantrag->getSchuelerjugend0111() and $regelantrag->getErwachsene0111() and $regelantrag->getSchuelerjugend0112() and $regelantrag->getErwachsene0112() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMannschaft', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandmannschaft2() and !$regelantrag->getSchuelerjugend0210() and !$regelantrag->getErwachsene0210() and !$regelantrag->getSchuelerjugend0211() and !$regelantrag->getErwachsene0211() and !$regelantrag->getSchuelerjugend0212() and !$regelantrag->getErwachsene0212() ) or ( $regelantrag->getFachverbandmannschaft2() and $regelantrag->getSchuelerjugend0210() and $regelantrag->getErwachsene0210() and $regelantrag->getSchuelerjugend0211() and $regelantrag->getErwachsene0211() and $regelantrag->getSchuelerjugend0212() and $regelantrag->getErwachsene0212() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMannschaft', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandmannschaft3() and !$regelantrag->getSchuelerjugend0310() and !$regelantrag->getErwachsene0310() and !$regelantrag->getSchuelerjugend0311() and !$regelantrag->getErwachsene0311() and !$regelantrag->getSchuelerjugend0312() and !$regelantrag->getErwachsene0312() ) or ( $regelantrag->getFachverbandmannschaft3() and $regelantrag->getSchuelerjugend0310() and $regelantrag->getErwachsene0310() and $regelantrag->getSchuelerjugend0311() and $regelantrag->getErwachsene0311() and $regelantrag->getSchuelerjugend0312() and $regelantrag->getErwachsene0312() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMannschaft', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandmannschaft4() and !$regelantrag->getSchuelerjugend0410() and !$regelantrag->getErwachsene0410() and !$regelantrag->getSchuelerjugend0411() and !$regelantrag->getErwachsene0411() and !$regelantrag->getSchuelerjugend0412() and !$regelantrag->getErwachsene0412() ) or ( $regelantrag->getFachverbandmannschaft4() and $regelantrag->getSchuelerjugend0410() and $regelantrag->getErwachsene0410() and $regelantrag->getSchuelerjugend0411() and $regelantrag->getErwachsene0411() and $regelantrag->getSchuelerjugend0412() and $regelantrag->getErwachsene0412() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMannschaft', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandmannschaft5() and !$regelantrag->getSchuelerjugend0510() and !$regelantrag->getErwachsene0510() and !$regelantrag->getSchuelerjugend0511() and !$regelantrag->getErwachsene0511() and !$regelantrag->getSchuelerjugend0512() and !$regelantrag->getErwachsene0512() ) or ( $regelantrag->getFachverbandmannschaft5() and $regelantrag->getSchuelerjugend0510() and $regelantrag->getErwachsene0510() and $regelantrag->getSchuelerjugend0511() and $regelantrag->getErwachsene0511() and $regelantrag->getSchuelerjugend0512() and $regelantrag->getErwachsene0512() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineMannschaft', 'blsvspstbauantrag' );
		}
		*/
	/*	if ( ! ( $regelantrag->getFachverbandueleiter1() or $regelantrag->getFachverbandueleiter2() or $regelantrag->getFachverbandueleiter3() or $regelantrag->getFachverbandueleiter4() or $regelantrag->getFachverbandueleiter5() ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeinFachverbandUebungsleiter', 'blsvspstbauantrag' );
		} 
		if ( !( ( !$regelantrag->getFachverbandueleiter1() and !$regelantrag->getAnzahl0110() and !$regelantrag->getAnzahl0111() and !$regelantrag->getAnzahl0112() ) or ( $regelantrag->getFachverbandueleiter1() and $regelantrag->getAnzahl0110() and $regelantrag->getAnzahl0111() and $regelantrag->getAnzahl0112() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineUebungsleiter', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandueleiter2() and !$regelantrag->getAnzahl0210() and !$regelantrag->getAnzahl0211() and !$regelantrag->getAnzahl0212() ) or ( $regelantrag->getFachverbandueleiter2() and $regelantrag->getAnzahl0210() and $regelantrag->getAnzahl0211() and $regelantrag->getAnzahl0212() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineUebungsleiter', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandueleiter3() and !$regelantrag->getAnzahl0310() and !$regelantrag->getAnzahl0311() and !$regelantrag->getAnzahl0312() ) or ( $regelantrag->getFachverbandueleiter3() and $regelantrag->getAnzahl0310() and $regelantrag->getAnzahl0311() and $regelantrag->getAnzahl0312() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineUebungsleiter', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandueleiter4() and !$regelantrag->getAnzahl0410() and !$regelantrag->getAnzahl0411() and !$regelantrag->getAnzahl0412() ) or ( $regelantrag->getFachverbandueleiter4() and $regelantrag->getAnzahl0410() and $regelantrag->getAnzahl0411() and $regelantrag->getAnzahl0412() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineUebungsleiter', 'blsvspstbauantrag' );
		}
		if ( !( ( !$regelantrag->getFachverbandueleiter5() and !$regelantrag->getAnzahl0510() and !$regelantrag->getAnzahl0511() and !$regelantrag->getAnzahl0512() ) or ( $regelantrag->getFachverbandueleiter5() and $regelantrag->getAnzahl0510() and $regelantrag->getAnzahl0511() and $regelantrag->getAnzahl0512() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValKeineUebungsleiter', 'blsvspstbauantrag' );
		}
		
		*/
		
		//Kleinantrag
		if ( $regelantrag->getArt() == 1){
			
			if ( ($regelantrag->getFinanzierungzuschuss() > 30000) or ($regelantrag->getFinanzierungzuschuss() > ( 0.2 *  ( $regelantrag->getKostenanteil1() +$regelantrag->getKostenanteil2() + $regelantrag->getKostenanteil3() + $regelantrag->getKostenanteil4() + $regelantrag->getKostenenteil5() ) ) ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzuHoheFoerderungRA', 'blsvspstbauantrag' );
			}
				
			if (  10000 > ( $regelantrag->getKostenanteil1() +$regelantrag->getKostenanteil2() + $regelantrag->getKostenanteil3() + $regelantrag->getKostenanteil4() + $regelantrag->getKostenenteil5() ) )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzugeringeGesamtkostenKA', 'blsvspstbauantrag' );
			}

			if ( $regelantrag->getFinanzierungzuschuss() < 0 )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzugeringeFinanzierungzuschuss', 'blsvspstbauantrag' );
			}
			if ( $regelantrag->getFianzierungkredit() < 0 )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzugeringeFianzierungkredit', 'blsvspstbauantrag' );
			}
		}
		
		
		//Regelantrag
		if ( $regelantrag->getArt() == 2){
			if ( $regelantrag->getFinanzierungzuschuss() > ( 0.3 *  ( $regelantrag->getKostenanteil1() +$regelantrag->getKostenanteil2() + $regelantrag->getKostenanteil3() + $regelantrag->getKostenanteil4() + $regelantrag->getKostenenteil5() ) ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzuHoheFoerderungRA1', 'blsvspstbauantrag' );
			}
				
			if ( $regelantrag->getFinanzierungzuschuss() <= 30000 ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeinRegelantragRA', 'blsvspstbauantrag' );
			}
				
			if (  150000 > ( $regelantrag->getKostenanteil1() +$regelantrag->getKostenanteil2() + $regelantrag->getKostenanteil3() + $regelantrag->getKostenanteil4() + $regelantrag->getKostenenteil5() ) )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzugeringeGesamtkostenRA', 'blsvspstbauantrag' );
			}
	
			if ( $regelantrag->getFinanzierungzuschuss() > ( 0.3 * ( $regelantrag->getGesamtkosten_brutto() ) ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinsmfoerderung', 'blsvspstbauantrag' );
			}
		
			if ( !$regelantrag->getDurchschnittsergebnis() ) {		
				$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeindurchschnittsergebnis', 'blsvspstbauantrag' );		
			}
			
			if ( !$regelantrag->getVorzbaubeginnerkl1() ) {		
				$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeinVorzbaubeginnerkl1', 'blsvspstbauantrag' );		
			}
			
			if ( !$regelantrag->getVorzbaubeginnerkl2() ) {		
				$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeinVorzbaubeginnerkl2', 'blsvspstbauantrag' );		
			}
			
			if  ( 1 > ($regelantrag->getWegfalloefffinanzmittel()  +$regelantrag->getFortbestandgefaehrdung() +$regelantrag->getErsatzloserverlust() +$regelantrag->getEintrittnachteiligerfolgen() +$regelantrag->getNotwendigkeitsonstige() ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinhakenpunkt3b2', 'blsvspstbauantrag' );
			}
			
			if (1 > ($regelantrag->getSmfoerderungbank() +$regelantrag->getSmfoerderungkommune() +$regelantrag->getSmfoerderungprivat())) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinsmfhakenpunkt1b2', 'blsvspstbauantrag') ;
			}
		}
		
		//Katastrophenfall
		if ( ( $regelantrag->getFall() == 8 ) OR ( $regelantrag->getFall() == 9 ) ) {
				
			if ( $regelantrag->getFinanzierungzuschuss() > ( 0.5 *  ( $regelantrag->getKostenanteil1() +$regelantrag->getKostenanteil2() + $regelantrag->getKostenanteil3() + $regelantrag->getKostenanteil4() + $regelantrag->getKostenenteil5() ) ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzuHoheFoerderungKF', 'blsvspstbauantrag' );
			}
				
			if (  10000 > ( $regelantrag->getKostenanteil1() +$regelantrag->getKostenanteil2() + $regelantrag->getKostenanteil3() + $regelantrag->getKostenanteil4() + $regelantrag->getKostenenteil5() ) )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzugeringeGesamtkostenKF', 'blsvspstbauantrag' );
			}
	
		}
	
		
		if ( ($regelantrag->getFinanzierungbarmittel() + $regelantrag->getFinanzierungaleistung() + $regelantrag->getFinanzierungsachleistung() + $regelantrag->getFinanzierunggeldspenden() +  $regelantrag->getFianzierungkredit()  )  < ( 0.1 *  ( $regelantrag->getKostenanteil1() +$regelantrag->getKostenanteil2() + $regelantrag->getKostenanteil3() + $regelantrag->getKostenanteil4() + $regelantrag->getKostenenteil5() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValzuNiedrigeEigenbeteiligung', 'blsvspstbauantrag' );
		}
		
		if ( $regelantrag->getFinanzierungzuschuss()==0 ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineFoerderung', 'blsvspstbauantrag' );
		}
		
		//print_r($erg);die();
		return $erg;
	}	
		
		
	
	/**
	 * validiereRegelantragKV
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag
	 * @return void
	 */
	public function validiereRegelantragKV(Tx_Blsvspstbauantrag_Domain_Model_Regelantrag $regelantrag) {
		$erg = Null;
		
		
	
		
/*		if ( !$regelantrag->getSportlicheentwicklung1() )   {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung1', 'blsvspstbauantrag' );
		}
		if ( !$regelantrag->getSportlicheentwicklung1() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung1', 'blsvspstbauantrag' );
		
		}
		
		
		if ( !$regelantrag->getSportlicheEntwicklung211() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung211', 'blsvspstbauantrag' );
		
		}
		
		
	
		
		if ( !$regelantrag->getSportlicheEntwicklung212() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung212', 'blsvspstbauantrag' );
		
		}
		
		if ( !$regelantrag->getSportlicheEntwicklung213() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung213', 'blsvspstbauantrag' );
		
		}
		
	/*	if ( !$regelantrag->getSportlicheEntwicklung22() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung22', 'blsvspstbauantrag' );
		}
		
if ( !$regelantrag->getSportlicheEntwicklung221() ) {
		
$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung221', 'blsvspstbauantrag' );
		
		}
		
		
		if ( !$regelantrag->getSportlicheEntwicklung222() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung222', 'blsvspstbauantrag' );
		
}
		
if ( !$regelantrag->getSportlicheEntwicklung223() ) {
		
$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung223', 'blsvspstbauantrag' );
		
		}
		
		if ( !$regelantrag->getSportlicheEntwicklung231() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung231', 'blsvspstbauantrag' );
		
}
		
if ( !$regelantrag->getSportlicheEntwicklung232() ) {
		
$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung232', 'blsvspstbauantrag' );
		
		}
		
		if ( !$regelantrag->getSportlicheEntwicklung233() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung233', 'blsvspstbauantrag' );
		
}


		
/*if ( !$regelantrag->getSportlicheEntwicklung3() ) {
		
$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung3', 'blsvspstbauantrag' );
		
		} */
		
		
		
	/*	if ( !$regelantrag->getSportlicheEntwicklung41() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung41', 'blsvspstbauantrag' );
		
}
		
if ( !$regelantrag->getSportlicheEntwicklung42() ) {
		
$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung42', 'blsvspstbauantrag' );
		
		}
		
		if ( !$regelantrag->getSportlicheEntwicklung43() ) {
		
			$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung43', 'blsvspstbauantrag' );
		}*/
		/*
if ( !$regelantrag->getBestehendesportstaetten11() ) {		
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineBestehendesportstaetten11', 'blsvspstbauantrag' );
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung1() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung1', 'blsvspstbauantrag' );
	
	}
	
	
	if ( !$regelantrag->getSportlicheEntwicklung211() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung211', 'blsvspstbauantrag' );
	
	}
	
	
	
	
	if ( !$regelantrag->getSportlicheEntwicklung212() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung212', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung213() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung213', 'blsvspstbauantrag' );
	
	} */
	
/*	if ( !$regelantrag->getSportlicheEntwicklung22() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung22', 'blsvspstbauantrag' );
	
	}*/
	
/*	if ( !$regelantrag->getSportlicheEntwicklung221() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung221', 'blsvspstbauantrag' );
	
	}
	
	
	if ( !$regelantrag->getSportlicheEntwicklung222() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung222', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung223() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung223', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung231() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung231', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung232() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung232', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung233() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung233', 'blsvspstbauantrag' );
	
	} */
	
/*	if ( !$regelantrag->getSportlicheEntwicklung3() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung3', 'blsvspstbauantrag' );
	
	}
*/	
	
/*	
	if ( !$regelantrag->getSportlicheEntwicklung411() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung41', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung421() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung42', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getSportlicheEntwicklung431() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.Valkeinesportlicheentwicklung43', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getBestehendesportstaetten11() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineBestehendesportstaetten11', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getBestehendesportstaetten211()  or !$regelantrag->getBestehendesportstaetten221() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineBestehendesportstaetten211', 'blsvspstbauantrag' );
	
	}
	
	
	
	
	if ( !$regelantrag->getBestehendesportstaetten31() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineBestehendesportstaetten31', 'blsvspstbauantrag' );
	
	}
	 
	
	if ( !$regelantrag->getBestehendesportstaetten41() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineBestehendesportstaetten41', 'blsvspstbauantrag' );
	
	}
	
	
/*	if ( !$regelantrag->getBestehendesportstaetten511() or !$regelantrag->getBestehendesportstaetten521() or !$regelantrag->getBestehendesportstaetten531() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineBestehendesportstaetten511', 'blsvspstbauantrag' );
	
	}

	if ( !$regelantrag->getStellungnahme111() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineStellungnahme111', 'blsvspstbauantrag' );
	
	}
	
	
	if ( !$regelantrag->getStellungnahme21() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineStellungnahme21', 'blsvspstbauantrag' );
	
	}
	
	
	
	if ( !$regelantrag->getStellungnahme31() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineStellungnahme31', 'blsvspstbauantrag' );
	
	}
	
	
	if ( !$regelantrag->getStellungnahme41() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineStellungnahme41', 'blsvspstbauantrag' );
	
	}
	
	if ( !$regelantrag->getStellungnahme51() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineStellungnahme51', 'blsvspstbauantrag' );
	
	}
	
	
	if ( !$regelantrag->getStellungnahme61() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineStellungnahme61', 'blsvspstbauantrag' );
	
	} 
	 
	if ( !$regelantrag->getFinanzierung111() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineFinanzierung111', 'blsvspstbauantrag' );
	
	}
	
	
	if ( !$regelantrag->getFinanzierung211() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineFinanzierung211', 'blsvspstbauantrag' );
	
	
	}
	
	
	if ( !$regelantrag->getFinanzierung31() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineFinanzierung31', 'blsvspstbauantrag' );
	
	
	}
	
	
	if ( !$regelantrag->getFinanzierung41() ) {	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineFinanzierung41', 'blsvspstbauantrag' );	
	}
	
	*/
	if ( !$regelantrag->getSonstiges11() ) {
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineSonstiges11', 'blsvspstbauantrag' );
	
	}
	
	
	if ( !$regelantrag->getSonstiges21() ) { 
	
		$erg[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.ValkeineSonstiges21', 'blsvspstbauantrag' );
	
	}
	
	//print_r($erg);die();
		return $erg;
	
	}
}
?>