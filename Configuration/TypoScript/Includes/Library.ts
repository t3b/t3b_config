lib.t3b_config {

	# -------------------------------------------------------------------------
	#	navigation
	# -------------------------------------------------------------------------

	navigation {
		# complete navigation for up to four page levels. you may base your own main navigation on this.
		complete = HMENU
		complete {
			1 = TMENU
			1 {
				wrap = <ul class="complete">|</ul>

				NO = 1
				NO {
					allStdWrap.insertData = 1
					doNotLinkIt = 1
					stdWrap.cObject = CASE
					stdWrap.cObject {
						key.field = doktype
						# normal page links
						default = TEXT
						default {
							field = nav_title // title
							typolink.parameter.field = uid
							stdWrap.htmlSpecialChars = 1
						}
						# external page links
						3 = TEXT
						3 {
							field = nav_title // title
							typolink {
								parameter {
									dataWrap = http://{field:url} _blank
								}
							}
						}
						# internal shortcut
						4 = TEXT
						4 {
							field = nav_title // title
							typolink.parameter.field = shortcut
							stdWrap.htmlSpecialChars = 1
						}
					}
					wrapItemAndSub.insertData = 1
					wrapItemAndSub = <li class="page-{field:uid}">|</li> |*| <li class="page-{field:uid}">|</li> |*| <li class="last page-{field:uid}">|</li>
					linkWrap = |
				}

				ACT < .NO
				ACT = 1
				ACT {
					ATagParams = class="active"
					linkWrap = |
					wrapItemAndSub = <li class="first active page-{field:uid}">|</li> |*| <li class="active page-{field:uid}">|</li> |*| <li class="last active page-{field:uid}">|</li>
				}

				ACTIFSUB < .ACT
				ACTIFSUB = 1
			}
			2 < .1
			2.wrap = <ul class="level-2">|</ul>
			3 < .1
			3.wrap = <ul class="level-3">|</ul>
			4 < .1
			4.wrap = <ul class="level-4">|</ul>

			wrap = <nav role="navigation">|</nav>
		}

		# simple first level navigation, e.g. for the page header
		firstLevel = HMENU
		firstLevel {
			entryLevel = 0
			1 = TMENU
			1 {
				NO {
					allWrap = <li class="first page-{field:uid}">|</li> |*| <li>|</li> |*| <li class="last page-{field:uid}">|</li>
					allWrap.insertData = 1
				}
				ACT < .NO
				ACT = 1
				ACT {
					ATagParams = class="active"
					allWrap = <li class="first active page-{field:uid}">|</li> |*| <li class="active page-{field:uid}">|</li> |*| <li class="last active page-{field:uid}">|</li>
				}
				wrap = <nav role="navigation"><ul class="first-level">|</ul></nav>
			}
		}

		# very simple second level navigation, e.g. for the page header
		secondLevel < .firstLevel
		secondLevel {
			  entryLevel = 1
              1.wrap = <nav role="navigation"><ul class="second-level">|</ul></nav>
		}

		# very simple breadcrumb
		breadcrumb = HMENU
		breadcrumb {
			special = rootline
			special.range = 0|-1
			entryLevel = 0
			1 = TMENU
			1 {
				noBlur = 1
				NO.allWrap = <li>|</li>
				ACT < .NO
				ACT = 1
				ACT.ATagParams = class="active"
			}
			wrap = <nav role="navigation"><ul class="breadcrumb">|</ul></nav>
		}
	}

	# -------------------------------------------------------------------------
	#	search
	# -------------------------------------------------------------------------

	indexedSearchForm = COA_INT
	indexedSearchForm {
		10 = LOAD_REGISTER
		10 {
			actionURL = TEXT
			actionURL {
				typolink {
					parameter = 123
					returnLast = url
				}
			}
		}
		20 = TEXT
		20 {
			value = search term
			lang {
				de = Suchbegriff
			}
			wrap = <input type="text" name="tx_indexedsearch[sword]" value="|" class="search-term" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(!this.value)this.value=this.defaultValue;"/>
		}
		30 = TEXT
		30 {
			value = search
			lang {
				de = suchen
			}
			wrap = <input name="tx_indexedsearch[submit_button]" class="searchbutton" type="submit" value="|"/>
		}
		40 = TEXT
		40 {
			value (
				<input type="hidden" name="tx_indexedsearch[_sections]" value="0"/>
				<input type="hidden" name="tx_indexedsearch[pointer]" value="0"/>
				<input type="hidden" name="tx_indexedsearch[ext]" value="0"/>
			)
		}
		stdWrap.dataWrap = <div class="search-box-container"><form action="{register:actionURL}" method="post"><div class="search-box">|</div></form></div>
	}

	# -------------------------------------------------------------------------
	#	frontend user
	# -------------------------------------------------------------------------

	frontendUser {
		# displays account information if a frontend user is logged in or login / register links, if not.
		accountInformation = COA_INT
		accountInformation {
			10 = TEXT
			10 {
				value = Hello! Login if you already have an account or create a new one for free.
				lang {
					de = Hallo! Melde dich an, wenn du bereits einen Account besitzt, oder registriere dich einfach kostenlos.
				}
				wrap = <div class="text">|</div>
			}
			20 = COA
			20 {
				10 = TEXT
				10 {
					value = Register
					lang {
						de = Registrieren
					}
					stdWrap.typolink {
						parameter = 123
						# don't spend "link juice" on this
						ATagParams = rel="nofollow"
					}
				}
				20 = TEXT
				20 {
					value = Login
					lang {
						de = Anmelden
					}
					stdWrap.typolink {
						parameter = 123
						ATagParams = rel="nofollow"
					}
				}
				stdWrap.wrap = <div class="links">|</div>
			}
			stdWrap.wrap = <div class="account-information">|</div>
		}
	}

	# -------------------------------------------------------------------------
	#	general
	# -------------------------------------------------------------------------

	general {
		# print link. changes the page type to 98 and keeps all other parameters.
		printLink = TEXT
		printLink {
			value = Print version
			lang {
				de = Druckversion
			}
			typolink {
				parameter {
					data = TSFE:id
					wrap = |,98
				}
				addQueryString = 1
			}
		}

		# copyright text in the form of "© 2013 My Project". this copyright information always contains the current year.
		copyright = COA
		copyright {
			10 = TEXT
			10 {
				data = date : U
				strftime = %Y
				dataWrap = | {$plugin.t3b_config.settings.general.projectName}
				noTrimWrap = |&copy; | |
			}
		}
	}

}

[usergroup=*]
lib.t3b_config.frontendUser {
	5 = LOAD_REGISTER
	5 {
		loggedInAsLabel = TEXT
		value = Logged in as
		lang {
			de = Angemeldet als
		}
	}
	10 {
		data = TSFE:fe_user|user|username
		noTrimWrap = |{register:loggedInAsLabel} ||
		noTrimWrap.insertData = 1
	}
	20 {
		10 {
			value = Logout
			lang {
				de = Abmelden
			}
			stdWrap.typolink {
				parameter = 1
				additionalParams = &logintype=logout
			}
		}
		20 >
	}
}
[global]