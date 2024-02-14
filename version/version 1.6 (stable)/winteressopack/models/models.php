<?php 

require_once 'winteresso/winteresso.php';
require_once "config/config.php";

class getdata {

	// insert your db 
	private $table_db = "user";
	public $id;
	public $usernameuser;
	public $passworduser;

	public function showdata(){
		global $koneksi;
		global $connectgetdata;
		WINREAD_DB("getdata", "connectgetdata", "$this->table_db");

		while($takedata = mysqli_fetch_array($connectgetdata)){
			$iduser = $takedata['id_user'];
			$username = $takedata['username'];
			$password = $takedata['password'];
		}

		$this->id = $iduser;
		$this->usernameuser = $username;
		$this->passworduser = $password;


		
	}	


	public function insertdata(){

		
		// insert data to database
	}


	public function deletedata(){

		// delete data from database

	}


	public function updatedata(){

		// update data from database

	}



	// ============= ADD METHOD HERE ================


}





 ?>