## Copyright
lib.misc.copyright = TEXT
lib.misc.copyright {
	wrap = <aside class="copyright"><p>|</p></aside>
	data = LLL:EXT:boxmodel/Resources/Private/Language/locallang.xml:copyright_note
	
	## replace year to current and powered_by
	replacement {
		10 {
			search = ###YEAR###
			replace.data = date:U
			replace.strftime = %Y
		}

		20 {
			search = ###POWERED_BY###
			replace.data = LLL:EXT:boxmodel/Resources/Private/Language/locallang.xml:powered_by
			replace.typolink.parameter.data = LLL:EXT:boxmodel/Resources/Private/Language/locallang.xml:powered_by_link
			#replace.typolink.ATagParams = target="_blank"
		}
	}

	required = 1
}
