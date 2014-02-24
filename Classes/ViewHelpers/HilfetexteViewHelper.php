<?php

/**
 * ViewHelper fuer Hilfetexte
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class Tx_Blsvspstbauantrag_ViewHelpers_HilfetexteViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

    /**
     * Konvertiert den Hilfetext fuer die Darstellung mit JS
     *
	 * @param string $htext Hilfetext
	 */
    public function render($htext) {
        return str_replace("\n", '\n', $htext);
    }
}

?>