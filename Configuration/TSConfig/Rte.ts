# A collection of often used styles. This file is not included by default. To load it inside your own template extension, use the following page typoscript:
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3b_config/Configuration/TSConfig/Rte.ts">
# RTE.default.contentCSS = EXT:my_template_extension/Resources/Public/Stylesheets/Rte.css
#
# If you want to use the zebra-table-class, you'll need the following frontend typoscript configuration:
# lib.parseFunc_RTE.externalBlocks.table.stdWrap.HTMLparser.tags.table.fixAttrib.class.list >

RTE {
	classes.zebra {
		name = Zebra
		alternating {
			rows {
				startAt = 1
				oddClass = tr-odd
				evenClass = tr-even
				oddHeaderClass = thead-odd
				evenHeaderClass = thead-even
			}
			columns {
				startAt = 1
				oddClass = td-odd
				evenClass = td-even
				oddHeaderClass = th-odd
				evenHeaderClass = th-even
            }
		}
	}
	default {
		proc.allowedClasses := addToList(zebra, tr-even, tr-odd, th-odd, th-even, td-odd, td-even)
		buttons.blockstyle.tags {
			table.allowedClasses := addToList(zebra)
			tr.allowedClasses := addToList(tr-odd, tr-even, thead-odd, thead-even)
			th.allowedClasses := addToList(th-odd, th-even)
			td.allowedClasses := addToList(td-odd, td-even, thead-odd, thead-even)
		}
	}
	mutuallyExclusiveClasses = tr-odd, tr-even, th-odd, th-even, td-odd, td-even
}