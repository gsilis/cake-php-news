<?php
/**
 * Resource that shows Author records
 */
class AuthorsController extends AppController {
	/**
	 * Displays all of the authors in the database
	 * @return null
	 */
	function index () {
		$this->set('authors', $this->Author->find('all'));
	}
}
