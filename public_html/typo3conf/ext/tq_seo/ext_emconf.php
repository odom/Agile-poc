<?php

########################################################################
# Extension Manager/Repository config file for ext "tq_seo".
#
# Auto generated 18-09-2012 09:32
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TEQneers SEO Enhancements',
	'description' => 'Search Engine Optimization (SEO), Indexed Google-Sitemap (TXT- and XML-Sitemap) for all Extensions (pibase, extbase), Metatags, Canonical-URL, Pagetitle manipulations, Crawler verification, Piwik and Google Analytics support and some more... multi-language- and multi-tree-support',
	'category' => 'misc',
	'shy' => 0,
	'version' => '5.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'pages,pages_language_overlay',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Markus Blaschke',
	'author_email' => 'blaschke@teqneers.de',
	'author_company' => 'TEQneers GmbH & Co. KG',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-0.0.0',
			'fluid' => '1.0.0-0.0.0',
		),
		'conflicts' => array(
			'tq_seo_sitemap' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:83:{s:9:"ChangeLog";s:4:"eb90";s:10:"README.txt";s:4:"878d";s:4:"TODO";s:4:"87eb";s:16:"ext_autoload.php";s:4:"ff93";s:21:"ext_conf_template.txt";s:4:"654c";s:12:"ext_icon.gif";s:4:"5d8e";s:17:"ext_localconf.php";s:4:"f544";s:14:"ext_tables.php";s:4:"2f06";s:14:"ext_tables.sql";s:4:"e9ab";s:18:"locallang_ajax.xml";s:4:"f409";s:30:"locallang_csh_setting_root.xml";s:4:"371b";s:16:"locallang_db.xml";s:4:"73ed";s:17:"locallang_tca.xml";s:4:"a4fd";s:7:"tca.php";s:4:"5b4b";s:14:"doc/manual.pdf";s:4:"779c";s:14:"doc/manual.sxw";s:4:"296c";s:22:"doc/examples/hooks.php";s:4:"c325";s:40:"hooks/sitemap/class.cache_controller.php";s:4:"776c";s:45:"hooks/sitemap/class.cache_controller_hook.php";s:4:"7bff";s:27:"hooks/sitemap/locallang.xml";s:4:"0c9f";s:32:"hooks/tt_news/class.metatags.php";s:4:"af3a";s:19:"lib/class.cache.php";s:4:"dd5f";s:18:"lib/class.http.php";s:4:"7188";s:24:"lib/class.linkparser.php";s:4:"315c";s:22:"lib/class.metatags.php";s:4:"384f";s:24:"lib/class.pagefooter.php";s:4:"aed9";s:23:"lib/class.pagetitle.php";s:4:"5e59";s:24:"lib/class.robots_txt.php";s:4:"0fca";s:19:"lib/class.tools.php";s:4:"9bc5";s:26:"lib/backend/class.base.php";s:4:"69ea";s:32:"lib/backend/class.standalone.php";s:4:"fdac";s:27:"lib/backend/class.tools.php";s:4:"6822";s:26:"lib/backend/class.tree.php";s:4:"e28a";s:31:"lib/backend/ajax/class.base.php";s:4:"8fee";s:31:"lib/backend/ajax/class.page.php";s:4:"dbd6";s:34:"lib/backend/ajax/class.sitemap.php";s:4:"0be8";s:38:"lib/backend/validation/class.float.php";s:4:"0304";s:31:"lib/scheduler/class.cleanup.php";s:4:"f3e6";s:36:"lib/scheduler/class.sitemap_base.php";s:4:"ba8b";s:35:"lib/scheduler/class.sitemap_txt.php";s:4:"c8a2";s:35:"lib/scheduler/class.sitemap_xml.php";s:4:"5413";s:29:"lib/sitemap/class.sitemap.php";s:4:"f8a0";s:37:"lib/sitemap/class.sitemap_indexer.php";s:4:"bc4d";s:34:"lib/sitemap/builder/class.base.php";s:4:"268f";s:33:"lib/sitemap/builder/class.txt.php";s:4:"8121";s:33:"lib/sitemap/builder/class.xml.php";s:4:"4197";s:33:"lib/sitemap/output/class.base.php";s:4:"6482";s:32:"lib/sitemap/output/class.txt.php";s:4:"6131";s:32:"lib/sitemap/output/class.xml.php";s:4:"7cd0";s:13:"mod1/conf.php";s:4:"c049";s:14:"mod1/index.php";s:4:"d41d";s:18:"mod1/locallang.xml";s:4:"484a";s:19:"mod1/moduleicon.png";s:4:"5d8e";s:13:"mod2/conf.php";s:4:"5e13";s:14:"mod2/index.php";s:4:"65de";s:18:"mod2/locallang.xml";s:4:"ee34";s:22:"mod2/locallang_mod.xml";s:4:"19bb";s:19:"mod2/moduleicon.png";s:4:"5d8e";s:13:"mod3/conf.php";s:4:"7ca9";s:14:"mod3/index.php";s:4:"d77c";s:18:"mod3/locallang.xml";s:4:"20d1";s:22:"mod3/locallang_mod.xml";s:4:"79e7";s:19:"mod3/moduleicon.png";s:4:"5d8e";s:13:"mod4/conf.php";s:4:"59ad";s:14:"mod4/index.php";s:4:"1d62";s:18:"mod4/locallang.xml";s:4:"ffaf";s:22:"mod4/locallang_mod.xml";s:4:"df4f";s:19:"mod4/moduleicon.png";s:4:"5d8e";s:24:"res/ga-track-download.js";s:4:"cf1b";s:33:"res/backend/css/tqseo_backend.css";s:4:"92b8";s:28:"res/backend/img/icon_del.gif";s:4:"90c6";s:27:"res/backend/img/loading.gif";s:4:"afe8";s:43:"res/backend/js/Ext.ux.plugin.FitToParent.js";s:4:"a753";s:23:"res/backend/js/TQSeo.js";s:4:"2f2c";s:32:"res/backend/js/TQSeo.overview.js";s:4:"715d";s:31:"res/backend/js/TQSeo.sitemap.js";s:4:"40d7";s:36:"res/backend/template/standalone.html";s:4:"44f4";s:30:"res/backend/template/tree.html";s:4:"44f4";s:28:"res/images/clear-sitemap.png";s:4:"ddf5";s:29:"res/templates/service-ga.html";s:4:"b4a3";s:32:"res/templates/service-piwik.html";s:4:"b57c";s:28:"static/default/constants.txt";s:4:"ddaa";s:24:"static/default/setup.txt";s:4:"1093";}',
);

?>