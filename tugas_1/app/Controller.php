<?php 

class Controller {

	protected $db;

	public function __construct() {
		try {
			
			$this->db = new PDO ("mysql:host=localhost;dbname=tugas_1", "root", "");
		} catch (PDOException $e) {
			die ("Error" . $e->getMessage());
		}
	}
}