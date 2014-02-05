<?php

/**
 * Class present a single recipe. It provide a method loading recipe 
 * from hard drive and turning it from markdown string to html.
 *
 * Recipe file first line is used as title, that can be accessed with
 * title() method. After that there is no really rules how a recipe is
 * written.
 */
class Recipe {

	/**
	* Constant indicate that a recipe is not found.
	*/
	 const RECIPE_NOT_FOUND = 'RECIPE_NOT_FOUND';

	/**
	* Consturtor for Recipe object
	* @param @filepath path to file
	*/
	public function __construct($filepath=null) {
		if($filepath) {
			$this->filepath = $filepath;					
		}
	}

	/**
	* Set a filepath variable
	*/
	public function set_filename($filepath) {
		$this->filepath = $filepath;
	}

	/**
	 * Read recipe from filepath location.
	 */
	public function read_file() {		
		$file = $this->filepath;
		
		if(file_exists($file)) {
			$this->_content = file_get_contents($file);	
		} 
	}

	/**
	 * Read title string from the first line of the file
	 * @return title as string
	 */
	public function title() {
		return trim(strtok($this->_content, "\n"));
	}

	/**
	 * Read a hash for a recipe that is used in the recipe url address
	 * @return hash as string
	 */
	public function hash() {
		$filename = pathinfo($this->filepath, PATHINFO_BASENAME );
		return sha1($filename);
	}

	/**
	 * Markdown to html
	 * @return html as string
	 */
	public function html() {
		return Parsedown::instance()->parse($this->_content);
	}
}
