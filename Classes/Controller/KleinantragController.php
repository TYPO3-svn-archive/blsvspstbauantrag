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
class Tx_Blsvspstbauantrag_Controller_KleinantragController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$kleinantrags = $this->kleinantragRepository->findAll();
		$this->view->assign('kleinantrags', $kleinantrags);
	}

	/**
	 * action show
	 *
	 * @param Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag
	 * @return void
	 */
	public function showAction(Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag) {
		$this->view->assign('kleinantrag', $kleinantrag);
	}

	/**
	 * action new
	 *
	 * @param Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $newKleinantrag
	 * @dontvalidate $newKleinantrag
	 * @return void
	 */
	public function newAction(Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $newKleinantrag = NULL) {
		
		$this->view->assign('newKleinantrag', $newKleinantrag);
	}

	/**
	 * action create
	 *
	 * @param Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $newKleinantrag
	 * @return void
	 */
	public function createAction( Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $newKleinantrag ) {
		$this->kleinantragRepository->add($newKleinantrag);
		$this->flashMessageContainer->add('Your new Kleinantrag was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag
	 * @return void
	 */
	public function editAction(Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag) {
		$this->view->assign('kleinantrag', $kleinantrag);
	}

	/**
	 * action update
	 *
	 * @param Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag
	 * @return void
	 */
	public function updateAction(Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag) {
		$this->kleinantragRepository->update($kleinantrag);
		$this->flashMessageContainer->add('Your Kleinantrag was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag
	 * @return void
	 */
	public function deleteAction(Tx_Blsvsportstaettenbauantrag_Domain_Model_Kleinantrag $kleinantrag) {
		$this->kleinantragRepository->remove($kleinantrag);
		$this->flashMessageContainer->add('Your Kleinantrag was removed.');
		$this->redirect('list');
	}

}
?>