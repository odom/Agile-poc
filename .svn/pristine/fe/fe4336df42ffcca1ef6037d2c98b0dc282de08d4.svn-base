<?php
if ( ! defined('TYPO3_MODE') ) {
	die ('Access denied.');
}

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('boxmodel');

	// enable to use other fields in page table in TS
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'].=',description, keywords';

	// get settings from ext_conf_template.txt
$confArr = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['boxmodel']);

if (1 == $confArr['enableDefaultPageTSconfig']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/page.ts">');
}

if (1 == $confArr['enableDefaultUserTSconfig']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/user.ts">');
}

if (1 == $confArr['enableMinimizedRTE']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/rte.ts">');
}

if (1 == $confArr['disableTsTemplateEditing']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/record/disallowed/sys_template.ts">');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/function/disallowed/tx_tstemplateinfo.ts">');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/function/disallowed/tx_tstemplateceditor.ts">');
}

	// include default css_js optimization settings
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/misc/default_css_js_optimization.ts">');

if (1 == $confArr['dontCompressCss']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/misc/dont_compress_css.ts">');
}

if (1 == $confArr['dontCompressJs']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/misc/dont_compress_js.ts">');
}

if (1 == $confArr['dontConcatenateCss']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/misc/dont_concatenate_css.ts">');
}

if (1 == $confArr['dontConcatenateJs']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/misc/dont_concatenate_js.ts">');
}

if (1 == $confArr['dontMoveJsFromHeaderToFooter']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:boxmodel/Configuration/TSConfig/misc/dont_move_js_from_header_to_footer.ts">');
}

	// nice to have
$TYPO3_CONF_VARS['BE']['accessListRenderMode'] = 'checkbox';
$TYPO3_CONF_VARS['BE']['explicitADmode'] = 'explicitAllow';
$TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';
$TYPO3_CONF_VARS['BE']['maxFileSize'] = '100000';
$TYPO3_CONF_VARS['BE']['sessionTimeout'] = '36000';
$TYPO3_CONF_VARS['BE']['warning_mode'] = '2';
$TYPO3_CONF_VARS['FE']['forceCharset'] = 'utf-8';
$TYPO3_CONF_VARS['FE']['permalogin'] = '1';
$TYPO3_CONF_VARS['GFX']['enable_typo3temp_db_tracking'] = TRUE;
$TYPO3_CONF_VARS['GFX']['thumbnails_png'] = '3';
$TYPO3_CONF_VARS['SYS']['lang']['cache']['clear_menu'] = TRUE;
$TYPO3_CONF_VARS['SYS']['loginCopyrightShowVersion'] = FALSE;
$TYPO3_CONF_VARS['SYS']['textfile_ext'] = 'txt,pdf,html,htm,css,inc,php,php3,tmpl,js,sql';

	// peformance
$TYPO3_CONF_VARS['BE']['compressionLevel'] = $confArr['beCompressionLevel'];
$TYPO3_CONF_VARS['FE']['compressionLevel'] = $confArr['feCompressionLevel'];
$TYPO3_CONF_VARS['FE']['debug'] = FALSE;
$TYPO3_CONF_VARS['SYS']['belogErrorReporting'] = FALSE;
$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '';
$TYPO3_CONF_VARS['SYS']['sqlDebug'] = FALSE;
$TYPO3_CONF_VARS['SYS']['syslogErrorReporting'] = '0';
$TYPO3_CONF_VARS['SYS']['systemLogLevel'] = '4';

if (1 == $confArr['enableDeveloperMode']) {
	$TYPO3_CONF_VARS['FE']['debug'] = TRUE;
	$TYPO3_CONF_VARS['SYS']['belogErrorReporting'] = TRUE;
	$TYPO3_CONF_VARS['SYS']['devIPmask'] = '127.0.0.1';
	$TYPO3_CONF_VARS['SYS']['displayErrors'] = '1';
	$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = TRUE;
	$TYPO3_CONF_VARS['SYS']['loginCopyrightShowVersion'] = TRUE;
	$TYPO3_CONF_VARS['SYS']['sqlDebug'] = '1';
	$TYPO3_CONF_VARS['SYS']['syslogErrorReporting'] = '1';
	$TYPO3_CONF_VARS['SYS']['systemLog'] = 'error_log,,1';
	$TYPO3_CONF_VARS['SYS']['systemLogLevel'] = '1';
	$TYPO3_CONF_VARS['EXT']['extCache'] = '0';
	$TYPO3_CONF_VARS['BE']['sessionTimeout'] = '60000';
}

	// autoload TypoScript from custom folder is here
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tstemplate.php']['includeStaticTypoScriptSources'][] =
	$extensionPath . 'Classes/UserFunc/user_t3lib_TStemplate.php:user_includeCustomTsFiles';

	// create versinNumberInFilename
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['getImgResource']['ImgResourceHook'] =
	$extensionPath . 'Classes/Hook/ImgResourceHook.php:&ImgResourceHook';
?>