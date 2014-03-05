<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Spstbauantrag',
	array(
		'Antragsanforderung' => 'list, show,edit, abgeben,new,create,update,abgebenspeichern,entscheiden,entscheidenspeichern,baubeginn,updateBaubeginn',
		'Regelantrag' => 'list, show, showPdf, edit, update,create, delete, new, abgeben, abgebenspeichern,entscheiden,entscheidenspeichern,kvstellungnahme,kvstellungnahmespeichern',
		
	),
	// non-cacheable actions
	array(
		'Antragsanforderung' => 'list, show, edit, abgeben,create,update,abgebenspeichern,entscheiden,entscheidenspeichern,baubeginn,updateBaubeginn',
		'Regelantrag' => 'list, show, edit, update,create, delete, new,abgeben, abgebenspeichern,entscheiden,entscheidenspeichern,kvstellungnahme,kvstellungnahmespeichern',
	)
);

?>