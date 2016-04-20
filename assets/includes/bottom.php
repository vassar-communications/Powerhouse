<?php
namespace gamut;

LocalSite::aside((isset($pageLevelAside))
	? $pageLevelAside
	: '');

	echo 
		U_CONTENT_CLOSE.
		U_ASIDE_OPEN.
		U_ASIDE_CONTENT.
		U_ASIDE_CLOSE.
		U_MAIN_CLOSE.
		U_SEARCH.
		U_NAV.
		U_FOOTER_OPEN.
			U_VCARD.
		U_FOOTER_CLOSE.
		U_JS_LOCAL.
		U_CONTAINER_CLOSE.
	U_BODY_CLOSE.
U_HTML_CLOSE;


// Cache the contents to a file
/* USE THIS LINE */
/*****$cachefile = PATH_LOCAL_ABS .'/cached/' . str_replace('/', '-', ltrim(FILE_CURRENT_LOCAL_PATH_FULL,'/'));
*/
//d(str_replace(FILE_CURRENT_FILENAME, '', PATH_LOCAL_ABS . FILE_CURRENT_LOCAL_PATH_FULL));
//$fullPathFolder = (str_replace(FILE_CURRENT_FILENAME, '', PATH_LOCAL_ABS . FILE_CURRENT_LOCAL_PATH_FULL));
//d($fullPathFolder);
//chmod($fullPathFolder, 0777);
/******
$cached = fopen($cachefile, 'w');
//d($cached);
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser
*/