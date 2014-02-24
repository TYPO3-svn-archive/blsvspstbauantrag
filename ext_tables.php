<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Spstbauantrag',
	'Sportstättenbau Antragsstellung'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Sportstättenbau Antragsstellung');

t3lib_extMgm::addLLrefForTCAdescr('tx_blsvspstbauantrag_domain_model_antragsanforderung', 'EXT:blsvspstbauantrag/Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_antragsanforderung.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_blsvspstbauantrag_domain_model_antragsanforderung');
$TCA['tx_blsvspstbauantrag_domain_model_antragsanforderung'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung',
		'label' => 'status',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'status,art,fall1,fall2,fall3,vereinsnummer,ansprechpartnername,ansprechpartnervorname,ansprechpartnertitel,ansprechpartnertelefondienst,ansprechpartnertelefonprivat,ansprechpartnermobil,ansprechpartnerfax,ansprechpartneremail,baugenehmigungspflichtig,massnahme1,massnahmekosten1,massnahme2,massnahmekosten2,massnahme3,massnahmekosten3,massnahme4,massnahmekosten4,massnahme5,massnahmekosten5,barmittel,eigeneleistungen,geldspenden,zuschuesse,fremdgelder,beantragtefoerderung,begruendung,erklaerung1,erklaerung2,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Antragsanforderung.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_antragsanforderung.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_blsvspstbauantrag_domain_model_kleinantrag', 'EXT:blsvspstbauantrag/Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_kleinantrag.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_blsvspstbauantrag_domain_model_kleinantrag');
$TCA['tx_blsvspstbauantrag_domain_model_kleinantrag'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_kleinantrag',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,vorname,antragsnummer,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Kleinantrag.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_kleinantrag.gif'
	),
);




t3lib_extMgm::addLLrefForTCAdescr('tx_blsvspstbauantrag_domain_model_regelantrag', 'EXT:blsvspstbauantrag/Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_regelantrag.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_blsvspstbauantrag_domain_model_regelantrag');
$TCA['tx_blsvspstbauantrag_domain_model_regelantrag'] = array(
		'ctrl' => array(
				'title'	=> 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag',
				'label' => 'name',
				'tstamp' => 'tstamp',
				'crdate' => 'crdate',
				'cruser_id' => 'cruser_id',
				'dividers2tabs' => TRUE,
				'sortby' => 'sorting',
				'versioningWS' => 2,
				'versioning_followPages' => TRUE,
				'origUid' => 't3_origuid',
				'languageField' => 'sys_language_uid',
				'transOrigPointerField' => 'l10n_parent',
				'transOrigDiffSourceField' => 'l10n_diffsource',
				'delete' => 'deleted',
				'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
				),
				'searchFields' => 'name,vorname,antragsnummer,',
				'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Regelantrag.php',
				'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_regelantrag.gif'
		),
);




t3lib_extMgm::addLLrefForTCAdescr('tx_blsvspstbauantrag_domain_model_bestandssicherung', 'EXT:blsvspstbauantrag/Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_bestandssicherung.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_blsvspstbauantrag_domain_model_bestandssicherung');
$TCA['tx_blsvspstbauantrag_domain_model_bestandssicherung'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_bestandssicherung',
		'label' => 'test',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'test,antragsnummer,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Bestandssicherung.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_bestandssicherung.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_blsvspstbauantrag_domain_model_hilfetexte', 'EXT:blsvspstbauantrag/Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_hilfetexte.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_blsvspstbauantrag_domain_model_hilfetexte');
$TCA['tx_blsvspstbauantrag_domain_model_hilfetexte'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_hilfetexte',
		'label' => 'heading',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'heading,hilfekurz,hilfelang,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Hilfetexte.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_hilfetexte.gif'
	),
);

?>