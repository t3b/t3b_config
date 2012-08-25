<?php

########################################################################
# Extension Manager/Repository config file for ext "t3b_config".
#
# Auto generated 01-08-2012 11:11
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3 Base Configuration',
	'description' => 'Basic configuration of the TYPO3 CMS.',
	'category' => 'plugin',
	'author' => 'Thorsten Boock',
	'author_email' => 'thorsten@nerdcenter.de',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
                        'typo3' => '6.0.0alpha3',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:27:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"d5da";s:14:"ext_tables.php";s:4:"7c87";s:14:"ext_tables.sql";s:4:"d41d";s:42:"Classes/Domain/Model/RepositoryRequest.php";s:4:"b1ad";s:48:"Classes/Domain/Repository/AbstractRepository.php";s:4:"2fec";s:41:"Classes/Service/PageRendererPreRender.php";s:4:"b07e";s:42:"Classes/ViewHelpers/AbstractViewHelper.php";s:4:"7b3b";s:41:"Classes/ViewHelpers/ExplodeViewHelper.php";s:4:"a449";s:44:"Classes/ViewHelpers/FormNoHmacViewHelper.php";s:4:"8070";s:44:"Classes/ViewHelpers/GroupedForViewHelper.php";s:4:"ca68";s:44:"Classes/ViewHelpers/IfContainsViewHelper.php";s:4:"5c06";s:38:"Classes/ViewHelpers/LinkViewHelper.php";s:4:"59d2";s:37:"Classes/ViewHelpers/MapViewHelper.php";s:4:"0069";s:55:"Classes/ViewHelpers/PageRenderer/AbstractViewHelper.php";s:4:"bd54";s:57:"Classes/ViewHelpers/PageRenderer/AddCssFileViewHelper.php";s:4:"6208";s:51:"Classes/ViewHelpers/Widget/EventMediaViewHelper.php";s:4:"6501";s:57:"Classes/ViewHelpers/Widget/InstitutionMediaViewHelper.php";s:4:"494b";s:65:"Classes/ViewHelpers/Widget/Controller/AbstractMediaController.php";s:4:"8328";s:62:"Classes/ViewHelpers/Widget/Controller/EventMediaController.php";s:4:"24e8";s:68:"Classes/ViewHelpers/Widget/Controller/InstitutionMediaController.php";s:4:"105e";s:68:"Resources/Private/Templates/ViewHelpers/Widget/EventMedia/Index.html";s:4:"5927";s:67:"Resources/Private/Templates/ViewHelpers/Widget/EventMedia/Show.html";s:4:"6a40";s:74:"Resources/Private/Templates/ViewHelpers/Widget/InstitutionMedia/Index.html";s:4:"4f2f";s:73:"Resources/Private/Templates/ViewHelpers/Widget/InstitutionMedia/Show.html";s:4:"6eb5";s:50:"Resources/Public/Javascript/jquery.tinysort.min.js";s:4:"e1de";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>