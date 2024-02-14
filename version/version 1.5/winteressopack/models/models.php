<?php 

include_once 'winteresso/winteresso.php';

// insert your server host
// WIN_CONNECT_DB("servername","username", "password", "database");

class getdata {

	// insert your db 
	private $table_db = "...";

	public function getalldata(){
		WINREAD_DB("getalldata", "connectgetalldata", "$this->table_db");
		// global var : $this->$koneksi;
		// global var : $this->$connectgetalldata;
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