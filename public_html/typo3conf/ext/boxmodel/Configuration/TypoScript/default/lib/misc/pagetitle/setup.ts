## Page title
lib.misc.pagetitle = COA
lib.misc.pagetitle {
	10 = LOAD_REGISTER
	10.pagetitle.stdWrap.cObject = TEXT
	10.pagetitle.stdWrap.cObject {
		data = levelfield : -1, nav_title // leveltitle : -1
	}
	10.classAttr = class="hidden"
	10.classAttr.if.isTrue.field = field_hide_pagetitle

	## -1 is current page
	20 = TEXT
	20.dataWrap = <h1 {register:classAttr} >{register:pagetitle}</h1>
}

## If News System single view
[globalVar = GP:tx_news_pi1|news > 0 ]
	lib.misc.pagetitle.10.pagetitle.cObject >
	lib.misc.pagetitle.10.pagetitle.cObject = RECORDS
	lib.misc.pagetitle.10.pagetitle.cObject {
		dontCheckPid = 1
		tables = tx_news_domain_model_news
		source.data = GP:tx_news_pi1|news
		conf.tx_news_domain_model_news = TEXT
		conf.tx_news_domain_model_news.field = title
		conf.tx_news_domain_model_news.stripHtml = 1
		stdWrap {
			crop = 100 |...
			stripHtml = 1
		}
	}
[end]

## Specific for home only
[globalVar = TSFE:id = {$const.page.root}]
	## No need another h1
	lib.misc.pagetitle.if >

	lib.misc.pagetitleHidden = TEXT
	lib.misc.pagetitleHidden {
		data = levelfield : 0, nav_title // leveltitle : 0
		wrap = <h1 class="hidden">|</h1>
	}
[end]