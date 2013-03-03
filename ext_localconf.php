<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Imprint',
	array(
		'Imprint' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Imprint' => '',
		
	)
);

?>