<?php
/**
* Search recipes from path given in the array
* @param $directories array containing directories absolute or relative paths
* @return array<recipe>
*/
function scan_directories($directories) {
	$recipes = [];	



	foreach($directories as $dir) {
		$stuff = scan_directory($dir);		
		$recipes=array_merge($recipes, $stuff );	
	}

	

	usort($recipes, 'recipe_comparator');

	return $recipes;
}

/**
* Comparator function for sorting recipe sorting purposes
*/
function recipe_comparator($a, $b) { 
    if($a->title() == $b->title()) {
        return 0 ;
    } 
  return ($a->title() < $b->title()) ? -1 : 1;
} 

/**
 * Search recipe for single directory
 * @param $directory path to directory as string
 * @return array<recipe> 
 */
function scan_directory($directory) {

	$recipes=[];

	$array =  scandir($directory);
	
	foreach($array as $file) {
		$path = $directory . DIRECTORY_SEPARATOR . $file;		
		
		$recipe = read_recipe($path);
		
		if($recipe != Recipe::RECIPE_NOT_FOUND ) {
			$recipes[]=$recipe;
		}
	}

	usort($recipes, 'recipe_comparator');

	return $recipes;
}

/**
 * Read recipe from path
 * @param $path path as string
 * @return Recipe object or Recipe::RECIPE_NOT_FOUND
 */
function read_recipe($path) {
	if(is_file($path) and pathinfo($path, PATHINFO_EXTENSION) == RECIPE_FILE_EXTENSION) {	
		$recipe = new Recipe($path);				
		$result = $recipe->read_file();
		return $recipe;
	}

	return Recipe::RECIPE_NOT_FOUND;
}

/**
 * Return value from $_REQUEST variable
 * @param $key search value from $_REQUEST variable
 * @param $default, if key is not available, default value is returned
 * @return value
 */
function request($key, $default = null) {
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
}

/**
 * Helper function for checking is current recipe active
 * @param $recipe type recipe
 * @return string "active" if active, empty string if not active
 */
function active(Recipe $recipe) {
	return $recipe->hash() == request('recipe') ? "active" :"";
}