page = PAGE
page {

	headerData {
		# title tag containing the configurable value of prepend, the pages title and subtitle
		10 = TEXT
		10.dataWrap = <title>{$plugin.t3b_config.page.title.prepend} {page:title} {page:subtitle}</title>
	}

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

		# tell mobile devices to initially scale the page to fit the devices screen width
		viewport = width=device-width, initial-scale=1.0
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