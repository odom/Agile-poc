## Main navigation configuration
lib.nav.main = HMENU
lib.nav.main {
	wrap = <nav id="nav_main">|</nav>
	special = directory
	special.value = {$const.page.root}

	1 = TMENU
	1 {
		wrap = <ul>|</ul>
		noBlur = 1
		expAll = 0

		NO = 1
		NO {
			ATagTitle.field = title // nav_title
			stdWrap.htmlSpecialChars = 1
			wrapItemAndSub = <li class="first">|</li> |*| <li>|</li> |*| <li class="last">|</li>
			accessKey = 1
		}

		ACT < .NO
		ACT {
			wrapItemAndSub = <li class="first active">|</li> |*| <li class="active">|</li> |*| <li class="last active">|</li>
		}

		CUR < .ACT
		CUR.wrapItemAndSub = <li class="first current">|</li> |*| <li class="current">|</li> |*| <li class="last current">|</li>

		# IFSUB
		# ACTIFSUB
		# CURIFSUB
	}
}

## If it is the root page then set the home page as active
[globalVar = TSFE:id = {$const.page.root}]
	lib.nav.main.alwaysActivePIDlist = {$const.page.home}
[end]