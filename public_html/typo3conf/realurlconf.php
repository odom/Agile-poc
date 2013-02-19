<?php
$defaultConf = array(
	'init' => array(
		'enableCHashCache' => TRUE,
		'appendMissingSlash' => 'ifNotFile,redirect[301]',
		'enableUrlDecodeCache' => TRUE,
		'enableUrlEncodeCache' => TRUE,
		'emptyUrlReturnValue' => '/',
		'disableErrorLog' => TRUE
	),
	'preVars' => array(
		'0' => array(
			'GETvar' => 'L',
			'valueMap' => array(
				'km' => '1'
			),
			'noMatch' => 'bypass'
		)
	),
	'pagePath' => array(
		'type' => 'user',
		'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
		'spaceCharacter' => '-',
		'languageGetVar' => 'L',
		'expireDays' => '7',
		'rootpage_id' => '1',
			// additional for Boxmodel
		'error404_id' => '11'
	),
	'fileName' => array(
		'defaultToHTMLsuffixOnPrev' => 0,
		'index' => array(
			'rss.xml' => array(
				'keyValues' => array(
					'type' => '100'
				)
			)
		)
	)
);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
	'_DEFAULT' => $defaultConf,
		// error preventer
	\TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('HTTP_HOST') => $defaultConf,
);
?>