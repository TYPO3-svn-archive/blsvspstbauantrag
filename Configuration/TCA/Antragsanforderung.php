<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_blsvspstbauantrag_domain_model_antragsanforderung'] = array(
	'ctrl' => $TCA['tx_blsvspstbauantrag_domain_model_antragsanforderung']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, status, feuser, art, fall1, fall2, fall3,vorzeitigerbaubeginn, vereinsnummer, blsvkreis, stimmkreis,vereinsname, ansprechpartnername, ansprechpartnervorname, ansprechpartnertitel, ansprechpartnertelefondienst, ansprechpartnertelefonprivat, ansprechpartnermobil, ansprechpartnerfax, ansprechpartneremail, baugenehmigungspflichtig, massnahme1, massnahmekosten1, massnahme2, massnahmekosten2, massnahme3, massnahmekosten3, massnahme4, massnahmekosten4, massnahme5, massnahmekosten5, barmittel, eigeneleistungen, unendgeltlichesachleistungen, geldspenden, zuschuesse, fianzierungkommune, finanzierunglkr, finanzierungvorsteuer, fremdgelder, beantragtefoerderung, begruendung, erklaerung1, erklaerung2',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, status, feuser, art, fall1, fall2, fall3,vorzeitigerbaubeginn, vereinsnummer, blsvkreis, vereinsname, stimmkreis, ansprechpartnername, ansprechpartnervorname, ansprechpartnertitel, ansprechpartnertelefondienst, ansprechpartnertelefonprivat, ansprechpartnermobil, ansprechpartnerfax, ansprechpartneremail, baugenehmigungspflichtig, massnahme1, massnahmekosten1, massnahme2, massnahmekosten2, massnahme3, massnahmekosten3, massnahme4, massnahmekosten4, massnahme5, massnahmekosten5, barmittel,  eigeneleistungen, unendgeltlichesachleistungen, geldspenden, zuschuesse, fianzierungkommune, finanzierunglkr, finanzierungvorsteuer, fremdgelder, beantragtefoerderung, begruendung, erklaerung1, erklaerung2,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_blsvspstbauantrag_domain_model_antragsanforderung',
				'foreign_table_where' => 'AND tx_blsvspstbauantrag_domain_model_antragsanforderung.pid=###CURRENT_PID### AND tx_blsvspstbauantrag_domain_model_antragsanforderung.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
			
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
				
		),
		'tstamp' => Array (
					'exclude' => 1,
					'label' => 'Creation date',
					'config' => Array (
							'type' => 'none',
							'format' => 'integer',
							'eval' => 'integer',
			
					)
			),
			
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'status' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.status',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'feuser' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.feuser',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			
				),
		'art' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.art',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'fall1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.fall1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'fall2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.fall2',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'fall3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.fall3',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
			'vorzeitigerbaubeginn' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.vorzeitigerbaubeginn',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'vereinsnummer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.vereinsnummer',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'blsvkreis' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.blsvkreis',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int'
					),
			),
			'stimmkreis' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.stimmkreis',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int'
					),
			),
			'vereinsname' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.vereinsname',
					'config' => array(
							'type' => 'input',
							'size' => 30,
							'eval' => 'trim,required'
					),
			),
			
		'ansprechpartnername' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartnername',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartnervorname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartnervorname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartnertitel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartnertitel',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ansprechpartnertelefondienst' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartnertelefondienst',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartnertelefonprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartnertelefonprivat',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ansprechpartnermobil' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartnermobil',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartnerfax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartnerfax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartneremail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.ansprechpartneremail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'baugenehmigungspflichtig' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.baugenehmigungspflichtig',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'massnahme1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahme1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'massnahmekosten1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahmekosten1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'massnahme2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahme2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'massnahmekosten2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahmekosten2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'massnahme3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahme3',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'massnahmekosten3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahmekosten3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'massnahme4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahme4',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'massnahmekosten4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahmekosten4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'massnahme5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahme5',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'massnahmekosten5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.massnahmekosten5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'barmittel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.barmittel',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'eigeneleistungen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.eigeneleistungen',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'unendgeltlichesachleistungen' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.unendgeltlichesachleistungen',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),			
			
		'geldspenden' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.geldspenden',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'zuschuesse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.zuschuesse',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'fianzierungkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.fianzierungkommune',
			'config' => array(
					'type' => 'input',
					'size' => 4,
					'eval' => 'int,required'
			),
		),
		'finanzierunglkr' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.finanzierunglkr',
				'config' => array(
						'type' => 'input',
						'size' => 4,
						'eval' => 'int,required'
				),
		),
		'finanzierungvorsteuer' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.finanzierungvorsteuer',
				'config' => array(
						'type' => 'input',
						'size' => 4,
						'eval' => 'int,required'
				),
		),
		'fremdgelder' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.fremdgelder',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'beantragtefoerderung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.beantragtefoerderung',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'begruendung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.begruendung',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			),
		),
		'erklaerung1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.erklaerung1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklaerung2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.erklaerung2',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
			'begruendungablehnung' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.begruendungablehnung',
					'config' => array(
							'type' => 'text',
							'cols' => 40,
							'rows' => 15,
							'eval' => 'trim'
					),
			),
			'begruendungannahme' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_antragsanforderung.begruendungannahme',
					'config' => array(
							'type' => 'text',
							'cols' => 40,
							'rows' => 15,
							'eval' => 'trim'
					),
			),
				
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>