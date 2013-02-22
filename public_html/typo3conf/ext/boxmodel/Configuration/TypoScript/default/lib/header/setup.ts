## Page Header
lib.header = COA
lib.header {
	wrap = <header id="header">|</header>

	## hidden H1
	10 =< lib.misc.pagetitleHidden

	## logo
	#20 =< lib.misc.logo
        20= TEXT
        20.value=<a href="http://local.agile-poc/"><h1 id="brand-name">Agile Poc</h1></a>
	## header
	30 = COA
	30 {
		wrap = <section class="right-header">|</section>

		## language navigation
		#10 =< lib.nav.language
                
                ##social media
                20 =< lib.misc.socialmedia
                
		## search box
		30 =< lib.misc.searchbox
	}
	
	## main navigation
	40 =< lib.nav.main
        
        
}