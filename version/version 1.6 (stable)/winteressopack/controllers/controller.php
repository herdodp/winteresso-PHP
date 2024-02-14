<?php 

require_once 'models/models.php';

class Controller extends getdata {
	public function meta() {
		require "core/page1/meta.php";
	}

	public function header() {
		require "core/page1/header.php";
	}

	public function content() {
		require "core/page1/content.php";
	}

	public function footer() {
		require "core/page1/footer.php";
	}

	

}

$data = new Controller();
$data->showdata();
$dataid = $data->id;
$datausername = $data->usernameuser;
$datapassword = $data->passworduser;
