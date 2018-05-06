<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');


$_EXTCONF = unserialize($_EXTCONF);    // unserializing the configuration so we can use it here:

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['tables'] = $_EXTCONF['tables'] ? $_EXTCONF['tables'] : 'be_users,fe_users';


?>