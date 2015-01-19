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

	function setDir($dir){
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



/*
    mysql_affected_rows
    mysql_client_encoding
    mysql_close
    mysql_connect
    mysql_create_db
    mysql_data_seek
    mysql_db_name
    mysql_db_query
    mysql_drop_db
    mysql_errno
    mysql_error
    mysql_escape_string
    mysql_fetch_array
    mysql_fetch_assoc
    mysql_fetch_field
    mysql_fetch_lengths
    mysql_fetch_object
    mysql_fetch_row
    mysql_field_flags
    mysql_field_len
    mysql_field_name
    mysql_field_seek
    mysql_field_table
    mysql_field_type
    mysql_free_result
    mysql_get_client_info
    mysql_get_host_info
    mysql_get_proto_info
    mysql_get_server_info
    mysql_info
    mysql_insert_id
    mysql_list_dbs
    mysql_list_fields 
    mysql_list_processes 
    mysql_list_tables 
    mysql_num_fields 
    mysql_num_rows
    mysql_pconnect
    mysql_ping 
    mysql_query
    mysql_real_escape_string 
    mysql_result
    mysql_select_db
    mysql_set_charset
    mysql_stat
    mysql_tablename
    mysql_thread_id
    mysql_unbuffered_query
*/
?>