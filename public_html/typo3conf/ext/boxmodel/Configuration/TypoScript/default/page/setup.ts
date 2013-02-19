## Page Rendering Function by TemplaVoila
page = PAGE
page.typeNum = 0
page.10 = USER
page.10.userFunc = tx_templavoila_pi1->main_page
page.10.disableExplosivePreview = 1

## Setting favorite icon
page.shortcutIcon = {$const.path.image}favicon.ico

## Meta data configuration
page.meta {
	description.data = levelfield :-1, description, slide // levelfield :-1, subtitle, slide // leveltitle :-1, slide
	keywords.data = levelfield :-1, keywords, slide // levelfield :-1, subtitle, slide // leveltitle :-1, slide
	last-modified.data = page : SYS_LASTCHANGED
	last-modified.date = Y-m-dT H:i:s P

	## add some static fields
	robots = index, follow
	robots.stdWrap.override.stdWrap.if.isTrue.field = no_search
	robots.stdWrap.override = noindex, follow
}

## Remove target attribute
## make Links XHTML Strict compliant
## config.extTarget bug: http://forge.typo3.org/issues/37710
page.stdWrap.HTMLparser = 1
page.stdWrap.HTMLparser {
	keepNonMatchedTags = 1
	tags.a.fixAttrib.target.unset = 1
}

## Page Title Configuration
## 2 = disable pag title completely
## headerData.1 is page title - default/lib/misc/htmltitle/setup.ts
page.config.noPageTitle = 2
page.headerData.1 < lib.misc.htmltitle


## Prepare Google Analytics
## headerData.100000000 is reserved and 100000000 is maximum
page.headerData.100000000 < lib.misc.analytics

## Including Default Configuration
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:boxmodel/Configuration/TypoScript/default/config/setup.ts">

## Including CSS / JS
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:boxmodel/Configuration/TypoScript/default/page/css_js/setup.ts">