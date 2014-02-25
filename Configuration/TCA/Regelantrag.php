<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_blsvspstbauantrag_domain_model_regelantrag'] = array(
	'ctrl' => $TCA['tx_blsvspstbauantrag_domain_model_regelantrag']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, vereinsnummer, blsvkreis, feuser, stimmkreis, ansprechpartnername, ansprechpartnervorname, ansprechpartenertitel, ansprechpartnerteldienst, ansprechpartnertelprivat, ansprechpartnermobil, ansprechpartneremail, verwendungszweck1, anzahl1, vbb1, kostenanteil1, verwendungszweck2, anzahl2, vbb2, kostenanteil2, verwendungszweck3, anzahl3, vbb3, kostenanteil3, verwendungszweck4, anzahl4, vbb4, kostenanteil4, verwendungszweck5, anzahl5, vbb5, kostenenteil5, verwendungszweck6, anzahl6, vbb6, kostenanteil6, verwendungszweck7, anzahl7, vbb7, kostenanteil7, verwendungszweck8, anzahl8, vbb8, kostenanteil8, verwendungszweck9, anzahl9, vbb9, kostenanteil9, verwendungszweck10, anzahl10, vbb10, kostenanteil10, verwendungszweck11, anzahl11, vbb11, kostenanteil11, verwendungszweck12, anzahl12, vbb12, kostenanteil12, verwendungszweck13, anzahl13, vbb13, kostenanteil13, verwendungszweck14, anzahl14, vbb14, kostenanteil14, verwendungszweck15, anzahl15, vbb15, kostenanteil15, verwendungszweck16, anzahl16, vbb16, kostenanteil16, verwendungszweck17, anzahl17, vbb17, kostenanteil17, verwendungszweck18, anzahl18, vbb18, kostenanteil18, verwendungszweck19, anzahl19, vbb19, kostenanteil19, verwendungszweck20, anzahl20, vbb20, kostenanteil20, verwendungszweck21, anzahl21, vbb21, kostenanteil21, verwendungszweck22, anzahl22, kostenanteil22, vbb22, verwendungszweck23, anzahl23, vbb23, kostenanteil23, verwendungszweck24, anzahl24, vbb24, kostenanteil24, verwendungszweck25, anzahl25, vbb25, kostenanteil25, finanzierungbarmittel, finanzierunggeldspenden, fianzierungkredit, finanzierungaleistung, finanzierungsachleistung, fianzierungkommune, finanzierunglkr, finanzierungsonstige, finanzierungvorsteuer, finanzierungzuschuss, finanzierungdarlehen, sicherunggrundschuld, sicherungkbuergschaft, sicherungbbuergschaft, zwfkommune1, zwfkommune2, zwfkommune3, zwfkommune4, zwfkommune5, zwfkommune6, zwflandkreis1, zwflandkreis2, zwflandkreis3, zwflandkreis4, zwflandkreis5, zwflandkreis6, zwflandkreis7, zwflandkreis8, zwflandkreis9, zwfsonstige1, zwfsonstige2, zwfsonstige3, zwfsonstige4, zwfsonstige5, zwfsonstige6, zwfsonstige7, zwfsonstige8, zwfsonstige9, zwfvorsteuer1, zwfvorsteuer2, zwfvorsteuer3, zwfvorsteuer4, zwfvorsteuer5, zwfvorsteuer6, zwfvorsteuer7, zwfvorsteuer8, zwfvorsteuer9, zwfsmf1, zwfsmf2, zwfsmf3, zwfsmf4, zwfsmf5, zwfsmf6, zwfsmf7, zwfsmf8, zwfsmf9, jahreszahl1, jahreszahl2, guvdurchschnittsergebnis, vbbgruende1, vbbgruende2, vbbgruende3, vbbgruende4, vbbgruende5, begruendungsonstige, vbberklaerung1, vbberklaerung2, vmlstichtag, anzahlboote, anzahlpferde, datumbauberatung, datumgespraechkv, ortsbesichtigungkv, absendedatum, eigentum, erbbaurecht, pachtvertrag, eigentuemer, grundstuecksgroesse, flurnummer, gemarkung, laufzeit, erklrechtsanspruch, erklmeldepflicht, erklbaubeginn, erklvollstaendigeangaben, erklsubvention, erklfinanzierung, masnahmenart, ansprechpartnerfax, finanzierungzuschusskl, guvbeginn, guvende, guvbilanz, guveuerechnung, guveinnahmengesamt, einnahmenbeitraege, einnahmenspenden, einnahmenzuschuesse, guvausgabengesamt, ausgabeninstandhaltung, ausgabensportbetrieb, ausgabenverwaltung, ausgabenabschreibung, ueberschussfehlbetrag, vermoegensgegenstaende, sachanlagen, finanzanlagen, kassenbestand, bankguthaben, ruecklagenfrei, ruecklagenzweck, ruecklagenbetrieb, verbindlichkeitbank, verbindlichkeitblssmd, verbindlichkeitsonstige, jahreskapitaldienst, fachverbandmitglied1, mitglieder0110bis26, mitglieder0110ueber26, mitglieder0111bis26, mitglieder0111ueber26, mitglieder0112bis26, mitglieder0112ueber26, fachverbandsmitglied2, mitglieder0210bis26, mitglieder0210ueber26, mitglieder0211bis26, mitglieder0211ueber26, mitglieder0212bis26, mitglieder0212ueber26, fachverbandsmitglied3, mitglieder0310bis26, mitglieder0310ueber26, mitglieder0311bis26, mitglieder0311ueber26, mitglieder0312bis26, mitglieder0312ueber26, fachverbandsmitglied4, mitglieder0410bis26, mitglieder0410ueber26, mitglieder0411bis26, mitglieder0411ueber26, mitglieder0412bis26, mitglieder0412ueber26, fachverbandsmitglied5, mitglieder0510bis26, mitglieder0510ueber26, mitglieder0511bis26, mitglieder0511ueber26, mitglieder0512bis26, mitglieder0512ueber26, fachverbandmannschaft1, schuelerjugend0110, erwachsene0110, schuelerjugend0111, erwachsene0111, schuelerjugend0112, erwachsene0112, fachverbandmannschaft2, schuelerjugend0210, erwachsene0210, schuelerjugend0211, erwachsene0211, schuelerjugend0212, erwachsene0212, fachverbandmannschaft3, schuelerjugend0310, erwachsene0310, schuelerjugend0311, erwachsene0311, schuelerjugend0312, erwachsene0312, fachverbandmannschaft4, schuelerjugend0410, erwachsene0410, schuelerjugend0411, erwachsene0411, schuelerjugend0412, erwachsene0412, fachverbandmannschaft5, schuelerjugend0510, erwachsene0510, schuelerjugend0511, erwachsene0511, schuelerjugend0512, erwachsene0512, fachverbandueleiter1, anzahl0110, anzahl0111, anzahl0112, fachverbandueleiter2, anzahl0210, anzahl0211, anzahl0212, fachverbandueleiter3, anzahl0310, anzahl0311, anzahl0312, fachverbandueleiter4, anzahl0410, anzahl0411, anzahl0412, fachverbandueleiter5, anzahl0510, anzahl0511, anzahl0512, fachverbandnutzung1, kinderjugendliche1, erwachsene1, mannschaftschuejugw1, mannschaftschuejugm1, mannschafterwachsenw1, mannschafterwachsenm1, lizensierteuel1, fachverbandnutzung2, kinderjugendliche2, erwachsene2, mannschaftschuejugw2, mannschaftschuejugm2, mannschafterwachsenw2, mannschafterwachsenm2, lizensierteuel2, fachverbandnutzung3, kinderjugendliche3, erwachsene3, mannschaftschuejugw3, mannschaftschuejugm3, mannschafterwachsenw3, mannschafterwachsenm3, lizensierteuel3, fachverbandnutzung4, kinderjugendliche4, erwachsene4, mannschaftschuejugw4, mannschaftschuejugm4, mannschafterwachsenw4, mannschafterwachsenm4, lizensierteuel4, notwendigkeitauslastung, notwendigkeitausrichtung, notwendigkeitbeduerfnis, notwendigkeitunterhalt, bauberatungja, bauberatungdatum, bauberatungnein, bestkenntnisnahme, erklnutzungdritte, erklkonzession, antragsnummer,sonstiges21',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, vereinsnummer, blsvkreis, feuser, stimmkreis, ansprechpartnername, ansprechpartnervorname, ansprechpartenertitel, ansprechpartnerteldienst, ansprechpartnertelprivat, ansprechpartnermobil, ansprechpartneremail, verwendungszweck1, anzahl1, vbb1, kostenanteil1, verwendungszweck2, anzahl2, vbb2, kostenanteil2, verwendungszweck3, anzahl3, vbb3, kostenanteil3, verwendungszweck4, anzahl4, vbb4, kostenanteil4, verwendungszweck5, anzahl5, vbb5, kostenenteil5, verwendungszweck6, anzahl6, vbb6, kostenanteil6, verwendungszweck7, anzahl7, vbb7, kostenanteil7, verwendungszweck8, anzahl8, vbb8, kostenanteil8, verwendungszweck9, anzahl9, vbb9, kostenanteil9, verwendungszweck10, anzahl10, vbb10, kostenanteil10, verwendungszweck11, anzahl11, vbb11, kostenanteil11, verwendungszweck12, anzahl12, vbb12, kostenanteil12, verwendungszweck13, anzahl13, vbb13, kostenanteil13, verwendungszweck14, anzahl14, vbb14, kostenanteil14, verwendungszweck15, anzahl15, vbb15, kostenanteil15, verwendungszweck16, anzahl16, vbb16, kostenanteil16, verwendungszweck17, anzahl17, vbb17, kostenanteil17, verwendungszweck18, anzahl18, vbb18, kostenanteil18, verwendungszweck19, anzahl19, vbb19, kostenanteil19, verwendungszweck20, anzahl20, vbb20, kostenanteil20, verwendungszweck21, anzahl21, vbb21, kostenanteil21, verwendungszweck22, anzahl22, kostenanteil22, vbb22, verwendungszweck23, anzahl23, vbb23, kostenanteil23, verwendungszweck24, anzahl24, vbb24, kostenanteil24, verwendungszweck25, anzahl25, vbb25, kostenanteil25, finanzierungbarmittel, finanzierunggeldspenden, fianzierungkredit, finanzierungaleistung, finanzierungsachleistung, fianzierungkommune, finanzierunglkr, finanzierungsonstige, finanzierungvorsteuer, finanzierungzuschuss, finanzierungdarlehen, sicherunggrundschuld, sicherungkbuergschaft, sicherungbbuergschaft, zwfkommune1, zwfkommune2, zwfkommune3, zwfkommune4, zwfkommune5, zwfkommune6, zwflandkreis1, zwflandkreis2, zwflandkreis3, zwflandkreis4, zwflandkreis5, zwflandkreis6, zwflandkreis7, zwflandkreis8, zwflandkreis9, zwfsonstige1, zwfsonstige2, zwfsonstige3, zwfsonstige4, zwfsonstige5, zwfsonstige6, zwfsonstige7, zwfsonstige8, zwfsonstige9, zwfvorsteuer1, zwfvorsteuer2, zwfvorsteuer3, zwfvorsteuer4, zwfvorsteuer5, zwfvorsteuer6, zwfvorsteuer7, zwfvorsteuer8, zwfvorsteuer9, zwfsmf1, zwfsmf2, zwfsmf3, zwfsmf4, zwfsmf5, zwfsmf6, zwfsmf7, zwfsmf8, zwfsmf9, jahreszahl1, jahreszahl2, guvdurchschnittsergebnis, vbbgruende1, vbbgruende2, vbbgruende3, vbbgruende4, vbbgruende5, begruendungsonstige, vbberklaerung1, vbberklaerung2, vmlstichtag, anzahlboote, anzahlpferde, datumbauberatung, datumgespraechkv, ortsbesichtigungkv, absendedatum, eigentum, erbbaurecht, pachtvertrag, eigentuemer, grundstuecksgroesse, flurnummer, gemarkung, laufzeit, erklrechtsanspruch, erklmeldepflicht, erklbaubeginn, erklvollstaendigeangaben, erklsubvention, erklfinanzierung, masnahmenart, ansprechpartnerfax, finanzierungzuschusskl, guvbeginn, guvende, guvbilanz, guveuerechnung, guveinnahmengesamt, einnahmenbeitraege, einnahmenspenden, einnahmenzuschuesse, guvausgabengesamt, ausgabeninstandhaltung, ausgabensportbetrieb, ausgabenverwaltung, ausgabenabschreibung, ueberschussfehlbetrag, vermoegensgegenstaende, sachanlagen, finanzanlagen, kassenbestand, bankguthaben, ruecklagenfrei, ruecklagenzweck, ruecklagenbetrieb, verbindlichkeitbank, verbindlichkeitblssmd, verbindlichkeitsonstige, jahreskapitaldienst, fachverbandmitglied1, mitglieder0110bis26, mitglieder0110ueber26, mitglieder0111bis26, mitglieder0111ueber26, mitglieder0112bis26, mitglieder0112ueber26, fachverbandsmitglied2, mitglieder0210bis26, mitglieder0210ueber26, mitglieder0211bis26, mitglieder0211ueber26, mitglieder0212bis26, mitglieder0212ueber26, fachverbandsmitglied3, mitglieder0310bis26, mitglieder0310ueber26, mitglieder0311bis26, mitglieder0311ueber26, mitglieder0312bis26, mitglieder0312ueber26, fachverbandsmitglied4, mitglieder0410bis26, mitglieder0410ueber26, mitglieder0411bis26, mitglieder0411ueber26, mitglieder0412bis26, mitglieder0412ueber26, fachverbandsmitglied5, mitglieder0510bis26, mitglieder0510ueber26, mitglieder0511bis26, mitglieder0511ueber26, mitglieder0512bis26, mitglieder0512ueber26, fachverbandmannschaft1, schuelerjugend0110, erwachsene0110, schuelerjugend0111, erwachsene0111, schuelerjugend0112, erwachsene0112, fachverbandmannschaft2, schuelerjugend0210, erwachsene0210, schuelerjugend0211, erwachsene0211, schuelerjugend0212, erwachsene0212, fachverbandmannschaft3, schuelerjugend0310, erwachsene0310, schuelerjugend0311, erwachsene0311, schuelerjugend0312, erwachsene0312, fachverbandmannschaft4, schuelerjugend0410, erwachsene0410, schuelerjugend0411, erwachsene0411, schuelerjugend0412, erwachsene0412, fachverbandmannschaft5, schuelerjugend0510, erwachsene0510, schuelerjugend0511, erwachsene0511, schuelerjugend0512, erwachsene0512, fachverbandueleiter1, anzahl0110, anzahl0111, anzahl0112, fachverbandueleiter2, anzahl0210, anzahl0211, anzahl0212, fachverbandueleiter3, anzahl0310, anzahl0311, anzahl0312, fachverbandueleiter4, anzahl0410, anzahl0411, anzahl0412, fachverbandueleiter5, anzahl0510, anzahl0511, anzahl0512, fachverbandnutzung1, kinderjugendliche1, erwachsene1, mannschaftschuejugw1, mannschaftschuejugm1, mannschafterwachsenw1, mannschafterwachsenm1, lizensierteuel1, fachverbandnutzung2, kinderjugendliche2, erwachsene2, mannschaftschuejugw2, mannschaftschuejugm2, mannschafterwachsenw2, mannschafterwachsenm2, lizensierteuel2, fachverbandnutzung3, kinderjugendliche3, erwachsene3, mannschaftschuejugw3, mannschaftschuejugm3, mannschafterwachsenw3, mannschafterwachsenm3, lizensierteuel3, fachverbandnutzung4, kinderjugendliche4, erwachsene4, mannschaftschuejugw4, mannschaftschuejugm4, mannschafterwachsenw4, mannschafterwachsenm4, lizensierteuel4, notwendigkeitauslastung, notwendigkeitausrichtung, notwendigkeitbeduerfnis, notwendigkeitunterhalt, bauberatungja, bauberatungdatum, bauberatungnein, bestkenntnisnahme, erklnutzungdritte, erklkonzession, antragsnummer,sonstiges21, --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_blsvspstbauantrag_domain_model_regelantrag',
				'foreign_table_where' => 'AND tx_blsvspstbauantrag_domain_model_regelantrag.pid=###CURRENT_PID### AND tx_blsvspstbauantrag_domain_model_regelantrag.sys_language_uid IN (-1,0)',
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
		'vereinsnummer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vereinsnummer',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'blsvkreis' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.blsvkreis',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'feuser' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.feuser',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'stimmkreis' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.stimmkreis',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ansprechpartnername' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartnername',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartnervorname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartnervorname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartenertitel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartenertitel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ansprechpartnerteldienst' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartnerteldienst',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ansprechpartnertelprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartnertelprivat',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ansprechpartnermobil' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartnermobil',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ansprechpartneremail' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartneremail',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'verwendungszweck1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'anzahl1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'vbb1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'verwendungszweck2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb2',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck3',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb3',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck4',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb4',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck5',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb5',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenenteil5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenenteil5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck6',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl6',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb6',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil6',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck7',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl7',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb7',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil7',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck8',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl8',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb8',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil8',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck9',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl9',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb9',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil9',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck10' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck10',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl10' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl10',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb10' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb10',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil10' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil10',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck11' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck11',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl11' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl11',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb11' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb11',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil11' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil11',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck12' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck12',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl12' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl12',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb12' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb12',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil12' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil12',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck13' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck13',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl13' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl13',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb13' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb13',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil13' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil13',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck14' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck14',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl14' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl14',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb14' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb14',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil14' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil14',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck15' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck15',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl15' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl15',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb15' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb15',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil15' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil15',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck16' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck16',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl16' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl16',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb16' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb16',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil16' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil16',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck17' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck17',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl17' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl17',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb17' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb17',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil17' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil17',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck18' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck18',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl18' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl18',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb18' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb18',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil18' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil18',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck19' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck19',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl19' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl19',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb19' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb19',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil19' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil19',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck20' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck20',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl20' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl20',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb20' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb20',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil20' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil20',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck21' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck21',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl21' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl21',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb21' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb21',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil21' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil21',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck22' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck22',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl22' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl22',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'kostenanteil22' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil22',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb22' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb22',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'verwendungszweck23' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck23',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl23' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl23',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb23' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb23',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil23' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil23',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck24' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck24',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl24' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl24',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb24' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb24',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil24' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil24',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'verwendungszweck25' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verwendungszweck25',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'anzahl25' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl25',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbb25' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbb25',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'kostenanteil25' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kostenanteil25',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierungbarmittel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungbarmittel',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierunggeldspenden' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierunggeldspenden',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fianzierungkredit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fianzierungkredit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierungaleistung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungaleistung',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierungsachleistung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungsachleistung',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fianzierungkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fianzierungkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierunglkr' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierunglkr',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierungsonstige' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungsonstige',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierungvorsteuer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungvorsteuer',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierungzuschuss' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungzuschuss',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'finanzierungdarlehen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungdarlehen',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'sicherunggrundschuld' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sicherunggrundschuld',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'sicherungkbuergschaft' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sicherungkbuergschaft',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'sicherungbbuergschaft' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sicherungbbuergschaft',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfkommune1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfkommune1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfkommune2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfkommune2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfkommune3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfkommune3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfkommune4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfkommune4',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfkommune5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfkommune5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfkommune6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfkommune6',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwflandkreis1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwflandkreis2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwflandkreis3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwflandkreis4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis4',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwflandkreis5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwflandkreis6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis6',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwflandkreis7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis7',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwflandkreis8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis8',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwflandkreis9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwflandkreis9',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsonstige1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfsonstige2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsonstige3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsonstige4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige4',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfsonstige5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsonstige6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige6',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsonstige7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige7',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfsonstige8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige8',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsonstige9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsonstige9',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfvorsteuer1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfvorsteuer2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfvorsteuer3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfvorsteuer4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer4',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfvorsteuer5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfvorsteuer6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer6',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfvorsteuer7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer7',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfvorsteuer8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer8',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfvorsteuer9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfvorsteuer9',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsmf1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfsmf2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsmf3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsmf4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf4',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfsmf5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf5',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsmf6' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf6',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsmf7' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf7',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'zwfsmf8' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf8',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'zwfsmf9' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.zwfsmf9',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'jahreszahl1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.jahreszahl1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'jahreszahl2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.jahreszahl2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'guvdurchschnittsergebnis' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.guvdurchschnittsergebnis',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'vbbgruende1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbbgruende1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'vbbgruende2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbbgruende2',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'vbbgruende3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbbgruende3',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'vbbgruende4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbbgruende4',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'vbbgruende5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbbgruende5',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'begruendungsonstige' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.begruendungsonstige',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'vbberklaerung1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbberklaerung1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'vbberklaerung2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vbberklaerung2',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'vmlstichtag' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vmlstichtag',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'anzahlboote' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahlboote',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahlpferde' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahlpferde',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'datumbauberatung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.datumbauberatung',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'datumgespraechkv' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.datumgespraechkv',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'ortsbesichtigungkv' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ortsbesichtigungkv',
			'config' => array(
				'type' => 'input',
						'size' => 1,
						'eval' => 'int,required'
			),
		),
		'absendedatum' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.absendedatum',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'eigentum' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.eigentum',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erbbaurecht' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erbbaurecht',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'pachtvertrag' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.pachtvertrag',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'eigentuemer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.eigentuemer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'grundstuecksgroesse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.grundstuecksgroesse',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'flurnummer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.flurnummer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'gemarkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.gemarkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'laufzeit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.laufzeit',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'erklrechtsanspruch' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklrechtsanspruch',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklmeldepflicht' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklmeldepflicht',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklbaubeginn' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklbaubeginn',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklvollstaendigeangaben' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklvollstaendigeangaben',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklsubvention' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklsubvention',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklfinanzierung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklfinanzierung',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'masnahmenart' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.masnahmenart',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'ansprechpartnerfax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ansprechpartnerfax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'finanzierungzuschusskl' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzierungzuschusskl',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'guvbeginn' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.guvbeginn',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'guvende' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.guvende',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'guvbilanz' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.guvbilanz',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'guveuerechnung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.guveuerechnung',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'guveinnahmengesamt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.guveinnahmengesamt',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'einnahmenbeitraege' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.einnahmenbeitraege',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'einnahmenspenden' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.einnahmenspenden',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'einnahmenzuschuesse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.einnahmenzuschuesse',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'guvausgabengesamt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.guvausgabengesamt',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ausgabeninstandhaltung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ausgabeninstandhaltung',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ausgabensportbetrieb' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ausgabensportbetrieb',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ausgabenverwaltung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ausgabenverwaltung',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ausgabenabschreibung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ausgabenabschreibung',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ueberschussfehlbetrag' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ueberschussfehlbetrag',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'vermoegensgegenstaende' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vermoegensgegenstaende',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'sachanlagen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sachanlagen',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'finanzanlagen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.finanzanlagen',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'kassenbestand' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kassenbestand',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'bankguthaben' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bankguthaben',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ruecklagenfrei' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ruecklagenfrei',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ruecklagenzweck' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ruecklagenzweck',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'ruecklagenbetrieb' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ruecklagenbetrieb',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'verbindlichkeitbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verbindlichkeitbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'verbindlichkeitblssmd' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verbindlichkeitblssmd',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'verbindlichkeitsonstige' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.verbindlichkeitsonstige',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'jahreskapitaldienst' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.jahreskapitaldienst',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'fachverbandmitglied1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandmitglied1',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'mitglieder0110bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0110bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mitglieder0110ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0110ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mitglieder0111bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0111bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mitglieder0111ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0111ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mitglieder0112bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0112bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mitglieder0112ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0112ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'fachverbandsmitglied2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandsmitglied2',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'mitglieder0210bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0210bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0210ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0210ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0211bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0211bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0211ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0211ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0212bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0212bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0212ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0212ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandsmitglied3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandsmitglied3',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'mitglieder0310bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0310bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0310ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0310ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0311bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0311bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0311ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0311ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0312bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0312bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0312ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0312ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandsmitglied4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandsmitglied4',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'mitglieder0410bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0410bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0410ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0410ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0411bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0411bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0411ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0411ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0412bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0412bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0412ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0412ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandsmitglied5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandsmitglied5',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'mitglieder0510bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0510bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0510ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0510ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0511bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0511bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0511ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0511ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0512bis26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0512bis26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mitglieder0512ueber26' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mitglieder0512ueber26',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandmannschaft1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandmannschaft1',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'schuelerjugend0110' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0110',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'erwachsene0110' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0110',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'schuelerjugend0111' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0111',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'erwachsene0111' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0111',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'schuelerjugend0112' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0112',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'erwachsene0112' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0112',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'fachverbandmannschaft2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandmannschaft2',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'schuelerjugend0210' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0210',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0210' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0210',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0211' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0211',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0211' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0211',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0212' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0212',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0212' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0212',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandmannschaft3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandmannschaft3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0310' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0310',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0310' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0310',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0311' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0311',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0311' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0311',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0312' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0312',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0312' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0312',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandmannschaft4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandmannschaft4',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'schuelerjugend0410' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0410',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0410' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0410',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0411' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0411',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0411' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0411',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0412' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0412',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0412' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0412',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandmannschaft5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandmannschaft5',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'schuelerjugend0510' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0510',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0510' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0510',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0511' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0511',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0511' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0511',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'schuelerjugend0512' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.schuelerjugend0512',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene0512' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene0512',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandueleiter1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandueleiter1',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'anzahl0110' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0110',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'anzahl0111' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0111',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'anzahl0112' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0112',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'fachverbandueleiter2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandueleiter2',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'anzahl0210' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0210',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0211' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0211',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0212' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0212',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandueleiter3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandueleiter3',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'anzahl0310' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0310',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0311' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0311',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0312' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0312',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandueleiter4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandueleiter4',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'anzahl0410' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0410',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0411' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0411',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0412' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0412',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandueleiter5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandueleiter5',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'anzahl0510' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0510',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0511' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0511',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'anzahl0512' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.anzahl0512',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandnutzung1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandnutzung1',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'kinderjugendliche1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kinderjugendliche1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'erwachsene1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mannschaftschuejugw1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugw1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mannschaftschuejugm1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugm1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mannschafterwachsenw1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenw1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'mannschafterwachsenm1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenm1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'lizensierteuel1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.lizensierteuel1',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'fachverbandnutzung2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandnutzung2',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'kinderjugendliche2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kinderjugendliche2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschaftschuejugw2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugw2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschaftschuejugm2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugm2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschafterwachsenw2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenw2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschafterwachsenm2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenm2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'lizensierteuel2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.lizensierteuel2',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandnutzung3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandnutzung3',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'kinderjugendliche3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kinderjugendliche3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschaftschuejugw3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugw3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschaftschuejugm3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugm3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschafterwachsenw3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenw3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschafterwachsenm3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenm3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'lizensierteuel3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.lizensierteuel3',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'fachverbandnutzung4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fachverbandnutzung4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'kinderjugendliche4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kinderjugendliche4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'erwachsene4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erwachsene4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschaftschuejugw4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugw4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschaftschuejugm4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschaftschuejugm4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschafterwachsenw4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenw4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'mannschafterwachsenm4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.mannschafterwachsenm4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'lizensierteuel4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.lizensierteuel4',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'notwendigkeitauslastung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.notwendigkeitauslastung',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'notwendigkeitausrichtung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.notwendigkeitausrichtung',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'notwendigkeitbeduerfnis' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.notwendigkeitbeduerfnis',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'notwendigkeitunterhalt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.notwendigkeitunterhalt',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'bauberatungja' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bauberatungja',
			'config' => array(
				'type' => 'input',
						'size' => 1,
						'eval' => 'int,required'
			),
		),
		'bauberatungdatum' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bauberatungdatum',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'bauberatungnein' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bauberatungnein',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'bestkenntnisnahme' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestkenntnisnahme',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklnutzungdritte' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklnutzungdritte',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'erklkonzession' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.erklkonzession',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'antragsnummer1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.antragsnummer1',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_blsvspstbauantrag_domain_model_antragsanforderung',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
			
			
		'sonstiges_vermoegen' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstiges_vermoegen',
				'config' => array(
						'type' => 'input',
						'size' => 4,
						'eval' => 'int,required'
				),
		),
			
			'leistungen_dritter_gesamt' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.leistungen_dritter_gesamt',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			'eigenbeteiligung_gesamt' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.eigenbeteiligung_gesamt',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			'gesamtkosten_brutto' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.gesamtkosten_brutto',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),

			
			
			
			'egtvlaufzeit' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.egtvlaufzeit',
				'config' => array(
						'type' => 'input',
						'size' => 30,
						'eval' => 'trim,required'
						),
			),
			'egtvgemarkung' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.egtvgemarkung',
					'config' => array(
							'type' => 'input',
							'size' => 30,
							'eval' => 'trim,required'
					),
			),
			'egtvflurnummer' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.egtvflurnummer',
					'config' => array(
							'type' => 'input',
							'size' => 30,
							'eval' => 'trim,required'
					),
			),
			'egtvgrundstuecksgroesse' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.egtvgrundstuecksgroesse',
					'config' => array(
							'type' => 'input',
							'size' => 30,
							'eval' => 'trim,required'
					),
			),
			'egtveigentuemer' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.egtveigentuemer',
					'config' => array(
							'type' => 'input',
							'size' => 30,
							'eval' => 'trim,required'
					),
			),
			'vereinsname' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vereinsname',
					'config' => array(
							'type' => 'input',
							'size' => 30,
							'eval' => 'trim,required'
					),
			),
				
			'bestehendesportstaetten1' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten1',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten11' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten11',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten111' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten111',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten1111' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten1111',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten1112' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten1112',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten12' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten12',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten21' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten21',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten211' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten211',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten212' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten212',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten22' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten22',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten221' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten221',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten222' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten222',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten3' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten3',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten31' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten31',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten32' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten32',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten4' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten4',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten41' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten41',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten42' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten42',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten51' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten51',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten511' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten511',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten512' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten512',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten521' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten521',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten522' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten522',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten531' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten531',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'bestehendesportstaetten532' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.bestehendesportstaetten532',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung11' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung11',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung111' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung111',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung112' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung112',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung121' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung121',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung122' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung122',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung131' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung131',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung132' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung132',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung141' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung141',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung142' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung142',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung21' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung21',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung211' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung211',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung212' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung212',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung221' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung221',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung222' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung222',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung231' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung231',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung232' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung232',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung241' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung241',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung242' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung242',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung3' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung3',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung31' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung31',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung32' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung32',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung4' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung4',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung41' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung41',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung42' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung42',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung43' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung43',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung44' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung44',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'finanzierung45' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Finanzierung45',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sonstiges1' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sonstiges1',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sonstiges11' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sonstiges11',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sonstiges2' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sonstiges2',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sonstiges21' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sonstiges21',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sonstiges22' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sonstiges22',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung1' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung1',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung11' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung11',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung12' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung12',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung13' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung13',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung21' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung21',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung211' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung211',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2111' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2111',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2112' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2112',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2113' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2113',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung212' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung212',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2121' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2121',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2122' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2122',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2123' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2123',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung213' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung213',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2131' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2131',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2132' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2132',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2133' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2133',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung22' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung22',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung221' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung221',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2211' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2211',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2212' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2212',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2213' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2213',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung222' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung222',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2221' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2221',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2222' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2222',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2223' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2223',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung223' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung223',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2231' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2231',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2232' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2232',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2233' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2233',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung23' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung23',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung231' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung231',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2311' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2311',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2312' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2312',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2313' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2313',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung232' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung232',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2321' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2321',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2322' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2322',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2323' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2323',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung233' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung233',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2331' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2331',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2332' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2332',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung2333' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung2333',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung3' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung3',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung311' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung311',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung312' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung312',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung321' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung321',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung322' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung322',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung331' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung331',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung332' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung332',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung4' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung4',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung41' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung41',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung411' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung411',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung412' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung412',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung413' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung413',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung414' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung414',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung415' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung415',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung42' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung42',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung421' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung421',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung422' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung422',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung423' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung423',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung424' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung424',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung425' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung425',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung43' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung43',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung431' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung431',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung432' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung432',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung433' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung433',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung434' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung434',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'sportlicheentwicklung435' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Sportlicheentwicklung435',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme11' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme11',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme111' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme111',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme112' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme112',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme121' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme121',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme122' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme122',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme131' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme131',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme132' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme132',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme2' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme2',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme21' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme21',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme22' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme22',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme22_0' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme22_0',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme221' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme221',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme222' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme222',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme223' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme223',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme224' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme224',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme3' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme3',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme31' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme31',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme32' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme32',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme31_0' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme31_0',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme311' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme311',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme312' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme312',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme313' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme313',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme4' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme4',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme41' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme41',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme5' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme5',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme51' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme51',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme52' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme52',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme52_0' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme52_0',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme521' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme521',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme522' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme522',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme523' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme523',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme6' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme6',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme61' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme61',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme62' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme62',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme61_0' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme61_0',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme611' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme611',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme612' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme612',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme613' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme613',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'stellungnahme614' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.Stellungnahme614',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			
			'art' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.art',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			'fall' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fall',
					'config' => array(
							'type' => 'input',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			'hinweistext1' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.hinweistext1',
					'config' => array(
							'type' => 'check',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			'hinweistext2' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.hinweistext2',
					'config' => array(
							'type' => 'check',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			'hinweistext3' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.hinweistext3',
					'config' => array(
							'type' => 'check',
							'size' => 4,
							'eval' => 'int,required'
					),
			),
			'hinweistext4' => array(
					'exclude' => 0,
					'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.hinweistext4',
					'config' => array(
							'type' => 'check',
							'size' => 4,
							'eval' => 'int,required'
					),
					),
		'kommunebank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kommunebank',
			'config' => array(
				'type' => 'check',
				'default' => 0
				
			),
),
		'kommuneprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kommuneprivat',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'landkreisbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisbank',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'landkreiskommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreiskommune',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'landkreisprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisprivat',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'sonstigebank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigebank',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'sonstigekommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigekommune',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'sonstigeprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigeprivat',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'vorsteuererstbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstbank',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'vorsteuererstkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstkommune',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'vorsteuererstprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstprivat',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'smfoerderungbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungbank',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'smfoerderungkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungkommune',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'smfoerderungprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungprivat',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'kommunebetragbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kommunebetragbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'kommunebetragprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kommunebetragprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'landkreisbetragbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisbetragbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'landkreisbetragkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisbetragkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'landkreisbetragprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisbetragprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'sonstigebetragbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigebetragbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'sonstigebetragkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigebetragkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'sonstigebetragprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigebetragprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'vorsteuererstbetragbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstbetragbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'vorsteuererstbetragkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstbetragkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'vorsteuererstbetragprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstbetragprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'smfoerderungbetragbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungbetragbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'smfoerderungbetragkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungbetragkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'smfoerderungbetragprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungbetragprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'betragsumme' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.betragsumme',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'kommunejbelastungbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kommunejbelastungbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'kommunejbelastungprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.kommunejbelastungprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'landkreisjbelastungbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisjbelastungbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'landkreisjbelastungkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisjbelastungkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'landkreisjbelastungprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.landkreisjbelastungprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'sonstigejbelastungbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigejbelastungbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'sonstigejbelastungkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigejbelastungkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'sonstigejbelastungprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.sonstigejbelastungprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'vorsteuererstjbelastungbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstjbelastungbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'vorsteuererstjbelastungkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstjbelastungkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'vorsteuererstjbelastungprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorsteuererstjbelastungprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'smfoerderungjbelastungbank' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungjbelastungbank',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'smfoerderungjbelastungkommune' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungjbelastungkommune',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'smfoerderungjbelastungprivat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.smfoerderungjbelastungprivat',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'jbelastungsumme' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.jbelastungsumme',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),

),
		'EARvon' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.EARvon',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'EARbis' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.EARbis',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'durchschnittsergebnis' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.durchschnittsergebnis',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
),
		'wegfalloefffinanzmittel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.wegfalloefffinanzmittel',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'fortbestandgefaehrdung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.fortbestandgefaehrdung',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'ersatzloserverlust' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.ersatzloserverlust',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'eintrittnachteiligerfolgen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.eintrittnachteiligerfolgen',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'notwendigkeitsonstige' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.notwendigkeitsonstige',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'notwendigkeitsonstigetextfeld' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.notwendigkeitsonstigetextfeld',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 10,
				'eval' => 'trim'
			),
),
		'vorzbaubeginnerkl1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorzbaubeginnerkl1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'vorzbaubeginnerkl2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorzbaubeginnerkl2',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'b2vbb1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorzbaubeginnerkl1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'b2vbb2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorzbaubeginnerkl1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'b2vbb3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorzbaubeginnerkl1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'b2vbb4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorzbaubeginnerkl1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
),
		'b2vbb5' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:blsvspstbauantrag/Resources/Private/Language/locallang_db.xml:tx_blsvspstbauantrag_domain_model_regelantrag.vorzbaubeginnerkl1',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),


					
			),
				
			
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>