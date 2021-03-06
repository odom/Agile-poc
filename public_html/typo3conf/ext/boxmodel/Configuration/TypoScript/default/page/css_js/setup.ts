## Including CSS
page {
	includeCSS {
	reset = {$const.path.css}reset.css
        reset = {$const.path.css}jquery.fancybox-buttons.css
        reset = {$const.path.css}jquery.fancybox-thumbs.css
        reset = {$const.path.css}jquery.fancybox.css
        
	reset {
		media = all
	}

	main = {$const.path.css}style.css
	main {
		media = all
	}

	/**
	print = {$const.path.css}print.css
	print {
		media = print
		excludeFromConcatenation = 1
	}
	*/

	/**
	ie7 = {$const.path.css}ie7.css
	ie7 {
		media = all
		excludeFromConcatenation = 1
		allWrap = <!--[if IE 7]>|<![endif]-->
	}
	*/

	/**
	ie8 = {$const.path.css}ie8.css
	ie8 {
		media = all
		excludeFromConcatenation = 1
		allWrap = <!--[if IE 8]>|<![endif]-->
	}
	*/

	/**
	ie9 = {$const.path.css}ie9.css
	ie9 {
		media = all
		excludeFromConcatenation = 1
		allWrap = <!--[if IE 9]>|<![endif]-->
	}
	*/
	}
        
	includeJS {
	/**
	html5 = {$const.path.js}html5.js
	html5 {
		forceOnTop = 1
		allWrap = <!--[if lt IE 9]>|<![endif]-->
		excludeFromConcatenation = 1
		disableCompression = 1
	}
	*/
	}

	includeJSFooterlibs {
	#jQueryCore = https://ajax.googleapis.com/ajax/libs/jquery/{$const.path.jQueryVersion}/jquery.min.js
	jQueryCore {
		external = 1
		disableCompression = 1
		excludeFromConcatenation = 1
	}
	}

	includeJSFooter {
		main = {$const.path.js}script.js
                main = {$const.path.js}jquery-1.9.0.min.js
                main = {$const.path.js}jjquery.mousewheel-3.0.6.pack.js
                main = {$const.path.js}jquery.fancybox.js?v=2.1.4
                main = {$const.path.js}jquery.jquery.fancybox-buttons.js?v=1.0.5
                main = {$const.path.js}jquery.fancybox-thumbs.js?v=1.0.7
                main = {$const.path.js}jquery.fancybox-media.js?v=1.0.5
                main = {$const.path.js}lightbox-run.js
	}

	jsFooterInline {
	}
}