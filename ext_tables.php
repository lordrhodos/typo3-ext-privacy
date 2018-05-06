<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// get tables from extension configuration
$tables = explode(',', trim($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['tables']));

// walk through defined tables to process
foreach ($tables as $table) {

	// get available tables of the default database 
	$availableTables = $GLOBALS['TYPO3_DB']->admin_get_tables();
	
	// set TCA entry for table if not table "pages" and if the table is available
	if ($table != 'pages' && array_key_exists($table, $availableTables)) {
		t3lib_div::loadTCA($table);
		$TCA[$table]['ctrl']['delete'] = null;	
	}
}
?>