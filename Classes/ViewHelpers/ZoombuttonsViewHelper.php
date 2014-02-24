<?php

/**
 * ViewHelper fuer Zoombuttons
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class Tx_Blsvspstbauantrag_ViewHelpers_ZoombuttonsViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * render Zoombuttons
	 */
    public function render() {
		$extPath = t3lib_extMgm::extPath('blsvspstbauantrag');
		$layoutRootPath = $extPath . 'Resources/Private/Layouts/';
		$templatePathAndFilename = $extPath . 'Resources/Private/Templates/Zoombuttons/Zoombuttons.html';
		
		$view = new Tx_Fluid_View_StandaloneView;
		$view->setFormat('html');
		$view->setTemplatePathAndFilename($templatePathAndFilename);
		$view->setLayoutRootPath($layoutRootPath);
		$html = $view->render();
		
    	return $html;
    }
}
?>