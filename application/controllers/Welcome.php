<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login.php');
	}
	public function loginIG(){

  		$username = $this->input->post('user_name_lg');
    	$pass = $this->input->post('passlg');
       	$this -> load -> model('User_model');
	   	$this -> User_model-> login($username,$pass);
    }
}