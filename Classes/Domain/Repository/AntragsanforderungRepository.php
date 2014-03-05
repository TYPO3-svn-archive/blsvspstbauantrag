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
 * @package blsvsportstaettenbauantrag
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Blsvspstbauantrag_Domain_Repository_AntragsanforderungRepository extends Tx_Extbase_Persistence_Repository {
	
	
	/**
	 * holt den/die zuständigen Kreisbeauftragten
	 *
	 * @param integer $teilnahme Teilnahme die geprueft werden soll
	 * @return void
	 */
	public function findKvByKreisid( $kreisid ){
		$erg= array();
		$sql = "select fe_users.uid as uid,fe_users.username, fe_users.email as ansprechpartneremail from fe_groups,fe_users where (fe_groups.TSconfig like '%tx_blsvspstbauantrag.kreis." . $kreisid . " = " . $kreisid . "%') and ( FIND_IN_SET(fe_groups.uid, fe_users.usergroup) )";
		
		$query = $this->createQuery();
		$query->statement ($sql );
		$ergebnisse = $query->execute();
		Foreach ( $ergebnisse as $erg ) {
			if ($erg->getAnsprechpartneremail() ) {
			$emails[] =  $erg->getAnsprechpartneremail();
		}
		}		
		return $emails;
	}
	
	

	/**
	 * holt den/die zuständigen Kreisbeauftragten
	 *
	 * @param array $art
	 * @param array $fall
	 * @param array $bezirk
	 * @param array $kreis
	 * @param string $searchtext
	 * @param boolean $vorzeitigerbaubeginn
	 * 
	 * @return void
	 */
	public function findAll( $art= Null, $fall = Null, $bezirke = Null, $kreis = Null, $searchtext='', $status= Null, $vorzeitigerbaubeginn = Null ){
		$erg= array();
		
		$query = $this->createQuery();
		
		if ( $art[1] or  $art[2]) { 
			$strArt = implode(",", $art); 
			$where[] = $query->in('art', $art);
		}
		
		if ($fall) {
			$where[] = $query->in('fall', $fall);
		}
		if ($status) {
			$where[] = $query->in('status', $status);
		}
		
		
		foreach ($bezirke as $bezirk ) 
		if ( $bezirk ) {
			$wherebezirk[] = $query->equals('blsvkreis div 100', $bezirk);
			echo ' - ' . $bezirk;
		}
		if ( $wherebezirk ) {
			$where[] = $query->logicalOr( $wherebezirk );
		}
		
		if ($kreis) {
			$where[] = $query->in('blsvkreis', $kreis);
		}

		if ($searchtext) {
			
			if ( ctype_digit ( $searchtext ) ){
				$where  =array (	0 => $query->logicalOr(
							array(
								$query->equals('uid', $searchtext),
								$query->equals('vereinsnummer',  $searchtext)
						 ) ) );
			}
			else{
				$where[] = $query->logicalOr(  array(
	            	$query->like('vereinsname', '%' . $searchtext . '%'),
					$query->like('ansprechpartnervorname', '%' . $searchtext . '%'),
					$query->like('begruendung', '%' . $searchtext . '%'),
					$query->like('begruendungannahme', '%' . $searchtext . '%'),
					$query->like('begruendungablehnung', '%' . $searchtext . '%'),
	             	$query->like('ansprechpartnername', '%' . $searchtext . '%')
	         	) );
			}	
		}
    
		if ($vorzeitigerbaubeginn==1) {
			$where[] = $query->equals('vorzeitigerbaubeginn', 1);
		}
		elseif ($vorzeitigerbaubeginn==0)
		{
			$where[] = $query->equals('vorzeitigerbaubeginn', 0);
		}
		
		if ($where){
			$query->matching( $query->logicalAnd( $where ) );
		}
		
		$erg = $query->execute();
	
		return $erg;
	}
	

}
?>