<?php 

class VetsController extends AppController{

	public $helpers = array('Html','Form');
	public $components = array('Session');



public function login(){
		$this->set('title_for_layout', 'Login Veterinarios');

	}

}
?>