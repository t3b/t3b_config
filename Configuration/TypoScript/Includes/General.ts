config {

	# -------------------------------------------------------------------------
	#	document rendering
	# -------------------------------------------------------------------------

	# HTML 5 doctype
	doctype = html5

	# add modernizr specific classes to the html tag
	htmlTag_stdWrap {
		setContentToCurrent = 1
		cObject = COA
		cObject {
			10 = TEXT
			10 {
				current = 1
				addParams.class = no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7
				wrap = <!--[if lt IE 7 ]>|<![endif]-->
				append = TEXT
                append.char = 10
			}
			20 < .10
			20 {
				addParams.class = no-js lt-ie10 lt-ie9 lt-ie8
				wrap = <!--[if IE 7 ]>|<![endif]-->
			}
			30 < .10
			30 {
				addParams.class = no-js lt-ie10 lt-ie9
				wrap = <!--[if IE 8 ]>|<![endif]-->
			}
			40 < .10
			40 {
				addParams.class = no-js lt-ie10
				wrap = <!--[if IE 9 ]>|<![endif]-->
			}
			50 < .10
			50 {
				addParams.class = no-js
				wrap = <!--[if gt IE 9]><!-->|<!--<![endif]-->
			}
		}
	}

	# remove the unnecessary XML prologue
	xmlprologue = none

	# generate xhtml conform output
	xhtml_cleaning = all

	# generate a base tag (needed for realurl)
	baseURL = {$plugin.t3b_config.environment.protocol}://{$plugin.t3b_config.settings.general.baseUrlWithoutProtocol}

	# remove the default javascript containing the blurLink function and browser detection
	removeDefaultJS = external

	# move TYPO3 generated inline styles into a CSS file and include it
	inlineStyle2TempFile = 1

	# do not wrap content elements with comments (containing their UID etc)
	disablePrefixComment = 1

	# when creating links, prepend the document path before anchors (needed because of the base tag)
	prefixLocalAnchors = all

	# disable the preview notification, because it may breaks the layout
	disablePreviewNotification = 1

	# -------------------------------------------------------------------------
	#	links
	# -------------------------------------------------------------------------

	# prevent redundant L parameters
	uniqueLinkVars = 1

	# instead of creating links in the form of <a href="mailto:foobar@example.com">foobar</a>, encrypt the e-mail address and let the client decrypt it by calling a javascript function
	spamProtectEmailAddresses = 1

	# e-mail spam protection: when generating e-mail links, replace "@" by "(at)" and "." by "(dot)" to escape from e-mail address crawlers
	spamProtectEmailAddresses_atSubst = (at)
	spamProtectEmailAddresses_lastDotSubst = (dot)

	# -------------------------------------------------------------------------
	#	caching
	# -------------------------------------------------------------------------

	# tell the client to cache the pages for 24 hours.
	sendCacheHeaders = 1

	# keep pages cached for one day unless specified otherwise in the pages properties
	cache_period = 86400

	# clear the TYPO3 page cache at midnight
	cache_clearAtMidnight = 1

	# -------------------------------------------------------------------------
	#	seo
	# -------------------------------------------------------------------------

	# keep the first 100 chars of the original filename when creating temporary files (e.g. images)
	meaningfulTempFilePrefix = 100

	# disable "simulate static documents" and enable realurl
	simulateStaticDocuments = 0
	tx_realurl_enable = 1

	# -------------------------------------------------------------------------
	#	general
	# -------------------------------------------------------------------------

	# enable indexing (feed indexed_search)
	index_enable = 1

	# give something back! support the t3b project by keeping this small header comment
	headerComment (
		This website makes use of the T3B (TYPO3 base) project.
For further information visit http://t3b.nerdcenter.de/
	)

}