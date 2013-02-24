config {
	# sets the value of the xml:lang / lang attribute of the html tag
	htmlTag_langKey = en-US

	# language key, used e.g. by the extension framework to determine the language file to use
	language = en

	# sets the locale by calling setlocale(). amongst other things, the locale controls the format of the output generated by strftime() / stdWrap.strftime.
	locale_all = en_US.UTF-8

	# use German as the default language
	sys_language_uid = 0

	# possible language modes: strict, content_fallback, ignore
	sys_language_mode = strict

	# hide content elements, which haven't been translated, yet
	sys_language_overlay = hideNonTranslated

	# use images from the original content element, if the translation doesn't contain any
	sys_language_softMergeIfNotBlank = tt_content:image
}

##########################################################################
# Use the following typoscript snippet to enable support for
# additional languages:
#
# [globalVar = GP:L=1]
# config.linkVars = L
#	config.sys_language_uid = 1
#	config.language = de
#	config.locale_all = de_DE.UTF-8
#	config.htmlTag_langKey = de-DE
# [END]
#
# Don't forget to create a corresponding language dataset in the TYPO3
# backend :-)
##########################################################################