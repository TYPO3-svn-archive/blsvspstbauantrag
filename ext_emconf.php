<?php

########################################################################
# Extension Manager/Repository config file for ext "blsvspstbauantrag".
#
# Auto generated 08-11-2012 14:05
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Sportstättenbau Antragsstellung',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Hubertus Golf',
	'author_email' => 'bertigolf@blsv.de',
	'author_company' => 'BLSV',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => 'Emailheader und texte',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.2.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
			'blsvvereinsinfo' => '1.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:117:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"c2bc";s:14:"ext_tables.php";s:4:"2f98";s:14:"ext_tables.sql";s:4:"f081";s:21:"ExtensionBuilder.json";s:4:"cd52";s:51:"Classes/Controller/AntragsanforderungController.php";s:4:"46e7";s:50:"Classes/Controller/BestandssicherungController.php";s:4:"2c9c";s:43:"Classes/Controller/HilfetexteController.php";s:4:"cb1d";s:44:"Classes/Controller/KleinantragController.php";s:4:"bbcb";s:44:"Classes/Controller/RegelantragController.php";s:4:"e820";s:29:"Classes/Controller/WS_FTP.LOG";s:4:"c869";s:43:"Classes/Domain/Model/Antragsanforderung.php";s:4:"e14d";s:42:"Classes/Domain/Model/Bestandssicherung.php";s:4:"526e";s:35:"Classes/Domain/Model/Hilfetexte.php";s:4:"4d0b";s:36:"Classes/Domain/Model/Kleinantrag.php";s:4:"28cb";s:36:"Classes/Domain/Model/Regelantrag.php";s:4:"5f79";s:58:"Classes/Domain/Repository/AntragsanforderungRepository.php";s:4:"f0a7";s:50:"Classes/Domain/Repository/HilfetexteRepository.php";s:4:"dcda";s:51:"Classes/Domain/Repository/RegelantragRepository.php";s:4:"30a5";s:44:"Classes/ViewHelpers/HilfetexteViewHelper.php";s:4:"3f5b";s:30:"Classes/ViewHelpers/WS_FTP.LOG";s:4:"ced0";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"2afc";s:41:"Configuration/ExtensionBuilder/WS_FTP.LOG";s:4:"77a3";s:40:"Configuration/TCA/Antragsanforderung.php";s:4:"3ff3";s:39:"Configuration/TCA/Bestandssicherung.php";s:4:"3c36";s:32:"Configuration/TCA/Hilfetexte.php";s:4:"90d6";s:33:"Configuration/TCA/Kleinantrag.php";s:4:"3f96";s:33:"Configuration/TCA/Regelantrag.php";s:4:"ccf2";s:38:"Configuration/TypoScript/constants.txt";s:4:"937e";s:34:"Configuration/TypoScript/setup.txt";s:4:"dbb3";s:35:"Configuration/TypoScript/WS_FTP.LOG";s:4:"f694";s:28:"Resources/Private/WS_FTP.LOG";s:4:"e7da";s:40:"Resources/Private/Language/locallang.xml";s:4:"6964";s:60:"Resources/Private/Language/locallang.xml.2012-08-28_12-14-58";s:4:"e043";s:97:"Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_antragsanforderung.xml";s:4:"4baf";s:96:"Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_bestandssicherung.xml";s:4:"bea6";s:89:"Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_hilfetexte.xml";s:4:"6956";s:90:"Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_kleinantrag.xml";s:4:"c422";s:90:"Resources/Private/Language/locallang_csh_tx_blsvspstbauantrag_domain_model_regelantrag.xml";s:4:"f85a";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"30f6";s:37:"Resources/Private/Language/WS_FTP.LOG";s:4:"33ae";s:38:"Resources/Private/Layouts/Default.html";s:4:"73ed";s:36:"Resources/Private/Layouts/WS_FTP.LOG";s:4:"6e19";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:37:"Resources/Private/Partials/WS_FTP.LOG";s:4:"b3d2";s:61:"Resources/Private/Partials/Antragsanforderung/FormFields.html";s:4:"f14d";s:67:"Resources/Private/Partials/Antragsanforderung/FormFieldsAntrag.html";s:4:"a8b5";s:58:"Resources/Private/Partials/Antragsanforderung/Legende.html";s:4:"521e";s:59:"Resources/Private/Partials/Antragsanforderung/locallang.xml";s:4:"dbe4";s:61:"Resources/Private/Partials/Antragsanforderung/Properties.html";s:4:"37de";s:56:"Resources/Private/Partials/Antragsanforderung/WS_FTP.LOG";s:4:"ca5d";s:60:"Resources/Private/Partials/Bestandssicherung/FormFields.html";s:4:"d41d";s:60:"Resources/Private/Partials/Bestandssicherung/Properties.html";s:4:"44d2";s:55:"Resources/Private/Partials/Bestandssicherung/WS_FTP.LOG";s:4:"ff16";s:53:"Resources/Private/Partials/Hilfetexte/FormFields.html";s:4:"5f4f";s:53:"Resources/Private/Partials/Hilfetexte/Properties.html";s:4:"fd19";s:48:"Resources/Private/Partials/Hilfetexte/WS_FTP.LOG";s:4:"414b";s:54:"Resources/Private/Partials/Kleinantrag/FormFields.html";s:4:"fec3";s:54:"Resources/Private/Partials/Kleinantrag/Properties.html";s:4:"a510";s:49:"Resources/Private/Partials/Kleinantrag/WS_FTP.LOG";s:4:"9aaa";s:54:"Resources/Private/Partials/Regelantrag/FormFields.html";s:4:"d380";s:54:"Resources/Private/Partials/Regelantrag/Properties.html";s:4:"1983";s:59:"Resources/Private/Templates/Antragsanforderung/Abgeben.html";s:4:"0e20";s:65:"Resources/Private/Templates/Antragsanforderung/Abgebenantrag.html";s:4:"377c";s:56:"Resources/Private/Templates/Antragsanforderung/Edit.html";s:4:"533b";s:62:"Resources/Private/Templates/Antragsanforderung/Editantrag.html";s:4:"e50e";s:63:"Resources/Private/Templates/Antragsanforderung/Entscheiden.html";s:4:"2d62";s:56:"Resources/Private/Templates/Antragsanforderung/List.html";s:4:"bcbe";s:55:"Resources/Private/Templates/Antragsanforderung/New.html";s:4:"758c";s:56:"Resources/Private/Templates/Antragsanforderung/Show.html";s:4:"fb05";s:57:"Resources/Private/Templates/Antragsanforderung/WS_FTP.LOG";s:4:"6103";s:55:"Resources/Private/Templates/Bestandssicherung/Edit.html";s:4:"5e50";s:55:"Resources/Private/Templates/Bestandssicherung/List.html";s:4:"00ae";s:54:"Resources/Private/Templates/Bestandssicherung/New.html";s:4:"2911";s:55:"Resources/Private/Templates/Bestandssicherung/Show.html";s:4:"ab87";s:56:"Resources/Private/Templates/Bestandssicherung/WS_FTP.LOG";s:4:"abd6";s:48:"Resources/Private/Templates/Hilfetexte/Edit.html";s:4:"20d0";s:48:"Resources/Private/Templates/Hilfetexte/List.html";s:4:"004b";s:48:"Resources/Private/Templates/Hilfetexte/Show.html";s:4:"aba8";s:49:"Resources/Private/Templates/Hilfetexte/WS_FTP.LOG";s:4:"e673";s:49:"Resources/Private/Templates/Kleinantrag/Edit.html";s:4:"f1bf";s:49:"Resources/Private/Templates/Kleinantrag/List.html";s:4:"737a";s:48:"Resources/Private/Templates/Kleinantrag/New.html";s:4:"09b9";s:49:"Resources/Private/Templates/Kleinantrag/Show.html";s:4:"9dfb";s:50:"Resources/Private/Templates/Kleinantrag/WS_FTP.LOG";s:4:"76a6";s:49:"Resources/Private/Templates/Regelantrag/Edit.html";s:4:"a1a9";s:49:"Resources/Private/Templates/Regelantrag/List.html";s:4:"4e88";s:48:"Resources/Private/Templates/Regelantrag/New.html";s:4:"3818";s:49:"Resources/Private/Templates/Regelantrag/Show.html";s:4:"fade";s:32:"Resources/Public/Icons/close.png";s:4:"ba16";s:45:"Resources/Public/Icons/hilfe_fragezeichen.png";s:4:"a2ea";s:37:"Resources/Public/Icons/list_icons.png";s:4:"f54b";s:36:"Resources/Public/Icons/listicons.png";s:4:"4101";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:88:"Resources/Public/Icons/tx_blsvsportstaettenbauantrag_domain_model_antragsanforderung.gif";s:4:"905a";s:87:"Resources/Public/Icons/tx_blsvsportstaettenbauantrag_domain_model_bestandssicherung.gif";s:4:"1103";s:80:"Resources/Public/Icons/tx_blsvsportstaettenbauantrag_domain_model_hilfetexte.gif";s:4:"905a";s:81:"Resources/Public/Icons/tx_blsvsportstaettenbauantrag_domain_model_kleinantrag.gif";s:4:"1103";s:79:"Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_antragsanforderung.gif";s:4:"905a";s:78:"Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_bestandssicherung.gif";s:4:"1103";s:71:"Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_hilfetexte.gif";s:4:"905a";s:72:"Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_kleinantrag.gif";s:4:"1103";s:72:"Resources/Public/Icons/tx_blsvspstbauantrag_domain_model_regelantrag.gif";s:4:"905a";s:30:"Resources/Public/css/style.css";s:4:"7b98";s:31:"Resources/Public/css/WS_FTP.LOG";s:4:"ab55";s:58:"Tests/Unit/Controller/AntragsanforderungControllerTest.php";s:4:"8fa1";s:57:"Tests/Unit/Controller/BestandssicherungControllerTest.php";s:4:"5060";s:50:"Tests/Unit/Controller/HilfetexteControllerTest.php";s:4:"5e8d";s:51:"Tests/Unit/Controller/KleinantragControllerTest.php";s:4:"2d73";s:51:"Tests/Unit/Controller/RegelantragControllerTest.php";s:4:"f469";s:50:"Tests/Unit/Domain/Model/AntragsanforderungTest.php";s:4:"f23d";s:49:"Tests/Unit/Domain/Model/BestandssicherungTest.php";s:4:"4c59";s:42:"Tests/Unit/Domain/Model/HilfetexteTest.php";s:4:"4b69";s:43:"Tests/Unit/Domain/Model/KleinantragTest.php";s:4:"eafa";s:43:"Tests/Unit/Domain/Model/RegelantragTest.php";s:4:"6dae";s:14:"doc/manual.sxw";s:4:"8d2d";s:14:"doc/WS_FTP.LOG";s:4:"cbd8";}',
);

?>