config {
	# disable the page cache
	no_cache = 1

	# output debug information (stdWrap: debug, debugFunc, debugData | GMENU, TMENU, IMGMENU: debugItemConf)
	debug = 1
}

# display a small development environment notice
page.999999 = TEXT
page.999999.value = <div style="position:fixed;top:0;right:0;padding:4px;background:#ff4d00;color:#fff;font:bold 11px verdana,sans;text-shadow:1px 1px 1px #401300;">Development</div>