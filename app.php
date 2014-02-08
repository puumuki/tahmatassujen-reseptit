<?php
//Error handling
ini_set('display_errors', 1);
error_reporting(~0);

//Path where files are tryed to include
$include_paths = ['libs','app'];

foreach( $include_paths as &$path) {
	set_include_path(get_include_path() . PATH_SEPARATOR . $path);
}

//Enable autoloading
function __autoload($class_name) {
    include strtolower($class_name) . '.php';
}

include("config.php");
include('app/utils.php');

$recipes = scan_directories(unserialize(RECIPE_DIRECTORIES));

$hashes = [];

foreach( $recipes as $res ) {
	$hashes[$res->hash()] = $res;	
}

$recipe = null;

if(request('recipe','random') == 'random') {
	$hash = array_rand($hashes);
	$recipe = $hashes[$hash];
}
else if(request('recipe') and array_key_exists(request('recipe'), $hashes)) {
	$recipe = $hashes[request('recipe')];
} 


