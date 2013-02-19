CREATE TABLE pages (
	# fix problem with Typo3 4.7.2 and templavoila 1.7.0 for adding content element
	t3ver_swapmode tinyint(4) NOT NULL default '0',
);