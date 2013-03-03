<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/**
 * remove some fields from the tt_content content element
 */
	$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_imprint']='layout,select_key,pages,recursive';
/**
 * add flexform
 */
	$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_imprint']    ='pi_flexform';
	t3lib_extMgm::addPiFlexFormValue(
		$_EXTKEY.'_imprint',
		'FILE:EXT:imprint/Configuration/FlexForms/imprint.xml'
	);


Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Imprint',
	'Imprint'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Imprint');


?>