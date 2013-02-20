<?php
$typo_db_username = 'root';
$typo_db_password = 'ess:3';
$typo_db_host = 'localhost';
$typo_db = 'local-012-709';

$TYPO3_CONF_VARS['SYS']['sitename'] = 'agile-poc - Client System';

// Debug settings - Development system only
$TYPO3_CONF_VARS['SYS']['displayErrors'] = '1';
$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '1';
$TYPO3_CONF_VARS['EXT']['extCache'] = '0';
$TYPO3_CONF_VARS['SYS']['sqlDebug'] = '1';
$TYPO3_CONF_VARS['FE']['debug'] = '1';
$TYPO3_CONF_VARS['BE']['sessionTimeout'] = '60000';

?>