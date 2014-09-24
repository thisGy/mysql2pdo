<?php
/*
*  Title:  MySQL 2 PDO
*  Author Evan Burawa
*
*
*/

class mysql2PDO{
	public $file;
	public $dir;

	private $db_name;
	private $db_host;
	private $db_user;
	private $db_password;

	protected $styles;
	
	function __construct(){

		//Style of Coding
		$style = array('OOP','Procedural');
	
	}

	function setFile($file){
		$this->file = $file;
	}

	function setDir(){
		$this->dir = $dir;
	}

	function readDocument($doc){
		$doc_string = file_get_contents($doc);
		return $doc_string;
	}

	function setDBName($db_name){
		$this->db_name = $db_name;
	}
	
	function setDBHost($db_host){
		$this->db_host;
	}

	function setDBUser($db_user){
		$this->db_user;
	}

	function setDBPassword($db_password){
		$this->db_password = $db_password;
	}

	function setStyle($style='OOP'){
		if ($style == 'Procedural'){
			$this->style = 'Procedural';
		}else{
			$this->style = 'OOP';
		}
	}

	function createPDODBConnectionFile($file_name = 'db.config.php', $db_connection_path=''){ //By Default, Creates it in the same path as the file/directory being read.  You can overide that here
		//Set File Path
		if ($db_connection_path){
			$path = "$db_connection_path/$file_name";
		}else{
			$path = "$db_connection_path/$file_name";
		}
	
		//Generate Syntax
	}

	function findMySQLFunctions(){

	}



}



?>