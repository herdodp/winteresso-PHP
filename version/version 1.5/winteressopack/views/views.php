<?php 

require 'controllers/Controller.php';

class views extends Controller {
	public function display(){
		parent::meta();
		parent::header();
		parent::content();
		parent::footer();	
	}
	
} 


$displayviews = new views();
$displayviews->display();


 ?>




