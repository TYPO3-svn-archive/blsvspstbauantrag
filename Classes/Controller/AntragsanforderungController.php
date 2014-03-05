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
class Tx_Blsvspstbauantrag_Controller_AntragsanforderungController extends Tx_Extbase_MVC_Controller_ActionController {

	
	/**
	 * vereinsnummer
	 *
	 * @var int
	 */
	protected $vereinsnummer = 0;
	
	/**
	 * feuser
	 *
	 * @var int
	 */
	protected $feuser = 0;
	
	/**
	 * ssbadmin
	 *
	 * @var boolean
	 */
	protected $ssbadmin = FALSE;
	
	/**
	 * kv
	 *
	 * @var array
	 */
	protected $kv = NULL;
	
	
	/**
	 * gesperrt
	 *
	 * @var boolean
	 */
	protected $gesperrt = FALSE;
	
	/**
	 * antragsanforderungRepository
	 *
	 * @var Tx_Blsvspstbauantrag_Domain_Repository_AntragsanforderungRepository
	 */
	protected $antragsanforderungRepository;
	
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
	 * injectAntragsanforderungRepository
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Repository_AntragsanforderungRepository $antragsanforderungRepository
	 * @return void
	 */
	public function injectAntragsanforderungRepository(Tx_Blsvspstbauantrag_Domain_Repository_AntragsanforderungRepository $antragsanforderungRepository) {
		$this->antragsanforderungRepository = $antragsanforderungRepository;
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
	 * injectVereinsinfoRepository
	 *
	 * @param Tx_Blsvvereinsinfo_Domain_Repository_VereinsinfoRepository $vereinsinfoRepository
	 * @return void
	 */
	public function injectVereinsinfoRepository(Tx_Blsvvereinsinfo_Domain_Repository_VereinsinfoRepository $vereinsinfoRepository) {
		$this->vereinsinfoRepository = $vereinsinfoRepository;
	}

	/**
	 * action list
	 *
	 * @param array $art
	 * @param array $fall
	 * @param array $status
	 * @param array $bezirk
	 * @param array $kreis
	 * @param string $searchtext
	 * @param boolean $vorzeitigerbaubeginn
	 * @return void
	 */
	public function listAction( $art= Null, $fall = Null, $status= Null, $bezirk = Null, $kreis = Null, $searchtext= Null, $vorzeitigerbaubeginn= Null ) {
		$filter = array();
		parse_str( $_COOKIE['filter'], $filter);
		//print_r( $filter ); exit;
		//print_r($vorzeitigerbaubeginn);

		//die();
		//echo  $_COOKIE['filter'];
		// wenn suche nicht geklickt nimm cookie
		if ( !isset( $kreis ) ) { 
			parse_str( $_COOKIE['filter'], $filter);
			$art 			= $filter['tx_blsvspstbauantrag_spstbauantrag'][ 'art' ];
			$fall			= $filter['tx_blsvspstbauantrag_spstbauantrag'][ 'fall' ];
			$bezirk 		= $filter['tx_blsvspstbauantrag_spstbauantrag'][ 'bezirk' ];
			$kreis 			= $filter['tx_blsvspstbauantrag_spstbauantrag'][ 'kreis' ];
			$status         = $filter['tx_blsvspstbauantrag_spstbauantrag'][ 'status' ];
			$searchtext 	= $filter['tx_blsvspstbauantrag_spstbauantrag'][ 'searchtext' ];
			$vorzeitigerbaubeginn	= $filter['tx_blsvspstbauantrag_spstbauantrag'][ 'vorzeitigerbaubeginn' ];
			if ( $vorzeitigerbaubeginn=='')	 $vorzeitigerbaubeginn=2;
			
			
		}
		
		$kv=0;
		if( $this->ssbadmin === TRUE ){
			$antragsanforderungen = $this->antragsanforderungRepository->findAll( $art, $fall, $bezirk, $kreis, $searchtext, $status, $vorzeitigerbaubeginn );
		}
		else
			if(	$this->kv) {
			$kv=1;
			$antragsanforderungen = array();
			
					foreach ($this->kv as $kreis){
						//$antragsanforderungen = array_merge( $antragsanforderungen, $this->antragsanforderungRepository->findByBlsvkreis( $kreis ) );
						$antragsanforderungen = $this->antragsanforderungRepository->findByBlsvkreis( $kreis );
						
					}
			}
			else {
				$antragsanforderungen = $this->antragsanforderungRepository->findByVereinsnummer( $this->vereinsnummer );
			}
		
		$this->view->assign('antragsanforderungen', $antragsanforderungen);
		//echo '<br /><br /><br /><br /><br />admin' . $this->ssbadmin;
		$this->view->assign('admin', $this->ssbadmin);
		$this->view->assign('verein', $this->vereinsnummer);
		$this->view->assign('kv', $kv);
		$this->view->assign('gesperrt', $this->gesperrt);
		$this->view->assign('kreis', $kreis);
		$this->view->assign('bezirk', $bezirk);
		$this->view->assign('art', $art);
		$this->view->assign('fall', $fall);
		$this->view->assign('status', $status);
		$this->view->assign('searchtext', $searchtext);
		$this->view->assign('vorzeitigerbaubeginn', $vorzeitigerbaubeginn);
	}

	/**
	 * action show
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function showAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
		
		
		
		$this->view->assign('antragsanforderung', $antragsanforderung);
	}
	
	
	/**
	 * action baubeginn
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function baubeginnAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
		$this->view->assign('antragsanforderung', $antragsanforderung);
	}

	/**
	 * action new
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $newAntragsanforderung
	 * @dontvalidate $newAntragsanforderung
	 * @return void
	 */
	public function newAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $newAntragsanforderung = NULL) {
		if ($newAntragsanforderung == NULL) { // workaround for fluid bug ##5636
			$newAntragsanforderung = t3lib_div::makeInstance('Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung');
		}
		$newAntragsanforderung->setVereinsnummer($this->vereinsnummer);
		$newAntragsanforderung->setFeuser($this->feuser);
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll());
		$this->view->assign('newAntragsanforderung', $newAntragsanforderung);
	}

	/**
	 * action create
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $newAntragsanforderung
	 * @dontvalidate $newAntragsanforderung
	 * @return void
	 */
	public function createAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $newAntragsanforderung) {
		
		$vereinsinfo = $this->vereinsinfoRepository->findOneByVereinsid( $this->vereinsnummer );
		if( $vereinsinfo ){
		
			$newAntragsanforderung->setFeuser( $this->feuser );
			$newAntragsanforderung->setStatus( 1 );
			$newAntragsanforderung->setBlsvkreis( $vereinsinfo->getKreisid() );
			$newAntragsanforderung->setStimmkreis( $vereinsinfo->getStimmkreisid() );
			$newAntragsanforderung->setVereinsname( $vereinsinfo->GetVereinsnamelang() );
			
			$this->antragsanforderungRepository->add( $newAntragsanforderung );
			

			$valErrors = $this->validiereAntragsanforderung( $newAntragsanforderung );
			if ( $valErrors  ){
				foreach ( $valErrors as $error ){
					$this->flashMessageContainer->add($error);
				}
				$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Validierungsfehler', 'blsvspstbauantrag' ));
					
			}
			else{
				$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.keineValidierungsfehler', 'blsvspstbauantrag' ));
					
			}
			
			
			$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Vorantraggespeichert', 'blsvspstbauantrag' ));
		}
		else{
			$this->flashMessageContainer->add('Ungültige Vereinsnummer! Bitte wenden Sie sich an den BLSV!');
		}	
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function editAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
		
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll() );
		$this->view->assign('antragsanforderung', $antragsanforderung);
	}

	/**
	 * action editantrag
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function editantragAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
	
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll() );
		$this->view->assign('antragsanforderung', $antragsanforderung);
	}
	
	/**
	 * action update
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 *  @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function updateAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
		
		
		
		$antragsanforderung->setFeuser($this->feuser);
		if ( $antragsanforderung->getStatus() == 4 ) {
			$antragsanforderung->setStatus( 5 );
		} 
		else {
			$antragsanforderung->setStatus( 1 );
		}
		
		$valErrors = $this->validiereAntragsanforderung($antragsanforderung);
		if ( $valErrors  ){
			foreach ( $valErrors as $error ){
				$this->flashMessageContainer->add($error);
			}
			$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Validierungsfehler', 'blsvspstbauantrag' ));
			
		} 
		else{
			$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.keineValidierungsfehler', 'blsvspstbauantrag' ));
			
		}
		
		$this->antragsanforderungRepository->update($antragsanforderung);
		$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Vorantraggespeichert', 'blsvspstbauantrag' ));
		$this->redirect('list');
	}
	
	
	/**
	 * action update
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 *  @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function updateBaubeginnAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
	
		
		//print_r($antragsanforderung); die();
		$antragsanforderung->setFeuser($this->feuser);
		$this->antragsanforderungRepository->update($antragsanforderung);
		$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Vorantraggespeichert', 'blsvspstbauantrag' ));
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @return void
	 */
	public function deleteAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
		$this->antragsanforderungRepository->remove($antragsanforderung);
		$this->flashMessageContainer->add('Your Antragsanforderung was removed.');
		$this->redirect('list');
	}

	/**
	 * action abgeben
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function abgebenAction( Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {
		
		$abgeben=1;
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll() );
		$valErrors = $this->validiereAntragsanforderung($antragsanforderung);
		if ( $valErrors  ){
			foreach ( $valErrors as $error ){
				$this->flashMessageContainer->add($error);
			}
			$this->flashMessageContainer->add( tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.Validierungsfehler', 'blsvspstbauantrag' ));
			$abgeben=0;
		}
		
		$this->view->assign('antragsanforderung', $antragsanforderung);
		$this->view->assign('abgeben', $abgeben);
	}
	
	/**
	 * action entscheiden
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function entscheidenAction( Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {
	
		$this->view->assign('hilfetexte', $this->hilfetexteRepository->findAll() );
		$this->view->assign('antragsanforderung', $antragsanforderung);
	
	}	
	
	/**
	 * action abgebenspeichern
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 *  @dontvalidate $antragsanforderung
	 * @return void
	 */
	public function abgebenspeichernAction( Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung ) {
	
		$antragsanforderung->setFeuser($this->feuser);
		
		  if ( ( $antragsanforderung->getStatus( ) == 7 ) ){
			
		  	$art = $antragsanforderung->getArt();
		  	$artShort = tx_Extbase_Utility_Localization::translate( "tx_blsvspstbauantrag_domain_model_antragsanforderung.artkurz" . $art, 'blsvspstbauantrag' );
		  		
		  	$subject =   $artShort . ' - '  . $antragsanforderung->getVereinsname()  . ', '  . $antragsanforderung->getVereinsnummer() .  ', ' . tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.emailbestaettigungheaderKV', 'blsvspstbauantrag' );
			$emailBody = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.emailbestaettigungKV', 'blsvspstbauantrag' );
			$antragsanforderung->setStatus( 8 );;
		} else	
		
		
		if ( ( $antragsanforderung->getStatus( ) == 4 ) or ( $antragsanforderung->getStatus( ) == 5 ) ){
			
			$parameter[0] = $antragsanforderung->getUid();
			$parameter[1] = $antragsanforderung->getVereinsnummer();			
			
			$subject =  tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.emailbestaettigungheader', 'blsvspstbauantrag', $parameter );
			$emailBody = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_regelantrag.emailbestaettigung', 'blsvspstbauantrag' );
			$antragsanforderung->setStatus( 7 );;
			
			
		} else {	

			$art = $antragsanforderung->getArt();
			$artShort = tx_Extbase_Utility_Localization::translate( "tx_blsvspstbauantrag_domain_model_antragsanforderung.artkurz" . $art, 'blsvspstbauantrag' );
			
			$subject =   $artShort . ' - '  . $antragsanforderung->getVereinsname()  . ', '  . $antragsanforderung->getVereinsnummer() .  ', ' .tx_Extbase_Utility_Localization::translate('tx_blsvspstbauantrag_domain_model_antragsanforderung.emailbestaettigungheader', 'blsvspstbauantrag' );
			$emailBody = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailbestaettigunghtml', 'blsvspstbauantrag' );
			$antragsanforderung->setStatus( 2 );
		}
		
		
		//echo $subject . ' <br />' . $emailBody;die();
		$this->antragsanforderungRepository->update($antragsanforderung);
		
		
		//mail versenden
		$recipient = $this->antragsanforderungRepository->findKvByKreisid( $antragsanforderung->getBlsvkreis() );
		$recipient[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailsporttstaetenbaublsvde', 'blsvspstbauantrag' );
		
		$recipient[] = $antragsanforderung->getAnsprechpartneremail();
		
		foreach ($recipient as $key => $email ){
			if (!$email or $email='') $recipient[$key]="sportstaettenbau@blsv.de";			
		}
		
				
		
		$sender = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailsporttstaetenbaublsvde', 'blsvspstbauantrag' );
		
		
		$message = t3lib_div::makeInstance('t3lib_mail_Message');
		$message->setTo($recipient)
		     ->setFrom($sender)
	         ->setSubject($subject);

	    // Possible attachments here
		//foreach ($attachments as $attachment) {
		//    $message->attach($attachment);
		//}
	
		// Plain text example
		//$message->setBody($emailBody, 'text/plain');
       
    	//HTML Email
     	$message->setBody($emailBody, 'text/html');
 
    	$message->send(); 
    	//echo $message->isSent(); die();		
		$this->flashMessageContainer->add(tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.abgebengespeichert', 'blsvspstbauantrag' ) );
		$this->redirect('list');
	}
	
	/**
	 * action entscheidenspeichern
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @param integer $fall
	 * @param integer $art
	 *  @dontvalidate $antragsanforderung
	 * @return void
	 */ 
	public function entscheidenspeichernAction(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung,  $fall=0, $art=0) {
	
		$antragsanforderung->setFeuser($this->feuser);
		//$antragsanforderung->setStatus( 2 );
		$this->antragsanforderungRepository->update($antragsanforderung);
		
		if ( $antragsanforderung->getStatus() == 4 ){
			$newRegelantrag = t3lib_div::makeInstance( 'Tx_Blsvspstbauantrag_Domain_Model_Regelantrag' );
			
			$newRegelantrag->setVereinsnummer( $antragsanforderung->GetVereinsnummer() );
			$newRegelantrag->setVereinsname( $antragsanforderung->GetVereinsname() );
			$newRegelantrag->setBlsvkreis( $antragsanforderung->GetBlsvkreis() );
			$newRegelantrag->setStimmkreis( $antragsanforderung->GetStimmkreis() );

			$newRegelantrag->setAnsprechpartnername( $antragsanforderung->getAnsprechpartnername() );
			$newRegelantrag->setAnsprechpartnervorname( $antragsanforderung->GetAnsprechpartnervorname() );
			$newRegelantrag->setAnsprechpartenertitel( $antragsanforderung->GetAnsprechpartnertitel() );
			$newRegelantrag->setAnsprechpartnerteldienst( $antragsanforderung->GetAnsprechpartnertelefondienst() );
			$newRegelantrag->setAnsprechpartnertelprivat( $antragsanforderung->GetAnsprechpartnertelefonprivat() );
			$newRegelantrag->setAnsprechpartnermobil( $antragsanforderung->GetAnsprechpartnermobil() );
			$newRegelantrag->setAnsprechpartneremail( $antragsanforderung->GetAnsprechpartneremail() );
			$newRegelantrag->setAnsprechpartnerfax( $antragsanforderung->GetAnsprechpartnerfax() );

			$newRegelantrag->setVerwendungszweck1( $antragsanforderung->GetMassnahme1() );
			$newRegelantrag->setVerwendungszweck2( $antragsanforderung->GetMassnahme2() );
			$newRegelantrag->setVerwendungszweck3( $antragsanforderung->GetMassnahme3() );
			$newRegelantrag->setVerwendungszweck4( $antragsanforderung->GetMassnahme4() );
			$newRegelantrag->setVerwendungszweck5( $antragsanforderung->GetMassnahme5() );
			$newRegelantrag->setKostenanteil1( $antragsanforderung->GetMassnahmekosten1() );
			$newRegelantrag->setKostenanteil2( $antragsanforderung->GetMassnahmekosten2() );
			$newRegelantrag->setKostenanteil3( $antragsanforderung->GetMassnahmekosten3() );
			$newRegelantrag->setKostenanteil4( $antragsanforderung->GetMassnahmekosten4() );
			$newRegelantrag->setKostenenteil5( $antragsanforderung->GetMassnahmekosten5() );

			$newRegelantrag->setFinanzierungbarmittel( $antragsanforderung->GetBarmittel() );
			$newRegelantrag->setFinanzierungaleistung( $antragsanforderung->GetEigeneleistungen() );
			$newRegelantrag->setFinanzierungsachleistung( $antragsanforderung->GetUnendgeltlichesachleistungen() );
			$newRegelantrag->setFianzierungkommune( $antragsanforderung->getFianzierungkommune() );
			$newRegelantrag->setFinanzierunglkr( $antragsanforderung->GetFinanzierunglkr() );
			$newRegelantrag->setFinanzierungsonstige( $antragsanforderung->GetZuschuesse() );
			$newRegelantrag->setFinanzierungzuschuss( $antragsanforderung->GetBeantragtefoerderung() );
			$newRegelantrag->setFinanzierungvorsteuer( $antragsanforderung->GetFinanzierungvorsteuer() );
			$newRegelantrag->setFinanzierungdarlehen( $antragsanforderung->GetFremdgelder() );
				
			$newRegelantrag->setArt( $art );
			$newRegelantrag->setFall( $fall );
			$newRegelantrag->setAntragsnummer1( $antragsanforderung ); 
			$this->regelantragRepository->Add($newRegelantrag);
			
			$artShort = tx_Extbase_Utility_Localization::translate( "tx_blsvspstbauantrag_domain_model_antragsanforderung.artkurz" . $art , 'blsvspstbauantrag' );
			
			$subject = $artShort . ' - '  . $antragsanforderung->getVereinsname()  . ', '  . $antragsanforderung->getVereinsnummer() .  ', ' . " - Anforderung Antragsunterlagen vom ".date("d.m.Y", $antragsanforderung->getTstamp() );
			$emailBody = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailbestaettigungannahmeanforderung', 'blsvspstbauantrag',array(1 => nl2br( $antragsanforderung->getBegruendungannahme() ) ) );
			
			}
			
			
			if ( $antragsanforderung->getStatus() == 3 ){
				$art = $antragsanforderung->getArt();
				$artShort = tx_Extbase_Utility_Localization::translate( "tx_blsvspstbauantrag_domain_model_antragsanforderung.artkurz" . $art , 'blsvspstbauantrag' );
				$subject = $artShort . ' - '  . $antragsanforderung->getVereinsname()  . ', '  . $antragsanforderung->getVereinsnummer() .  ', ' . "Anforderung Antragsunterlagen vom ".date("d.m.Y",$antragsanforderung->getTstamp());
				$begr[0] = nl2br( $antragsanforderung->getBegruendungablehnung() );
				$emailBody = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailbestaettigungablehnunganforderung', 'blsvspstbauantrag', $begr );
			}
			
			if ( $antragsanforderung->getStatus() == 9 ){
				$subject = "Entscheidung  über die Annahme des  Antrages vom ".date("d.m.Y",$antragsanforderung->getTstamp())." aus myBLSV für Verein " . $antragsanforderung->getVereinsnummer();
				$begr[0] = nl2br( $antragsanforderung->getBegruendungablehnung() );
				$emailBody = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailbestaettigungablehnungantrag', 'blsvspstbauantrag', $begr );
				
			}
			
			
			if ( $antragsanforderung->getStatus() == 10 ){
				$subject = "Entscheidung  über die Annahme des  Antrages vom ".date("d.m.Y",$antragsanforderung->getTstamp())." aus myBLSV für Verein " . $antragsanforderung->getVereinsnummer();
				$emailBody = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailbestaettigungannahmeantrag', 'blsvspstbauantrag',array(1 => nl2br( $antragsanforderung->getBegruendungannahme() ) ) );
					
			}			
			
			//mail versenden
			$recipient = $this->antragsanforderungRepository->findKvByKreisid( $antragsanforderung->getBlsvkreis() );
			$recipient[] = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailsporttstaetenbaublsvde', 'blsvspstbauantrag' );
			
			$recipient[] = $antragsanforderung->getAnsprechpartneremail();
			
			foreach ($recipient as $key => $email ){
				if (!$email or $email='') $recipient[$key]="sportstaettenbau@blsv.de";
			
			}
			
			
			$sender = tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.emailsporttstaetenbaublsvde', 'blsvspstbauantrag' );
			
			$message = t3lib_div::makeInstance('t3lib_mail_Message');
			$message->setTo($recipient)
			->setFrom($sender)
			->setSubject($subject);
			
			$message->setBody($emailBody, 'text/html');
			
			$message->send();
			
						
		$this->flashMessageContainer->add(tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.entscheidenspeichern', 'blsvspstbauantrag' ) );
		$this->redirect('list');
	}

	/**
	 * action freischalten
	 *
	 * @return void
	 */
	public function freischaltenAction() {

	}

	/**
	 * hilfetexteRepository
	 *
	 * @var Tx_Blsvspstbauantrag_Domain_Repository_hilfetexteRepository
	 */
	protected $hilfetexteRepository;
	
	
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
	 * validiereAntragsanforderung
	 *
	 * @param Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung
	 * @return void
	 */
	public function validiereAntragsanforderung(Tx_Blsvspstbauantrag_Domain_Model_Antragsanforderung $antragsanforderung) {
		$erg = Null;
		
		// Wenn kein Fall angekreuzt
		if ( !($antragsanforderung->getFall1() or  $antragsanforderung->getFall2() or  $antragsanforderung->getFall3()) ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeinFall', 'blsvspstbauantrag' );
		}
		if ( !$antragsanforderung->getAnsprechpartnername() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeinName', 'blsvspstbauantrag' );
		}
		if ( !$antragsanforderung->getAnsprechpartnervorname() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeinVorname', 'blsvspstbauantrag' );
		}
		if ( !$antragsanforderung->getAnsprechpartneremail() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeinEmail', 'blsvspstbauantrag' );
		}
		elseif ( !preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-.]+\.([a-zA-Z]{2,4})$/", $antragsanforderung->getAnsprechpartneremail() ) ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeinEmail', 'blsvspstbauantrag' );
		}
		
		
		if ( !$antragsanforderung->getAnsprechpartnertelefondienst() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeinTelefon', 'blsvspstbauantrag' );
		}
		
		if ( ! ( $antragsanforderung->getMassnahme1() or $antragsanforderung->getMassnahme2() or $antragsanforderung->getMassnahme3() or $antragsanforderung->getMassnahme4() or $antragsanforderung->getMassnahme5() ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeineMassnahme', 'blsvspstbauantrag' );
		}
		
		
		if ( ( $antragsanforderung->getMassnahme1() XOR  $antragsanforderung->getMassnahmekosten1() ) OR ( $antragsanforderung->getMassnahme2() XOR  $antragsanforderung->getMassnahmekosten2() ) OR ( $antragsanforderung->getMassnahme3() XOR  $antragsanforderung->getMassnahmekosten3() ) OR ( $antragsanforderung->getMassnahme4() XOR  $antragsanforderung->getMassnahmekosten4() ) OR ( $antragsanforderung->getMassnahme5() XOR  $antragsanforderung->getMassnahmekosten5() ) ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeineMassnahmenkosten', 'blsvspstbauantrag' );
		}
		
		if ( !$antragsanforderung->getBegruendung() ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeineBegruendung', 'blsvspstbauantrag' );
		}
		if ( !$antragsanforderung->getErklaerung1() or !$antragsanforderung->getErklaerung2()  ){
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValKeineErklaerung', 'blsvspstbauantrag' );
		}
		
		
		
		
		
		//Kleinantrag
		if ( $antragsanforderung->getArt() == 1){
			
			if ( $antragsanforderung->getBeantragtefoerderung() > 30000 or $antragsanforderung->getBeantragtefoerderung() > ( 0.2 *  ( $antragsanforderung->getMassnahmekosten1() +$antragsanforderung->getMassnahmekosten2() + $antragsanforderung->getMassnahmekosten3() + $antragsanforderung->getMassnahmekosten4() + $antragsanforderung->getMassnahmekosten5() ) ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValzuHoheFoerderungKA', 'blsvspstbauantrag' );
			}
			
			if (  10000 > ( $antragsanforderung->getMassnahmekosten1() +$antragsanforderung->getMassnahmekosten2() + $antragsanforderung->getMassnahmekosten3() + $antragsanforderung->getMassnahmekosten4() + $antragsanforderung->getMassnahmekosten5() ) )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValzugeringeGesamtkostenKA', 'blsvspstbauantrag' );
			}
			
		}
		

		//Regelantrag
		if ( $antragsanforderung->getArt() == 2){
			if ( $antragsanforderung->getBeantragtefoerderung() > ( 0.3 *  ( $antragsanforderung->getMassnahmekosten1() +$antragsanforderung->getMassnahmekosten2() + $antragsanforderung->getMassnahmekosten3() + $antragsanforderung->getMassnahmekosten4() + $antragsanforderung->getMassnahmekosten5() ) ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValzuHoheFoerderungRA', 'blsvspstbauantrag' );
			}
			
			if ( $antragsanforderung->getBeantragtefoerderung() <= 30000 ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValkeinRegelantragRA', 'blsvspstbauantrag' );
			}
			
			if (  150000 > ( $antragsanforderung->getMassnahmekosten1() +$antragsanforderung->getMassnahmekosten2() + $antragsanforderung->getMassnahmekosten3() + $antragsanforderung->getMassnahmekosten4() + $antragsanforderung->getMassnahmekosten5() ) )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValzugeringeGesamtkostenRA', 'blsvspstbauantrag' );
			}
				
		}
		
		//negative Fremdfinazierung
		if ( 0 > $antragsanforderung->getFremdgelder() ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValnegativeFremdgelder', 'blsvspstbauantrag' );
		}
		//Katastrophenfall
		if ( $antragsanforderung->getArt() == 3){
			
			if ( $antragsanforderung->getBeantragtefoerderung() > ( 0.5 *  ( $antragsanforderung->getMassnahmekosten1() +$antragsanforderung->getMassnahmekosten2() + $antragsanforderung->getMassnahmekosten3() + $antragsanforderung->getMassnahmekosten4() + $antragsanforderung->getMassnahmekosten5() ) ) ) {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValzuHoheFoerderungKF', 'blsvspstbauantrag' );
			}
			
			if (  10000 > ( $antragsanforderung->getMassnahmekosten1() +$antragsanforderung->getMassnahmekosten2() + $antragsanforderung->getMassnahmekosten3() + $antragsanforderung->getMassnahmekosten4() + $antragsanforderung->getMassnahmekosten5() ) )  {
				$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValzugeringeGesamtkostenKF', 'blsvspstbauantrag' );
			}
				
		}
		

		if ( ($antragsanforderung->getBarmittel() + $antragsanforderung->getEigeneleistungen() + $antragsanforderung->getUnendgeltlichesachleistungen() + $antragsanforderung->getGeldspenden() + + $antragsanforderung->getFremdgelder()  )  < ( 0.1 *  ( $antragsanforderung->getMassnahmekosten1() +$antragsanforderung->getMassnahmekosten2() + $antragsanforderung->getMassnahmekosten3() + $antragsanforderung->getMassnahmekosten4() + $antragsanforderung->getMassnahmekosten5() ) ) ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValzuNiedrigeEigenbeteiligung', 'blsvspstbauantrag' );
		}
		if ( $antragsanforderung->getBeantragtefoerderung()==0 ) {
			$erg[] =   tx_Extbase_Utility_Localization::translate( 'tx_blsvspstbauantrag_domain_model_antragsanforderung.ValkeineFoerderung', 'blsvspstbauantrag' );
		}
		
		
		//print_r($erg);die();
		return $erg;
	}
	
	
	
	
}
?>