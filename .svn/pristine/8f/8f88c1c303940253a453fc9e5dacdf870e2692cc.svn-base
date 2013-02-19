## Searchbox configuration
lib.misc.searchbox = COA
lib.misc.searchbox {
	stdWrap.prefixComment = 2|lib.misc.searchbox
	10 = TEXT
	10.typolink.parameter = {$const.page.search}
	10.typolink.returnLast = url
	10.wrap = <section class="search"><form action="|" method="post"><section>
	20 = COA
	20 {
		10 = LOAD_REGISTER
		10.searchlabel.data = LLL:EXT:boxmodel/Resources/Private/Language/locallang.xml:search	
	
		20 = TEXT
		20.data = GP:tx_indexedsearch|sword
		20.htmlSpecialChars = 1
		20.dataWrap = <input class="text" name="tx_indexedsearch[sword]" value="|" id="search_field" type="text" placeholder="{register:searchlabel}"/>
		
		30 = COA
		30 {
			10 = TEXT
			10.value = <input class="submit" type="submit" id="search_button" name="btn_search" value="" />
			20 = TEXT
			20.value = <input type="hidden" name="tx_indexedsearch[sections]" value="0" />
			30 = TEXT
			30.value = <input name="tx_indexedsearch[submit_button]" value="Search" type="hidden" />
		}
	}

	wrap = |</section></form></section>
}

[globalVar = TSFE:id = {$const.page.search}]
	lib.misc.searchbox.20 = COA_INT
[end]