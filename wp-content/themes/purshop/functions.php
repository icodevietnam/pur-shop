<?php

/**
*
THEME_URI = Theme path
CORE_URI = Theme core
*
**/

define('THEME_URI',get_stylesheet_directory());
define('CORE',THEME_URI.'/core');

// Nhung init.php
require_once(CORE.'/init.php');

/*
* Check content_width exist or not 
*/
if( !isset($content_width)){
	$content_width = 620;
}