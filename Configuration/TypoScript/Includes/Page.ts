# include the page title utility
includeLibs.tx_t3bconfig_wrapper_pagetitle = EXT:t3b_config/Classes/Wrapper/PageTitle.php

config {
	# enable custom title rendering. if you choose do disable this, TYPO3s default title rendering mechanism will be used instead.
	tx_t3bconfig_enableTitleRendering = 1

	# tell TYPO3 to use our custom page title function
	titleTagFunction = tx_t3bconfig_wrapper_pagetitle->render

	# output the page title, first
	pageTitleFirst = 1

	# separator for title parts
	pageTitleSeparator = -
	pageTitleSeparator.noTrimWrap = | | |
}

page = PAGE
page {
	meta {
		# inherit the root pages description or use the description of the current page, if any
		description {
			data = page:description
			ifEmpty.data = levelfield:0, description
		}

		# inherit the root pages keywords or use the keywords of the current page, if any
		keywords {
			data = page:keywords
			ifEmpty.data = levelfield:0, keywords
		}

		# inherit the root pages author or use the author of the current page, if any
		author {
			data = page:author
			ifEmpty.data = levelfield:0, author
		}
	}

	shortcutIcon = {$plugin.t3b_config.settings.page.shortcutIcon}

	# body tag with additional classes to target the current page, language or template in your own stylesheets
	bodyTagCObject = TEXT
	bodyTagCObject {
		field = backend_layout
		ifEmpty.cObject = TEXT
		ifEmpty.cObject {
			data = levelfield:-2, backend_layout_next_level, slide
			ifEmpty = 0
		}
		dataWrap = <body class="page-{page:uid} lang-{TSFE:sys_language_uid} template-|">
	}

}
