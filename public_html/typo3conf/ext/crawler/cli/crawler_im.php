<?php
if (!defined('TYPO3_cliMode'))	die('You cannot run this script directly!');

require_once(t3lib_extMgm::extPath('crawler').'class.tx_crawler_lib.php');
require_once(t3lib_extMgm::extPath('crawler').'cli/class.tx_crawler_cli_im.php');

$crawlerObj = t3lib_div::makeInstance('tx_crawler_lib');
$crawlerObj->CLI_main_im($_SERVER["argv"]);

?>